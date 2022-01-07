@section('title', 'School Form')
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
            <h1>School Form</h1>
                <p class="lead">
                   
                </p>

            </div>
        </div>
    </div>
    <!--end of row-->
</div>
<!--end of container-->
</div>




            <section class="switchable ">
                <div class="container">

               

                    <div class="row">
                        
                     
                    @include('partials.errors')
     <form  method="post" action="{{ route('post.school')}}">
    {{ csrf_field() }}




    <div class="col-sm-6 col-xs-12">
    <div class="row">

                            <div class="col-sm-12">
                            <h3>Student Information*</h3> 
                            <label style='font-size:16px'>Full name:</label>
                            <input type="text" name="fullname" placeholder="Full name" value="{{ old('fullname')}}" />
                            </div>
                                <div class="col-sm-7 col-xs-6">
                                        <label style='font-size:16px'>Phone:</label>
                                <input type="text" name="phone" placeholder="Phone" value="{{ old('phone')}}"  />
                                </div>
                                <div class="col-sm-5 col-xs-6">
                                        <label style='font-size:16px'>Age:</label>
                                <input type="text" name="age" placeholder="Age"  value="{{ old('age')}}"    />
                                </div>	
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>Email Address:</label>
                                    <input type="email" name="email" placeholder="Email Address" value="{{ old('email')}}" />
                                </div>
                                <div class="col-sm-12">
                                        <label style='font-size:16px'>Program:</label>
                                    <input type="text" name="program" value="{{ old('program')}}"    placeholder="What is your program of study" />
                                </div>

                                <div class="col-sm-12">

                                <select name="goal" id="">
                                    <option value="">Select current educational goal</option>
                                    <option value="Bachelors">Bachelors</option>
                                    <option value="Masters">Masters</option>
                                    <option value="Foundation">Foundation</option>
                                </select>
                                </div>				

                                         
                                    <div class="col-sm-12">
                                          
                                    <select name="factor" id="">
                                        <option value=""> What is the most important factor in making your college choice</option>
                                        <option value="Academic programs">Academic programs</option>
                                        <option value="Athletics">Athletics</option>
                                        <option value="Diversity">Diversity</option>
                                        <option value="Financial Aid">Financial Aid</option>
                                    </select>
                                    </div>
                                                
                                    <div class="col-sm-12">
                                    <select name="financing" id="">
                                        <option value=""> Financing your college education ?</option>
                                        <option value="Will be very difficult">Will be very difficult</option>
                                        <option value="Will be manageable">Will be manageable</option>
                                        <option value="Will not be difficult">Will not be difficult</option>
                                        <option value="I have not thought about it yet">I have not thought about it yet </option>
                                    </select>
                                    </div>                                   


                                    <div class="col-sm-12">
                                            <label style='font-size:16px'>What other countries have you considered:</label>
                                    <textarea name="countries" id="" cols="30" rows="3" placeholder=" What other countries have you considered? (Please list) ">{{ old('countries')}}</textarea>
                                    </div>

                                    <div class="col-sm-12">
                                    <select name="first" id="">
                                    <option value="">Are you the first in your family to attend college </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                   </select>
                                    </div>

                                   
                                    <div class="col-sm-12">
                                            <label style='font-size:16px'>If you answered no who in your family attended college and where:</label>
                                    <textarea name="answeredno"    id="" cols="30" rows="3" placeholder=" If you answered no who in your family attended college and where? (Please list)  ">{{ old('answeredno')}}</textarea>
                                    </div>




                                    



                       
                                       
                                                                      
                       



                             



                        </div> </div>






                        <div class="col-sm-6 col-xs-12">
                        
                        
                        <div class="row">

                            <div class="col-sm-12">
                                    <h3>  College and Career Readiness* </h3>
                                <select name="gender" id="">
                                    <option value="">What is your gender?</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                </div>	

                                <div class="col-sm-12">
                                <select name="grade" id="">
                                   <option value="">What grade are you in?</option>
                                    <option value="7th Grade">7th Grade </option>
                                    <option value="8th Grade">8th Grade</option>
                                    <option value="Freshman">Freshman</option>
                                    <option value="Sophomore">Sophomore</option>
                                    <option value="Junior">Junior</option>
                                    <option value="Senior">Freshman</option>
                                </select>
                                </div>	



                            <div class="col-sm-12">
                            <select name="motherlevel" id="">
                                <option value="">What is the highest level of school your mother completed or the highest degree she received? </option>
                                <option value="Less than high school degree">Less than high school degree</option>
                                <option value="High school degree or equivalent">High school degree or equivalent</option>
                                <option value="Some college but no degree">Some college but no degree</option>
                                <option value="Associate degree">Associate degree </option>
                                <option value="Bachelor degree">Bachelor degree </option>
                                <option value="Graduate degree">Graduate degree</option>
                                <option value="Doctorate degree">Doctorate degree</option>
                            </select>
                            </div>	                          
                       

                            <div class="col-sm-12">
                            <select name="fatherlevel" id="">
                                <option value="">What is the highest level of school your father completed or the highest degree he received? </option>
                                <option value="Less than high school degree">Less than high school degree</option>
                                <option value="High school degree or equivalent">High school degree or equivalent</option>
                                <option value="Some college but no degree">Some college but no degree</option>
                                <option value="Associate degree">Associate degree </option>
                                <option value="Bachelor degree">Bachelor degree </option>
                                <option value="Graduate degree">Graduate degree</option>
                                <option value="Doctorate degree">Doctorate degree</option>
                            </select>
                            </div>	 
   

                                    <div class="col-sm-12">
                                    <select name="college" id="">
                                    <option value="">Do you intend to go to college?  </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                   </select>
                                    </div>

                                    <div class="col-sm-12">
                                    <select name="collegeanswer" id="">
                                    <option value="">If you answered yes to question above what degree do you plan on getting?</option>
                                    <option value="Certificate or Trade School ">Certificate or Trade School </option>
                                    <option value="Associate's Degree (2 years) ">Associate's Degree (2 years) </option>
                                    <option value="Bachelor's Degree (4 years)">Bachelor's Degree (4 years) </option>
                                    <option value="Graduate Degree">Graduate Degree</option>
                                    <option value="Doctorate Degree ">Doctorate Degree </option>
                                   </select>
                                    </div>    
                                    <div class="col-sm-12">
                                    <select name="career" id="">
                                    <option value="">Do you feel that you received enough information about Career exploration at school?  </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                   </select>
                                    </div>

                                    <div class="col-sm-12">
                                    <select name="knowledge" id="">
                                    <option value=""> Do you feel that you received opportunities to gain knowledge about
post-secondary options, such as joining the workforce, military, trade school,
junior college, college or university? </option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                   </select>
                                    </div>


                                    <div class="col-sm-12">
                                    <select name="pursuecareer" id="">
                                    <option value=""> On a scale of 1 to 10, how prepared do you think you will be to pursue your career choice after graduation?  </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="2">2</option>
                                   </select>
                                    </div>                                

                                    <div class="col-sm-12">
                                    <select name="takeadvantage" id="">
                                    <option value="">  On a scale of 1 to 10, how much do you take advantage or the programs, activities, and information available to you? </option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="2">2</option>
                                   </select>
                                    </div>  



<div style='margin-top:20px'class="col-sm-12">
<button type="submit" class="btn btn-lg btn-success">
<span class="">
SUBMIT
</span>  
</button>
</div>
                        
                           
                           
    
</div>
</div>

                       </form>
                            
                        




                    </div> 
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>


<section>
<div class="container">
    <div class="row">
    <div class="col-sm-12">
                        <p class="lead">
                        NOTE:
                 </p>
 
                 <span class="h4 inline-block typed-text typed-text--cursor " data-typed-strings=" 
                 Details will be sent to your email after filling this form."></span>
                                      

            
                        </div>
    </div>
    </div>
    </section>






@endsection