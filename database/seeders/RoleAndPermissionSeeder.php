<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissionNames = [
            'login-admin',
            'login-mahasiswa',
            'setting-update',
            'emails-read',
            'emails-update',
            'website-update',
        ];

        $roleNames = [
            'admin',
            'mahasiswa',
        ];

        foreach ($permissionNames as $name) {
            Permission::firstOrCreate([
                'name' => $name
            ]);
        }

        foreach ($roleNames as $name) {
            $role = Role::firstOrCreate([
                'name' => $name,
            ]);

            if ($role->name === 'admin') {
                $role->givePermissionTo('login-admin');
            }
        }
    }
}