<?php

namespace App\Http\Controllers;

use App\Models\ResourceImage;
use Illuminate\Http\Request;

class ResourceImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\ResourceImage  $resourceImage
     * @return \Illuminate\Http\Response
     */
    public function show(ResourceImage $resourceImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResourceImage  $resourceImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ResourceImage $resourceImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResourceImage  $resourceImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResourceImage $resourceImage)
    {
        //
    }


    public function updateResImg($id_res,$old_img,$id_img){
        $resimgs = ResourceImage::where('resource_id',$id_res)->get();
        foreach($resimgs as $resimg){
            if($resimg->image_id == $old_img){
                $resimg->image_id = $id_img;
                $resimg->save();
            }
        }
        return redirect()->back()->withSuccess('Изоброжение загруженно!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResourceImage  $resourceImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResourceImage $resourceImage)
    {
        //
    }
}
