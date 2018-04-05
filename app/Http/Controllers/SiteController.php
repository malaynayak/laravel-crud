<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Blog;

class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $blogs = Blog::where('published', 1)->get();
       $featured_blogs = Blog::where('featured', 1)->where('published', 1)->get();
       return view('index', compact('blogs', 'featured_blogs'));
    }
}
