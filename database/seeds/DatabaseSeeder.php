<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TruncateTable::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(CategorySeed::class);
        
    }
}
