<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker ;
use illuminate\Support\Str;
use App\Models\train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void

    {
        for($i=0; $i<21; $i++){
        $new_train= new train();

        $new_train->company=$faker->words(2,true);
        $new_train->departure_station=$faker->word();
        $new_train->arrival_station=$faker->word();
        $new_train->departure_time=$faker->time();
        $new_train->arrival_time=$faker->time();
        $new_train->code=$faker->numberBetween(1,1000000000000);
        $new_train->carriage=$faker->numberBetween(1,10);
        $new_train->on_time=$faker->boolean();
        $new_train->deleted;
        $new_train->save();
    }

    }
}
