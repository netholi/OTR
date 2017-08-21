@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <h3>{{$post->title}}</h3>
        <hr>
        <p class="lead">{{$post->body}}</p>
    </div>


    <div class="col-md-4 ">
        <div class="well m-top-40">
            <dl class="dl-horizontal ">
                <dt class="pull-left">Created At:</dt>
                <dd>{{$post->created_at}}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>{{$post->updated_at}}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{$post->id}}/edit" class="btn btn-primary btn-block btn-base-color"> Edit </a>

                </div>
                <div class="col-sm-6">
                 <a href="#" class="btn btn-danger btn-block"> Delete </a>
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection

