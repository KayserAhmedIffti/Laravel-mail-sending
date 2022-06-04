
@extends('welcome2')
@section('content')


@if(Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p> {{--Add Data With Success Message --}}
@endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Driver</th>
            <th>Host</th>
            <th>Port</th>
            <th >Email/Username</th>
            <th>Encryption</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->Driver}}</td> {{--here Driver is from database and we are accesing it from con--}}
                <td>{{$post->Host}}</td>
                <td>{{$post->Port}}</td>
                <td>{{$post->Username}}</td>
               {{-- <td>{{$post->Password}}</td> this is password that's why I am hiding --}}
                <td>{{$post->Encryption}}</td>
                <td>
                <a  type="button" class="btn btn-warning"   href="{{route('post.edit',$post->id)}}" >Edit</a> {{--here post is route from resource where $post->id is passing into edit function--}}
                </td>
                
                
                <td>



                <form action="{{route('post.destroy',$post->id)}}" method="post">
                    @csrf
                    @method('delete') 

                    <button onclick= "return confirm('Are you sure to delete')" type="submit" class="btn btn-danger">Delete</button>
                    
                </form>
                    



                </td>
             
            
            </tr>
            @endforeach
        </tbody>
        










   
        
    </table>
    
    
    
    {{--links for pagination catch and go to Appserviceprovider for bootsstrap 8 laravel--}}
    {{$posts->links()}}  {{-- this show data is from view('show_data',compact('showData')); from controller showData function --}}


   
    @endsection





    


    </body>
</html>
