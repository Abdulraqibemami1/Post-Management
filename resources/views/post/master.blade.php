<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.bundle.min.js') }}">
    <title>Master page</title>
</head>
<body>
    @include('post.navbar')
    @yield('content')


    <footer class="bg-dark text-center text-white p-3">
        <p class="text-center">Created by Abdulraqib Emami &copy; 2023 </p>
    </footer>
</body>

</html>
