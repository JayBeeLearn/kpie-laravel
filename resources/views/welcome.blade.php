<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <title>KPIE Laravel</title>
        <link rel="stylesheet" href={{ url(asset('css/app.css')) }} rel="stylesheet">
        <link rel="stylesheet" href={{ url(asset('css/register.css')) }} rel="stylesheet">
        <link rel="stylesheet" href={{ url(asset('css/login.css')) }} rel="stylesheet">
        <link rel="stylesheet" href={{ url(asset('css/business.css')) }} rel="stylesheet">
        <link rel="stylesheet" href={{ url(asset('css/utility.css')) }} rel="stylesheet">
        
        <link rel="stylesheet" href="../css/login.css">
        <link rel="stylesheet" href="../css/register.css">
        <link href="https://cdn.prod.website-files.com/5e100b7a946b12ba33ac57ee/5e1d739cd41c833b41d2bf53_Favicon.png" rel="shortcut icon" type="image/x-icon">
     <script src="https://kit.fontawesome.com/5aa07e68ce.js" crossorigin="anonymous"></script>

        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
                @yield('content')
                
            </div>
        </div>
    </body>
</html>
