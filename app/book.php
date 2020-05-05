<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $guarded = [];
    protected $table = "books";

    public function booktype(){
    	return $this->belongsTo(booktype::class,'booktype_id');
    }

    public function publisher(){
    	return $this->belongsTo(publisher::class,'publisher_id');
    }

    public function recievelistDetail(){
        return $this->hasmany(recievelistDetail::class);
    }

    public function subbookorderDetail(){
        return $this->hasmany(subbookorderDetail::class);
    }

}
