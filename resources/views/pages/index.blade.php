@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h1>Ought to Think Rationally</h1>
            {{--  <p>The intention of this blog is to impart a rationalistic view on religions especially Islam. </p>  --}}
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur repellendus similique amet.</p>
        </div>
        
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-3">
                        <img src="" alt="Post image">
                    </div>
                    <div class="col-md-9">
                   
                    <small>Posted on : {{$post->created_at}} </small>
                      <h3>{{$post->title}}</h3>
                         <p >{{$post->PostBrief()['body']}} <span  class="base-color">{{$post->PostBrief()['more']}}  </span></p> 

                    </div>
                   
                </div>
                @endforeach
                <hr>
                 
            </div>

            <div class="col-md-3 col-md-offset-1  text-center">
                <h4  class="base-color" >Recent Posts </h4>
                <ul class="list-group " >
                    @foreach($posts as $post)
                     <li class='list-group-item'>  {{ $post->title}} </li>
                    @endforeach
                </ul>
           

           
                <h4   class="base-color">Archive </h4>
                <ul class="list-group " >
                    <li class="list-group-item">   January </li>
                    <li class="list-group-item">   Febreuary </li>
                    <li class="list-group-item">   March </li>
                </ul>
            </div>
        </div> {{--  main row   --}}

       
    </div>
@endsection
       

