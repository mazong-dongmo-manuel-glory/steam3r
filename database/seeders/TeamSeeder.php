<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Exemple de données
        $teams = [
            ['game_id' => 1, 'nbU' => 5],
            ['game_id' => 2, 'nbU' => 4],
            ['game_id' => 3, 'nbU' => 6],
            ['game_id' => 4, 'nbU' => 7],
            ['game_id' => 5, 'nbU' => 3],
        ];

        foreach ($teams as $team) {
            DB::table('teams')->insert([
                'game_id' => $team['game_id'],
                'nbU' => $team['nbU'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
