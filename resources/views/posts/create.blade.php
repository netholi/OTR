@extends('layouts.app')

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <h3>Create Post</h3>
        <hr>
        <div class="m-top-5">
            {!!Form::open(['route'=>'posts.store'])!!}
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title (max 254 char)'])}}
            </div>
            <div class="form-group">
                {{Form::label('title','Slug')}}
                {{Form::text('slug','',['class'=>'form-control', 'placeholder'=>'Slug (max 254 char / no space and special characters)'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['class'=>'form-control' ])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary  btn-base-color'])}}
           

            {!!Form::close()!!}
        </div>
    </div>
@endsection