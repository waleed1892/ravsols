<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $projects = Project::paginate();
            return view('project.index')->with(['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();
        $techs = Technology::all();
        return view('project.create')->with(['tags' => $tags, 'techs'=> $techs ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'link' => 'required',
        ]);

        $input = $request->all();

        $image = $request->image;
        $name = time() . $image->getClientOriginalName();
        $input['image'] = $name;
        $image->storeAs('public/images', $name);
        $project = new Project($input);
        $project->save();
        if($request->has('tags')){
            $project->tags()->sync($request->tags);
        }
        if($request->has('technologies')){
            $project->technologies()->sync($request->technologies);
        }
        return redirect('admin/projects');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
//     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $tags = Tag::all();
        $techs = Technology::all();
        $projectTags = $project->tags->pluck('id');
        $projectTechs = $project->technologies->pluck('id');
        return view('project.edit')->with(
            ['project' => $project,
            'tags'=>$tags ,
            'projectTags'=>$projectTags,
            'techs'=>$techs ,
            'projectTechs'=>$projectTechs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
//        dd($request->all());
//        $request->validate([
//            'image' => 'required',
//            'title' => 'required',
//            'link' => 'required',
//        ]);

        $input = $request->all();
        if($request->has('image')) {
            $image = $request->image;
            $name = time() . $image->getClientOriginalName();
            $input['image'] = $name;
            $image->storeAs('public/images', $name);
        }
        $project->update($input);
//        dd('sdf');
        if($request->has('tags')){
            $project->tags()->detach();
            $project->tags()->sync($request->tags);
        }
        if($request->has('technologies')){
            $project->technologies()->sync($request->technologies);
        }

        return redirect('admin/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect(route('projects.index'));
    }
}
