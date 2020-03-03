<?php

use Illuminate\Database\Seeder;
use App\Models\Team;
use App\Models\Match;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(Team::class, 100)->create();
    }
}
