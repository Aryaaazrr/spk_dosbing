<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tbl_users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $admin = User::firstOrCreate([
            'id_user' => Str::uuid(),
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('p4ssword'),
            'email_verified_at' => now(),
        ]);

        $admin->assignRole(
            User::ROLE_ADMIN,
        );
    }
}