<?php

namespace Database\Seeders;

use Database\Factories\PostsFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PostsFactory::factory()->create(10);
    }
}
