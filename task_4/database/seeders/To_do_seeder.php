<?php

namespace Database\Seeders;

use App\Models\To_do;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class To_do_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        To_do::create([
            'name' => 'Nahid Hasan',
            'number' => '01581-008881',
            'address' => 'Bogura, Bangladesh',
            'status' => '1',
            'image' => 'Please Upload Image'
        ]);

        To_do::create([
            'name' => 'Hasan',
            'number' => '01581-008881',
            'address' => 'Dhaka, Bangladesh',
            'status' => '0',
            'image' => 'Please Upload Image'
        ]);
    }
}
