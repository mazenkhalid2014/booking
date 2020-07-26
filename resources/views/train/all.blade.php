@extends('layouts.app')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Reservation') }}</div>
                <form action="/create">
                    <div class="container">
                        <div class="col-md-5">
                    <div class="form-group">
                      
                      <label for="train name:">train name:</label>
                      <input type="text" class="form-control" placeholder="Enter train name" name="train_name" id="train_name">
                    </div>
                    <label for="start_station">pickup:</label>
                    <select name="start_station" id="start_station" class="form-control">
                     @foreach($city as $c)
                     <option>{{$c->city}}</option>
                     @endforeach            
                    </select>

                    <div class="container">
                   <label for="end_station">destnation:</label>
                <select name="end_station" id="end_station" class="form-control">
                      @foreach($city as $c)
                  <option>{{$c->city}}</option>
                  @endforeach                
              </select>
                </div>           
                </div>
              </div>            
                <div class="col-md-5">
                      <div class="form-group">
                        <label for="start time">start time:</label>
                        <input type="datetime-local" class="form-control" placeholder="Enter start time" name="start_time"id="start_time">
                      </div>
                      <div class="form-group">
                        <label for="end time">end time:</label>
                        <input type="datetime-local" class="form-control" placeholder="Enter end time" name="end_time" id="end_time">
                      </div>
                      <div class="form-group">
                        <label for="price">price:</label>
                        <input type="text" class="form-control" placeholder="price "name="price" id="price">
                      </div>
                  
                      <div class="form-group">
                        <label for="capacity">capacity:</label>
                        <input type="text" class="form-control" placeholder="capacity "name="capacity" id="capacity">
                      </div>
                      
                    <button type="submit" class="btn btn-primary">create</button>
                </div>  </div>
                  </form>
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>train name</th>
                        <th>start station</th>
                        <th>end station</th>
                        <th>start time</th>
                        <th>end time</th>
                        <th>price</th>
                        <th>capacity</th>
                        <th>created at</th>
                      </tr>
                    </thead>
                    <tbody>
                        <td>  <a href="/create/{{$a}} "></a></td>
                      @foreach($a as $train)
                      <tr>
                       
                        <td>{{$train->name}}</td>
                        <td>{{$train->start_station}}</td>
                        <td>{{$train->end_station}}</td>
                        <td>{{$train->start_time}}</td>
                        <td> {{$train->end_time}}</td>
                        <td>{{$train->price}}</td>
                        <td>{{$train->capacity}}</td>
                        <td>{{$train->created_at}}</td>
                        <td>  <a href="/delete/{{$train->id}} "><button >delete</buttom></a></td>
                      @endforeach
                    </tbody>
                       
                  </tr>  
               
                 
                </div>
              </table>
                </body>
                </html>
                {{-- @foreach($all as $train)
    
        <div class="card-body">
        <br> Name :  {{$train->name}}</br>
         <br>Start station :  {{$train->start_station}}</br>
            <br> End station : {{$train->end_station}}</br>
         <br>   start time : {{$train->start_time}} </br>
          <br>  End time: {{$train->end_time}} </br>
     <br> Price : {{$train->price}} </br>
        <br>  capacity :{{$train->capacity}} </br>
        <a href="/delete/{{$train->id}} "><button >delete</buttom></a>

              @endforeach
           
             --}}
            
            
            
            </div>  </div>  </div>
        
        
        
        
        
</div>
@endsection()