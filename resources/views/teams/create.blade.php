<x-layouts.app title="home">
    <form action="{{route('teams.create')}}" method="POST">
        @csrf
        <label for="name">TeamName: </label>
        <input type="text" name="name"/>
        <br>
        <label for="points">Points: </label>
        <input type="number" name="points">
        <br>
        <input type="submit" value="Versturen">
    </form>
</x-layouts.app>
