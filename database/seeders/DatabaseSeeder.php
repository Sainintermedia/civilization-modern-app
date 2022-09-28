<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\RoleSeed;
use Database\Seeders\UserSeed;
use Illuminate\Database\Seeder;
use Database\Seeders\AgeTableSeeder;
use Database\Seeders\PermissionSeed;
use Database\Seeders\SexTableSeeder;
use Database\Seeders\WorkTableSeeder;
use Database\Seeders\BloodTableSeeder;
use Database\Seeders\MarryTableSeeder;
use Database\Seeders\StatusTableSeeder;
use Database\Seeders\CitizenTableSeeder;
use Database\Seeders\RelationTableSeeder;
use Database\Seeders\ReligionTableSeeder;
use Database\Seeders\EducationTableSeeder;
use Database\Seeders\KtpStatusTableSeeder;
use Database\Seeders\BaseStatusTableSeeder;
use Database\Seeders\ProsporeusTableSeeder;
use Database\Seeders\ChronicPainTableSeeder;
use Database\Seeders\DisabilitiesTableSeeder;
use Database\Seeders\FamilyEducationTableSeeder;

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
            PermissionSeed::class,
            RoleSeed::class,
            UserSeed::class,
            DisabilitiesTableSeeder::class,
            BloodTableSeeder::class,
            ReligionTableSeeder::class,
            ProsporeusTableSeeder::class,
            RelationTableSeeder::class,
            MarryTableSeeder::class,
            WorkTableSeeder::class,
            EducationTableSeeder::class,
            FamilyEducationTableSeeder::class,
            SexTableSeeder::class,
            AgeTableSeeder::class,
            StatusTableSeeder::class,
            CitizenTableSeeder::class,
            ChronicPainTableSeeder::class,
            BaseStatusTableSeeder::class,
            KtpStatusTableSeeder::class,


        ]);
    }
}