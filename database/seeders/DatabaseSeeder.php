<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use App\Models\Hero;
use App\Models\LandingTitle;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Subscribe;
use App\Models\Testimonial;
use App\Models\Trainer;
use App\Models\WCM;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


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

        \App\Models\User::create([
            'name' => 'Hanifullah',
            'email' => 'hanifullah@gmail.com',
            'email_verified_at' => now(),
            'role' => 1,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'remember_token' => Str::random(10),
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Hanifullah',
        //     'email' => 'hanifullah@gmail.com',
        //     'email_verified_at' => now(),
        //     'role' => 1,
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     // 'remember_token' => Str::random(10),
        // ]);

        Contact::factory()->create();
        Course::factory(20)->create();
        Event::factory(2)->create();
        Hero::factory()->create();
        LandingTitle::factory()->create();
        Message::factory(10)->create();
        Setting::factory()->create();
        Subscribe::factory(10)->create();
        Testimonial::factory(6)->create();
        Trainer::factory(6)->create();
        WCM::factory(3)->create();

    }
}
