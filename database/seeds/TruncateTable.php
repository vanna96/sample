<?php

use Illuminate\Database\Seeder;

class TruncateTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('categories')->truncate();
    }
}
