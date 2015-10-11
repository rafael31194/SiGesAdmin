<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

    public function run(){

        $faker = Faker::Create();

        for($i = 0 ; $i<=29 ; $i++){
            $firstName =$faker->firstName;
            $lastName = $faker->lastName;
            $randon = rand(1,2);
            if($randon==1){
                $id = \DB::table('users')->insertGetId(array(
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'user_name' => "$firstName$lastName",
                    'email' => $faker->unique()->email,
                    'password' => \Hash::make('1234'),
                    'rol' => 'secretaria'
                ));
            }else{
                $id = \DB::table('users')->insertGetId(array(
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'user_name' => "$firstName$lastName",
                    'email' => $faker->unique()->email,
                    'password' => \Hash::make('1234'),
                    'rol' => 'docente'
                ));
            }


            \DB::table('user_profiles')->insert(array(
                'user_id'   => $id,
                'bio'       => $faker->paragraph(rand(2,5)),
                'birthday'  => $faker->dateTimeBetween('-45 years','-15 years')->format('Y-m-d'),
                'website'   => 'http://www.'.$faker->domainName,
                'twitter'   => 'http://www.twiter.com/'.$faker->userName
            ));
        }
    }
}