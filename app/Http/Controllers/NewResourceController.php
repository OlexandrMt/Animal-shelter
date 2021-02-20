<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals/index',['animal'=>$animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animals/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $animals= new Animal();
      $animals->name = $request->input('name');
      $animals->breed = $request->input('breed');
      $animals->age = $request->input('age');
      $animals->type = $request->input('type');
      $animals->photo = $request->file('photo')->store('avatars');
      $animals->sex = $request->input('sex');
      $animals->status = $request->input('status');

      $animals->save();
      return redirect()->route('animals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
      $animals = Animal::find($id);

      return view('animals/edit',['animal'=>$animals]);

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
     $animals = Animal::find($id);
     $animals->name = $request->input('name');
     $animals->breed = $request->input('breed');
     $animals->age = $request->input('age');
     $animals->type = $request->input('type');
     $animals->photo = $request->file('photo')->store('avatars');
     $animals->sex = $request->input('sex');
     $animals->status = $request->input('status');

     $animals->save();

    return redirect()->route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Animal::find($id)->delete();
   return redirect()->route('animals.index');
    }
}
