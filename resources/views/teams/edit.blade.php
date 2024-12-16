<x-layouts.app title="home">
    <form action="{{route('teams.update', $team->id)}}" method="POST">
        @csrf
        <label for="name">TeamName: </label>
        <input type="text" name="name" value="{{$team,->name}}"/>
        <br>
        <label for="points">Point: </label>
        <input type="number" name="points" value="{{$team->points}}"/>
        <br>
        <input type="submit" value="Versturen">
    </form>
</x-layouts.app>
