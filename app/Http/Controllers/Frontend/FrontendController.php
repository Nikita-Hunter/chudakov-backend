<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Gallery;
use App\Models\Question;
use App\Models\Show;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        $questions = Question::all()->where('status', 1);
        $shows = Show::all();
        $images = Gallery::all();
        return view('home', compact('questions', 'feedbacks', 'shows', 'images'));
    }
    public function show($id)
    {
        $show = Show::find($id);
        return view('single-show', compact('show'));
    }
}
