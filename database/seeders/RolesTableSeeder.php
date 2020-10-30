<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Role $role)
    {
        $roles = ['Administrator', 'Editor', 'Member', 'Banned'];

        foreach ($roles as $name) {
            $role->firstOrCreate([
                'name' => $name,
            ], [
                'name' => $name,
            ]);
        }
    }
}
