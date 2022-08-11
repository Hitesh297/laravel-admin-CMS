<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contactform;
use App\Models\Content;
use App\Models\Experience;
use App\Models\Qualification;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Socialmedia;
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
        // Contactform::factory()->count(5)->create();
        // Content::factory()->count(5)->create();
        // Experience::factory()->count(5)->create();
        // Project::factory()->count(5)->create();
        // Qualification::factory()->count(5)->create();
        // Skill::factory()->count(5)->create();
        // Socialmedia::factory()->count(5)->create();





        User::create([
            'first' => 'Hitesh',
            'last' => 'Patel',
            'email' => 'hites.297@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10)
        ]);

        Project::create([
            'title' => 'Hair Salon',
            'description' => '<p>This Hair Salon website let user to view the services and book appointments. It has a built in CMS that allows admin to manage details of service, employees and appointments.</p>',
            'technologies' => '.Net, Entity Framework, Bootstrap, SQL',
            'gitUrl' => 'https://github.com/Hitesh297/PassionProject-Hitesh_Patel',
            'liveUrl' => 'https://passionproject20220616162714.azurewebsites.net/',
            'photo' => 'https://i.ibb.co/xfV59mj/hairsalon.jpg',
            'sequence' => 1
        ]);
        Project::create([
            'title' => 'Weather Wallpaper',
            'description' => '<p>Weather Wallpaper app detects the users location from the browser and recommends wallpaper based on wether condition at the users location .The app demonstrates the use of browser\'s location API in integration with open weather API (for weather information) and unsplash API (for image search).</p>',
            'technologies' => 'Node, Express, PUG, Javascript, HTML, CSS',
            'gitUrl' => 'https://github.com/Hitesh297/Weather-Wallpaper',
            'liveUrl' => 'https://weather-wallpaper.herokuapp.com/',
            'photo' => 'https://i.ibb.co/qMMqqqf/weather-wallpaper.jpg',
            'sequence' => 2
        ]);
        Project::create([
            'title' => 'Tech Blog',
            'description' => '<p>Tech Blog is a basic website for blogging, developed on PHP. The content management system at the backend enables the user to add or delete blog contents.</p>',
            'technologies' => 'PHP, MySQL, HTML, CSS',
            'gitUrl' => 'https://github.com/Hitesh297/TheTechBlog',
            'liveUrl' => 'http://hitesh-patel.infinityfreeapp.com/mycms/',
            'photo' => 'https://i.ibb.co/DzQcNRm/techblog.jpg',
            'sequence' => 3
        ]);
        Project::create([
            'title' => 'Space Fire',
            'description' => '<p>Space Fire is a shooting game that demonstartes use of javascript timing functions and CSS animations.</p>',
            'technologies' => 'HTML, CSS, Javascript',
            'gitUrl' => 'https://github.com/Hitesh297/Space-Fire',
            'liveUrl' => 'http://hitesh-patel.infinityfreeapp.com/Game/shootgame.html',
            'photo' => 'https://i.ibb.co/Jrzg7Yv/game.jpg',
            'sequence' => 4
        ]);
        Project::create([
            'title' => 'Phone Prints',
            'description' => '<p>Phone Prints is a static website which is designed as a template for any e commerce website. The design supports devices with different screen sizes and has multiple pages to demonstate basic workflow.</p>',
            'technologies' => 'Node, PUG, Express, CSS, HTML',
            'gitUrl' => 'https://github.com/Hitesh297/JAssignment1-Hitesh_Patel',
            'liveUrl' => 'https://phone-print.herokuapp.com/',
            'photo' => 'https://i.ibb.co/qjNtHB1/phone-prints.jpg',
            'sequence' => 5
        ]);



        Content::create(['content' => '<p>Hello My name is Hitesh, Welcome to my portfolio!!!!!!!</p>', 'type' => 'Contact']);
        Content::create([
            'content' => '<p>I\'m a sofware engineer specializing in developing web apps on .net framework. I\'m focused on developing solutions that are sustainable, extensible and user friendly.</p>',
            'type' => 'Hero'
        ]);
        Content::create([
            'content' => '<p>Hello! My name is Hitesh Patel. I have been developing web applications since 2015. I liked creating things on computer since I was kid.</p><p>After completing my studies I took a deeper dive into backend developint using .net framework.</p><p>Recently I completed Web Development Course at Humber to become a full stack developer.</p>',
            'type' => 'AboutMe'
        ]);


        Experience::create([
            'companyName' => 'SLK Software',
            'position' => 'Software Engineer',
            'responsibilities' => '<ul><li>Developed maintainable, clean, re-usable, object-oriented, and efficient programming code in compliance with department standards</li><li>Worked on banking application that calculates customer’s exposure, developed on VB.Net, .Net Framework 4.5 following MVC architecture with User Interface using HTML, CSS, Bootstrap, Java Script &amp; jQuery</li><li>Collaborate with cross-functional team of business analysts &amp; developers to determine comprehensive list of requirement specification for new applications</li><li>Mentored teammates and organized learning sessions on new technologies</li><li>Worked on development of application for Small Business Loans which involved creating multiple Web APIs in C# to support react.js</li><li>Developed ASP.NET Web API using object-oriented programing methodologies with token-based authentication and nHibenrate for data access and log4net for error logging</li><li>Served global clients and achieved 7 out of 7 client satisfaction score.</li><li>Developed .net core application which includes creating API and using Entity Framework core for database operations</li><li>Worked on DevOps tools like GitHub for version control, jFrog to save artifacts and Jenkins to create CI/CD pipelines</li><li>Followed Test Driven Development (TDD) with maximum Code Coverage</li></ul>',
            'startDate' => '2015-02-19',
            'endDate' => '2021-12-17'
        ]);

        Qualification::create([
            'credential' => 'Graduate Certificate : Web Development',
            'details' => '<p>Humber College Institute of Technology &amp; Advanced Learning, Toronto</p>',
            'yearCompleted' => 2022
        ]);
        Qualification::create([
            'credential' => 'Bachelor of Engineering : Information Science',
            'details' => '<p>N.M.A.M Institute of Technology, IN</p>',
            'yearCompleted' => 2015
        ]);


        Skill::create([
            'type' => 'Frameworks',
            'details' => '<p>.Net, .Net Core, React, Node, Laravel</p>',
            'sequence' => 1,
            'fontawesomeHTML' => '<i class=\"fa-solid fa-circle-nodes\"></i>'
        ]);
        Skill::create([
            'type' => 'Javascript',
            'details' => '<p>React, Express, jQuery</p>',
            'sequence' => 2,
            'fontawesomeHTML' => '<i class=\"fa-brands fa-js-square\"></i>'
        ]);
        Skill::create([
            'type' => 'Languages',
            'details' => '<p>C#, PHP, TypeScript</p>',
            'sequence' => 3,
            'fontawesomeHTML' => '<i class=\"fa-solid fa-code\"></i>'
        ]);
        Skill::create([
            'type' => 'Design',
            'details' => '<p>CSS, Photoshop</p>',
            'sequence' => 4,
            'fontawesomeHTML' => '<i class=\"fa-solid fa-compass-drafting\"></i>'
        ]);
        Skill::create([
            'type' => 'Database',
            'details' => '<p>SQL Server, IBM DB2, Mongo</p>',
            'sequence' => 5,
            'fontawesomeHTML' => '<i class=\"fa-solid fa-database\"></i>'
        ]);
        Skill::create([
            'type' => 'Tools',
            'details' => '<p>Visual Studio, VS Code, Git, Jenkins,IBM Data Studio, SQL Server, VersionOne</p>',
            'sequence' => 6,
            'fontawesomeHTML' => '<i class=\"fa-solid fa-screwdriver-wrench\"></i>'
        ]);


        Socialmedia::create([
            'logo' => '<i class=\"fa-brands fa-500px social\"></i>',
            'url' => 'https://500px.com/p/hites297',
            'sequence' => 1
        ]);
        Socialmedia::create([
            'logo' => '<i class=\"fa-brands fa-linkedin social\"></i>',
            'url' => 'https://www.linkedin.com/in/hitesh-patel-dev/',
            'sequence' => 2
        ]);
        Socialmedia::create([
            'logo' => '<i class=\"fa-brands fa-instagram social\"></i>',
            'url' => 'https://www.instagram.com/patelhitt/',
            'sequence' => 3
        ]);
        Socialmedia::create([
            'logo' => '<i class=\"fa-brands fa-github social\"></i>',
            'url' => 'https://github.com/Hitesh297',
            'sequence' => 4
        ]);
    }
}
