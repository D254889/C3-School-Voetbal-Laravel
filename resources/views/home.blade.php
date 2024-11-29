<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/style.css') }}" />
    <title>schoolvoetbal</title>
</head>
<body>
    <header>
        <nav>
            <a href="">home</a>
            <a href="teams">teams</a>
            <a href="player">//</a>
            <img src="{{ asset('style/img/logoBlauw.png') }}" alt="">

        </nav>
        logout
    </header>
    <main>
        <h1>School voetbal</h1>
        <div class="wrapper">

            <div class="publicInfo">

                <div class="topTeams">
                    <h2>Top 5</h2>
                    <ol>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ol>
                </div>


                <a href="wedstrijden">
                    <h2>wedstrijden</h2>
                    <ul>
                        <li>1 team vs team</li>
                        <li>2 team vs team</li>
                        <li>3 team vs team</li>
                        <li>4 team vs team</li>
                        <li>5 team vs team</li>
                    </ul>
                </a>
            </div>
            <div class="personalInfo">
                <img src={{ asset('style/img/soccerfield.png') }} alt="voetbalVeld">
                <div class="team">
                    <h2>team</h2>
                    <ul>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                        <li>player name</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

