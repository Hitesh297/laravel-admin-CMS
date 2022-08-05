<? use Illuminate\Support\Facades\Auth; ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Portfolio</title>

    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <script async defer src="https://kit.fontawesome.com/08690c32d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="<?= url('app.css') ?>">

    <script src="<?= url('app.js') ?>"></script>
    
</head>
<body>

<header class="w3-padding">

    <h1 class="w3-text-red">My Portfolio!</h1>

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