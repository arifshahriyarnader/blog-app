<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>
<body class="bg-gray-100">
    <nav class="p-6 bg-white flex justify-between">
        <ul>
            <li>
                <a href="#">Home</a>
                <a href="#">Profile</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>