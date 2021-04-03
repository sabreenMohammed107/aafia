<?php

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
        
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(SyndicateSeeder::class);
         $this->call(LabsSeeder::class);
         $this->call(AnalysisSeeder::class);
         $this->call(ScansSeeder::class);

    }
}
