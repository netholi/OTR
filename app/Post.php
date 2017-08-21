<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Accessors for date field
    public function getCreatedatAttribute($value){
       // dd($value);
        return date ('M j, Y h:s a',strtotime($value));
    }

    public function getUpdatedatAttribute($value){
        return date ('M j, Y h:s a',strtotime($value));
    }

    //scope
    public function scopeLastThree($query){
        return $query->orderBy('created_at','desc')->take(3);
    }

      public function scopePostIndex($query){
        return $query->orderBy('created_at','desc');
    }

    public function PostBrief(){
      //  dd($this->body);

      $post['body']=substr($this->body,0,rand(200,300)) ;
      $post['more']=strlen($this->body)>300?'read more...':'' ;
     
      return $post;
       
    }
}

