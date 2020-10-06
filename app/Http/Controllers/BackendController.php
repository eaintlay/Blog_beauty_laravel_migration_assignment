<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function _construct($value=''){
        $this->middle('auth')->except('index');
    }
    public function dashboard() 
    {
        return view('backend.dashboard');
    }


     


    public function articlepage() 
    {
        $articles=Article::all();
        return view('backend.articles.index',compact('articles'));
    }

    public function articlecreate() 
    {
         $categories=Category::all();
        return view('backend.articles.create',compact('categories'));
    }

     public function articlestore(Request $request)
    {
            // dd($request);
         $request->validate([
            'category_id' => 'required',
            'title' => 'required',
             'body' => 'required',
         ]);

         // Store Data
        $article = new Article;
        $article->category_id = $request->category_id;
        $article->user_id = 2;
        $article->title = $request->title;
        $article->body =$request->body;
        

        $article->save();

        // Redirect
        

        return redirect()->route('frontend.articles.index');

    }

    public function articleshow($id)
    {
        $articles=Article::all();
        return view('backend.articleshow',compact('articles'));
    }

    public function articleedit($id)
    {
        $article = Article::find($id);
         //dd($article);
         $categories=Category::all();
        return view('backend.articles.edit',compact('article','categories'));
    }


     public function articleupdate(Request $request,$id)
    {
         $request->validate([
            
            'category_id' => 'required',
            'title' => 'required',
            'body'  => 'required',
        ]);
        // Update Data
        $article = Article::find($id);
        // dd($category);
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->body  = $request->body;
        
        $article->save();

        // Redirect
        // Success('Success!', 'Article Updated Successfully.');

        return redirect()->route('backend.articles.show');
    }


    public function articledestroy($id)
    {
        
        $article = Article::find($id);

        $article->delete();

        // Alert::success('Success!', 'Article Deleted Successfully.');
        
        return redirect()->route('articleindex');
    }


}