<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
            DB::table('posts')->insert([
                'category_id' => rand(1, 10),
                'title' => 'Post '.$i,
                'slug' => 'post-'.$i,
                'description' => 'description of post '.$i,
                'text' => '<p>My mouth fell open and my breath came out with a whooshing sound. I was frozen
in place, stabbed through with his double-edged words. The pain twisted in
familiar patterns through my body, the jagged hole ripping me open from the</p>',
            ]);
    }
}
