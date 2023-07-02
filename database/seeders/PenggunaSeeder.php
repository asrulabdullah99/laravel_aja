<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => Str::random(100),
        //     'email' => Str::random(100) . '@gmail.com',
        //     'password' => Hash::make('password'),
        //     'role' => 'admin',
        // ]);
        User::factory()
            ->count(5000)
            ->create();
    }
}
