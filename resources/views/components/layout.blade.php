<!-- 
Global layout for the system 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Enrolment System')</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
        @yield('header')
    <main>
        @yield('content')
    </main>
    <footer>
        
    </footer>
</body>
</html>