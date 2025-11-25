<?php

namespace Database\Seeders;

use App\Models\post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post::create([
            'title'=>'hello',
            'content'=>'hello - world',
        ]);
    }
}
