<nav>
    <a href="{{ route('homepage') }}">Homepage</a>
    <a href="{{ route('teams') }}">Teams</a>

    <div class="dropdown">
        <a href="{{ route('wedstrijdschema') }}">Wedstrijdschema</a>
        <div class="dropdown-content">
            <a href="#">Schema</a>
            <a href="#">Genereren</a>
            <a href="#">Scores</a>
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
