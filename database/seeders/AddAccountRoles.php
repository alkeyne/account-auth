<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddAccountRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('account_roles')->insert([
            [
                'id' => 1,
                'name' => 'OwnerPrimary',
                'stub' => 'owner_primary',
            ],
            [
                'id' => 2,
                'name' => 'Owner',
                'stub' => 'owner',
            ],
            [
                'id' => 3,
                'name' => 'Manager',
                'stub' => 'manager',
            ],
            [
                'id' => 4,
                'name' => 'User',
                'stub' => 'user',
            ]
        ]);
    }
}
