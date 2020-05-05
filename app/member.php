<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $guarded = [];

    public function recievelist(){
        return $this->hasmany(recievelist::class);
    }
}
