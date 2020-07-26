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
                <div class="card-header">{{ __('Search') }}</div>
                <div class="col-md-5">
                <div class="card-body">
                    <form class="form-control-range" action="show">
                        <label for="pickup">pickup:</label>
                       <select name="from" id="from" class="form-control">
                        @foreach($city ?? '' as $c)
                        <option>{{$c->city}}</option>
                        @endforeach            
            
                       </select>
                       <div class="container">
                                             <label for="to">destnation:</label>
                                             <select name="to" id="to" class="form-control">
                                                @foreach($city ?? '' as $c)
                                                <option>{{$c->city}}</option>
                                                @endforeach            
                                              
                        
                        
                                               </select>
    
                                            </div>           
                                         </div>
                            </div>             
                            <div class="container">           
                        <label for="date">date:</label>
                          <input type="datetime-local"  name="date" id="date" >
                         
                       
                        <button type="submit" class="btn btn-primary">search</button>
                      
                      </form>
                </div> </div>
        

             </div>         
               
            </div>
            
        </div>
        
    
    </div>
    
</div>
  
<div>
@endsection()