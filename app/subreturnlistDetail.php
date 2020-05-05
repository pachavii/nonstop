<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subreturnlistDetail extends Model
{
    protected $guarded = [];

    public function subreturnlist(){
    	return $this->belongsTo(subreturnlist::class,'subreturnlists_id');
    }
}
