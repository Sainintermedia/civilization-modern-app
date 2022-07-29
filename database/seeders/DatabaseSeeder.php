<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DisabilitiesTableSeeder::class,
            BloodTableSeeder::class,
            ReligionTableSeeder::class,
            ProsporeusTableSeeder::class,
            RelationTableSeeder::class,
            MarryTableSeeder::class,
            WorkTableSeeder::class,
            EducationTableSeeder::class,
            FamilyEducationTableSeeder::class,

        ]);
    }
}
