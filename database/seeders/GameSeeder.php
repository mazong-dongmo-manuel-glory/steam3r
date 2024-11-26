<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $games = [
            [
                'name' => 'The Legend of Zelda: Breath of the Wild',
                'category' => 'Aventure',
                'description' => 'Un jeu d\'aventure en monde ouvert où le joueur explore Hyrule pour vaincre Ganon.',
                'link' => 'legend_of_zelda.jpg'
            ],
            [
                'name' => 'Super Mario Odyssey',
                'category' => 'Plateforme',
                'description' => 'Une aventure 3D où Mario voyage à travers divers mondes pour sauver la princesse Peach.',
                'link' =>  'super_mario_odyssey.jpg'
            ],
            [
                'name' => 'Minecraft',
                'category' => 'Sandbox',
                'description' => 'Un jeu de construction et de survie où le joueur peut explorer et créer librement.',
                'link' => 'minecraft.jpg'
            ],
            [
                'name' => 'Fortnite',
                'category' => 'Battle Royale',
                'description' => 'Un jeu multijoueur compétitif où 100 joueurs se battent pour être le dernier en vie.',
                'link' => 'fortnite.jpg'
            ],
            [
                'name' => 'Call of Duty: Modern Warfare II',
                'category' => 'Shooter',
                'description' => 'Un jeu de tir militaire immersif avec une campagne et un mode multijoueur.',
                'link' => 'call_of_duty.jpg'
            ],
            [
                'name' => 'Red Dead Redemption 2',
                'category' => 'Aventure',
                'description' => 'Une épopée en monde ouvert dans l\'Ouest américain, avec une histoire riche et réaliste.',
                'link' => 'red_dead_redemption_II.jpg'
            ],
            [
                'name' => 'Grand Theft Auto V',
                'category' => 'Action',
                'description' => 'Un jeu d\'action en monde ouvert avec des missions et une liberté totale pour explorer.',
                'link' => 'grand_theft_auto_v.png'
            ],
            [
                'name' => 'Elden Ring',
                'category' => 'RPG',
                'description' => 'Un RPG sombre et fantastique où le joueur explore les Lands Between.',
                'link' => 'elden_ring.jpg'
            ],
            [
                'name' => 'Cyberpunk 2077',
                'category' => 'RPG',
                'description' => 'Un RPG futuriste en monde ouvert se déroulant dans Night City.',
                'link' => 'cyberpunk_2077_box_art.jpg'
            ],
            [
                'name' => 'The Witcher 3: Wild Hunt',
                'category' => 'RPG',
                'description' => 'Un RPG narratif où le joueur incarne Geralt à la recherche de Ciri.',
                'link' => 'Witcher_3_cover_art.jpg'
            ],
            [
                'name' => 'Apex Legends',
                'category' => 'Battle Royale',
                'description' => 'Un jeu compétitif en équipes où les joueurs choisissent des héros avec des capacités uniques.',
                'link' => 'Apex_legends_cover.jpg'
            ],
            [
                'name' => 'Among Us',
                'category' => 'Party Game',
                'description' => 'Un jeu de déduction sociale où les joueurs identifient les imposteurs dans l\'équipage.',
                'link' => 'Among_Us_cover_art.jpg'
            ],
            [
                'name' => 'Overwatch 2',
                'category' => 'Shooter',
                'description' => 'Un jeu de tir en équipe avec des héros uniques et des objectifs stratégiques.',
                'link' => 'Overwatch_2_Steam_artwork.jpg'
            ],
            [
                'name' => 'League of Legends',
                'category' => 'MOBA',
                'description' => 'Un jeu compétitif en arène où deux équipes s\'affrontent pour détruire le Nexus ennemi.',
                'link' => 'league_of_legend.jpg'
            ],
            [
                'name' => 'Valorant',
                'category' => 'Shooter',
                'description' => 'Un FPS tactique où deux équipes s\'affrontent avec des agents ayant des capacités uniques.',
                'link' => 'valorant.jpg'
            ],
            [
                'name' => 'Hogwarts Legacy',
                'category' => 'RPG',
                'description' => 'Un RPG magique se déroulant dans l\'univers de Harry Potter.',
                'link' => 'Hogwarts_Legacy_key_art.jpg'
            ],
            [
                'name' => 'Genshin Impact',
                'category' => 'RPG',
                'description' => 'Un RPG d\'action en monde ouvert avec des éléments gacha.',
                'link'=> 'genshintall.jpg'
            ],
            [
                'name' => 'Pokemon Scarlet and Violet',
                'category' => 'RPG',
                'description' => 'Un jeu de rôle où le joueur capture et entraîne des Pokémon dans une nouvelle région.',
                'link' => 'pokemon.jpg'
            ],
            [
                'name' => 'FIFA 24',
                'category' => 'Sport',
                'description' => 'Une simulation réaliste de football avec des équipes et joueurs authentiques.',
                'link' => 'fifa24.jpg'
            ],
            [
                'name' => 'Starfield',
                'category' => 'RPG',
                'description' => 'Un RPG futuriste axé sur l\'exploration spatiale et la colonisation des planètes.',
                'link' => 'starfield.jpg'
            ],
        ];


        foreach ($games as $game) {
            $link = str_replace(' ', '_', strtolower($game['name']));

            DB::table('games')->insert([
                'name' => $game['name'],
                'count' => rand(1000, 200000),
                'link' => $game['link'],
                'version' => '1.' . rand(0, 9) . '.' . rand(0, 9),
                'category' => $game['category'],
                'description' => $game['description'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }




}
