<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user =  \App\Models\User::create([
            'firstnamear' => 'Test User',
            'lastnamear' => 'test',
            'firstnameen' => 'Test User',
            'lastnameen' => 'test',
            'uid' => '12345678',
            'phone' => '56818880',
            'email' => 'test@example.com',
            'password' => 'password',

        ]);

        $permission0 = Permission::create(['name' => 'administration']);
        $role0 = Role::create(['name' => 'administration']);
        $role0->givePermissionTo($permission0);
        $user->assignRole($role0);

        $permission = Permission::create(['name' => 'administration']);
        $role = Role::create(['name' => 'administration']);
        $role->givePermissionTo($permission);

        $permission1 = Permission::create(['name' => 'Department of Legal Affairs']);
        $role1 = Role::create(['name' => 'Department of Legal Affairs']);
        $role1->givePermissionTo($permission1);

        $permission2 = Permission::create(['name' => 'Higher Management']);
        $role2 = Role::create(['name' => 'Higher Management']);
        $role2->givePermissionTo($permission2);

        $permission3 = Permission::create(['name' => 'responsible']);
        $role3 = Role::create(['name' => 'responsible']);
        $role3->givePermissionTo($permission3);

        $permission4 = Permission::create(['name' => 'user']);
        $role4 = Role::create(['name' => 'user']);
        $role4->givePermissionTo($permission4);

    }
}
