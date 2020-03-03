<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public $timestamps = false;
    //

    public function home_team() {
        return $this->belongsTo('App\Models\Team');
    }

    public function away_team() {
        return $this->belongsTo('App\Models\Team');
    }
}
