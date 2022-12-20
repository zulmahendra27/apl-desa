<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agenda;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('password')
        ]);

        Category::create([
            'name' => 'Undangan',
            'slug' => 'undangan'
        ]);

        Category::create([
            'name' => 'Perintah',
            'slug' => 'perintah'
        ]);

        Agenda::create([
            'random_id' => 'y98ajsknuUHuhwsdoIOhs9-',
            'name' => 'Undangan Rapat',
            'tempat' => 'Gedung Serbaguna',
            'waktu' => '2022-12-27 09:00:00'
        ]);

        Agenda::create([
            'random_id' => 'jnKLAHJh9Hujksd8oUOH8u70J-1',
            'name' => 'Gotong Royong',
            'tempat' => 'Kantor Desa',
            'waktu' => '2022-12-25 07:30:00'
        ]);
    }
}
