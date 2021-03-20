<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\AnimalRequest;
use App\Http\Controllers\ShelterController;


class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {

        $animals = Animal::all();

        // return view('welcome',['animals'=>$animals]);
        return view('home',['animals'=>$animals]);
    }

    public function index()
    {

        $animals = Animal::paginate(6);
        return view('animals/index',['animals'=>$animals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if(!Auth::check()){
          return redirect()->back()->withErrors(['Потрібно авторизуватися, щоб додати тварину']);
        }
        elseif(!$request->shelter_id){
          return redirect()->back()->withErrors(['Потрібно увійти до притулку, та мати права адміністраторв щоб додати тварину']);
        }
        return view('animals/create', ['shelter_id' => $request->shelter_id]);


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
      $animals->fill($request->all());

/*
      $animals->nickname = $request->input('name');
      $animals->breed = $request->input('breed');
      $animals->age = $request->input('age');
      $animals->type = $request->input('type');
      $animals->photo = $request->fphoto->store('avatars','public');
*/
      $animals->sex = $request->input('sex');
      $animals->status = $request->input('status');


      if ($request->file('photo')){
      $animals->photo = $request->file('photo')->store('avatars');
      }
      $animals->shelter_id = $request->input('shelter_id');
      $animals->save();

      $animals = Animal::all();
      // return view('welcome',['animals'=>$animals]);
      return view('home',['animals'=>$animals]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //dd("show");
      $animals = Animal::find($id);
        return view('animals.shownew', ['animal'=>$animals]);  //
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

      return view('animals/edit',['animal'=>$animals], ['shelter_id' => $request->shelter_id]);

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
     if ($request->file('photo')){
     $animals->photo = $request->file('photo')->store('avatars');
  }
     $animals->sex = $request->input('sex');
     $animals->status = $request->input('status');
     $animals->description = $request->input('description');

     $animals->save();

    return redirect()->route('animals.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
      $shelter_id = Animal::find($id);
      $shelter_id = $shelter_id->shelter_id;
      Animal::find($id)->delete();

   // return redirect()->route('animals.index');
   return redirect()->route('shelters.show', [$shelter_id]);
   // return redirect()->route('animals.show', $id);
    }
}
