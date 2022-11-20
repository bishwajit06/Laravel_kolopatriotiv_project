<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function childrenStories()
    {
        $data = Post::latest()->get();
        return view('frontend.pages.children-stories', compact('data'));
    }

    public function childrenStoriesDetails($slug)
    {
        $post = Post::where('slug',$slug)->first();
        return view('frontend.pages.children-stories-details', compact('post'));
    }

    public function contactUs()
    {
        return view('frontend.pages.contact');
    }
}
