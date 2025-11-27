<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tuser')->insert([
        'username' => 'admin',
        'password' => md5('admin123'),
        'email' => 'admin@gmail.com'
    ]);
    }
}
