<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recievelistDetail extends Model
{
    protected $guarded = [];
    protected $table = "recievelist_datails";

    public function recievelist(){
    	return $this->belongsTo(recievelist::class,'recievelist_id');
    }
    
    public function book(){
    	return $this->belongsTo(book::class,'book_id');
    }
}
