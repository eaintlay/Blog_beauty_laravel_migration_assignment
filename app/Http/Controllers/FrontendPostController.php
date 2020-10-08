<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('frontend.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $articles=Article::all();
        return view('frontend.posts.create',compact('categories','articles'));
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
            'article' => 'required',
            //'category_id' => 'required',
            'category' => 'required',
            'post_name'=> 'required',
            'post_detail'=>'required',
            'photo'=>'required',
            'content'=>'required',
        ]);


       $imageName = time().'.'.$request->photo->extension();

        $request->photo->move(public_path('frontendtemplate/instylr/img'),$imageName);
        $myfile = 'frontendtemplate/instylr/img/'.$imageName;

        

        //$name=Category::find($request->category);
        // Store Data
        $post = new Post;
        $post->article_id
         = $request->article;
        //$post->category_id =$request->category_id;
        $post->category_id =$request->category;
        $post->post_name=$request->post_name;
        $post->post_detail=$request->post_detail;
        $post->photo=$myfile;
        $post->content=$request->content;


        

        $post->save();

        // Redirect
        

        
        

        $posts=Post::all();
        return view('frontend.posts.index',compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('frontend.posts.show');
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
        return view('frontend.posts.edit',compact('post'));
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
            'category_id'  => 'required',
        ]);

       // File Upload
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();

            $request->photo->move(public_path('frontendtemplate/instylr/img'),$imageName);
            $myfile = 'frontendtemplate/instylr/img/'.$imageName;
        }
        // Update Data
        $post = Post::find($id);
        // dd($category);
        $post->article_id = $request->article_id;
        $post->category_id  = $request->category_id;
        
        $post->save();

        // Redirect
        // Success('Success!', 'Article Updated Successfully.');

        return redirect()->route('frontend.posts.index');
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
        
        return redirect()->route('frontend.posts.index');
    }
}
