@section('title', 'Contact')
@extends('layouts.app')
@section('content')

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 ">
            <div>
            <h1>Contact Us</h1>
                <p class="lead">
                   
                </p>

            </div>
        </div>
    </div>
    <!--end of row-->
</div>
<!--end of container-->
</div>

<section class="unpad ">
           </section>
            <section class="switchable ">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">

                            <p class="lead">
                                    <i class="fas fa-envelope-square" ></i> &nbsp; 5A, Millennium Housing Estate, Gbagada Lagos <br />
                                    <i class="fas fa-home" style='color:brown'></i> &nbsp; info@sofytagency.com <br />  
                                    <i class="fas fa-globe" style='color:blue'></i> &nbsp; www.sofytagency.com  <br />  
                                     <i class="fas fa-phone" style='color:green'></i> &nbsp; 08033040958 / 07037291926 / 08158222209
                                
                            </p>
                            <p class="lead">
                                Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days.
                            </p>
                            <p class="lead">
                                We are open from 9am &mdash; 5pm Mondays -Fridays.
                            </p>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                            @include('partials.errors')
                                <form  method="post" action="{{ route('post.contact')}}">
                                {{ csrf_field() }}
                                    <div class="col-sm-6 col-xs-12">
                                        <label style='font-size:16px'>Your Name:</label>
                                        <input type="text" name="name" />
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <label style='font-size:16px'>Email Address:</label>
                                        <input type="email" name="email" class="validate-email" />
                                    </div>
                                    <div class="col-sm-12 col-xs-12">
                                        <label style='font-size:16px'>Message:</label>
                                        <textarea rows="4" name="message" ></textarea>

                          
                    <div class="captcha">
                    
                    <span><img id="capman"src="{{ captcha_src('math') }}" alt=""></span>

                    <button type="button" class="btn btn-success btn-refresh "> &nbsp;refresh &nbsp; </button>
                   
                    </div>
                   <input type="text" id="captcha" placeholder="Enter Captcha"  class="contact-input"  name="captcha">


                                    </div>
                                    <div class="col-sm-5 col-md-4 col-xs-6">
                                        <button type="submit" class="btn btn--success type--uppercase">Send Enquiry</button>
                                    </div>
                                </form>
                            </div>
                            <!--end of row-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
@endsection

@include('partials.scripts.captcha')