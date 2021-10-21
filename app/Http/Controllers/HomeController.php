<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $projects = Project::all();
        $testimonials = Testimonial::all();
        $technologies = Technology::all();

        return view('index')->with([
            'projects'=>$projects,
            'testimonials'=>$testimonials,
            'technologies'=>$technologies,
        ]);
    }
}
