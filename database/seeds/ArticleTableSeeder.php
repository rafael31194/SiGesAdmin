<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder{

    public function run(){

        $faker = Faker::Create();

        for($i = 0 ; $i<=2 ; $i++){

                 \DB::table('publication')->insert(array(
                    'title'                    => $faker->realText($maxNbChars = 10, $indexSize = 2),
                     'body'                  => $faker->paragraph(rand(2,5)),
                     'published_at'      => $faker->dateTimeBetween('-2 years','-0 years')->format('Y-m-d'),
                ));
            }



        }
    }
