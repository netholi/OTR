@extends('layouts.app');

@section('content')
<h2>Posts </h2>
 <hr>
    <div class="col-md-8">
                @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-3">
                        <img src="" alt="Post image">
                    </div>
                    <div class="col-md-9">
                   <h3><a href="/posts/{{$post->id}}/edit">{{$post->title}} </a></h3>
                    
                    <small>Posted on : {{$post->created_at}} </small>
                      
                         <p >{{$post->PostBrief()['body']}} </p>
                          {{--  <span  class="base-color">{{$post->PostBrief()['more']}}  </span></p>   --}}

                    </div>
                   
                </div>
                @endforeach
                <hr>
                 
     </div>

@endsection