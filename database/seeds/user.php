<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->truncate();

        DB::table('users')// 1
            ->insert([
                // El super administrador
                'name'=>'Administrador',
                'email'=>'admin@gm.com',
                'password' => bcrypt('123')
            ]
        );
    }
}
