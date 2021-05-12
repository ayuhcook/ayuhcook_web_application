<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--
        -------------------------------
        THIS GOES THE MAIN DEPENDENCIES
        -------------------------------
     -->
    <!-- bootstrap dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- google font - quicksand -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">

    <!-- main css -->
    <style>
        /*apply font*/
        body {
            font-family: 'Quicksand', sans-serif;
        }

        .container-content {
            max-width: 1200px;
            display: block;
            margin: auto;
            padding: 1rem;
            min-height: 60vh;
        }

        .footer {
            max-width: 1200px;
            text-align: center;
            margin: auto;
        }
    </style>

    @yield('title')
    @yield('css_dependencies')
</head>
<body>
    @include('navbar')

    @yield('content')

    @include('footer')
    @yield('script')
    @yield('js_dependencies')

    <!--
        ----------------------------------
        THIS GOES THE MAIN JS DEPENDENCIES
        ----------------------------------
    -->
    <!-- bootstrap dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>
