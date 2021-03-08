<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $asset_manager = [
            'id' => 1,
            'name' => 'Asset Manager Admin',
            'email' => 'assetmanager@gmail.com',
            'verified' => true,
            'password' => bcrypt('password'),
        ];

        DB::table('users')->insert($asset_manager);
    }
}