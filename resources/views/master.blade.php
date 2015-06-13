<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
	<title>{{{ $data['head']['title'] or '' }}} | {{ $name or '' }}</title>
	<meta charset="UTF-8">
	<meta name="description" content="{{{ $data['head']['description'] or '' }}}">
	<meta name="author" content="George Petridis">
	<link rel="stylesheet" type="text/css" href="{{asset('css/screen.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="language">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <span>
            <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                {{{ $properties['native'] }}}
            </a>
        </span>
    @endforeach
</div>
<div id="page">
@yield('content')
</div>
</body>
</html>