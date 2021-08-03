<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Fundacion']);
        $role3 = Role::create(['name' => 'Usuario']);

        Permission::create(['name'=>'Administrador'])->assignRole($role1);
        Permission::create(['name'=>'Fundacion'])->assignRole($role2);
        Permission::create(['name'=>'Usuario'])->assignRole($role3);
    }
}
