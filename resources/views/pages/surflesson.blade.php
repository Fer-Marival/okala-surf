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
				<p><i class="far fa-clock"></i><strong>Transportation:</strong><br /> The tour is approximately 4 to 5 hours. We will provide pick up and drop off at your hotel or address you prefer. </p>	

				<p><em>we  count on the best equipment for each level of experience:
				Surf boards, boogie boards, longboards, SUP,  beach chairs and umbrellas</em></p>

				<p><i class="fas fa-tshirt"></i><strong>Rash Guard/Surf Shirt:</strong><br />
				We have rash guards/surf shirts for different climates, warm or cold water and to prevent chafing.</p>

				<p><i class="fas fa-cookie-bite"></i><strong>Surfers Breakfast/Snack:</strong><br />
					We will provide you with a light breakfast/snack which includes a nutritional bar, seasonal fruit and a bottle of water </p>

				<p><i class="fas fa-camera-retro"></i><strong>Photographs for sale</strong><br />
					In exchange of a review/photo tag on our website we still provide you as a gif 2 pictures per person. </p>

				<p><em>Professional instructors, water sports experts, ready to create the best experiences.</em></p>
			</div>
		</div>
		<div class="col-md-4">
			@include('components.booking-form')
		</div>
	</div>
</div>
@endsection