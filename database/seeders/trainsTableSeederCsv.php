<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker ;
use illuminate\Support\Str;
use App\Models\train;

class trainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void

    {
        $data_str= fopen(__DIR__.'/trains.csv','r');
        $i=0;
        while(($row= fgetcsv($data_str))!= false){
             if($i>0){
                $new_train= new train();

                $new_train->company=$row[0];
                $new_train->departure_station=$row[1];
                $new_train->arrival_station=$row[2];
                $new_train->departure_time=$row[3];
                $new_train->arrival_time=$row[4];
                $new_train->code=$row[5];
                $new_train->carriage=$row[6];
                $new_train->on_time=$row[7];
                $new_train->deleted=$row[8];
                $new_train->save();

             }
            $i++;
        }


    }
}
