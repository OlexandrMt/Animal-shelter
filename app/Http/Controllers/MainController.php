<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $animals=[
        [
          "id"=>1,
          "name"=>'Cat 1',
          "age"=>'2',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>2,
          "name"=>'Cat 2',
          "age"=>'5',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>3,
          "name"=>'Cat 3',
          "age"=>'1',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>4,
          "name"=>'Cat 4',
          "age"=>'1',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>5,
          "name"=>'Cat 5',
          "age"=>'8',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>6,
          "name"=>'Cat 8',
          "age"=>'5',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>7,
          "name"=>'Cat 7',
          "age"=>'1',
          "ava"=> "images/Screenshot.jpg"
        ],
        [
          "id"=>8,
          "name"=>'Cat 8',
          "age"=>'2',
          "ava"=> "images/Screenshot.jpg"
        ],
      ];
      $animals= collect($animals);

      return view ('layouts.contact', ["animals"=>$animals]);  //
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
    public function edit($id)
    {
        //
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
        //
    }
}
