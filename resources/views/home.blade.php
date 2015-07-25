@extends('master')

@section('content')

<div id="page" class="container">
{{-- MENU --}}
    <nav id="menu">
        <div class="trigger"><span>Menu</span></div>
        <ul>
            <li class="m"><a href="#about">About</a></li>
            <li class="m"><a href="#projects">Projects</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <ul>
            <li><a href="http://www.twitter.com/codrops" class="bt-icon icon-twitter">Twitter</a></li>
            <li><a href="https://plus.google.com/101095823814290637419" class="bt-icon icon-google-plus">Google+</a></li>
            <li><a href="http://www.facebook.com/pages/Codrops/159107397912" class="bt-icon icon-linkedin2">LinkedIn</a></li>
            <li><a href="https://github.com/georgepetridis" target="blank" class="bt-icon icon-github">icon-github</a></li>
        </ul>
    </nav>
{{-- HEADER --}}
    <header id="header" class="group parallax-window" data-parallax="scroll" data-image-src="images/mac-1920x1275.jpg">
        <div class="region">
            <div id="bigtext" class="wow pulse block">
                <span class="">WEB</span>
                <span class="">DEVELOPER</span>
                <span class="element">GEORGE PETRIDIS</span>
            </div>
        </div>
        <div id="language" class="region">

        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <div class="{{$localeCode}} block">
                <div class="content">
                    <a class="btn-1" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                    {{ $localeCode }}
                    </a>
                </div>
            </div>
        @endforeach

        </div>
        <div class="noise"></div>

    </header>
{{-- ABOUT --}}
    <div id="about" class="group">
        <div class="region">
            <div class="block"><h1>About</h1></div>
        </div>
        <div class="region">
            <div class="wow fadeInDown block">
                <p>Developer and Designer with a relentless attention to detail. The final product aims to help businesses get the most out of their online profiles.</p>            
            </div>
        </div>
        <div class="region">
            <div class="wow fadeInUp block">            
                <img src="images/george-petridis-web-developer-portrait.jpg">
            </div>
        </div>
    </div>
{{-- PROJECTS --}}
    <div id="projects" class="group">
        <div class="region">
            <div class="block"><h1 class="content">Projects</h1></div>
        </div>
        <div class="region">

            <div class="block">
                <div><img src="images/logo-ldcanada-400x100.png"></div>
                <div><a href="">Case Study</a></div>
                <div><a href="http://loeysdietzcanada.org" target="blank">Visit Website</a></div>
            </div>
            <div class="block"><div><img src="images/logo-stergios-400x100.png"></div></div>
            <div class="block"><div><img src="images/logo-roxysdesigns-400x100.png"></div></div>
            <div class="block"><div><img src="images/logo-coolbasslines-400x100.png"></div></div>
        </div>
    </div>

</div>{{-- /#page --}}



@endsection
