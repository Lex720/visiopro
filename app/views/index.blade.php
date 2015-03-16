<!DOCTYPE html>
<html lang="es-es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('favicon.ico') }}">

        <title>Visionary Projects</title>

        <link rel="shortcut icon" href="img/favicon.ico">
        <link href="http://www.visiopro.com.ve/" rel="canonical"></link>
        <meta content="Visionary Projects, C.A" name="author"></meta>
        <meta content="Visionary Projects es una Agencia de Desarrollo Web. ¡Creamos diseños y estrategias web únicas y efectivas." name="description"></meta>
        <meta content="Agencia de Desarrollo Web, Diseño Web, Marketing Web, Analitica web" name="keywords"></meta>
        <meta content="Spanish" name="Language"></meta>

        <meta content="es_ES" property="og:locale"></meta>
        <meta content="article" property="og:type"></meta>
        <meta content="Agencia de Desarrollo Web | Diseño Web | Marketing | Analitica | Venezuela" property="og:title"></meta>
        <meta content="Visionary Projects es una Agencia de Desarrollo Web. ¡Creamos diseños y estrategias web únicas y efectivas." property="og:description"></meta>
        <meta content="http://www.visiopro.com.ve/" property="og:url"></meta>
        <meta content="https://www.facebook.com/#" property="article:publisher"></meta>

        <!-- jQuery library (served from Google) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>    

        <!-- Bootstrap core CSS -->
        {{ HTML::style('assets/css/bootstrap.min.css') }}

        <!-- Bootstrap Core JavaScript -->
        {{ HTML::script('assets/js/bootstrap.min.js') }}

        <!-- Scrolling Nav CSS & JavaScript -->
        {{ HTML::style('assets/css/scrolling-nav.css') }}
        {{ HTML::script('assets/js/jquery.easing.min.js') }}
        {{ HTML::script('assets/js/scrolling-nav.js') }}

        <!-- Custom styles for this template -->
        {{ HTML::style('assets/css/custom.css') }}
        {{ HTML::style('assets/css/addons.css') }}

        <!-- Parallax Slider -->
        {{ HTML::style('assets/css/parallax-slider.css') }}
        {{ HTML::script('assets/js/jquery.cslider.js') }}

        <!-- Mockup Slider -->
        {{ HTML::style('assets/css/animate.css') }}

        <!-- Custom JS -->
        {{ HTML::script('assets/js/modernizr.custom.js') }}
        {{ HTML::script('assets/js/classie.js') }}

        <!-- Loader Script -->
        <script type="text/javascript"> $(window).load(function() {$(".loader").fadeOut("slow");})</script>

        <!-- Class Script -->
        <script type="text/javascript">

            //Remove Class Script
            $(window).load(function() {
                if ($(window).width() < 768) {
                    $(".navbar").addClass("navbar-default");
                }
                else {
                    $(".navbar").removeClass("navbar-default");
                }
            });
            //Resize Class Script
            $(window).resize(function() {
                if ($(window).width() < 768) {
                    $(".navbar").addClass("navbar-default");
                }
                else {
                    $(".navbar").removeClass("navbar-default");
                }
            });
        </script>
    
    </head>

    <!-- Loader Code -->
    <div class="loader">
        <ul class="spinner"> 
            <li></li> 
            <li></li> 
            <li></li> 
            <li></li> 
        </ul>
    </div>

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-fixed-top" role="navigation">
            
            <div class="container">
                
                <div class="navbar-header page-scroll">

                    <div class="navbar-brand page-scroll hidden-xs img1"> {{ HTML::image('assets/img/logos/logo.png') }} </div>
                    <div class="navbar-brand page-scroll hidden-xs img2"> {{ HTML::image('assets/img/logos/logo_black.png') }} </div>

                    <div class="navbar-brand page-scroll visible-xs"> {{ HTML::image('assets/img/logos/logo_ico.png') }} </div>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a class="page-scroll" href="#page-top">Inicio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Nosotros</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#services">Servicios</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Cont&aacute;ctanos</a>
                        </li>
                    </ul> 
                </div>
                <!-- /.navbar-collapse -->
                
            </div>
            <!-- /.container -->
        </nav>

        <!-- Intro Section -->
        <section id="intro" class="intro-section">
            <div class="container-fluid">
                <div class="row">

                    <!-- Parallax Slider -->
                    <div id="da-slider" class="da-slider">
                        <div class="da-slide">
                            <h2>¡Hola, bienvenido!</h2>
                            <p>¿Tienes un negocio y piensas en impulsar tus ventas?<br>
                            ¿Quieres dar a conocer tus servicios?<br>
                            ¿Piensas crecer en el mercado?</p>
                            <a href="#" class="da-link">
                            <nav class="da-arrows">
                            <span class="da-arrows-next">Saber mas</span>
                            </nav>
                            </a>
                            <!--<div class="da-img"> {{ HTML::image('assets/img/slider/parallax/1.png') }} </div>-->
                        </div>
                        <div class="da-slide">
                            <h2>Visionary Projects</h2>
                            <p>Somos una compañía dedicada a brindar soluciones de diseño y desarrollo web acorde a tus necesidades.</p>
                            <!--<a href="#" class="da-link">Read more</a>
                            <div class="da-img"> {{ HTML::image('assets/img/slider/parallax/2.png') }} </div>-->
                        </div>
                    </div>
            
                    <script type="text/javascript">
                        $(function() {
                        
                            $('#da-slider').cslider({
                                autoplay    : true,

                                bgincrement : 100,
                                // increment the background position 
                                // (parallax effect) when sliding

                                current     : 0,    
                                // index of current slide
                                
                                interval    : 6000  
                                // time between transitions

                            });
                        
                        });
                    </script>

                </div>
            </div>
        </section>


        <!-- About Section -->
        <section id="about" class="about-section">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    
                        <h1>¡Conoce acerca de nosotros!</h1><div class="underlineh1"></div>

                        <br><br>
                
                        <p class="visible-xs"> {{-- HTML::image('assets/img/logo.png', '', array('class' => 'img-responsive')) --}} </p>
                        
                        <p> <p2><b>Visionary Projects</b></p2> es una compañ&iacute;a <p2>dedicada</p2> a brindar soluciones de diseño y desarrollo web.</p>
                        
                        <br><br><br>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbs">
                                <div class="caption">
                                    <img src="{{ ('assets/img/thumbs/1.png') }}" >
                                    <h3>Excelente atencion</h3>
                                    <p>En Visiopro nos esforzamos en ofrecer solo lo mejor, las soluciones más ajustadas a las necesidades y conveniencias de nuestros clientes, ofrecemos el mejor asesoramiento para hacer un óptimo marketing web a su empresa y mejora de los procesos internos. <p2>Su Éxito es nuestro Éxito!</p2></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbs">
                                <div class="caption">
                                    <img src="{{ ('assets/img/thumbs/2.png') }}" >
                                    <h3>Paginas originales</h3>
                                    <p>Creamos páginas web dinámicas hechas a tu medida y necesidades. Estamos completamente comprometidos en ayudarte a impulsar tu imagen o empresa al darte presencia en internet con lo cual podrás lograr ser reconocido mientras aumentas la <p2>innovación y profesionalidad de tu marca.</p2></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbs">
                                <div class="caption">
                                    <img src="{{ ('assets/img/thumbs/3.png') }}" >
                                    <h3>Crecimiento empresarial</h3>
                                    <p>Ofrecemos novedosos métodos publicitarios que ayudarán a expandir tu negocio hacia nuevos horizontes aprovechando el sistema de marketing digital practicado en la actualidad por numerosas empresas, únete a esta nueva tendencia que crece cada día más.. <p2>No te quedes atrás!</p2></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>


        <!-- Separador -->
        <div class="container-fluid">
            <div class="row">

                <!-- Top Navigation -->
                <div id="wrap" class="wrap">
                    <div class="mockup">
                        <img class="mockup__img" src="{{ ('assets/img/slider/mockup/mockup.jpg') }}" />
                        <div id="mobile" class="mobile">
                            <ul id="slideshow" class="slideshow">
                                <li class="slideshow__item"><img src="{{ ('assets/img/slider/mockup/1.jpg') }}"/></li>
                                <li class="slideshow__item"><img src="{{ ('assets/img/slider/mockup/2.jpg') }}"/></li>
                                <li class="slideshow__item"><img src="{{ ('assets/img/slider/mockup/3.jpg') }}"/></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{ HTML::script('assets/js/mockup.js') }}
                
                <script>
                    (function() {
                        new Slideshow( document.getElementById( 'slideshow' ) );

                        /* Mockup responsiveness */
                        var body = docElem = window.document.documentElement,
                            wrap = document.getElementById( 'wrap' ),
                            mockup = wrap.querySelector( '.mockup' ),
                            mockupWidth = mockup.offsetWidth;

                        scaleMockup();

                        function scaleMockup() {
                            var wrapWidth = wrap.offsetWidth,
                                val = wrapWidth / mockupWidth;

                            mockup.style.transform = 'scale3d(' + val + ', ' + val + ', 1)';
                        }
                        
                        window.addEventListener( 'resize', resizeHandler );

                        function resizeHandler() {
                            function delayed() {
                                resize();
                                resizeTimeout = null;
                            }
                            if ( typeof resizeTimeout != 'undefined' ) {
                                clearTimeout( resizeTimeout );
                            }
                            resizeTimeout = setTimeout( delayed, 50 );
                        }

                        function resize() {
                            scaleMockup();
                        }
                    })();
                </script>

            </div>
        </div>


         <!-- Services Section -->
        <section id="services" class="services-section">
            <div class="container-fluid">
                <div class="row">
                    
                    <h1>Nuestros servicios</h1><div class="underlineh1"></div>

                    <br><br>

                    <p>Estos son los servicios que ofrecemos para ayudar a que tu empresa <p2>crezca y se expanda</p2> en su ambito comercial.</p>

                    <br>

                    <div id="main" class="main demo-drawings">
                        <figure>
                            <div class="drawings mac">
                                <img class="svgillustration" src="{{ ('assets/img/svganimation/1.png') }}" alt="iMac Illustration" />
                                <svg class="line-drawing" id="mac" width="100%" height="600" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 600">
                                    <path d="M 257.85024,158.16843 754.90716,35.953537 731.06035,405.57906 228.78695,448.8014 z" /> 
                                    <path d="m 259.83736,136.30872 c 0,0 -6.74232,0.97288 -11.61303,5.46502 -3.96751,3.659 -6.12527,9.40831 -7.01729,20.86596 l -36.5158,346.77284 c 0,0 -3.47753,13.41382 10.68151,14.15903 l 517.67468,-21.11485 c 0,0 18.38216,0.74522 19.87257,-19.62369 L 784.07068,11.384991 c 0,0 0.059,-13.07475 -23.20111,-7.2266959 L 259.83736,136.30872 z" /> 
                                    <path d="m 211.29271,522.89381 c 0,0 12.5259,6.63947 19.72988,5.64573 l 513.45197,-19.12737 c 0,0 18.87884,0.74557 21.61112,-18.87848 l 29.5596,-462.528221 c 0,0 1.49047,-10.184447 -13.54272,-21.4997553" /> 
                                    <path d="M 208.59466,472.34637 756.27723,432.02629" /> 
                                    <path d="m 591.36015,515.11602 11.15099,41.36862 c 0,0 8.62435,33.16197 -11.15099,33.16197 l -55.35924,4.26821 c 0,0 -9.65275,0.58387 -13.08781,0.58387 -1.35069,0 -5.16991,0.0265 -5.16991,0.0265 l -149.57016,-0.0347 c 0,0 -1.45726,0.12035 -1.52173,-0.0853 -0.14195,-0.4531 1.2173,-0.44973 1.2173,-0.44973 l 93.42473,-4.68143 c 0,0 23.85536,1.49042 23.85127,-27.57288 l -2.70885,-42.52741" /> 
                                    <path d="m 595.82547,514.94947 11.52956,43.3982 c 0,0 8.23944,32.78936 -11.52956,38.00586 h -58.52044 l -12.10971,0.99374 -16.58099,-0.61332 -128.7355,0.17849 c 0,0 -10.74373,-0.45795 -13.22753,-2.50727" /> 
                                    <path d="m 486.38703,90.292617 c -0.3846,2.126175 -1.9686,3.619643 -3.5379,3.335758 -1.5693,-0.283875 -2.5297,-2.237606 -2.1451,-4.363775 0.38461,-2.12617 1.96859,-3.619642 3.53789,-3.335762 1.56931,0.283879 2.52971,2.23761 2.14511,4.363779 z" /> 
                                    <path d="m 483.95449,571.8934 120.41968,0" /> 
                                    <path class="line-round" d="m 783.49986,166.74023 -9.12881,133.48624" /> 
                                    <path class="line-round" d="m 773.91008,309.26031 -1.81646,29.43591" />
                                </svg>
                            </div>
                            <figcaption>
                                <h2>Diseño y desarrollo Web</h2>
                                <p>Hacemos que tu sitio web sea visualmente atractivo para así garatizar tu éxito. Tenemos conocimientos y experiencia en todas las áreas de diseño/desarrollo de sitios y su funcionalidad.
                                Todos nuestros proyectos de diseño web son desarrollados con base y fundamento pensando en las necesidades de tu negocio.
                                El diseño web lo planificamos utilizando soluciones de vanguardia, a menudo de código abierto, limpio y semántico, compatible con los estándares del W3C.</p>
                            </figcaption>
                        </figure>
                        <br><br><br>
                        <figure>
                            <div class="drawings ipad">
                                <img class="svgillustration" src="{{ ('assets/img/svganimation/2.png') }}" alt="iPad Illustration" />
                                <svg class="line-drawing" id="ipad" width="100%" height="600" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 600">
                                    <path d="m 119.21227,317.3823 c -14.7712,15.1851 5.88505,25.59207 5.88505,25.59207 0.40139,0.20208 1.05981,0.52884 1.46365,0.72599 L 416.1869,485.12665 c 0.40383,0.19714 1.05955,0.52933 1.45709,0.7385 0,0 9.89696,5.20239 19.33671,5.20239 10.02979,0 21.16627,-6.20065 21.16627,-6.20065 0.39239,-0.21867 1.03419,-0.57756 1.42577,-0.79787 L 875.52126,250.20545 c 0.39157,-0.22029 1.01766,-0.60506 1.39068,-0.85502 0,0 3.76458,-2.52182 6.28676,-5.9447 4.64984,-6.31148 4.67435,-16.20216 -6.96533,-21.61914" />
                                    <path d="m 575.54015,111.04772 c 0.42726,0.13914 1.12167,0.38012 1.54344,0.53508 l 295.83425,108.82565 c 0.42173,0.15492 1.11261,0.40654 1.53524,0.55877 0,0 8.74562,3.15059 8.74562,7.68883 0,4.90148 -6.23222,7.96165 -6.23222,7.96165 -0.40304,0.19795 -1.05387,0.53972 -1.44597,0.75944 L 459.57383,470.45511 c -0.39182,0.21977 -1.02655,0.59091 -1.41001,0.8251 0,0 -10.10904,6.17208 -21.18286,6.17208 -11.34614,0 -20.00816,-4.0849 -20.00816,-4.0849 -0.40628,-0.19138 -1.06961,-0.5089 -1.4737,-0.70524 L 123.6865,330.99352 c -0.40409,-0.19636 -1.05544,-0.53646 -1.44756,-0.75595 0,0 -5.53406,-3.09773 -5.53406,-8.40769 0,-4.01646 6.48005,-7.1404 6.48005,-7.1404 0.40464,-0.19523 1.06771,-0.51303 1.47317,-0.70637 L 548.2304,111.96156 c 0.40544,-0.19333 1.07644,-0.49396 1.49058,-0.66796 0,0 5.62258,-2.36114 13.70077,-2.36114 5.62771,2.8e-4 12.1184,2.11529 12.1184,2.11529 l 0,-3e-5 z" />
                                    <path d="m 543.26166,127.71414 c 0.40435,-0.19552 1.07938,-0.22491 1.4993,-0.0657 l 293.28845,111.24782 c 0.41989,0.15925 0.4425,0.46837 0.0499,0.68649 L 460.50648,449.50474 c -0.39264,0.21839 -1.04619,0.23966 -1.45219,0.0473 L 166.04957,310.69751 c -0.406,-0.1925 -0.40736,-0.50975 -0.002,-0.7055 L 543.26166,127.71414 z" />
                                    <path class="stroke-medium" d="m 706.15488,173.08318 c 0,0.91484 -1.4935,1.65644 -3.33577,1.65644 -1.8422,0 -3.3357,-0.7416 -3.3357,-1.65644 0,-0.91483 1.4935,-1.65642 3.3357,-1.65642 1.84227,0 3.33577,0.74159 3.33577,1.65642 z" />
                                    <path class="stroke-medium" d="m 278.50454,390.30812 3.53696,1.68339 c 0,0 0.76955,0.50214 1.67738,0.50214 0.86243,0 1.65319,-0.50676 1.65319,-0.50676 l 4.13305,-2.11962 c 0,0 0.72489,-0.34475 0.7434,-0.69248 0.0191,-0.35727 -0.70364,-0.67122 -0.70364,-0.67122 l -3.58517,-1.86828 c 0,0 -0.96451,-0.44825 -1.60931,-0.45586 -0.63722,-0.007 -1.65291,0.55277 -1.65291,0.55277 l -3.56175,1.90399 c 0,0 -1.14669,0.5217 -1.26023,0.86183 -0.14841,0.44469 0.62903,0.8101 0.62903,0.8101 z" />
                                    <path d="m 299.03452,387.07281 c 0.45135,4.3632 -5.93332,8.59855 -14.26055,9.46 -8.32723,0.86146 -15.44369,-1.97728 -15.89506,-6.34047 -0.45136,-4.36317 5.93329,-8.59856 14.26054,-9.46 8.32726,-0.86145 15.4437,1.97726 15.89507,6.34047 z" />
                                    <path class="stroke-medium" d="m 799.36443,293.02437 c 0,0 -0.94359,-2.05808 3.27714,-4.39419 4.22078,-2.33608 12.93454,-7.30568 12.93454,-7.30568 0,0 3.5378,-1.43367 3.87817,0.40437 l -20.08985,11.2955 z" />
                                    <path class="stroke-medium" d="m 821.14882,280.77064 c 0,0 -0.94354,-2.05806 3.27723,-4.3942 4.22072,-2.3361 11.30066,-6.48872 11.30066,-6.48872 0,0 3.53775,-1.43369 3.87814,0.40435 l -18.45603,10.4786 z" />
                                    <path class="stroke-medium" d="m 857.50023,260.3377 -5.55012,3.1206 c 0,0 -2.80392,-1.04376 2.02106,-3.57782 3.75892,-1.97422 3.52906,0.45723 3.52906,0.45723 z" />
                                    <path class="stroke-thin" d="m 273.28038,410.96467 c 0.5299,0.28482 0.72866,0.94516 0.44384,1.47508 l 0,0 c -0.28457,0.5296 -0.94489,0.72867 -1.47507,0.44386 l -16.13,-7.94862 c -0.52991,-0.28481 -0.72869,-0.94515 -0.44413,-1.47482 l 0,0 c 0.28483,-0.52988 0.94515,-0.72868 1.47508,-0.44411 l 16.13028,7.94861 z" />
                                    <path class="stroke-thin" d="m 116.07477,321.73853 c 0,0 -5.31512,6.9721 6.48467,12.73596 l 290.68577,141.59869 c 0,0 21.30792,13.2068 46.5642,-0.81691 L 880.65707,239.30382 c 0,0 8.75949,-4.49304 2.54167,-11.43679" />
                                </svg>
                            </div>
                            <figcaption>
                                <h2>Diseño grafico e imagen corporativa</h2>
                                <p>Hoy más que nunca todas las organizaciones necesitan diferenciarse unas de otras y sobre todo destacarse.
                                Nos encargamos de desarrollar, crear y diseñar toda la imagen e identidad corporativa de su empresa, negocio o servicio, y nos ocuparemos de toda la comunicación gráfica que necesite.
                                Una identidad cuidadosamente construida es de gran ayuda para lograr que una organización, institución o empresa, tengan una proyección acertada.</p>
                            </figcaption>
                        </figure>
                        <br><br><br>
                        <figure>
                            <div class="drawings iphone">
                                <img class="svgillustration" src="{{ ('assets/img/svganimation/3.png') }}" alt="iPhone Illustration" />
                                <svg class="line-drawing" id="iphone" width="100%" height="600" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 600">
                                    <path d="m 579.44258,124.24714 c 0,0 26.94592,-21.17898 59.75842,0 l 123.29566,73.28106 c 0,0 33.20953,17.10157 -6.16339,38.18122 l -333.2977,213.97805 c 0,0 -27.64185,18.89166 -61.05094,-5.96649 L 237.49608,357.2156 c 0,0 -29.23265,-17.89804 0,-36.591 l 341.9465,-196.37746 z" />
                                    <path d="m 279.79799,312.77734 c -0.40628,-0.27771 -0.39017,-0.70636 0.0358,-0.95245 L 570.0171,144.0838 c 0.42621,-0.24639 1.12037,-0.24103 1.54248,0.0122 l 159.74292,95.72926 c 0.42206,0.25297 0.42768,0.67595 0.0122,0.93994 L 443.55324,423.67047 c -0.41553,0.26401 -1.08759,0.25296 -1.49417,-0.0247 L 279.79799,312.77734 z"/>
                                    <path d="m 352.14146,381.97442 c 0,7.66059 -10.04974,13.87073 -22.44674,13.87073 -12.39698,0 -22.44672,-6.21014 -22.44672,-13.87073 0,-7.66058 10.04974,-13.87075 22.44672,-13.87075 12.397,0 22.44674,6.21017 22.44674,13.87075 z"
                                    id="ellipse38" />
                                    <path d="m 764.95436,199.01191 c 18.61572,9.73636 15.39026,23.07615 15.39026,23.07615 l -1.04407,15.6605 c 0.29834,10.73863 -14.76562,18.4943 -14.76562,18.4943 L 430.59319,472.2088 c -40.41904,26.99573 -69.05539,3.43039 -69.05539,3.43039 L 228.05057,380.78125 c 0,0 -8.20313,-6.33878 -8.57601,-15.13849 l 0,-22.22303 c 0,0 -1.58065,-11.40978 17.20182,-22.26028" />
                                    <path d="m 688.91731,169.48872 c 0,1.64745 -2.22589,2.98296 -4.97168,2.98296 -2.74579,0 -4.97168,-1.33551 -4.97168,-2.98296 0,-1.64745 2.22589,-2.98296 4.97168,-2.98296 2.74579,0 4.97168,1.33551 4.97168,2.98296 z" />
                                    <path d="m 650.93416,162.32963 c 0,1.09835 -1.42462,1.98874 -3.18189,1.98874 -1.75732,0 -3.18194,-0.89039 -3.18194,-1.98874 0,-1.09835 1.42462,-1.98874 3.18194,-1.98874 1.75727,0 3.18189,0.89038 3.18189,1.98874 z" />
                                    <path d="m 686.33144,185.74344 c -0.56708,0.94053 -1.78949,1.24299 -2.72998,0.67594 l -27.41663,-16.53482 c -0.94055,-0.56736 -1.24304,-1.78978 -0.67596,-2.73001 l 0,0 c 0.56707,-0.94052 1.78918,-1.24328 2.72998,-0.67593 l 27.41668,16.53482 c 0.9408,0.56706 1.24298,1.78947 0.67591,2.73 l 0,0 z" />
                                    <path class="stroke-medium" d="m 588.24153,363.77246 c -1.16809,1.61905 -2.84607,2.40411 -3.74792,1.75345 -0.90186,-0.65064 -0.68604,-2.49057 0.48205,-4.10965 1.16803,-1.61902 2.84607,-2.40409 3.74793,-1.75345 0.90185,0.65063 0.68597,2.49063 -0.48206,4.10965 z" />
                                    <path class="stroke-medium" d="m 230.85085,325.2605 c 0,0 -25.27755,17.82824 3.35882,36.83322 l 127.5213,89.33947 c 0,0 31.91761,23.56534 63.98438,2.38639 L 763.08748,238.30111 c 0,0 30.27698,-17.59944 4.41241,-36.22798" />
                                    <path class="stroke-medium" d="m 239.70497,371.23965 c 2.18652,4.51798 2.5224,10.31534 -0.64343,11.84769 -2.85379,1.38113 -7.19249,-1.68387 -9.69042,-6.84586 -2.49882,-5.16202 -2.21067,-10.466 0.64313,-11.84741 2.85349,-1.3811 7.19218,1.68359 9.69072,6.84558 z" />
                                    <path class="stroke-medium" d="m 759.60561,233.86953 2.9519,4.4088 -0.37286,19.48467" />
                                    <path class="stroke-medium" d="m 429.98912,444.76443 2.95194,4.40879 -0.67981,21.95693" />
                                    <path class="stroke-medium" d="m 285.82054,406.03701 c 0,0 14.24539,9.73667 18.89194,13.125 1.89477,1.38172 5.44391,4.16361 3.38058,8.75019 -0.30545,0.67892 -1.55352,1.34234 -3.7287,-0.44742 l -18.54412,-13.27417 c 0,0 -4.22596,-2.83411 -3.7287,-6.31403 3e-4,0 0.19928,-3.67917 3.729,-1.83957 z" />
                                    <path class="stroke-medium" d="m 277.22832,400.84362 c 0.92495,2.05231 0.48422,4.2526 -0.98441,4.91449 -1.4686,0.66193 -3.409,-0.46521 -4.33395,-2.51751 -0.92496,-2.05228 -0.48426,-4.2526 0.98437,-4.91449 1.46863,-0.6619 3.40903,0.46524 4.33399,2.51751 z" />
                                    <path class="stroke-medium" d="m 318.65367,430.76556 c 0.92496,2.05231 0.50604,4.24277 -0.9357,4.89255 -1.44177,0.64978 -3.36035,-0.48715 -4.28531,-2.53946 -0.92495,-2.05228 -0.50604,-4.24277 0.9357,-4.89255 1.44177,-0.64978 3.36035,0.48718 4.28531,2.53946 z" />
                                </svg>
                            </div>
                            <figcaption>
                                <h2>Marketing Digital</h2>
                                <p>Te brindamos la mejor manera de darte a conocer mediante la publicidad. A través de nosotros podrás potenciar el valor de tu marca y conseguir que tu imagen corporativa y servicios se diferencien y se destaquen de tu competencia.
                                Una de las cosas más importantes a la hora de llevarlas a cabo, es saber bien que es lo que se va a comunicar, a quien y para qué, nosotros nos encargamos del cómo y te orientaremos a encontrar esas respuestas tras nuestra experiencia.</p>
                            </figcaption>
                        </figure>
                    </div>

                    {{ HTML::script('assets/js/svganimations.js') }}
                        
                </div>
            </div>
        </section>


        <!-- Separador -->
        <div class="container-fluid hidden-xs">
            <div class="row">
                {{ HTML::image('assets/img/dividers/divider1.jpg', '', array('class' => 'img-responsive')) }}
            </div>
        </div>
        <!-- Separador mobile -->
        <div class="container-fluid visible-xs">
            <div class="row">
                {{ HTML::image('assets/img/dividers/divider1a.jpg', '', array('class' => 'img-responsive')) }}
            </div>
        </div>


        <!-- Details Section -->
        <section id="details" class="details-section">
            <div class="container-fluid">
                <div class="row">
                    
                    <h1>Desarrollo Web</h1><div class="underlineh1"></div>

                    <br><br>

                    <p>Le ofrecemos desarrollos front and back end de <p2>ultima generacion</p2>.</p>

                    <ul class="grid cs-style-6">
                        
                        <li>
                            <figure>
                                <img src="{{ ('assets/img/grid/1.png') }}" >
                                <figcaption>
                                    <h3>Paginas</h3>
                                    <span>El mejor conjunto de tecnologías de software combinadas con los procesos de base de datos para crear una aplicacion adaptada completamente a tu negocio y a tus necesidades.</span>
                                    <a class="page-scroll" href="#contact">Pedir servicio</a>
                                </figcaption>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <img src="{{ ('assets/img/grid/4.png') }}" >
                                <figcaption>
                                    <h3>Responsive</h3>
                                    <span>Optimizamos tu web para que sea vista de la mejor manera desde PCs, laptops, tablets y smartphones, todo esto con el objetivo de mejorar la experiencia de navegación del usuario.</span>
                                    <a class="page-scroll" href="#contact">Pedir servicio</a>
                                </figcaption>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <img src="{{ ('assets/img/grid/2.png') }}" >
                                <figcaption>
                                    <h3>Empresarial</h3>
                                    <span>Diseñamos y desarrollamos para ti un sistema capaz de llevar un registro de datos con métodos de consulta y modificación de los mismos, sistemas de reportes, control de pagos y mucho más.</span>
                                    <a class="page-scroll" href="#contact">Pedir servicio</a>
                                </figcaption>
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <img src="{{ ('assets/img/grid/3.png') }}" >
                                <figcaption>
                                    <h3>eCommerce</h3>
                                    <span>Ofrecemos sitios de venta virtual completamente automatizados y fáciles de usar, en ellos podrás exhibir y vender tus productos para que tu negocio siga creciendo en el mercado.</span>
                                    <a class="page-scroll" href="#contact">Pedir servicio</a>
                                </figcaption>
                            </figure>
                        </li>    
                        
                    </ul>

                    {{ HTML::script('assets/js/toucheffects.js') }}

                </div>
            </div>
        </section>


        <!-- Separador -->
        <div class="container-fluid hidden-xs">
            <div class="row">
                {{ HTML::image('assets/img/dividers/divider2.jpg', '', array('class' => 'img-responsive')) }}
            </div>
        </div>
        <!-- Separador mobile -->
        <div class="container-fluid visible-xs">
            <div class="row">
                {{ HTML::image('assets/img/dividers/divider2a.jpg', '', array('class' => 'img-responsive')) }}
            </div>
        </div>


        <!-- Contact Section -->
        <section id="contact" class="contact-section">
            <div class="container">
            
                <h1>¡Contactanos hoy!</h1><div class="underlineh1"></div>

                <br><br>
            
                <p>Si necesitas el cálculo del presupuesto para tu proyecto no dudes en comunícarte completando nuestro formulario de contacto o utilizando nuestros datos para hacernos llegar tu mensaje.</p>
            
                <br>
                
                <div class="row text-justify">
                    
                    <div class="col-xs-12 col-sm-6 col-md-6">
                    
                        <h3>Formulario de contacto</h3>
                        
                        <br>

                        {{ Form::open(['action' => 'HomeController@sendEmail', 'method' => 'POST', 'class' => 'form-horizontal']) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Nombre', ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nombre', 'required' => true]) }}
                                    {{ $errors->first('name', '<p class="error">:message</p>') }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    {{ Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email', 'required' => true]) }}
                                    {{ $errors->first('email', '<p class="error">:message</p>') }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('subject', 'Asunto', ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    {{ Form::text('subject', '', ['class' => 'form-control', 'placeholder' => 'Asunto', 'required' => true]) }}
                                    {{ $errors->first('subject', '<p class="error">:message</p>') }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('message', 'Mensaje', ['class' => 'col-sm-2 control-label']) }}
                                <div class="col-sm-10">
                                    {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Mensaje', 'required' => true, 'rows' => '3']) }}
                                    {{ $errors->first('message', '<p class="error">:message</p>') }}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-8">
                                    {{ Form::button('Enviar mensaje', ['type' => 'submit', 'class' => 'btn']) }}
                                    {{ Form::button('Limpiar', ['type' => 'reset', 'class' => 'btn']) }}
                                </div>
                            </div>

                        {{ Form::close() }}
                    
                    </div>
                    
                    <div class="col-xs-0 col-sm-1 col-md-1"></div>
                    
                    <div class="col-xs-12 col-sm-5 col-md-5">
                    
                        <h3>Datos de contacto</h3>
                        
                        <br>
                        
                        <address>
                        <strong>Direccion:</strong><br>
                        Las Garzas, Lecherias. Estado Anzoategui. Venezuela.
                        
                        <br><br>
                        
                        <strong>Telefonos:</strong><br>
                        Celular: +58 - 412 - 8418822
                        
                        <br><br>

                        <strong>Emails:</strong><br>
                        <a href="mailto:#">info@visiopro.com.ve</a><br>
                        <a href="mailto:#">social@visiopro.com.ve</a><br>
                        </address>
                        
                    </div>

                    @if(Session::has('message'))
                        <div class="col-md-4 col-md-offset-4 pad50">
                            <div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><strong>{{ Session::get('message', '') }}</strong></p>
                            </div>
                        </div>
                    @endif
                    
                </div>
            
            </div>
        </section>


        <!-- Social Section -->
        <section id="contact" class="social-section">
            <div class="container-fluid">
                <div class="row">
                
                    <div class="hi-icon-wrap hi-icon-effect-8">
                        <a href="https://www.facebook.com/visionaryprojects" target="_blank" class="hi-icon hi-icon-fb">Facebook</a>
                        <a href="http://instagram.com/visiopro_social" target="_blank" class="hi-icon hi-icon-ig">Instagram</a>
                        <a href="https://twitter.com/visiopro_social" target="_blank" class="hi-icon hi-icon-tw">Twitter</a>
                    </div>
                
                </div>
            </div>  
        </section>
        
        <!-- Copyright Section -->
        <section id="contact" class="copyright-section">
            <div class="container-fluid">
                <div class="row">
                
                    <p>COPYRIGHT © 2014 Visionary Projects, C.A. Todo los derechos reservados.</p>
                
                </div>
            </div>  
        </section>

    </body>

</html>