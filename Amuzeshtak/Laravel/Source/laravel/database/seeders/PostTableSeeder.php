<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Console\Scheduling\ScheduleRunCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
/*     DB::table('posts')->insert([
        'title'=>Str::random(10),
         'slug'=>Str::random(10),
         'description'=>Str::random(30),
         'image'=>Str::random(10)
     ]);*/

//        Post::create([
//            'title'=>Str::random(10),
//            'slug'=>Str::random(10),
//            'description'=>Str::random(30),
//            'image'=>Str::random(10)
//
//
//        ]);



    }
}
