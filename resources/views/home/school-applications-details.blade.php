
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
                <h1>School Applications Details</h1>
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



                      <table width="100%" class="border--round table--alternate-row">


	<thead>
		<tr>
			<th width='60%'></th>
			<th width='40%'></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td >Full Name </td>
			<td >{{ $details->fullname }}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{ $details->email }}</td>
		</tr>

		<tr>
			<td>Phone</td>
			<td>{{ $details->phone }}</td>
		</tr>
		<tr>
			<td>Program</td>
			<td>{{ $details->program }}</td>
		</tr>
		<tr>
			<td>Current educational goal</td>
			<td>{{ $details->goal }}</td>
		</tr>
		<tr>
			<td>Important factor in making your college choice</td>
			<td>{{ $details->factor }}</td>
		</tr>
		<tr>
			<td>Financing your college education</td>
			<td>{{ $details->financing }}</td>
		</tr>
		<tr>
			<td>Countries have you considered</td>
			<td>{{ $details->countries }}</td>
        </tr>
        <tr>
			<td>Are you the first in your family to attend college </td>
			<td>{{ $details->first }}</td>
		</tr>       
        <tr>
			<td>If you answered no who in your family attended college and where </td>
			<td>{{ $details->answeredno }}</td>
		</tr>       
        <tr>
			<td>What is your gender </td>
			<td>{{ $details->gender }}</td>
		</tr>       
        <tr>
			<td>What grade are you in </td>
			<td>{{ $details->grade }}</td>
		</tr>       
        <tr>
			<td>What is the highest level of school your mother completed or the highest degree she received</td>
			<td>{{ $details->motherlevel }}</td>
		</tr>       
        <tr>
			<td>What is the highest level of school your father completed or the highest degree she received </td>
			<td>{{ $details->fatherlevel }}</td>
		</tr>       
        <tr>
			<td>Do you intend to go to college</td>
			<td>{{ $details->college }}</td>
		</tr>       
        <tr>
			<td>If you answered yes to question above what degree do you plan on getting</td>
			<td>{{ $details->collegeanswer }}</td>
		</tr>       
        <tr>
			<td>Do you feel that you received enough information about Career exploration at school</td>
			<td>{{ $details->career }}</td>
		</tr>       
        <tr>
			<td> Do you feel that you received opportunities to gain knowledge about post-secondary options </td>
			<td>{{ $details->knowledge }}</td>
		</tr>       
        <tr>
			<td>On a scale of 1 to 10, how prepared do you think you will be to pursue your career choice after graduation </td>
			<td>{{ $details->pursuecareer }}</td>
		</tr>       
        <tr>
			<td>On a scale of 1 to 10, how much do you take advantage or the programs, activities, and information available to you</td>
			<td>{{ $details->takeadvantage }}</td>
		</tr>       
      
	</tbody>
</table>
				


             </div>
        </div>
</section>























@endsection