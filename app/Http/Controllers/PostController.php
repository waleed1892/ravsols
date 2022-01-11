<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function App\save_iamge;
use function App\save_image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('post.index')->with(['posts' => $posts]);
    }

    public function blogPosts()
    {
        $posts = Post::where('published', 1)->with('tags')->paginate(20);
        return view('blog')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * //     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('post.create')->with(['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
            'meta_tag' => 'required',
            'description' => 'required',
        ]);

        $image_name = save_image($request->image);
        $input = $request->all();
        $input['slug'] = Str::slug($input['title']);
        $input['image'] = $image_name;
        $post = new Post($input);
        $post->save();
        if ($request->has('tags')) {
            $post->tags()->sync($request->tags);
        }
        return 'post created successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $ids=$post->tags->pluck('id');
        $relatedPosts = Post::whereHas('tags', function($q) use($ids) {
            $q->whereIn('tag_id', $ids);
        })->get();
        if (!$post) {
            abort(404);
        }
        return view('post.show')->with(['post' => $post, 'relatedPosts' => $relatedPosts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        $postTags = $post->tags->pluck('id');
        return view('post.edit')->with(['post' => $post, 'tags' => $tags, 'postTags' => $postTags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'meta_tag' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($request->has('image')) {
//            dd('ddd');
            $image_name = save_image($request->image);
            $input['image'] = $image_name;
        }

        $input['slug'] = Str::slug($request['title']);
        $request->has('published') ? $input['published'] = $request->published : $input['published'] = 0;
        $post->update($input);

        if ($request->has('tags')) {
            $post->tags()->sync($request->tags);
        }

        return 'post updated successfully';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('posts.index'));
    }
}
