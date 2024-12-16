<x-layouts.app title="home">
    <a href="/teams/create">
        <button>Create</button>
    </a>
    <table>
        <thead>
            <th>TeamName</th>
            <th>Points</th>
        </thead>
        <tbody>
            @foreach ($teams as $team)
            <tr>
                <td>{{$team->name}}</td>
                <td>{{$team->points}}</td>
                <td>
                    <a href="{{route('teams.edit', $team->id)}}">
                        <button>Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.app>
