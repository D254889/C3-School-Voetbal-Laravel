<nav>
    <a href="{{ route('homepage') }}">Homepage</a>
    <a href="{{ route('teams') }}">Teams</a>

    <div class="dropdown">
        <a href="{{ route('wedstrijdschema') }}">Wedstrijdschema</a>
        <div class="dropdown-content">
            <a href="schemapage">Schema</a>
            <a href="generationpage">Genereren</a>
            <a href="scorespage">Scores</a>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', ()=>{
            const dropdown = document.querySelector('.dropdown');
            dropdown.addEventListener('click', () => {
                const content = dropdown.querySelector('.dropdown-content');
                content.style.display = content.style.display == 'block' ? 'none' : 'block';
            });
        });
    </script>
</nav>
