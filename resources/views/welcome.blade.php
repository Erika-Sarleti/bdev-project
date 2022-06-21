<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ciccio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body>
        <div class="container-home">
            <div class="demo">
                <h1 class="up">ciccio</h1>
                <h2 class="byline" id="byline">The Bests Developers</h2>
                <a href="{{ route('guest.index') }}" class="btn-neon delay-display">Entra</a>
                <h1 class="down">ciccio</h1>
            </div>
            
            <script src="{{ asset('script.js')}}"></script>
        </div>
        </div>
    </body>
</html>
