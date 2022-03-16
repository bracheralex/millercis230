<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //delete all characters 
      //why?

      //data has been manipulated so much that it makes sense to use fresh data

      //iterate Number of times to create that many characters
      //create a character with random data
       \App\Models\Character::query()->delete();

       $faker = \Faker\Factory::create();

       foreach (range(1,100) as $number){
           \App\Models\Character::create([
                'name' => $faker->name,
                'birthday' => $faker->dateTimeBetween('1970-01-01', '2019-12-31')->format('d/m/Y'),
                'occupation' => $faker->jobTitle(),
                'status' => $faker->text(),
                'img'=> $faker->imageUrl,
                // 'age' => $faker->numberBetween(1,100)
           ]);
       }
    }
}
