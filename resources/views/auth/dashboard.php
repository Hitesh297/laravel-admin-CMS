<? use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="/app.css">

        <script src="/app.js"></script>
        
    </head>
    <body>

        <header class="w3-padding">

            <h1 class="w3-text-red">Portfolio Console</h1>

            <?php if(Auth::check()): ?>
                You are logged in as <?= auth()->user()->first ?> <?= auth()->user()->last ?> | 
                <a href="/auth/logout">Log Out</a> | 
                <a href="/auth/dashboard">Dashboard</a> | 
                <a href="/">Website Home Page</a>
            <?php else: ?>
                <a href="/">Return to My Portfolio</a>
            <?php endif; ?>

        </header>

        <hr>

        <section class="w3-padding">

            <ul id="dashboard">
                <li><a href="/console/contactforms/list">Manage Contact Forms</a></li>
                <li><a href="/console/textcontents/list">Manage Text Content</a></li>
                <li><a href="/console/experiences/list">Manage Experience</a></li>
                <li><a href="/console/qualifications/list">Manage Qualifications</a></li>
                <li><a href="/console/skills/list">Manage Skills</a></li>
                <li><a href="/console/socialLinks/list">Manage Social Media Links</a></li>
                <li><a href="/console/projects/list">Manage Projects</a></li>
                <li><a href="/console/users/list">Manage Users</a></li>
                <li><a href="/console/logout">Log Out</a></li>
            </ul>

        </section>

    </body>
</html>