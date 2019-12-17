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
				<p><i class="far fa-clock"></i><strong>Transportation:</strong><br />The tour is approximately 4 to 5 hours. We will provide pick up and drop off at your hotel or address you prefer. </p>	

				<p><em>We count on the best  equipment for your experience: STAND UP PADDLEBOARDS , KAYAKS , CHAIRS , UMBRELLAS , FLOTATION VEST.</em></p>

				<p><i class="fas fa-tshirt"></i><strong>Rash Guard/Surf Shirt:</strong><br />
					We have rash guards/surf shirts for different climates, warm or cold water and to prevent chafing.</p>

				<p><i class="fas fa-cookie-bite"></i><strong>Surfers Breakfast/Snack: </strong><br />
					We will provide you with a light breakfast/snack which includes a nutritional bar, seasonal fruit and a bottle of water.</p>

				<p><i class="fas fa-camera-retro"></i><strong>Photographs:</strong><br />
					In exchange for a review on our website and Tripadvisor we will gift you two pictures per person. Additional photographs available for purchase. </p>

				<p><em>*We provide professional instructors and water sports experts ready to create the best experience. Included are surf boards, boogie boards, long boards, SUP (stand up paddle boards), beach chairs, umbrellas and floatation vests.</em></p>
			</div>
		</div>
		<div class="col-md-4">
			@include('components.booking-form')
		</div>
	</div>
</div>
@endsection