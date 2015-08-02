<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<head>
	<title>{{{ $data['head']['title'] or '' }}} | {{ $name or '' }}</title>
    <meta name="google-site-verification" content="">
	<meta charset="UTF-8">
	<meta name="description" content="{{{ $data['head']['description'] or '' }}}">
	<meta name="author" content="George Petridis">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/screen.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
    <script src="../js/typed.js"></script>
    <script src="../js/parallax.min.js"></script>
    <script src="../js/wow.js"></script>
    <script type="text/javascript">
        new WOW().init();
    </script>



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
@yield('content')
</body>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/borderMenu.js')}}"></script>
<script type="text/javascript">
    
$(document).ready(function() {

    $(".element").typed({
        strings: ["AND DESIGNER", "GEORGE PETRIDIS"],
        typeSpeed: 20,
    });

    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    });

    $('body').bind('touchstart', function() {});

});

</script>

</html>