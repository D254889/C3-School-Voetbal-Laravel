<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />
    <script src="https://kit.fontawesome.com/545a205610.js" crossorigin="anonymous"></script>
    <title>schoolvoetbal</title>
</head>
<body>
    <div class="body-bg"></div>
    <header>
        <x-navbar />
    </header>
    <main>

        {{$slot}}
    </main>
    <footer>
        <x-footer />
    </footer>
</body>
</html>
