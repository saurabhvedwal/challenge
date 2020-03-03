<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    $home_team_id = $faker->numberBetween('1', '100');
    $away_team_id = $faker->numberBetween('1', '100');
    if($home_team_id === $away_team_id) {
        if($away_team_id == 1) {
            $away_team_id = 2;
        }
        if($away_team_id == 100) {
            $away_team_id = 99;
        }
        $away_team_id = $away_team_id + 1;
    }
    return [
        'home_team_id' => $home_team_id,
        'away_team_id' => $away_team_id,
        'venue_id' => $faker->numberBetween('1', '20'),
        'date' => $faker->unique()->dateTimeBetween('tomorrow', '+6 months')
    ];
});
