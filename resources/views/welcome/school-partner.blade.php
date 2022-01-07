@section('title', 'School & Partners')
@extends('layouts.app')
@section('content')



<style>

</style>


<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 ">
            <div>
            <h1>Schools & Partners</h1>
                <p class="lead">
                   
                </p>

            </div>
        </div>
    </div>
    <!--end of row-->
</div>
<!--end of container-->
</div>











<section>
<div class="container">
    <div class="row">


<div class="col-sm-8">
@foreach($datapage as $d)
<div class="boxed boxed--border  bg--secondary boxed--lg box-shadow">
	<h5>{{ $d->name }}</h5>
	<p>
	{{ $d->description }}
	</p>
	<a class="btn btn--primary" target="_blank" href="{{ 'http://'.$d->link }}">
		<span class="btn__text">
			View
		</span>
	</a>
</div>
@endforeach


<p>
{{ $datapage->links() }}
</p>

  </div>









  <div class="col-sm-4">






   <div class=" boxed boxed--border boxed--lg bg--secondary">
                      
<div class="sidebar__widget">
                                    <h5>Quick Links</h5>
                                    <ul>
									@foreach($data as $d)
                                        <li>
											<a  style="text-transform:lowercase" target="_blank"
											 href="{{ 'http://'.$d->link }}">{{ $d->name }}</a>
										</li>
										
										@endforeach
                                      
                                    </ul>
                                </div>















  </div>


















    </div>
</div>





















</section>


@endsection