<?php

namespace Database\Seeders;

use App\Models\image;
use Illuminate\Database\Seeder;

class image_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        image::factory()->count(1000)->create();
    }
}
