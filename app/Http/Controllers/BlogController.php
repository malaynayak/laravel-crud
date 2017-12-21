<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index',compact('blogs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $blog = Blog::create($request->all());

        if($request->file('featured_image')){
            $imageName = $blog->id . '.' . time() .
            $request->file('featured_image')->getClientOriginalExtension();
            $request->file('featured_image')->move(
                base_path() . '/public/images/blog/', $imageName
            );
            $blog->featured_image  = 'images/blog/'. $imageName;
            $blog->save();
        }
        return redirect()->route('blogs.index')
            ->with('success','Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        request()->validate([
            'title' => 'required',
            'content' => 'required',
            'featured_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $blog->update($request->all());
        return redirect()->route('blogs.index')
            ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('blogs.index')
            ->with('success','Blog deleted successfully');
    }
}
