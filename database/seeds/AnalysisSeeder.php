<?php

use App\Models\Analysis;
use Illuminate\Database\Seeder;

class AnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lab1=Analysis::create([
            'en_name'=>'CPK ',
            'en_desc'=>'CPK - Total',
            'original_cost' =>200,
            'discount_pct' =>10
        ]);

        $lab2=Analysis::create([
            'en_name'=>'Fasting Blood Glucose ',
            'en_desc'=>' Total-Fasting Blood Glucose',
            'original_cost' =>400,
            'discount_pct' =>10
        ]);

        $lab3=Analysis::create([
            'en_name'=>'Amylase ',
            'en_desc'=>'Amylase - Total',
            'original_cost' =>300,
            'discount_pct' =>15
        ]);
  //
    }
}
