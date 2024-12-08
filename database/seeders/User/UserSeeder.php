<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raws = User::factory()
      ->count(10)
      ->sequence(function (Sequence $sequence) {
        $i = $sequence->index + 1;

        return [
          'name' => "Mahasiswa {$i}",
          'email' => "mahasiswa{$i}@gmail.com",
        ];
      })
      ->make();

    $raws->each(function ($_raw) {
      $mahasiswa = User::firstOrCreate([
        'id_user' => Str::uuid(),
        'name' => $_raw->name,
      ], [
        ...$_raw->toArray(),
        'password' => $_raw->password,
      ]);

      $mahasiswa->assignRole(User::ROLE_MAHASISWA);
    });
    }
}
