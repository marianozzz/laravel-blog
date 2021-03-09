<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
                        'name' => 'Mariano Z',
                        'email' =>'mariano.zanier@gmail.com',
                        'password' => bcrypt('123456')
                     ])->assignRole('Admin');
        User::factory(99)->create();
    }
}
