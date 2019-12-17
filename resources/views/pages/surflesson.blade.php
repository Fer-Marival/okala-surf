@extends('layout.principal')
@section('content')
<div class="clear"></div>
<div class="container-fluid">
	<div class="bk-header surf"><div class="clear"></div></div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="container explaind">
				<h4>Surf lessons</h4>
				<p><i class="far fa-clock"></i><strong>Transportation:</strong><br /> Tour is approximately 4 to 5 hours </p>	

				<p><i class="fas fa-truck-pickup"></i><strong>Pick up / drop off:</strong><br /> We will pick you up and drop you off at your hotel or the address that you prefer <br />
				safe, private and personalized tour</p>

				<p><em>we  count on the best equipment for each level of experience:
				Surf boards, boogie boards, longboards, SUP,  beach chairs and umbrellas</em></p>


				<p><i class="fas fa-tshirt"></i><strong>Surf lycra:</strong><br />
				Comfortable rash guards for warm or cold  water/ whether and to  prevent chafing.</p>

				<p><i class="fas fa-cookie-bite"></i><strong>Surfers breakfast provided</strong><br />
				In exchange of a  review/photo tag on our website we still provide you as a gif 2 pictures per person. </p>

				<p><i class="fas fa-camera-retro"></i><strong>Photographs for sale</strong><br />
				In exchange of a  review/photo tag on our website we still provide you as a gif 2 pictures per person. </p>

				<p><em>Professional  instructors, water sports experts, ready to create the best experiences.</em></p>
			</div>
		</div>
		<div class="col-md-4">
			@include('components.booking-form')
		</div>
	</div>
</div>
@endsection