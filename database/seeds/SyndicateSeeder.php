<?php

use App\Models\Syndicate;
use Illuminate\Database\Seeder;

class SyndicateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $one=Syndicate::create([
            'text'=>'Engineering',
           
        ]);
        $two=Syndicate::create([
            'text'=>'Doctors',
           
        ]);
        $one=Syndicate::create([
            'text'=>'Teachers Guild',
           
        ]);
    }
}
