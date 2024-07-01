<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = [
            'Immobilier',
            'Véhicules',
            'Locations de vacances',
            'Emploi',
            'Mode',
            'Maison & Jardin',
            'Famille',
            'Électronique',
            'Loisirs',
            'Autres',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
