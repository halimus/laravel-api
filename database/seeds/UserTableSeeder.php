<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        
        User::truncate();

        for ($i = 0; $i < 5; $i++) {
            $name = strtolower(str_random(5));
            User::create([
                'name' => $name,
                'email' => $name . '@gmail.com',
                'password' => bcrypt('123456')
            ]);
        }
        
    }

}
