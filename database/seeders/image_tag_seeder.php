<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\image_tag;
use App\Models\tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class image_tag_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = tag::get();
        $images = image::get();
        $users = User::get();

        $this->add_tags_to_hundred_images($tags, $users, $images);
        $this->remove_from_ten($tags, $users, $images);
        $this->add_to_ten($tags, $users, $images);
    }
    private function add_to_ten($tags, $users, $images)
    {
        for ($i = 0; $i < count($tags); $i++) {
            for ($j = ($i * 100) + 5; $j < (($i * 100) + 15); $j++) {
                image_tag::factory()->state([
                    'user_id' => $i < 5 ? $users->last()->id : $users->first()->id,
                    'image_id' => $images[$j]->id,
                    'tag_id' => ($i + 1) == count($tags) ? $tags[0]->id : $tags[$i + 1]->id,
                    'added' => true,
                    'last' => true,
                    'user_last' => true,
                ])->create();
            }
        }
    }
    private function remove_from_ten($tags, $users, $images)
    {
        for ($i = 0; $i < count($tags); $i++) {
            for ($j = $i * 100; $j < (($i * 100) + 10); $j++) {
                image_tag::factory()->state([
                    'user_id' => $i < 5 ? $users->last()->id : $users->first()->id,
                    'image_id' => $images[$j]->id,
                    'tag_id' => $tags[$i]->id,
                    'added' => false,
                    'last' => true,
                    'user_last' => true,
                ])->create();
            }
        }
    }
    private function add_tags_to_hundred_images($tags, $users, $images)
    {
        for ($i = 0; $i < count($tags); $i++) {
            for ($j = $i * 100; $j < (($i * 100) + 100); $j++) {
                image_tag::factory()->state([
                    'user_id' => $i < 5 ? $users->first()->id : $users->last()->id,
                    'image_id' => $images[$j]->id,
                    'tag_id' => $tags[$i]->id,
                    'added' => true,
                    'last' => $j <= (($i * 100) + 9) ? false : true,
                    'user_last' => true,
                ])->create();
            }
        }
    }
}
