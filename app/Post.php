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
     
        //   $pp=substr($this->body,0,rand(200,300)) ;
        //  $t1 = ' <span  class="base-color">' ;
        //  $t2= strlen($this->body)>300?'read more...':'' ;
        //  $t3=  ' </span>' ;
        
        //  $pp = $pp.$t1.$t2.$t3;

        //echo  $pp; 
        //dd($post);
        return $post;

       /*   $pp = (substr($this->body,0,rand(200,300)) .  strlen($this->body)>300?'read more...':'' );
        return $pp; */
    }
}

//' <span  class="base-color">'
//. ' </span>';