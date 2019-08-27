<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comment';

    // Muốn biết comment này thuộc tin tức nào
    public function tintuc(){
    	// Comment thuộc 1 tin tức nào đó.
    	return $this->belongTo( 'App\TinTuc', 'idTinTuc', 'id' );
    }

    //Trong comment thuộc user nào
    public function user() {
    	// Một comment thuộc một user
    	// và 1 user có thể nhiều cái comment khác nhau.
    	return $this->belongsTo( 'App\User', 'idUser', 'id' );
    }

}
