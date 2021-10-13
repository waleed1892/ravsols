<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\request()->is('admin/posts')) {
            $posts = Post::paginate();
            return view('post.index')->with(['posts' => $posts]);
        } else {
            $posts = Post::where('published',1)->paginate();
            return view('blog')->with(['posts' => $posts]);
        }
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
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $input = $request->all();
        $image = $request->image;
        $input['slug'] = Str::slug($input['title']);
        $name = time() . $image->getClientOriginalName();
        $input['image'] = $name;
        $image->storeAs('public/images', $name);
        $post = new Post($input);
        $post->save();
        if($request->has('tags')){
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
        if (!$post) {
            abort(404);
        }
        return view('post.show')->with('post', $post);
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
        return view('post.edit')->with(['post' => $post, 'tags'=>$tags , 'postTags'=>$postTags]);
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

//        dd($request->all());
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post['slug'] = Str::slug($request['title']);
        $post['schedule_post'] = $request->schedule_post;
        if($request->has('image')){
        $image = $request->image;
        $name = time() . $image->getClientOriginalName();
        $post->image = $name;
        $image->storeAs('public/images', $name);
        }

        if($request->has('tags')){
            $post->tags()->sync($request->tags);
        }
        $request->has('published')?$post->published = $request->published:  $post->published = 0;
        $post->save();
//        $post->update( $request->all());

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
