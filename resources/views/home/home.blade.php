
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
                <h1>users </h1>
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

<table id="myTable" class="display table" cellspacing="0" width="100%">
        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th><a href="{{ asset('home/create-user')}}"> + </a></th>
                        </tr>



        </thead> 
        <tbody>
            <?php $i = 1; ?>
            @foreach ($user as $users)
   @if($users->email == 'dplumptre@yahoo.com')
   @else
   <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $users->name }}</td>
                <td><small>{{ $users->email }}</small></td>
                <td>
                    <a href="{{ asset('/home/delete-user'.$users->id)}}" onclick="javascript:return confirm('Are you sure you want to delete student?')" 
                     data-toggle="tooltip" title="Delete Student">
                     <i style="float:right;height:20px; padding-right: 10px;" class=" icon-Trash-withMen"></i>

                </td>
            </tr>
   @endif

            @endforeach
        </tbody>
    </table>



             </div>
        </div>
</section>






















@endsection