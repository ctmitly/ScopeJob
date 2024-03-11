<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(3)->create();

        $user = User::factory()->create([
            'name' => 'Ainaa',
            'email' => 'ainaa@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Akma and Co.',
        //     'location' => 'Bangi je boh',
        //     'email' => 'test@test.com',
        //     'website' => 'www.jem-le.com',
        //     'description' => 'Yada yada yada yada yada yada'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Junior Developer',
        //     'tags' => 'laravel, javascript, php',
        //     'company' => 'Akuma and Co.',
        //     'location' => 'KL',
        //     'email' => 'test1@test.com',
        //     'website' => 'www.klstyle.com',
        //     'description' => 'Yada yada yada yada yada yada'
        // ]);
    }
}
