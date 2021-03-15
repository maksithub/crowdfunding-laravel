<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Comment;

class CommentController extends Controller
{
    //
    public function index($id) {
        // $comments = Comment::where('project_id', $id)->orderBy('created_at', 'DESC')->get();
        $project = Project::find($id);
        return view('front.comments', ['project'=>$project]);
    }
}
