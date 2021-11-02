<?php

namespace Database\Seeders;

use App\Models\tag;
use Illuminate\Database\Seeder;

class tag_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        tag::factory()->state(['name'=>'house'])->create();
        tag::factory()->state(['name'=>'yard'])->create();
        tag::factory()->state(['name'=>'kitchen'])->create();
        tag::factory()->state(['name'=>'bedroom'])->create();
        tag::factory()->state(['name'=>'bathroom'])->create();
        tag::factory()->state(['name'=>'road'])->create();
        tag::factory()->state(['name'=>'empty room'])->create();
        tag::factory()->state(['name'=>'aerial'])->create();
        tag::factory()->state(['name'=>'closet'])->create();
        tag::factory()->state(['name'=>'hallway'])->create();
    }
}
