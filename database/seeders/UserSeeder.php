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
            'name' => 'Gigih',
            'status_id' => 1,
            'role_id' => 1,
            'email' => 'gigih.satriono@gmail.com',
            'password' => bcrypt('business')
        ]);
    }
}
