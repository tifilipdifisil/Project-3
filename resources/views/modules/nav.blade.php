<nav>

        @foreach(config('app.nav') as $link => $label)
            <a href='{{ $link }}' class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'>{{ $label }}</a><br>
        @endforeach
</nav>