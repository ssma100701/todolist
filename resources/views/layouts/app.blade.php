<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todolist</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts.navbar')
    <div class="container">
        @include('layouts.messages')
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>
