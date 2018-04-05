    @push('head')

        <link href='/css/project3/error.css' type='text/css' rel='stylesheet'>
    @endpush

    @if($errors->get($field))
        <ul class='error'>
            @foreach($errors->get($field) as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif