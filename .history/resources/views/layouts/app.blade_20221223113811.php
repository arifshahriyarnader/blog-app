<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- <script src="{{ asset('public/js/app.js') }}" defer></script> -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul class="flex items-center">
            <li>
                <a href="" class='p-3'>Home</a>
            </li>
            <li>
                <a href="" class='p-3'>Dashboard</a>
            </li>
            <li>
                <a href="" class='p-3'>Post</a>
            </li>
        </ul>

        <ul class="flex items-center">
            <li>
                <a href="" class='p-3'>Alex </a>
            </li>
            <li>
                <a href="" class='p-3'>Dashboard</a>
            </li>
            <li>
                <a href="" class='p-3'>Post</a>
            </li>
        </ul>
    </nav>
    @yield('content')

</body>
</html>