<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function _construct($value=''){
        $this->middle('auth')->except('index');
    }
    public function post()
    {
        return view('frontend.post');
    }

    public function cart()
    {
    	return view('frontend.cart');
    }

     public function aboutus()
    {
        return view('frontend.about');
    }

    public function index() 
    {
        return view('frontend.index');
    }

    public function readmore() 
    {
        return view('frontend.readmore');
    }

    public function parts() 
    {
        return view('frontend.parts');
    }
    public function continue() 
    {
        return view('frontend.continue');
    }

    public function allcategory() 
    {
        return view('frontend.allcategory');
    }

    public function blog() 
    {
        return view('frontend.blog');
    }

     public function newer() 
    {
        return view('frontend.newer');
    }

    public function contact() 
    {
        return view('frontend.contact');
    }
    //article

    public function articlepage() 
    {
        $articles=Article::all();
        return view('frontend.articles.index',compact('articles'));
    }

    public function articlecreate() 
    {
         $categories=Category::all();
        return view('frontend.articles.create',compact('categories'));
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
        return view('frontend.articleshow',compact('articles'));
    }

    public function articleedit($id)
    {
        $article = Article::find($id);
         //dd($article);
         $categories=Category::all();
        return view('frontend.articles.edit',compact('article','categories'));
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

        return redirect()->route('frontend.articles.show');
    }


    public function articledestroy($id)
    {
        
        $article = Article::find($id);

        $article->delete();

        // Alert::success('Success!', 'Article Deleted Successfully.');
        
        return redirect()->route('articleindex');
    }


// category
     public function categorypage() 
    {
        $categories=Category::all();
        return view('frontend.categories.index',compact('categories'));
    }



    public function categorycreate() 
    {
         $categories=Category::all();
        return view('frontend.categories.create',compact('categories'));
    }

     public function categorystore(Request $request)
    {
            // dd($request);
          $request->validate([
            'name' => 'required',
            
        ]);

        // File Upload
       

        // Store Data
        $category = new Category;
        $category->name = $request->name;
        

        $category->save();

        // Redirect
        // Alert::success('Success!', 'New Category Inserted Successfully.');

        return redirect()->route('frontend.categories.index');

    }

    public function categoryshow($id)
    {
        $categories=Category::all();
        return view('frontend.categoryshow',compact('categories'));
    }

    public function categoryedit($id)
    {
        $category = Category::find($id);
         //dd($article);
         $categories=Category::all();
        return view('frontend.categories.edit',compact('category'));

        
        
    }


     public function categoryupdate(Request $request,$id)
    {
        $request->validate([
            
            'name' => 'required',
            // 'photo' => 'required',
            // may be present or absent

        ]);

        

        // File Upload
        

        // if upload new image, delete old image;
        
        

        // Update Data
        $category = Category::find($id);
        // dd($category);
        $category->name = $request->name;
        

        $category->save();

        // Redirect
        // Alert::success('Success!', 'Category Updated Successfully.');

        return redirect()->route('frontend.categories.index');
    }


    public function categorydestroy($id)
    {
        
         $category = Category::find($id);

        $category->delete();

        // Alert::success('Success!', 'Category Deleted Successfully.');
        
        return redirect()->route('frontend.categories.index');
    }


    //post
     public function postpage() 
    {
         $posts=Post::all();
        return view('frontend.posts.index',compact('posts'));
    }
    public function postcreate()
    {
        $categories=Category::all();
        $articles=Article::all();
        return view('frontend.posts.create',compact('categories','articles'));
    }
    
        public function poststore(Request $request)
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
       public function postshow($id)
       {
          return view('frontend.posts.show');
       }
       public function postedit($id)
      {

        $post = Post::find($id);
        // dd($item);
        return view('frontend.posts.edit',compact('post'));

      }
          public function postupdate(Request $request, $id)
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
       public function postdestroy($id)
    {

       $post = Post::find($id);

        $post->delete();

        // Alert::success('Success!', 'Post Deleted Successfully.');
        
        return redirect()->route('frontend.posts.index');
   }

   //comment

   public function commentpage()
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
    public function commentcreate()
    {
        return view('frontend.comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function commentstore(Request $request)
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
    public function commentshow($id)
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
    public function commentedit($id)
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
    public function commentupdate(Request $request, $id)
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
    public function commentdestroy($id)
    {
         $comment = Comment::find($id);

        $comment->delete();

        // Alert::success('Success!', 'Comment Deleted Successfully.');
        
        return redirect()->route('frontend.comments.index');
    }


    
}
