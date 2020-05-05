<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subreturnlist extends Model
{
    protected $guarded = [];

    public function subagent(){
    	return $this->belongsTo(subagent::class,'subagents_id');
    }
    public function subreturnlistDetail(){
        return $this->hasmany(subreturnlistDetail::class);
    }
}
