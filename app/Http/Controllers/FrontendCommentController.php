<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$comments = Comment::all();
        $posts = Post::all();
        // dd($items);
        return view('frontend.posts.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('frontend.comments.create');
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
            'content' => 'required',
            'post_id' => 'required',
        ]);

         // Store Data
        $comment = new Comment;
        $comment->content = $request->content;
        $comment->post_id =$request->post_id;
        

        $comment->save();

        // Redirect
        

        return redirect()->route('frontend.comments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comments=Comment::all();
        return view('frontend.comments.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        // dd($item);
        return view('frontend.comments.edit',compact('comment'));
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
            
            'content' => 'required',
            'post_id'  => 'required',
        ]);
        // Update Data
        $comment = Comment::find($id);
        // dd($category);
        $comment->content = $request->content;
        $comment->post_id  = $request->post_id;
        
        $comment->save();

        // Redirect
        // Alert::success('Success!', 'Comment Updated Successfully.');

        return redirect()->route('frontend.comments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $comment = Comment::find($id);

        $comment->delete();

        // Alert::success('Success!', 'Comment Deleted Successfully.');
        
        return redirect()->route('frontend.comments.index');
    }
}
