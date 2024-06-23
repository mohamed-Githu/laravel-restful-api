<?php

namespace Database\Seeders;

use App\Models\Lesson;
use App\Models\LessonTag;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            LessonSeeder::class,
            TagSeeder::class,
            LessonTagSeeder::class,
        ]);
    }
}
