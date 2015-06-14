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
<div class="container" id="top-bar">
    <div class="group">
        <div class="region">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="block">
                <div class="content">
                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                        {{{ $properties['native'] }}}
                    </a>
                </div>
                </div>
            @endforeach
            <div class="block">
                <!-- social__item linkedin -->
                <div class="social__item content">
                        <a target="_blank" href="https://ca.linkedin.com/in/georgepetridis" class="social__icon--linkedin"><i class="icon--linkedin"></i></a>
                </div>
                <!-- /social__item linkedin -->
            </div>
        </div>
    </div>
</div>
<div id="page">
@yield('content')
</div>
</body>
</html>