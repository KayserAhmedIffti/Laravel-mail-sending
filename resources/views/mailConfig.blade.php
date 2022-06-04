@extends('welcome2')
@section('content')
<form action="{{url('/mail-config-store')}}" method="POST">





    @csrf
    @method("POST")
    <div class="row">
        <div class="col-sm-6">
            <label for="Driver">Driver</label>
            <input class="form-control" value="{{old('Driver')}}" type="text" id="Driver" name="Driver">
            @error('Driver') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="Host">Host</label>
            <input class="form-control" value="{{old('Driver')}}" type="text" id="Host" name="Host">
            @error('Host') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <label for="Port">Port</label>
            <input class="form-control" value="{{old('Driver')}}" type="number" id="Port" name="Port">
            @error('Port') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="Username">Username</label>    
            <input class="form-control" value="{{old('Driver')}}" type="text" id="Username" name="Username">
            @error('Username') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <label for="Password">Password</label>
            <input class="form-control" value="{{old('Driver')}}" type="text" id="Password" name="Password">
            @error('Password') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="Encryption">Encryption</label>
            <input class="form-control" value="{{old('Driver')}}" type="text" id="Encryption" name="Encryption">
            @error('Encryption') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
   <br>
    <div class="row">
        <div class="col-sm-6">
            <input class="btn btn-success" type="submit" value="Save">
        </div>
    </div>
    <br>
    <a class="btn btn-outline-danger" href="{{route('data.show.index')}}"role="button">data show</a>
<br><br>


  </form> 


 {{--Add Data With Success Message --}}
 @if(Session::has('msg'))
 <p class="alert alert-success">{{Session::get('msg')}}</p> {{--Add Data With Success Message --}}
 @endif

@endsection