<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::insert([
            ['name' => 'Laravle'],
            ['name' => 'php'],
            ['name' => 'vue'],
            ['name' => 'android'],
        ]);
    }
}
