<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Content;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\DB;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->count(2)->create();
        User::create(['first' => 'Hitesh',
        'last' => 'Patel',
        'email' => 'hites.297@gmail.com',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'remember_token' => Str::random(10)]);


        DB::table('projects')->truncate();
        Project::create(['title' => 'Hair Salon',
         'description' => '<p>This Hair Salon website let user to view the services and book appointments. It has a built in CMS that allows admin to manage details of service, employees and appointments.</p>',
         'technologies' => '.Net, Entity Framework, Bootstrap, SQL',
         'gitUrl' => 'https://github.com/Hitesh297/PassionProject-Hitesh_Patel',
         'liveUrl' => 'https://passionproject20220616162714.azurewebsites.net/',
         'photo' => 'https://d2slcw3kip6qmk.cloudfront.net/marketing/blog/2016Q4/8-steps-to-build-a-project-management-timeline@2x.png',
         'sequence' => 0]);

         DB::table('contents')->truncate();
         Content::create(['content' => '<p>Hello My name is Hitesh, Welcome to my portfolio!!!!!!!</p>','type' => 'Contact']);
         Content::create(['content' => '<p>I\'m a sofware engineer specializing in developing web apps on .net framework. I\'m focused on developing solutions that are sustainable, extensible and user friendly.</p>',
         'type' => 'Hero']);
         Content::create(['content' => '<p>Hello! My name is Hitesh Patel. I have been developing web applications since 2015. I liked creating things on computer since I was kid.</p><p>After completing my studies I took a deeper dive into backend developint using .net framework.</p><p>Recently I completed Web Development Course at Humber to become a full stack developer.</p>',
         'type' => 'AboutMe']);
    }
}