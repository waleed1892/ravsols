<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use function App\save_image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::paginate();
        return view('testimonial.index')->with(['testimonials' => $testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimonial.create');
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
            'name' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        $image_name = save_image($request->image);
        $input['image'] = $image_name;
        $testimonial = new Testimonial($input);
        $testimonial->save();

        return redirect('admin/testimonials')->with('success', 'Record added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('testimonial.edit')->with(['testimonial' => $testimonial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'company' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        if($request->has('image')) {
            $image_name = save_image($request->image);
            $input['image'] = $image_name;
        }
        $testimonial->update($input);
        return redirect('admin/testimonials')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect(route('testimonials.index'))->with('success', 'Record deleted successfully');
    }
}
