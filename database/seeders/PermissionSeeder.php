<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create template']);
        Permission::create(['name' => 'delete template']);
        Permission::create(['name' => 'send mail']);
        Permission::create(['name' => 'upload media']);
        Permission::create(['name' => 'delete media']);
        Permission::create(['name' => 'assign role']);
    }
}
