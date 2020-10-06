<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Article;

use App\Category;


class PostController extends Controller
{
    // public function _construct($value=''){
    //     $this->middle('auth')->except('index');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
       
        return view('backend.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('frontend.posts.create',compact('categories'));
    }

    //get the current post using the post $id
    public function showpost(String $id)
    {
        $post=Post::find($id);
         return view ("showpost")->with("current",$post);
        //return view('frontend.showpost');

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
            'article_id' => 'required',
            'category_name' => 'required',
            'post_name'=> 'required',
            'post_detail'=>'required',
            'photo'=>'required',
        ]);

        
        // Store Data
        $post = new Post;
        $post->article_id = $request->article_id;
        $post->category_name =$request->category_name;
        $post->post_name=$request->post_name;
        $post->post_detail=$request->post_detail;
        $post->photo=$request->photo;

        

        $post->save();

        // Redirect
        

        return redirect()->route('posts.index');
       }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('backend.posts.show');
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = Post::find($id);
        // dd($item);
        return view('backend.posts.edit',compact('post'));

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
       $request->validate([
            
            'article_id' => 'required',
            'category_name'  => 'required',
            'post_name'=> 'required',
            'post_detail'=>'required',
            'photo'=>'required',
        ]);
        // Update Data
        $post = Post::find($id);
        // dd($category);
        $post->article_id = $request->article_id;
        
        $post->category_name  = $request->category_name;
        $post->post_name=$request->post_name;
        $post->post_detail=$request->post_detail;
        $post->photo=$request->photo;
        
        $post->save();

        // Redirect
        // Success('Success!', 'Article Updated Successfully.');

        return redirect()->route('posts.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $post = Post::find($id);

        $post->delete();

        // Alert::success('Success!', 'Post Deleted Successfully.');
        
        return redirect()->route('posts.index');
   }
}
