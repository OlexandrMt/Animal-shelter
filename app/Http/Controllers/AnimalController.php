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
use App\Http\Controllers\TeamController;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
      if($request->type){
        $animals = Animal::where('type', '=', $request->type)->paginate(6)->fragment('our-animals-anchor');
        return view('animals/index',['animals'=>$animals])."#our-animals-anchor";
              }
      else{
        $animals = Animal::paginate(6)->fragment('our-animals-anchor');
        return view('animals/index',['animals'=>$animals]);
      }
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
    public function store(AnimalRequest $request)
    {
      $animals= new Animal();
      $animals->fill($request->all());

      $animals->sex = $request->input('sex');
      $animals->status = $request->input('status');


      if ($request->file('photo')){
      $animals->photo = $request->file('photo')->store('avatars');
      }
      $animals->shelter_id = $request->input('shelter_id');
      $animals->save();

      return redirect()->route('shelters.show', $animals->shelter_id);
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
        return view('animals.show', ['animal'=>$animals]);  //
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
    public function update(AnimalRequest $request, $id)
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
      $animal=Animal::find($id);
      $shelter_id=$animal->shelter_id;
      Animal::find($id)->delete();
   return redirect()->route('shelters.show', $shelter_id);
    }
    public function home()
    {
        $animals = Animal::all();
        $teams=[
            [
              "id"=>1,
              "name"=>'Олександр Зарицький',
              "ava"=> "images/unnamed.jpg"
            ],
            [
              "id"=>2,
              "name"=>'Сергій Кривенький',
              "ava"=> "images/unnamed.jpg"
            ],
            [
              "id"=>3,
              "name"=>'Дмитро Базалицький',
              "ava"=> "images/Bazalytskyi.png"
            ],
            [
              "id"=>4,
              "name"=>'Наталія Макодай',
              "ava"=> "images/Nata1.jpg"
            ],
            [
              "id"=>5,
              "name"=>'Олександр Метельний',
              "ava"=> "images/Metelnyi.png"
            ],
            [
              "id"=>6,
              "name"=>'Маргарита Грінченко',
              "ava"=> "images/unnamed.jpg"
            ],
            [
              "id"=>7,
              "name"=>'Марія Терлецька',
              "ava"=> "images/unnamed.jpg"
            ],
            [
              "id"=>8,
              "name"=>'Олександр Панченко',
              "ava"=> "images/unnamed.jpg"
            ],
            [
              "id"=>9,
              "name"=>'Олег Ростов',
              "ava"=> "images/unnamed.jpg"
            ],
            [
              "id"=>10,
              "name"=>'Віталій Богданюк',
              "ava"=> "images/unnamed.jpg"
            ],

          ];
        $teams= collect($teams);
        // return view('welcome',['animals'=>$animals]);
        return view('home',['animals'=>$animals], ["teams"=>$teams]);
    }

}
