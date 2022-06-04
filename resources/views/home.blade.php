@extends('welcome2')
{{-- This thing has been removed   @extends('layouts.app')--}}

 





@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <form action="/send-email" method="POST" enctype="multipart/form-data">
                @csrf
                <a href="{{route('mail-configurations')}}" class="btn btn-primary btn-lg btn-block">Mail Configuration</a> 
                <br><br> 
                <label for="Email">From Email</label>

                <select  class="form-control" name="FromEmail" id="FromEmail">
                    @foreach ($mailConfig as $config)
                    <option value="{{$config->Username}}" >{{$config->Username}}</option>
                    @endforeach
                  </select>
                <label for="Email">To Email</label>
                <input class="form-control" type="text" id="Email" name="email"><br><br>   {{-- we are catching value by name--}}
                
                
                <label for="message" ><h6>Mail body</h6></label>
                <textarea class="form-control" name="message" rows="5" cols="5"></textarea><br><br>
                
                <input class="form-control" type="file" name="image">

                <input style="margin-top: 2%" class="btn btn-primary" type="submit" value="Submit">


              </form> 
          


             

        </div>
        
    </div>
    
</div>

@endsection
