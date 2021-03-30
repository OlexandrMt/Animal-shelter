<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        return view ('team', ["teams"=>$teams]);     //
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
