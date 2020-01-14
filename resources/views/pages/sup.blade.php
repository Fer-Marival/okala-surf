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
				@lang('global.sup-lesson')
				<p><i class="far fa-clock"></i><strong>
				@lang('global.transportation')</strong><br />
				@lang('global.surf-transport') </p>	
				@lang('global.sup-equipment')
				<p><i class="fas fa-tshirt"></i><strong>
				@lang('global.rash')</strong><br />
				@lang('global.surf-rash')</p>

				<p><i class="fas fa-cookie-bite"></i><strong>
				@lang('global.food') </strong><br />
				@lang('global.surf-food').</p>

				<p><i class="fas fa-camera-retro"></i><strong>
				@lang('global.photo')</strong><br />
				@lang('global.surf-photo') </p>

				<p><em>@lang('global.sup-include')</em></p>
			</div>
		</div>
		<div class="col-md-4">
			@include('components.booking-form')
		</div>
	</div>
</div>
@endsection