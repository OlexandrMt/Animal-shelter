<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Shelter;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ShelterRequest;
use Illuminate\Database\Eloquent\Collection;

class ShelterController extends Controller
{
    /** Display a listing of the resource.
     * @return \Illuminate\Http\Response*/



    public function index(Request $request)
    {

      $shelterinfo = Shelter::paginate(6);
      $animals = Animal::all();

      return view('shelters/index', ['shelters' => $shelterinfo, 'animals' => $animals]);
    }

    /*Show the form for creating a new resource.
     * @return \Illuminate\Http\Response*/

    public function create()
    {
        if(Auth::check()){
          return view('shelters/create');
          }
        else{
          return redirect()->back()->withErrors(['Потрібно авторизуватися, щоб створити новий притулок']);
          }

            return view('shelters/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ShelterRequest $request)
    {


      $shelterinfo = new Shelter();
      $shelterinfo->name = $request->input('name');
      $shelterinfo->address = $request->input('address');
      $shelterinfo->mail = $request->input('mail');
      $shelterinfo->phone = $request->input('phone');

      $shelterinfo->user_id = $request->user()->id;

      if( !empty($request->logo) ){
          $shelterinfo->logo = $request->logo->store('images/shalter_logos');
      }
      $shelterinfo->status = true;
      $shelterinfo->save();

      return redirect()->route('shelters.index');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response*/
    public function show($id)
    {
        $user=NULL;
        if(Auth::check()){
          $user = Auth::user()->id;}
        $shelterinfo =  Shelter::find($id);

        $animals = Shelter::find($id);
        $animals = $animals->animal()->get();


        return view('shelters/show', ['shelter' => $shelterinfo, 'user' => $user, 'animals' => $animals]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shelterinfo = Shelter::find($id);

        if(isset($shelterinfo)){
          if(!Auth::check() || $shelterinfo->user_id != Auth::user()->id ){
            $shelterinfo = NULL;
            }
        }
        return view('shelters/edit', ['shelter' => $shelterinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, ShelterRequest $request )
    {

        $shelterinfo = Shelter::find($id);
        $shelterinfo->name = $request->input('name');
        $shelterinfo->address = $request->input('address');
        $shelterinfo->mail = $request->input('mail');
        $shelterinfo->phone = $request->input('phone');

        if( !empty ($request->logo) ) {
            $shelterinfo->logo = $request->file('logo')->store('shalter_logos');
        }

        $shelterinfo->status = true;
        $shelterinfo->save();

       return redirect()->route('shelters.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Shelter::find($id)->delete();
      return redirect()->route('shelters.index');
    }

    public function my()
    {
      if(!Auth::check()){
        return redirect()->back()->withErrors(['Потрібно авторизуватися для перегляду своїх приьулків']);
        }

      $shelterinfo = User::find(Auth::user()->id);
      $shelterinfo = $shelterinfo->shelter()->get();

      if($shelterinfo->isEmpty()){
        return redirect()->back()->withErrors(['У Вас поки що немає притулків']);
        }
      return view('shelters/index', ['shelters' => $shelterinfo]);
    }

    public function animals($id)
    {

      $shelterinfo = Shelter::find($id);
      $shelterinfo = $shelterinfo->animal()->get();

      if($shelterinfo->isEmpty()){
        return redirect()->back()->withErrors(['Притулок пустий']);
        }
      return view('welcome', ['animals' => $shelterinfo]);
    }

  }
