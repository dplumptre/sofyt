
@extends('layouts.app')
@section('title', 'users')
@section('content')


<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 ">
            <div>
                <h1>School Applications</h1>
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
                            <th>Date</th>
                            <th>Name</th>
                            <th>Email Address</th>
                            <th>Phone</th>
                            <th></th>
                        </tr>



        </thead> 
        <tbody>
            <?php $i = 1; ?>
            @foreach ($data as $users)

            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $users->created_at }}</td>
                <td>{{ $users->fullname }}</td>
                <td><small>{{ $users->email }}</small></td>
                <td><small>{{ $users->phone }}</small></td>
                <td>
                     
                <a href="{{ asset('home/school-applications/'.$users->id)}}" onclick="javascript:return confirm('Are you sure you want to delete ?')" 
                     data-toggle="tooltip" title="Delete">
                     <i style="float:right; padding-right: 10px;" class=" icon-Trash-withMen"></i>
                <a href="{{ asset('home/school-applications-details/'.$users->id)}}" 
                     data-toggle="tooltip" title="View">
                     <i style="float:right; padding-right: 10px;" class=" icon-View-Height"></i>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>



    <p>
      {{ $data->links() }}

    </p>

             </div>
        </div>
</section>























@endsection