@extends('master')

@section('content')


    
    <header class="container" id="header">

        <div class="group">

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h1>{{{ $name }}}</h1>
                    </div>
                </div>
                <div class="block">
                    <div class="content">       
                        <h2>{{{ $data['header']['title'] }}}</h2>   
                    </div>
                </div>
            </div>

            <div class="region">
                <div class="block">
                    <div class="content">
                        <a href="mailto:george@georgepetridis.com">george@georgepetridis.com</a>
                    </div><!-- /.content -->
                </div><!-- /.block -->
                <div class="block">
                    <div class="content">
                        <p>(514) 975-4339</p>               
                    </div><!-- /.content -->
                </div><!-- /.block -->
            </div><!-- /.region -->

        </div><!-- /.group -->

    </header><!-- /.container -->

    <main class="container" id="main">

        <div class="group" id="profile">

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h3>Profile</h3>                
                    </div>
                </div>
            </div>

            <div class="region">
                <div class="block">
                    <div class="content">
                        <p>{{ $data['profile']['content'] }}</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="group" id="services">

            <div class="region">
                <div  class="block">
                    <div  class="content">
                        <h3>Services</h3>                                   
                    </div>
                </div>
            </div>

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h4>{{ $data['services']['service1']['title'] }}</h4>
                    </div>
                    <div class="content">
                        <p>{{ $data['services']['service1']['content'] }}</p>
                    </div>
                </div>
                <div class="block">
                    <div class="content">
                        <h4>{{ $data['services']['service2']['title'] }}</h4>
                    </div>
                    <div class="content">
                        <p>{{ $data['services']['service2']['content'] }}</p>
                    </div>
                </div>
                <div class="block">
                    <div class="content">
                        <h4>{{ $data['services']['service3']['title'] }}</h4>
                    </div>
                    <div class="content">
                        <p>{{ $data['services']['service3']['content'] }}</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="group" id="technical">

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h3>Technical</h3>              
                    </div>
                </div>
            </div>

            <div class="region">
                <div class="block">
                    <div class="content"><i class="devicon-javascript-plain"></i><p>JavaScript</p></div>
                    <div class="content"><i class="devicon-html5-plain-wordmark colored"></i><p>HTML5</p></div>
                    <div class="content"><i class="devicon-php-plain colored"></i><p>PHP</p></div>
                    <div class="content"><i class="devicon-css3-plain-wordmark colored"></i><p>CSS3</p></div>
                    <div class="content"><i class="devicon-sass-plain colored"></i><p>Sass</p></div>
                    <div class="content"><i class="devicon-jquery-plain-wordmark colored"></i><p>JQuery</p></div>
                    <div class="content"><i class="devicon-drupal-plain-wordmark colored"></i><p>Drupal</p></div>
                    <div class="content"><i class="devicon-laravel-plain-wordmark colored"></i><p>Laravel</p></div>
                    <div class="content"><i class="devicon-mysql-plain-wordmark colored"></i><p>MySQL</p></div>
                    <div class="content"><i class="devicon-git-plain-wordmark colored"></i><p>GIT</p></div>
                    <div class="content"><i class="devicon-wordpress-plain-wordmark colored"></i><p>Wordpress</p></div>
                    <div class="content"><i class="devicon-apache-plain-wordmark colored"></i><p>Apache</p></div>
                    <div class="content"><i class="devicon-codeigniter-plain-wordmark colored"></i><p>CodeIgniter</p></div>
                    <div class="content"><i class="devicon-gulp-plain colored"></i><p>Gulp</p></div>
                    <div class="content"><i class="devicon-nodejs-plain-wordmark colored"></i><p>Node.js</p></div>
                </div>
            </div>

        </div>

        <div class="group" id="portfolio">

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h3>Portfolio</h3>              
                    </div>
                </div>
            </div>

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h4>Loeys-Dietz Canada Syndrome Foundation</h4>
                    </div>
                    <div class="content">
                        <a href="http://loeysdietzcanada.org" target="blank">loeysdietzcanada.org</a>
                    </div>
                    <div class="content">
                        <p>Collaborated with the president of the foundation to bring a brand new website online. This is a large scale project involving several stakeholders. Ongoing site maintenance is required so I've also assumed the role of Webmaster.</p>
                    </div>
                    <div class="content">
                        <ul>
                            <li>Drupal CMS</li>
                            <li>Newsletters</li>
                            <li>Responsive Design</li>
                            <li>Social Media</li>
                            <li>Database</li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <div class="content">
                        <h4>Stergios Paysagist</h4>
                    </div>
                    <div class="content">
                        <a href="http://stergios.ca" target="blank">stergios.ca</a>
                    </div>
                    <div class="content">
                        <p><i>Project is currently under development.</i> Stergios is a landscaping and snow removal company requiring a simple fresh website that will showcase the companies services.</p>
                    </div>
                    <div class="content">
                        <ul>
                            <li>CMS</li>
                            <li>Bilingual</li>
                            <li>Clean Mobile Layout</li>
                        </ul>
                    </div>
                </div>
                <div class="block">
                    <div class="content">
                        <h4>Roxy's Designs</h4>
                    </div>
                    <div class="content">
                        <a href="http://roxysdesigns.ca" target="blank">roxysdesigns.ca</a>
                    </div>
                    <div class="content">
                        <p>Sucessfully analyzed the client's need for an online profile for her business. Did everything from organizing meetings, content editing and a custom web design that suited the client's taste.</p>
                    </div>
                    <div class="content">
                        <ul>
                            <li>Laravel Framework</li>
                            <li>Bilingual</li>
                            <li>Mobile Friendly</li>
                        </ul>
                    </div>
                </div>

                <div class="block">
                    <div class="content">
                        <h4>Cool Basslines</h4>
                    </div>
                    <div class="content">
                        <a href="http://coolbasslines.com" target="blank">coolbasslines.com</a>
                    </div>
                    <div class="content">
                        <p>Personal project involving responsive mobile first web design and a custom grid system that I developed</p>
                    </div>
                </div>

            </div>

        </div>

        <div class="group" id="education">

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h3>Education</h3>              
                    </div>
                </div>
            </div>

            <div class="region">
                <div class="block">
                    <div class="content">
                        <h4>Concordia University</h4>
                    </div>
                    <div class="content">
                        <p>Web Programming Diploma</p>
                    </div>
                </div>
                <div class="block">
                    <div class="content">
                        <h4>McGill University</h4>
                    </div>
                    <div class="content">
                        <p>Bachelor of Engineering</p>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <footer class="container" id="footer">
        <div class="group">
            <div clas="region">
                <div class="block">
                    <div class="content">
                        <!-- <img src="images/george-petridis-web-developer-montreal.jpg"> -->
                        <p>&copy George Petridis 2014 - <?php echo date('Y'); ?></p>
                        <p>{{{ "Updated on: ".date("F d Y .", filemtime(__FILE__)) }}}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>



@endsection
