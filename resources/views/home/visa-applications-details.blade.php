
@extends('layouts.app')
@section('title', 'Visa Applicaations')
@section('content')


<div class="imagebg image--light cover cover-blocks banner ">
<div class="background-image-holder hidden-xs">
    <img alt="background"  src="{{ asset('img/use/about.png') }}" />
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-5 ">
            <div>
                <h3 style="color:#ffffff">Visa Applications Details</h3>
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



                      <table class="border--round table--alternate-column">
	<!-- <thead>
		<tr>
			<th>Value 1</th>
			<th>Value 2</th>
		</tr>
	</thead> -->
	<tbody>
		<tr>
			<td>Full Name </td>
			<td>{{ $details->fullname }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ $details->email }}</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>{{ $details->address }}</td>
		</tr>
		<tr>
			<td>Phone</td>
			<td>{{ $details->phone }}</td>
		</tr>
		<tr>
			<td>Age</td>
			<td>{{ $details->age }}</td>
		</tr>
		<tr>
			<td>Visa Category</td>
			<td>{{ $details->visacategory }}</td>
		</tr>
		<tr>
			<td>List Valid visa</td>
			<td>{{ $details->validvisa }}</td>
		</tr>
		<tr>
			<td>List Expired Visa</td>
			<td>{{ $details->visaexpired }}</td>
		</tr>
		<tr>
			<td>Service Required</td>
			<td>{{ $details->servicerequired }}</td>
        </tr>
        <tr>
			<td>Destination</td>
			<td>{{ $details->destination }}</td>
		</tr>       
	</tbody>
</table>
					





             </div>
        </div>
</section>






















@endsection