<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('roles')->delete();

        $roles = [
            [
                'id' => 1,
                'key' => 'asset_manager',
                'name' => 'Asset Manager',
            ], [
                'id' => 2,
                'key' => 'applicant',
                'name' => 'Applicant',
            ]
        ];
        DB::table('roles')->insert($roles);
    }
}
