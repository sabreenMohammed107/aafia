<?php

use App\Models\Scan;
use Illuminate\Database\Seeder;

class ScansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lab1=Scan::create([
            'en_name'=>'CPK-Scan ',
            'en_desc'=>'CPK - Total',
            'original_cost' =>200,
            'discount_pct' =>10
        ]);

        $lab2=Scan::create([
            'en_name'=>'Glucose -Scan',
            'en_desc'=>' Total-Fasting Blood Glucose',
            'original_cost' =>400,
            'discount_pct' =>10
        ]);

        $lab3=Scan::create([
            'en_name'=>'Amylase -Scan ',
            'en_desc'=>'Amylase - Total',
            'original_cost' =>300,
            'discount_pct' =>15
        ]);
  //
    }
}
