<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    protected $guarded = [];

    public function book(){
        return $this->hasmany(book::class);
    }
}

