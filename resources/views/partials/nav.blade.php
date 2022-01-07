<nav id="menu1" class="bar bar--sm bar-1 hidden-xs ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 hidden-xs">
                            <div >
                            @include('partials.logo')
                            </div>
                            <!--end module-->
                        </div>
                        <div class="col-md-10 col-sm-12 text-right text-left-xs text-left-sm" style="padding-top:45px">
                            <div class="bar__module">
                                <ul class="menu-horizontal text-left">
                                @php
                                $user =  Auth::user();
                                @endphp
                                @guest    
                                <li><a href="{{ route('index')}}">Home</a></li>

                                <li class="dropdown">
                                    <span class="dropdown__trigger">Who Are We</span>
                                    <div class="dropdown__container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="dropdown__content col-md-2 col-sm-4">
                                                    <ul class="menu-vertical">
                                                        <li ><a style='font-weight: 600;' href="{{ route('about')}}">About</a></li>
                                                        <li><a style='font-weight: 600;' href="{{ route('team')}}">Our Team</a></li>
                                                        <li><a style='font-weight: 600;' href="http://sofytagency.com/#testimony">Testimonials</a></li>
                                                        </ul>
                                                       </div>
                                                      </div>
                                                     </div> 
                                                   </div>   
                                                </li>    









                                <li><a href="{{ route('services')}}">Services</a></li>
                                <li><a href="{{ route('gallery')}}">Gallery</a></li>
                                <li><a href="{{ route('school.partners')}}">Schools & Partners</a></li>
                                <li><a href="{{ route('contact')}}">Contact</a></li>
                                @endguest   


                                @auth 
                                <li><a href="{{ route('home.users')}}">Users</a></li>
                                <li><a href="{{ route('home.visa')}}">Visa Applications</a></li>
                                <li><a href="{{ route('home.school')}}">School Application</a></li>
                                <li><a href="{{ route('test')}}">Testimony</a></li>
                                <li class="pull-right" style="color:#EF6F7B">
                             Welcome   {{ $user->name }}  /     
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                                </li>                                
                                @endauth

          
                            
                                  

                                </ul>
                            </div>
                            <!--end module-->
                            <div class="bar__module">
                                <a class="btn btn--sm type--uppercase" href="#">
                                    <span class="btn__text">
                                    Call 08033040958
                                    </span>
                                </a>
                               
                            </div>
                            <!--end module-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </nav>
            <!--end bar-->