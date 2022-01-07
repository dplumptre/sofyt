
@extends('layouts.app')
@section('title', 'users')
@section('content')


<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 ">
            <div>
                <h1>Create user</h1>
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

<form class=" push-5-t" action="{{ url('home/create-user') }}" method="POST">
                                    {{csrf_field()}}

                                    <div class="row">
                                    <div class="col-xs-12">
                                            <label >Names</label>
                                            <input  type="text" 
                                                   name="name" placeholder="Enter Ful name">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-xs-12">
                                            <label >Email</label>
                                            <input  type="text" 
                                                   name="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-xs-12">
                                            <label >Password</label>
                                            <input type="password" 
                                                   name="password" placeholder="">
                                        </div>
                                    </div>



                         
                                    <div class="row">
                                    <div class="col-xs-12">
                                            <button class="btn btn-sm btn-primary" type="submit"><i
                                                        class="fa fa-arrow-right push-5-r"></i> create
                                            </button>
                                        </div>
                                    </div>
                                </form>
        


             </div>
        </div>
</section>






















@endsection