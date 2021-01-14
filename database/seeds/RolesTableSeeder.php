<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $superAdmin=Role::create([
        'name'=>'super_admin',
        'display_name'=>'super admin',
        'description' =>'create users -laps-'
    ]);


    $user=Role::create([
        'name'=>'user',
        'display_name'=>'Patient',
        'description' =>'Patient- to add cart'
    ]);

    $mainAdmin=Role::create([
        'name'=>'main_admin',
        'display_name'=>'main admin',
        'description' =>'on one lab'
    ]);
    }
}
