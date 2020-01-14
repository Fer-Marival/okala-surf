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
				<h4>@lang('global.surf-lesson')</h4>
				<p><i class="far fa-clock"></i>
				<strong>@lang('global.transportation')</strong><br />@lang('global.surf-transport') </p>
				@lang('global.surf-aquipment')	

				<p><i class="fas fa-tshirt"></i><strong>@lang('global.rash')</strong><br />
				@lang('global.surf-rash')</p>

				<p><i class="fas fa-cookie-bite"></i><strong>@lang('global.food')</strong><br />@lang('global.surf-food') </p>

				<p><i class="fas fa-camera-retro"></i><strong>
				@lang('global.photo')</strong><br />
				@lang('global.surf-photo') </p>

				<p><em>@lang('global.profesional-instructor')</em></p>
			</div>
		</div>
		<div class="col-md-4">
			@include('components.booking-form')
		</div>
	</div>
</div>
@endsection