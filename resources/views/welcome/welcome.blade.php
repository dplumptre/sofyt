@extends('layouts.app')
@section('title', 'Home')
@section('content')



@include('partials.slides')






<section class="unpad elaborate-form-1">
    <div class="row row--gapless">
        <div class="col-sm-6 height-50 bg--primary">
            <div class="pos-vertical-center clearfix">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <span class="h2">Welcome</span>
                    <p  style='font-weight: 400;color:white;font-size:20px'>
                        We are visa and immigration consultants.  Our core staffs have a combined experience of over 20years 
                        at both the United States Consulate General and VFS in visa processing, consultancy and application.
                    </p>
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div ><a class="btn btn--primary btn--icon" href="{{ route('about')}}">
                                    <span class="btn__text"><i class="icon-class"></i>Read More...</span>
                                    </a></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 height-50 bg--primary-1">
            <div class="pos-vertical-center clearfix">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <span class="h2">What will you like to do?</span>
                    <p class="lead">
                       </p>

              


                    <form>
                        <div class="row">
                            <a class="btn btn--primary btn--icon" href="{{ route('visa.form')}}">
                                <span class="btn__text"><i class="icon-class"></i>FOR VISA APPLICATION CLICK HERE</span>
                            </a>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <a class="btn bg--pinterest btn--icon" href="{{ route('school.form')}}">
                                <span class="btn__text"><i class="icon-class"></i>FOR FOREIGN SCHOOL PLACEMENT CLICK HERE</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>




























            

            <section class="text-center bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-10 col-md-8">
                            <h2>Key Areas</h2>
                            <p class="lead">
                            Our services however cover the broad spectrum of travel experience, They  include ...
                            </p>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class="bg--secondary">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row slider" data-arrows="false" data-paging="true">
                                <ul class="slides">
                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Scheduling  Appointments</h4>
                                            <p >
                                            We help our clients to search for and schedule suitable dates for their visa appointments at various embassies and consulates.
                                            </p>
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>
                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Completing  Online Visa</h4>
                                            <p>
                                            We assist applicants in completing their visa forms online or manually, we ensure that forms are filled accurately and that the ....    
                                           </p>
                                           <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>
                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Document Evaluations</h4>
                                            <p>
                                            We ensure that our clients attend their visa interviews with the right documents. We suggest and evaluate documents ...
                                            </p>
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>
                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Counselling</h4>
                                            <p>
                                            We offer complete guidance and expert personalized advice to visa applicants ...    
                                           </p>
                                           <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>
                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Educational Advisory Services</h4>
                                            <p>
                                            Sofyt is a strong advocate of people receiving the best education available globally. We have a worldwide...
                                            </p>
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>

                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Insurance</h4>
                                            <p>
                                            We represent major foreign and local insurance institutions to provide adequate travel, health and student insurance to our clients 
                                            </p>
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>


                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Visa Pickup</h4>
                                            <p>Generally, a citizen of a foreign country who wishes to enter another country must first obtain a visa,                                         
                                            </p>
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>

                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Foreign Medical Advisory Services</h4>
                                            <span>
                                            We provide our clients with sound and precise advice for medical tourism...
                                            </span><br><br /><br />
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>
                                    <li class="col-sm-4 col-xs-12">
                                        <div class="feature feature-3 boxed boxed--lg boxed--border text-center">
                                            <h4>Appeal of Wrongful Visa Denial</h4>
                                            <p>
                                            We help our clients to look carefully at the reason for visa denials and address them during reapplication and...
                                            </p>
                                            <a href="{{ route('services')}}">
                                                Learn More
                                            </a>
                                        </div>
                                        <!--end feature-->
                                    </li>

  

                                </ul>
                            </div>
                            <!--end of row-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
          

            <section class="text-center ">
                                <div class="container">
                                    <div class="row">

       
                                        <div class="col-sm-8 col-md-6">
                                            <div  style="margin-bottom:100px"><a id='testimony' href=""></a>&nbsp;</div>
                                            <h2>Latest Testimonials</h2>




                                            <div class="slider slider--ken-burns" data-arrows="true" data-children="3" data-autoplay="false" >
                                                            <ul class="slides">
                                                                @foreach($data as $data)
                                                        <li><iframe width="854" height="480" src="https://www.youtube.com/embed/{{$data->content}}" frameborder="0" allowfullscreen></iframe> </li>
                                                                 @endforeach
                                                    </ul>
                                                </div>









                                            <!-- <div class="video-cover border--round">
                                                <div class="background-image-holder">
                                                    <img alt="image" src="img/use/bg.png" />
                                                </div>
                                                <div class="video-play-icon"></div>
                                                <iframe width="854" height="480" src="https://www.youtube.com/embed/{{$data->content}}" frameborder="0" allowfullscreen></iframe> 
                                            </div> -->






                                                        








                                            <!--end video cover--><br />
                                            <span>FOR MORE 
                                                <strong>VIDEOS</strong>
                                                <a target="_blank" href="https://www.youtube.com/channel/UCb2as2DWyjEs1upUNcrIg9w/videos?disable_polymer=1">CLICK HERE &nearr;</a>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                                <!--end of container-->
                            </section>


<section class="elements-title space--xxs text-center bg--primary-1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h6 class="type--uppercase">PARTNERS
                                <i class="stack-down-dir"></i>
                            </h6>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section class=" ">
                <div class="container">
                    <div class="row">
                        <div class="slider slider--inline-arrows slider--arrows-hover text-center" data-arrows="true">
                            <ul class="slides">
                                    <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat9.png" />
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat14.jpg" />
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat10.png" />
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat12.jpeg" />
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat13.png" />
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat11.jpg" />
                                        </li>
                                        <li class="col-sm-3 col-xs-6">
                                            <img alt="Image" class="image--xx" src="img/use/pat15.png" />
                                        </li>                               
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat1.png" />
                                </li>
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat2.png" />
                                </li>
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat6.png" />
                                </li>                                
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat3.png" />
                                </li>
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat5.png" />
                                </li>                             
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat4.png" />
                                </li>

                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat7.png" />
                                </li>
                                <li class="col-sm-3 col-xs-6">
                                    <img alt="Image" class="image--xx" src="img/use/pat8.png" />
                                </li>


                            </ul>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end of container-->
            </section>



            
@endsection