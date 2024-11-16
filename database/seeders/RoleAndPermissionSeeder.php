<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissionNames = [
            'login-admin',
            'login-mahasiswa',
            'aspek-create',
            'aspek-read',
            'aspek-update',
            'aspek-delete',
            'kriteria-create',
            'kriteria-read',
            'kriteria-update',
            'kriteria-delete',
            'alternatif-create',
            'alternatif-read',
            'alternatif-update',
            'alternatif-delete',
            'profile-create',
            'profile-read',
            'profile-update',
            'profile-delete',
            'mahasiswa-create',
            'mahasiswa-read',
            'mahasiswa-update',
            'mahasiswa-delete',
            'pengajuan-create',
            'pengajuan-read',
            'pengajuan-update',
            'pengajuan-delete',
            'pemilihan-dosen-create',
            'pemilihan-dosen-read',
            'pemilihan-dosen-update',
            'pemilihan-dosen-delete',
            'setting-update',
            'website-update',
        ];

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roleNames = [
            'admin',
            'mahasiswa',
        ];

        foreach ($roleNames as $name) {
            $role = Role::firstOrCreate(
                ['name' => $name],
                ['uuid' => Str::uuid()]
            );

            if ($role->name === 'admin') {
                $permissions = Permission::where('name', 'login-admin')->get();
                foreach ($permissions as $permission) {
                    $role->permissions()->attach($permission->uuid);
                }
            }
        }

        foreach ($permissionNames as $name) {
            Permission::firstOrCreate(
                ['name' => $name],
                ['uuid' => Str::uuid()]
            );
        }

    }
}