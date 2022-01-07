<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - {{env('APP_NAME', false)}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">


        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/stack-interface.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/socicon.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/lightbox.min.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/flickity.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/iconsmind.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/jquery.steps.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




        <style type="text/css">
       body{
        font-family: 'Montserrat', sans-serif;
       }
        </style>





    </head>
    <body class=" ">
        <a id="start"></a>
        <div class="nav-container ">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-3 col-sm-2">
						@include('partials.logo')
                        </div>
                        <div class="col-xs-9 col-sm-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu1;hidden-xs">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->



            
			@include('partials.nav')







        </div>
        <div class="main-container">


 
  


		@yield('content')



		@include('partials.footer')

           
		</div>
		





        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/flickity.min.js') }}"></script>
        <script src="{{ asset('js/easypiechart.min.js') }}"></script>
        <script src="{{ asset('js/parallax.js') }}"></script>
        <script src="{{ asset('js/typed.min.js') }}"></script>
        <script src="{{ asset('js/datepicker.js') }}"></script>
        <script src="{{ asset('js/isotope.min.js') }}"></script>
        <script src="{{ asset('js/ytplayer.min.js') }}"></script>
        <script src="{{ asset('js/lightbox.min.js') }}"></script>
        <script src="{{ asset('js/granim.min.js') }}"></script>
        <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('js/countdown.min.js') }}"></script>
        <script src="{{ asset('js/twitterfetcher.min.js') }}"></script>
        <script src="{{ asset('js/spectragram.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>