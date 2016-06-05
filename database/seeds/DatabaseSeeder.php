<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
    }
}
