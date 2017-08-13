 @extends('layouts.app')




 @section('content')
    <h3>Edit Post </h2>
    <div class="col-md-8  col-md-offset-2">
   
        {!!Form::open(['route'=>['posts.update',$post->id,'method'=>'POST']])!!}
            {{method_field('PATCH')}}
            <div class="form-group">
                {{Form::label('title','Title', ['class'=>'base-color'])}}
                {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('slug','Slug' , ['class'=>'base-color'])}}
                {{Form::text('slug',$post->slug,['class'=>'form-control', 'placeholder'=>'Enter slug'])}}
            </div>
            <div class="form-group">
                {{Form::label('body','Body' ,['class'=>'base-color'])}}
                {{Form::textarea('body',$post->body,['class'=>'form-control','min-width'=>'60%','height'=>'auto', 'placeholder'=>'Enter post'])}}
            </div>
            {{Form::submit('Update',['class'=>'btn btn-primary btn-base-color'])}}
        
        {!!Form::close()!!}  
    </div>
 @endsection