<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
	<title>{{{ $data['head']['title'] or '' }}} | {{ $name or '' }}</title>
    <meta name="google-site-verification" content="">
	<meta charset="UTF-8">
	<meta name="description" content="{{{ $data['head']['description'] or '' }}}">
	<meta name="author" content="George Petridis">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<link rel="stylesheet" type="text/css" href="{{asset('css/screen.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="{{asset('js/bigtext.js')}}"></script>



</head>
<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64569050-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- <div id="doc">
<div class="container" id="top-bar">
    <div class="group">
        <div class="region">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <div class="{{$localeCode}} block">
                <div class="content">
                    <a class="btn-1" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                        {{{ $properties['native'] }}}
                    </a>
                </div>
            </div>
            @endforeach
            <div class="block" id="tel">
                <div class="content">
                    <a class="btn-1" href="tel:15149754339">Call Me</a>
                </div>
            </div>
            <div class="block" id="email">
                <div class="content">
                    <a class="btn-1" href="mailto:george@georgepetridis.com">Email Me</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="page">
@yield('content')
</div>
</div> -->

@yield('content')
</body>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/borderMenu.js')}}"></script>
<script type="text/javascript">
    
$(document).ready(function(){

    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    });


    $('#bigtext').bigtext();

});

</script>

</html>