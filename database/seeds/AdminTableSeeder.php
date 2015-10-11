<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder{

    public function run(){
        $id= \DB::table('users')->insertGetId(array(
            'first_name' => 'Cesar',
            'last_name' => 'Martinez',
            'user_name' => 'CesarMartinez',
            'email'=> 'c@martinez.com',
            'password' => \Hash::make('cesar'),
            'rol' => 'admin',

        ));

        \DB::table('user_profiles')->insert(array(
            'user_id'   => $id,
            'bio'       => 'mi nombre es cesar y son de El Salvador tengo 22 años',
            'birthday'  => '1993/07/15',
            'website'   => 'http://www.martinez.es',
            'twitter'   => 'http://www.twiter.com/CesarMartiinez'
        ));

        $id= \DB::table('users')->insertGetId(array(
            'first_name' => 'Samuel',
            'last_name' => 'Zepeda',
            'user_name' => 'SamuelZepeda',
            'email'=> 's@zepeda.com',
            'password' => \Hash::make('samuel'),
            'rol' => 'admin',

        ));

        \DB::table('user_profiles')->insert(array(
            'user_id'   => $id,
            'bio'       => 'mi nombre es Samuel y Estudio en la universidad nacional de El Salvador tengo 22 años',
            'birthday'  => '1993/01/03',
            'website'   => 'http://www.samuel.es',
            'twitter'   => 'http://www.twiter.com/SamZepeda'
        ));

        $id= \DB::table('users')->insertGetId(array(
            'first_name' => 'Doris',
            'last_name' => 'Hernandez',
            'user_name' => 'DorisHernandez',
            'email'=> 'd@hernandez.com',
            'password' => \Hash::make('doris'),
            'rol' => 'admin',

        ));

        \DB::table('user_profiles')->insert(array(
            'user_id'   => $id,
            'bio'       => 'mi nombre es Gabriela y soy de El Salvador estudio en la Universidad de el salvador tengo 22 a�os',
            'birthday'  => '1993/01/13',
            'website'   => 'http://www.hernandez.es',
            'twitter'   => 'http://www.twiter.com/Dhernandez'
        ));

        $id= \DB::table('users')->insertGetId(array(
            'first_name' => 'Eduardo',
            'last_name' => 'Rafael',
            'user_name' => 'EduardoRafael',
            'email'=> 'e@rafael.com',
            'password' => \Hash::make('eduardo'),
            'rol' => 'admin',

        ));

        \DB::table('user_profiles')->insert(array(
            'user_id'   => $id,
            'bio'       => 'mi nombre es Eduardo y soy de El Salvador tengo 22 años',
            'birthday'  => '1993/11/03',
            'website'   => 'http://www.rafael.es',
            'twitter'   => 'http://www.twiter.com/EduardoRafael'
        ));

        $id= \DB::table('users')->insertGetId(array(
            'first_name' => 'Edgardo',
            'last_name' => 'Ramirez',
            'user_name' => 'EdgardoRamirez',
            'email'=> 'e@ramiez.com',
            'password' => \Hash::make('edgardo'),
            'rol' => 'admin',

        ));

        \DB::table('user_profiles')->insert(array(
            'user_id'   => $id,
            'bio'       => 'mi nombre es Edgardo y soy de El Salvador tengo 22 años',
            'birthday'  => '1993/03/02',
            'website'   => 'http://www.Edgardo.es',
            'twitter'   => 'http://www.twiter.com/EdgardoRafael'
        ));

    }
}