<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subbookorder extends Model
{
    protected $guarded = [];
    protected $table = "subbookorders";

    public function subagent(){
    	return $this->belongsTo(subagent::class,'subagent_id');
    }

    public function subbookorderDetail(){
        return $this->hasmany(subbookorderDetail::class);
    }
}
