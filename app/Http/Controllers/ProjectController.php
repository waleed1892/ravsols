<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\Tag;
use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function App\save_image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $projects = Project::paginate(10);
            return view('project.index')->with(['projects' => $projects]);
    }

    public function ajaxProjects(Request $request){
            $projects = Project::orderBy('title', $request->sort) ->paginate(10);
            return $projects;
    }

    public function allProjects(){
        $projects = Project::paginate(2);
        return view('projects')->With(['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $image_name = save_image($request->image);
        $input['image'] = $image_name;
        $project = new Project($input);
        $project->save();

        if($request->has('tags')){
            $project->tags()->sync($request->tags);
        }
        if($request->has('technologies')){
            $project->technologies()->sync($request->technologies);
        }
        return redirect('admin/projects')->with('success', 'Record added successfully');
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
        $request->validate([
            'title' => 'required',
            'link' => 'required',
        ]);

        $input = $request->all();
        if($request->has('image')) {
            $image_name = save_image($request->image);
            $input['image'] = $image_name;
        }
        $project->update($input);

        if($request->has('tags')){
            $project->tags()->detach();
            $project->tags()->sync($request->tags);
        }
        if($request->has('technologies')){
            $project->technologies()->sync($request->technologies);
        }

        return redirect('admin/projects') ->with('success', 'Record updated successfully');;
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
        return redirect(route('projects.index')) ->with('success', 'Record deleted successfully');;
    }
}
