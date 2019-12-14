@extends('layout.principal')
@section('content')
<div class="clear"></div>
<div class="container-fluid">
	<div class="bk-header sup"><div class="clear"></div></div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="container explaind">
				<h4>Sup Standup</h4>
				<p><i class="far fa-clock"></i><strong>Transportation:</strong><br />Tour is approximately 3-3:30 hours. </p>	

				<p><i class="fas fa-truck-pickup"></i><strong>Pick up / drop off:</strong><br /> We will pick you up and drop you off at your hotel or the address that you prefer
				safe, private and personalized tour</p>

				<p><em>We count on the best  equipment for your experience: STAND UP PADDLEBOARDS , KAYAKS , CHAIRS , UMBRELLAS , FLOTATION VEST.</em></p>

				<p><i class="fas fa-tshirt"></i><strong>Surf lycra:</strong><br />
				comfortable rash guards for warm or cold  water/ whether and to  prevent chafing.</p>

				<p><i class="fas fa-cookie-bite"></i><strong>snak and seeds </strong><br />
				Seasonal fruit, water, hydrating drinks, nutritional bars, seeds and natural products.</p>

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