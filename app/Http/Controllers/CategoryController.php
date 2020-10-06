<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use Alert;

class CategoryController extends Controller
{

    public function _construct($value=''){
        $this->middle('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function _construct($value=''){
    //     $this->middle('auth')->except('index');
    // }
    public function index()
    {
        $categories = Category::all();
        // dd($items);
        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
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
            'name' => 'required',
            
        ]);

        // File Upload
       

        // Store Data
        $category = new Category;
        $category->name = $request->name;
        

        $category->save();

        // Redirect
        // Alert::success('Success!', 'New Category Inserted Successfully.');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $category = Category::find($id);
        // dd($item);
        return view('backend.categories.edit',compact('category'));
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

        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        // Alert::success('Success!', 'Category Deleted Successfully.');
        
        return redirect()->route('categories.index');
    }
}
