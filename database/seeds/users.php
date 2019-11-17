<?php

use Illuminate\Database\Seeder;
use App\User;
class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Guilherme Fernando',
            'email' => 'guilhermelvr82@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
