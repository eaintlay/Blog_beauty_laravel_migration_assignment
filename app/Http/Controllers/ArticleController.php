<?php
namespace App\Http\Controllers;

use App\Article;

use App\Category;

use Storage;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
 //   public function index()
 // {
 //   $articles = Article::all();
 //        // dd($items);
 //   return view('backend/articles/index');
 //  }
    public function _construct($value=''){
        $this->middle('auth')->except('index');
    }
  public function index()
{
   $articles = Article::all();
        // dd($items);
        return view('backend.articles.index',compact('articles'));
}

/**
 * Get formatted title from filename
 */
private function getTitle($filename)
{
    return str_replace('-',' ',substr($filename,7));
}
/**
 * Get formatted date from filename
 */
private function getDate($filename)
{
    return substr($filename,4,2).'.'.substr($filename,2,2).'.'.substr($filename,0,2);
}
 public function detail($id)
{
     return "Controller - Article Detail - $id";
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.articles.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        

        return redirect()->route('articles.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.articles.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
         //dd($article);
         $categories=Category::all();
        return view('backend.articles.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $article = Article::find($id);

        $article->delete();

        // Alert::success('Success!', 'Article Deleted Successfully.');
        
        return redirect()->route('articles.index');
    }

  
}