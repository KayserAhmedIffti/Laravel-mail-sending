@extends('welcome2')
@section('content')
<form class="container" action="{{route('post.update',['post'=>$data->id])}}" method="POST">{{--here is the post base route and update is the controller method and we are passing id by $data id from edit method  --}}
    @csrf
    @method('put') {{-- for update--}}
    
    <h1 class="btn btn-primary btn-lg btn-block">Edit Page </h1>
    <div class="row">
        <div class="col-sm-6">
            <label for="Driver">Driver</label>
            <input class="form-control"  value="{{ $data->Driver}}" type="text" id="Driver" name="Driver">
            @error('Driver') 
            <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div class="col-sm-6">
            <label for="Host">Host</label>
            <input class="form-control" value="{{ $data->Host}}" type="text" id="Host" name="Host">
            @error('Host') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <label for="Port">Port</label>
            <input class="form-control" value="{{ $data->Port}}" type="number" id="Port" name="Port">
            @error('Port') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="Username">Username</label>    
            <input class="form-control" value="{{ $data->Username}}" type="text" id="Username" name="Username">
            @error('Username') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <label for="Password">Password</label>
            <input class="form-control" value="{{ $data->Password}}" type="text" id="Password" name="Password">
            @error('Password') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <label for="Encryption">Encryption</label>
            <input class="form-control" value="{{ $data->Encryption}}" type="text" id="Encryption" name="Encryption">
            @error('Encryption') 
            <span class="text-danger">{{$message}}</span>
            @enderror
        
        </div>
    </div>
   <br>
    <div class="row">
        <div class="col-sm-6">
            <button type="Submit" class="btn btn-primary" >Update</button>
        </div>
    </div>
    <br>
    <a class="btn btn-outline-danger" href="{{route('data.show.index')}}"role="button">data show</a>

  </form> 
@endsection