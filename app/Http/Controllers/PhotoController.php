<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
        public function create()

    {

        return view('create');        

    }


    public function store(Request $request)

    {

        $input = $request->all();


        request()->validate([

            'photo' => 'required|photo|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);


        $photoName = time().'.'.request()->photo->getClientOriginalExtension();

        $input['photo'] = $photoName;

        request()->photo->move(public_path('photos'), $photoName);


        Image::create($input);

        return back()

                ->with('success','Image Upload Successfully');


    }

}
