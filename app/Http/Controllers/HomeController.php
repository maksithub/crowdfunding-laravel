<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    //
    public function index() {
        $projects = Project::with(['money'])->get();
        return view('front.home', ['projects' => $projects]);
    }
}
