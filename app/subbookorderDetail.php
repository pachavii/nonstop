<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subbookorderDetail extends Model
{
    protected $guarded = [];
    protected $table = "subbookorder_details";


    public function subbookorder(){
    	return $this->belongsTo(subbookorder::class,'subbookorder_id');
    }
    public function book(){
    	return $this->belongsTo(book::class,'book_id');
    }
}
