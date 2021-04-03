<?php

use App\Models\Lab;
use Illuminate\Database\Seeder;

class LabsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lab1=Lab::create([
            'en_name'=>'El Borg',
            'en_slogan'=>'El Borg Laboratory',
            'description' =>'As case loads grow in pathology labs around the world, the need for rapid, un-biased tools for image analysis increases. AI is a powerful tool ready to replace manual, inconsistent, and error-prone methods in clinical labs and to provide assistance to pathologists in their case review. ',
            'logo' =>'brand-lap1.png'
        ]);


        $lab2=Lab::create([
            'en_name'=>'El Mokhtabar',
            'en_slogan'=>'El Mokhtabar Laboratory',
            'description' =>'As case loads grow in pathology labs around the world, the need for rapid, un-biased tools for image analysis increases. AI is a powerful tool ready to replace manual, inconsistent, and error-prone methods in clinical labs and to provide assistance to pathologists in their case review. ',
            'logo' =>'brand-lap2.png'
        ]);


        $lab3=Lab::create([
            'en_name'=>'Elag',
            'en_slogan'=>'El Elag Laboratory',
            'description' =>'As case loads grow in pathology labs around the world, the need for rapid, un-biased tools for image analysis increases. AI is a powerful tool ready to replace manual, inconsistent, and error-prone methods in clinical labs and to provide assistance to pathologists in their case review. ',
            'logo' =>'elag.jpg'
        ]);
    
    }
}
