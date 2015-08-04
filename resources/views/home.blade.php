@extends('master')

@section('content')

<div id="page" class="container">
{{-- MENU --}}
    <nav id="menu">
        <div class="trigger"><span>Menu</span></div>
        <ul>
            <li class="m"><a href="#about">About</a></li>
            <li class="m"><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <ul>
            <li><a href="https://ca.linkedin.com/in/georgepetridis" class="bt-icon icon-linkedin2" target="blank">LinkedIn</a></li>
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

<!--         @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <div class="{{$localeCode}} block">
                <div class="content">
                    <a class="btn-1" rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                    {{ $localeCode }}
                    </a>
                </div>
            </div>
        @endforeach -->

        </div>
        <div class="noise"><div></div></div>


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
        <div class="region">
            <div class="wow fadeInLeft block">
                <i class="fa fa-cog"></i>
                <ul>
                    <li>Web Design and Development</li>
                    <li>Web Hosting</li>
                    <li>Search Engine Optimization</li>
                </ul>           
            </div>
            <div class="wow fadeInUp block">
                <i class="fa fa-desktop"></i>
                <i class="fa fa-tablet"></i>
                <i class="fa fa-mobile"></i>
                <p>Efficient multi-device responsive design so your website looks great on all screen sizes.</p>            
            </div>
            <div class="wow fadeInRight block">
                <i class="fa fa-graduation-cap"></i>
                <ul>
                    <li>Diploma in Web Programming</li>
                    <li>Certificate in Programming Fundamentals</li>
                    <li>Certificate in Web Development</li>
                    <li>Certificate in PHP/MySQL Web Applications</li>
                </ul>          
            </div>
        </div>
    </div>
{{-- PROJECTS --}}
    <div id="projects" class="group">
        <div class="region">
            <div class="block"><h1 class="content">Recent Projects</h1></div>
        </div>
        <div class="region">

            <div class="block">
                <div>
                    <img src="images/ldcanada-500x500.png">
                    <div class="bg">
                        <a href="http://loeysdietzcanada.org" target="blank">Visit Website</a>
                    </div>
                </div>
            </div>
            <div class="block">
                <div>
                    <img src="images/stergios-500x500.png">
                    <div class="bg">
                        <a href="http://stergios.ca" target="blank">Visit Website</a>
                    </div>
                </div>
            </div>
            <div class="block">
                <div>
                    <img src="images/roxys-500x500.png">
                    <div class="bg">
                        <a href="http://roxysdesigns.ca" target="blank">Visit Website</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- CONTACT --}}
    <div id="contact" class="group parallax-window" data-parallax="scroll" data-image-src="images/contact-me.jpg">


        <div class="region">
            <div class="block">
                <h1>Contact Me</h1>
            </div>
        </div>
        <div class="region">
            <div class="block">
                <a href="mailto:george@georgepetridis.com">
                    <i class= "fa fa-envelope"></i>
                </a>
            </div>
            <div class="block">
                <a href="https://ca.linkedin.com/in/georgepetridis">
                    <i class= "fa fa-linkedin-square"></i>
                </a>
            </div>    
        </div>


    </div>

</div>{{-- /#page --}}



@endsection
