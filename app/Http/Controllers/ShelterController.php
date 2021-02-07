<?php

namespace App\Http\Controllers;

use App\Models\Shelter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ShelterRequest;

class ShelterController extends Controller
{
    /** Display a listing of the resource.
     * @return \Illuminate\Http\Response*/

    public function index()
    {
      //$shelterinfo = DB::table('shelters')->get();
      $shelterinfo = Shelter::all();
      return view('shelters/index', ['shelters' => $shelterinfo]);
    }

    /*Show the form for creating a new resource.
     * @return \Illuminate\Http\Response*/

    public function create()
    {
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
      if( !empty($request->logo) ){
          $shelterinfo->logo = $request->logo->store('images/shalter_logos');
      }
      $shelterinfo->status = true;
      $shelterinfo->save();


      /*$shelterinfo = Shelter::all();

      return view('BLshelters', ['shelters' => $shelterinfo]);*/
      return redirect()->route('shelters.index'); /*Редирект можно сделать не только по URI адрессу но и по имени роута(все имена
      есть в таблице php artisan route:list)*/
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response*/
    public function show($id)
    {
        $shelterinfo =  Shelter::find($id);
        return view('shelters/show', ['shelter' => $shelterinfo]);
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

        return view('shelters/edit', ['shelter' => $shelterinfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request )
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

       return view('shelters/show', ['shelter' => $shelterinfo]);
      //return  dd($request);
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
}
