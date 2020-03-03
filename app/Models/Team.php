<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public $timestamps = false;
    //

    public function home_matches() {
        return $this->hasMany('App\Models\Match', 'home_team_id');
    }

    public function away_matches() {
        return $this->hasMany('App\Models\Match', 'away_team_id');
    }
}
