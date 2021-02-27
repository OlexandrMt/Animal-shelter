<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use Illuminate\Support\Facades\Storage;
=======
>>>>>>> dev

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
      $animalinfo = Animal::all();
      return view('animals/index', ['animal' => $animalinfo]);
=======
        $animals = Animal::all();
        return view('animals/index',['animal'=>$animals]);
>>>>>>> dev
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function create()
    {
      return view('animals/create');
=======
    public function create(Request $request)
    {
// dd($request->shelter_id);
        return view('animals/create', ['shelter_id' => $request->shelter_id]);
>>>>>>> dev
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $animalinfo = new Animal();
        $animalinfo->nickname = $request->input('fname');
        $animalinfo->breed = $request->input('fbreed');
        $animalinfo->age = $request->input('fage');
        $animalinfo->type = $request->input('ftype');
        //$animalinfo->photo = $request->input('fphoto');
        $animalinfo->photo = $request->fphoto->store('animal_photo','public');
        $animalinfo->sex = $request->input('gender');
        $animalinfo->status = $request->input('status');
        $animalinfo->save();

        return redirect()->route('animals.index');
=======
      $animals= new Animal();
      $animals->fill($request->all());

      if ($request->file('photo')){
      $animals->photo = $request->file('photo')->store('avatars');
      }


      $animals->save();
      return redirect()->route('animals.index');
>>>>>>> dev
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
<<<<<<< HEAD
    public function edit($id)
    {
        //
=======
    public function edit($id, Request $request)
    {
      $animals = Animal::find($id);

      return view('animals/edit',['animal'=>$animals]);

>>>>>>> dev
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
<<<<<<< HEAD
        //
=======
     $animals = Animal::find($id);
     $animals->name = $request->input('name');
     $animals->breed = $request->input('breed');
     $animals->age = $request->input('age');
     $animals->type = $request->input('type');
     if ($request->file('photo')){
     $animals->photo = $request->file('photo')->store('avatars');
  }
     $animals->sex = $request->input('sex');
     $animals->status = $request->input('status');

     $animals->save();

    return redirect()->route('animals.index');
>>>>>>> dev
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        //
=======
      Animal::find($id)->delete();
   return redirect()->route('animals.index');
>>>>>>> dev
    }
}
