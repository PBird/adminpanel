<?php

namespace App\Http\Controllers;

use App\image;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = image::all();
        return view('panel.pages.image_showall')->with('images',$images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('panel.pages.image_upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = ImageManagerStatic::make(Input::file('image'));

        $filename = $request->file('image')->getClientOriginalName();
        $file = explode('.', $filename);
        $extent = $file[1];
        $name = $file[0];
        $path = 'resources/img/'.$name.time().'.'.$extent;
        $description = $request->description;

        $image->save($path);

        image::create([ 'name' => $name , 'path' =>  $path , 'description' => $description   ]);


        return back()->with('success','Image Uploaded Successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(image $image)
    {

         $image->delete();

         return back()->with('success', 'Deleted Succcessfully');
    }
}
