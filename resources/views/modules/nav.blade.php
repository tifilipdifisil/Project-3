    @push('head')

        <link href='/css/modules/nav.css' type='text/css' rel='stylesheet'>
    @endpush

    <ul>
        <li>

            @foreach(config('app.nav') as $link => $label)
                <a href='{{ $link }}' class='{{ Request::is(substr($link, 1)) ? 'active' : '' }}'> {{ $label }}</a>
            @endforeach
        </li>

    </ul>