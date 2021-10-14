<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;
use function App\save_image;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $techs = Technology::paginate();
        return view('technology.index')->with(['technologies' => $techs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('technology.create');
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
        ]);

        $input = $request->all();
        $image_name = save_image($request->image);
        $input['image'] = $image_name;
        $tech = new Technology($input);
        $tech->save();
        return redirect('admin/technologies');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Technology $technology
     * @return \Illuminate\Http\Response
     */
    public function show(Technology $technology)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Technology $technology
     * @return \Illuminate\Http\Response
     */
    public function edit(Technology $technology)
    {
        //
        return view('technology.edit')->with(['technology' => $technology]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Technology $technology
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required',
        ]);

        $input = $request->all();
        if ($request->has('image')) {
            $image_name = save_image($request->image);
            $input['image'] = $image_name;
        }
        $technology->update($input);
        return redirect('admin/technologies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Technology $technology
     * @return \Illuminate\Http\Response
     */
    public function destroy(Technology $technology)
    {
        //
        $technology->delete();
        return redirect(route('technologies.index'));
    }
}
