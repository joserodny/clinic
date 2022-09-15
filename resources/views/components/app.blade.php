<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>
    <x-nav></x-nav>
    {{ $slot }}
    @include('partials.footer')
</body>


<script>
    window.onload = function() {
        if (window.jQuery) {
            // jQuery is loaded
            alert("Yeah!");
        } else {
            // jQuery is not loaded
            alert("Doesn't Work");
        }
    }
</script>
</html>
