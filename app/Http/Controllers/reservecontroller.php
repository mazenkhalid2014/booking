<?php

namespace App\Http\Controllers;

use App\city;
use App\Mail\mail as Mail1;
use App\reserve;
use App\train;
use App\User;
use Mailgun\Mailgun;
use Illuminate\Http\Request;
use Illuminate\Mail\MailManager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpKernel\Profiler\Profile;

class reservecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $city=city::all();
     
        return view("train/inquire")->with("city",$city);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,Request $request)
    {
      
       $res=train::find($id);
       $train_id=$res->tr;
        $train_name=$res->name;
        $start_station=$res->start_station;
        $end_station=$res->end_station;
        $start_time=$res->start_time;
      $end_time=$res->end_time;
        $price=$res->price;
        $cap=$res->capacity;
        if ($cap>0) {
            # code...
       
        $cap=$cap-1;
       
        $reserve = new reserve();
      $reserve->user_id = Auth::user()->id;
      $reserve->train_id=$id;
      $reserve->train_name=$train_name;
      $reserve->start_station= $start_station;
      $reserve->end_station =$end_station;
      $reserve->start_time =$start_time;
      $reserve->end_time =$end_time;
      $reserve->price =$price;
      $reserve->save(); 
   
  train::where('id',$id)->update(['capacity'=>"$cap"]);
Mail::to($request->user()->email)->send(new mail1());
return view("train/created");
        }else{
            
            return view("train/failed"); 
        }
              

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
    public function show(Request $request)
    {
       
        $from=$request->from;
        $to=$request->to;
        $date=$request->date;
        $data = train::where( 'start_station',$from)->where('end_station',$to)->where('start_time',$date)->get();

 return view("train/select")
 ->with('data',$data);


    }
    public function trip( Request $request)
    {
        $id = Auth::user()->id;

        $data = reserve::where('user_id',$id)->get();
          
 return view("train/trip")
 ->with('data',$data);


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
