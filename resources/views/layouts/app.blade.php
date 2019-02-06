<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ mix('css/app.css') }}" />
</head>
<body>
    <nav class="navbar is-black" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                <strong>Arse Technical</strong>
            </a>
        </div>
    </nav>
    @yield('content')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
