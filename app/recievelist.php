<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recievelist extends Model
{
    protected $guarded = [];
    protected $table = "recievelists";

    public function subagent(){
    	return $this->belongsTo(subagent::class,'subagent_id');
    }

    public function member(){
    	return $this->belongsTo(member::class,'member_id');
    }
    
    public function recievelistDetail(){
        return $this->hasmany(recievelistDetail::class);
    }
}
