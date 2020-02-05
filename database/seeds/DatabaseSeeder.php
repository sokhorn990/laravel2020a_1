<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        for($i=0;$i<1000;$i++){
            DB::table('students')->insert([
                'firstName'=> $faker->firstName,
                'lastName'=>$faker->lastName,
                'age'=>$faker->numberBetween($min = 15, $max = 25)
                ]);
       }
    }
}
