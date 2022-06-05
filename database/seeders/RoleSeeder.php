<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            'Admin',
            'Staff',
            'Accounting'
        ];

        foreach ($role as $key => $value)
        {
            Role::create(['name' => $value]);
        }
    }
}
