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
        <div class="h1title"><h1>Schoolvoetbal</h1></div>
        <div class="container">
            <div class="box top-five">
                <h2>Top 5</h2>
            </div>
            <div class="box image">
                <img src="{{asset('/style/img/logoBlauw.png')}}"/>
            </div>

            <div class="wedstrijden-box">
                <a href="{{ route('wedstrijdschema') }}" class="btn">Naar het Wedstrijdschema</a>
            </div>

            <div class="box my-team">
                <h2>Mijn team:</h2>
                <table>
                    <thead>
                        <th>Team 1</th>
                        <th>Team 2</th>
                    </thead>
                    {{--
                    <tbody>
                        @foreach ($teams as $team )
                            <tr>
                                <td>{{$team->team1_id}}</td>
                                <td>{{$team->teams2_id}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    --}}
                </table>
            </div>
        </div>

        {{$slot}}
    </main>
    <footer>
        <x-footer />
    </footer>
</body>
</html>
