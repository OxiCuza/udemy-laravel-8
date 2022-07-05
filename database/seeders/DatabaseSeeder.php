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
        if ($this->command->confirm('Do you want to migrate fresh the database ?', true)) {
            $this->command->call('migrate:fresh');
            $this->command->info('Database was refreshed');
        }

        $this->call([
            UserTableSeeder::class,
            BlogPostTableSeeder::class,
            CommentTableSeeder::class,
            TagTableSeeder::class,
            BlogPostTagTableSeeder::class
        ]);
    }
}
