@extends('layouts.app'); @section('content')
<div class="row">
    <div class="col-md-8">
        <h3>All Posts</h3>
    </div>
    <div class="col-md-4">
        <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>
    </div>
</div>
<hr>


<div class="col-md-12">
   
    <hr>
</div>

@endsection

{{--  
 @foreach($posts as $post)
    <div class="row">
        <div class="col-md-3">
            <img src="" alt="Post image">
        </div>
        <div class="col-md-9">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}} </a></h3>
            <small>Posted on : {{$post->created_at}} </small>
            <p>{{$post->PostBrief()['body']}} <span class="base-color"><a href="/posts/{{$post->id}}"> {{$post->PostBrief()['more']}} </a> </span>                </p>
        </div>
    </div>
    @endforeach  --}}