<?php

use Illuminate\Database\Seeder;
use App\Models\Match;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = factory(Match::class, 200)->create();
    }
}
