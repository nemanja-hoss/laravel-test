<?php

namespace Database\Seeders;

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
        $this->call(users::class);
        $this->call(image_seeder::class);
        $this->call(tag_seeder::class);
        $this->call(image_tag_seeder::class);
    }
}
