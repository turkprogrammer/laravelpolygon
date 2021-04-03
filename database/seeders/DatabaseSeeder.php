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
        // \App\Models\User::factory(10)->create();
        //\App\Models\Director::factory(30)->create();
        //\App\Models\Film::factory(30)->create();
        //\App\Models\Author::factory(5)->create();
        //\App\Models\Books::factory(50)->create();
        //\App\Models\Cinema::factory(8)->create();
        //\App\Models\Movie::factory(30)->create();
        //\App\Models\CinemaMovie::factory(50)->create();
          //  \App\Models\Project::factory(15)->create();
        \App\Models\Task::factory(225)->create();
        
    }
}
