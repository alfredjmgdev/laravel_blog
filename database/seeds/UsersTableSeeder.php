<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,29)->create();

        App\User::Create([
            'name' => 'Alfredo Mujica',
            'email' => 'alfred@prueba.com',
            'password' =>bcrypt('123'),
        ]);

    }
}
