<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subagent extends Model
{
	protected $guarded = [];

    // public function scopeชื่อฟังก์ชั่น($query){
    // 	return $query->where('columnname',เงื่อนไข)ว
    // }
    public function subbookorder(){
        return $this->hasmany(subbookorder::class);
    }

    public function subreturnlist(){
        return $this->hasmany(subreturnlist::class);
    }

    public function recievelist(){
        return $this->hasmany(recievelist::class);
    }

}
