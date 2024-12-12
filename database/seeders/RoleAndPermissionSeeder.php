<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
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
        Schema::disableForeignKeyConstraints();

        Role::truncate();
        Permission::truncate();
        DB::table('tbl_model_has_roles')->truncate();
        DB::table('tbl_model_has_permissions')->truncate();
        DB::table('tbl_role_has_permissions')->truncate();

        $roles = ['admin', 'mahasiswa'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }

        $adminAccessPermission = Permission::create(['name' => 'admin panel access']);

        $adminRole = Role::where(['name' => 'admin'])->first();
        $adminAccessPermission->assignRole($adminRole);

        $mahasiswaRole = Role::where(['name' => 'mahasiswa'])->first();
        $mahasiswaPermission = [
            'register-mahasiswa',
            'login-mahasiswa',
            'pengajuan-create',
            'pengajuan-read',
            'pengajuan-update',
            'pengajuan-delete',
            'pemilihan-dosen-create',
            'pemilihan-dosen-read',
            'pemilihan-dosen-update',
            'pemilihan-dosen-delete',
        ];

        foreach ($mahasiswaPermission as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);
            $mahasiswaRole->givePermissionTo($permission);
        }

        $otherPermissions = [
            'login-admin',
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
            'setting-update',
            'website-update',
        ];

        foreach ($otherPermissions as $permissionName) {
            $permission = Permission::create(['name' => $permissionName]);
        }

        $adminRole->givePermissionTo(Permission::all());

        Schema::enableForeignKeyConstraints();
    }
}