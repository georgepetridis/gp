@extends('master')

@section('content')

<div id="page" class="container">
{{-- MENU --}}
    <nav id="menu">
        <a href="" class="trigger"><span>Menu</span></a>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
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
    <header id="header" class="group">
        <div class="region">
            <div id="bigtext" class="block">
                <div class="" id="web">WEB</div>
                <div class="" id="dev">DEVELOPER</div>
                <div class="" id="name">GEORGE PETRIDIS</div>
            </div>
        </div>
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

        </div>
    </header>
{{-- ABOUT --}}
    <div id="about" class="group">
        <div class="region">
            <div class="block">
                <img src="images/george-petridis-web-developer-175x500.jpg">
            </div>
        </div>
        <div class="region">
            <div class="block">
                <h1 class="content">{{ $data['about']['title'] }}</h1>
            </div>
            <div class="block">
                <p class="content">{{ $data['about']['content'][1] }}</p>
            </div> 
            <div class="block">
                <p class="content">{{ $data['about']['content'][2] }}</p>
            </div>
            <div class="block">
                <p class="content">{{ $data['about']['content'][3] }}</p>
            </div>
        </div>
    </div>
{{-- PROJECTS --}}
    <div id="projects" class="group">
        <div class="region">
            <div class="block">block 1</div>
            <div class="block"><h1 class="content">Projects</h1></div>
        </div>
        <div class="region">

            <div class="block">block a</div>
            <div class="block">block b</div>
            <div class="block">block c</div>
            <div class="block">block d</div>
        </div>
    </div>

</div>{{-- /#page --}}



@endsection
