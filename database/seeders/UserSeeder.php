<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::insert([
            [
                'name' => 'RishiPrasad Admin',
                'email' => 'rpgp28@gmail.com',
                'mobile' => '9423290079',
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
