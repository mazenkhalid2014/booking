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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('your Reservations') }}</div>
                <div class="container">
                          
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th>train name</th>
                          <th>start station</th>
                          <th>end station</th>
                          <th>start time</th>
                          <th>end time</th>
                          <th>price</th>
                          <th>created at</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $train)
                        <tr>
                         
                          <td>{{$train->train_name}}</td>
                          <td>{{$train->start_station}}</td>
                          <td>{{$train->end_station}}</td>
                          <td>{{$train->start_time}}</td>
                          <td> {{$train->end_time}}</td>
                          <td>{{$train->price}}</td>
                          <td>{{$train->created_at}}</td>
                        
                        @endforeach
                      </tbody>
                         
                    </tr>  
                 
                   
                  </div>
                </table>
                  </body>
                  </html>

         
            
        </div>
        
    
    </div>
    
</div>
  
<div>
@endsection()