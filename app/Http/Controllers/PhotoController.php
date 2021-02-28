<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return view ('photos.index');
      $photoinfo = Photo::all();
      return view('photos.index', ['photos' => $photoinfo]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('photos.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $photoinfo = new Photo();
      $photoinfo->name = $request->input('name');

      $photoinfo->save();
    //  return redirect()->route('photos.index');  //*/
    //  $name = $request->input('name');
      return redirect()->route('photos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $photoinfo =  Photo::find($id);
        return view('photos.show', ['photo' => $photoinfo]);    //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $photoinfo =  Photo::find($id);
        return view('photos.edit', ['photo' => $photoinfo]);  //
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
      $photoinfo =  Photo::find($id);
      $photoinfo->name = $request->input('name');
      $photoinfo->save();
      return redirect()->route('photos.index');
      // return view('photos.show', ['photo' => $photoinfo]);Photo::find($id)->delete();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Photo::find($id)->delete();
      return redirect()->route('photos.index');  //
    }
}
