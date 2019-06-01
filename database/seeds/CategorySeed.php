<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Phone'
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Computer'
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Monitor'
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Accessory Phone'
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Accessory Computer'
        ]);
    }
}
