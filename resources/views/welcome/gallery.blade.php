
@extends('layouts.app')
@section('title', 'Gallery')
@section('content')

@section('lbcss')
<link rel="stylesheet" href="{{ asset('lb/css/lightbox.min.css') }}" type="text/css" media="screen" />
@endsection
<div class="imagebg image--light cover cover-blocks banner ">
        <div class="background-image-holder hidden-xs">
            <img alt="background"  src="{{ asset('img/use/about.png') }}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 ">
                    <div>
                        <h1>Gallery</h1>
                        <p class="lead">
                           
                        </p>
        
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
        </div>
        


<section >

<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12">
@for($i = 1 ;$i < 8; $i++)
<a class="example-image-link"  href="{{ asset('/img/use/pics/'.$i.'.jpg') }}" data-lightbox="example-1"><img class="example-image img-thumbnail" style="padding:10px 10px" src="{{ asset('/img/use/thumbs/'.$i.'.jpg') }}" alt="image-1" /></a>
@endfor
</div>
</div>
<!--end of row-->
</div>
<!--end of container-->
</section>
   



























@endsection
@push('scripts')

<script type="text/javascript" src="{{ asset('lb/js/lightbox-plus-jquery.min.js') }}"></script>

<script>
        lightbox.option({
          'resizeDuration': 200,
          'wrapAround': true
        })
    </script>
@endpush
