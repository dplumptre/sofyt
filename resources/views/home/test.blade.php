
@extends('layouts.app')
@section('title', 'testimony')
@section('content')


<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12 ">
            <div>
                <h1>Testimony </h1>
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
                            <th>Title</th>
                            <th>Content</th>
                            <th><a href="{{ asset('home/create-test')}}"> + </a></th>
                        </tr>



        </thead> 
        <tbody>
            @if($data)
        @foreach ($data as $key => $d)
   <tr>
                <td>{{ $key+ 1 }}</td>
                <td>{{ $d->title }}</td>
                <td><small>{{ $d->content }}</small></td>
                <td>
                    <a href="{{ asset('/home/delete-test/'.$d->id)}}" onclick="javascript:return confirm('Are you sure you want to delete ')" 
                     data-toggle="tooltip" title="Delete Student">
                     <i style="float:right;height:20px; padding-right: 10px;" class=" icon-Trash-withMen"></i>

                </td>
            </tr>

            @endforeach
            @endif
        </tbody>
    </table>

    <p>
      {{ $data->links() }}

    </p>


             </div>
        </div>
</section>






















@endsection