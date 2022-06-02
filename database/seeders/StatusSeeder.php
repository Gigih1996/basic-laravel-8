<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'Aktif',
            'Tidak Aktif'
        ];

        foreach ($status as $key => $value)
        {
            Status::create(['name' => $value]);
        }
    }
}
