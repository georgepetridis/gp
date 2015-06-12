<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
	<title>{{{ $data['head']['title'] or '' }}} | {{ $name or '' }}</title>
	<meta charset="UTF-8">
	<meta name="description" content="{{{ $data['head']['description'] or '' }}}">
	<meta name="author" content="George Petridis">
	<link rel="stylesheet" type="text/css" href="{{asset('css/screen.css')}}">
</head>
<body>
<div id="page">
    <ul class="">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                    {{{ $properties['native'] }}}
                </a>
            </li>
        @endforeach
    </ul>
@yield('content')
</div>
</body>
</html>