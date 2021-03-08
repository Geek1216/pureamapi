<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            [
                'name' => 'Corporate Governance'
            ], [
                'name' => 'Business Matters'
            ], [
                'name' => 'Financials and Tax'
            ], [
                'name' => 'Employment & Labour'
            ], [
                'name' => 'Infrastructure, Software and Operating Procedures'
            ], [
                'name' => 'Intellectual Property'
            ], [
                'name' => 'Assets',
            ], [
                'name' => 'Litigation And Government Regulation'
            ]
		];

        DB::table('categories')->insert($categories);
    }
}








