<?php

namespace App\Http\Controllers;

use App\city;
use App\train;
use Illuminate\Http\Request;

class admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all =train::all();
        $city=city::all();
       
        return view("train\all")->with('a',$all)->with('city',$city);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
     
    $reserve = new train();
    
   
      $reserve->name=$request-> input("train_name");
      $reserve->start_station= $request-> input('start_station');
      $reserve->end_station =$request-> input('end_station');
      $reserve->start_time =$request-> input('start_time');
      $reserve->end_time =$request-> input('end_time');
      $reserve->price =$request-> input('price');
      $reserve->capacity =$request-> input('capacity');
      $city=city::all();
  $reserve->save();
  $all =train::all();
  return view("train\all")->with('a',$all)->with('city',$city);
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
    { $city=city::all();
        train::find($id)->delete();
        $all =train::all();
  return view("train\all")->with('a',$all)->with('city',$city);;
    }
}
