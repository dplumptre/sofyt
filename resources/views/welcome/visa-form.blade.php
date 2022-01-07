@section('title', 'Visa Form')
@extends('layouts.app')
@section('content')





<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 ">
            <div>
            <h1>Visa Form</h1>
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

                @include('partials.errors')


                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <div class="row">
                            <form class="form-horizontal" method="post" action="{{ route('post.visa')}}">
    {{ csrf_field() }}
                            <div class="row">
                            <div class="col-sm-12">
                                    <label style='font-size:16px'>Full Name:</label>
                                    <input type="text" name="fullname" placeholder="Full Name" />
                                </div>
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>Address:</label>
                                    <input type="text" name="address" placeholder="Address" />
                                </div>
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>Email Addres:</label>
                                    <input type="email" name="email" placeholder="Email Address" />
                                </div>
                                <div class="col-sm-7 col-xs-6">
                                        <label style='font-size:16px'>Phone:</label>
                                    <input type="text" name="phone" placeholder="Phone" />
                                </div>
                                <div class="col-sm-5 col-xs-6">
                                        <label style='font-size:16px'>Age:</label>
                                <input type="text" name="age" placeholder="Age" />
                                </div>										
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>Select Visa Category:</label>
                                <select name="visacategory" id="">
                                    <option value=""></option>
                                    <option value="Business">Business</option>
                                    <option value="Exchange Visitor">Exchange Visitor</option>
                                    <option value="Visitor">Visitor</option>
                                    <option value="Medical">Medical</option>
                                    <option value="Student">Student</option>
                                </select>
                                </div>
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>List Valid Visa(s):</label>
                                    <input type="text" name="validvisa" placeholder="List Valid Visa(s)" />
                                </div>
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>List Expired Visa(s):</label>
                                <input type="text" name="visaexpired" placeholder="List Expired Visa(s)" />
                                </div>										

                                <div class="col-sm-12">
                                        <label style='font-size:16px'>Service Required:</label>
                                <select name="servicerequired" id="">
                                    <option value=""></option>
                                    <option value="Appeal">Appeal</option>
                                    <option value="Counseling">Counseling</option>
                                    <option value="Hotel Booking">Hotel Booking</option>
                                    <option value="Online visa application form">Online visa application form</option>
                                    <option value="Travel Insurance">Travel Insurance</option>
                                    <option value="Travel Ticket">Travel Ticket</option>
                                    <option value="Visa Appointment">Visa Appointment</option>
                                    <option value="Visa Pickup">Visa Pickup</option>
                                    <option value="Others">Others</option>
                                </select>
                                </div>



                                <div class="col-sm-7 col-xs-6">
                                        <label style='font-size:16px'>Destination:</label>
                                    <input type="text" name="destination" placeholder="Destination" />
                                </div>
                                <div class="col-sm-5 col-xs-6">
                                        <label style='font-size:16px'>&nbsp;&nbsp;</label>
                            <button type="submit" class="btn btn-success">
                            <span class="">
                            SUBMIT
                            </span>  
                            </button>
                                </div>
                            </div>
                        </form>
                            </div>
                            <!--end of row-->
                        </div>


                        <div class="col-sm-5">
                            <p class="lead">
                            <strong>   NOTE: </strong>
                            </p>
                            <span class="h4 inline-block typed-text typed-text--cursor " data-typed-strings=" 
    Details will be sent to your email after filling this form."></span>
                         


                          
                        </div>

                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
@endsection