<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index')->with('blogs', $blogs);
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
        $this->validate($request, [
            'title' => 'required|max:30',
            'content' => 'required|max:500',
            'image' => 'required|mimes:jpeg,jpg,png|max:5000',
        ]);

        // $blog = new Blog;
        // $blog->title = $request->title;
        // $blog->content = $request->content;
        // $blog->image = $request->image;

        if($image   =   $request->file('image')) {

            $name      =   time().time().'.'.$image->getClientOriginalExtension();
            
            $target_path    =   public_path('/uploads/blog');
            
                if($image->move($target_path, $name)) {
                   
                    // save file name in the database
                    // $blog   =   Blog::create([
                    //     'title' => $request->title,
                    //     'content' => $request->content,
                    //     'image' => $name
                    //     ]);
                    $blog = new Blog;
                    $blog->title = $request->title;
                    $blog->content = $request->content;
                    $blog->image = $name;
                    $blog->save();
                
                    return redirect('/blog');
                }
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $blog = Blog::find($id);
       return view('blog.article')->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $blog = Blog::find($id);
        return view('blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:30',
            'content' => 'required|max:500',
            'image' => 'required|mimes:jpg,png,jpeg|max:5000'
        ]);

        $blog = Blog::find($id);

        $blog->title = $request->title;
        $blog->content = $request->content;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('/uploads/blog'), $filename);
            $blog->image = $request->file('image')->getClientOriginalName();
        }
    
        $blog->update();
    
        return redirect('/blog');


        // $blog->image = $request->image;
        // $blog = Blog::find($id);

        // if($image   =   $request->file('image')) {

        //     $name      =   time().time().'.'.$image->getClientOriginalExtension();
            
        //     $target_path    =   public_path('/uploads/blog');
            
        //         // if(
        //             $image->move($target_path, $name);
        //             // ) {
                   
        //             $blog->title = $request->title;
        //             $blog->content = $request->content;
        //             // $blog->image = $name;
        //             $blog->save(['file' => $name]);
                    
        //             $blog->save();
                
        //             return redirect('/blog');
        //         // }
        //     }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $blog = Blog::findorfail($id);

       $blog -> delete();

        return redirect('/blog');
    }
}
