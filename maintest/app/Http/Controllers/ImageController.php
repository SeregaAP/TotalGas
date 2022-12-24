<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Models\Resource;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
     
    }

    public function editImage($id,$res){
        $resource = Resource::where('id',$res)->get();
        $image = Image::where('id', $id)->get();
        $imagesall = Image::all();
        return view('images.edit',[
            'image' => $image[0],
            'imagesall' => $imagesall,
            'resource' => $resource[0]
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function resimg($id){
        $resources = Resource::where('id', $id)->get();
        return view('images.resimg',[
            'resource' => $resources[0],
            'images' => $resources[0]->images
        ]);
    }

    public function upload(Request $request){
       $path =  $request->file('image')->store('uploads','public');
       $image = new Image();
       $image->title = '/storage/app/public/' . $path;
       $image->desc = 'hh';
       $res = $image->save();
      // dd($path);
       if($path != null && $res){
        return redirect()->back()->withSuccess('Изоброжение загруженно!');
       }else{
        return redirect()->back()->withErrors('Что то пошло не так!');
       }
    }
}
