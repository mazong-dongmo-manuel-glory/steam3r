<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usagers')->insert([
                [
                    'category'=>'teacher',
            'name' => 'Mazong Dongmo',
            'surname'=> 'Manuel Glory',
            'email' => 'mazong@gmail.com',
            'password' => bcrypt('mazongdongmo2003'),
            'departement' => 'informatique',
                    'created_at' => now(),
                    'updated_at' => now()
                ],

                [
                    'category'=>'teacher',

                    'name' => 'Fouda Nguefack',
                    'surname'=> 'Sandra',
                    'email' => 'fouda@gmail.com',
                    'password' => bcrypt('foudanguefack2027'),
                    'departement' => 'informatique',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
            [
                'category'=>'student',

                'name' => 'Noubissie Claudelle',
                'surname'=> 'Christelle',
                'email' => 'noubissie@gmail.com',
                'password' => bcrypt('noubissieclaudelle2025'),
                'departement' => 'droit',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category'=>'student',
                'name' => 'Essomba Biya',
                'surname'=> 'Alexandre',
                'email' => 'essomba@gmail.com',
                'password' => bcrypt('essombabiya2024'),
                'departement' => 'mathématiques',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category'=>'student',
                'name' => 'Manuel',
                'surname'=> 'Alexandre',
                'email' => 'manuelalexandre@gmail.com',
                'password' => bcrypt('manuelalexandre2025'),
                'departement' => 'mathématiques',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ]);

    }
}
