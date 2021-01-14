<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::create([
            'name'=>'Super Admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('12345678'),
        ]);
        $user->attachRole('super_admin');
    }
}
