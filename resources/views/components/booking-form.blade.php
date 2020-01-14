			<div class="col-md-12">
				@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
				@if(session()->has('success'))
					<div class="alert alert-success" role="alert">
					{{ session()->get('success') }}
				</div>
				@endif
			</div>	
				  <form action="{{ route('booknow.store') }}" method="POST" enctype="multipart/form-data" class="form">
					@csrf
					<h3>@lang('global.form-intro')</h3>
				  <div class="form-row">
					<div class="form-group col-md-8">
						
						<label for="inputClasses">@lang('global.sub-intro')</label>
						<select id="inputClasess" class="form-control" name="classes" >
						  <option selected>Choose...</option>
						  <option @isset( $optionSurfLesson ) selected @endisset value="Surf">@lang('global.surf-lesson')</option>
						  <option @isset( $optionSnorkelLesson ) selected @endisset value="Snorkel">@lang('global.snorkel-lesson')</option>
						  <option @isset( $optionSupLesson ) selected @endisset value="SUP">@lang('global.sup-lesson')</option>
						</select>
					  </div>
					    <div class="form-group col-md-6">
					      <label for="name">@lang('global.name')</label>
					      <input type="text" class="form-control" name="name" placeholder="@lang('global.name')">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="lastname">@lang('global.lastname')</label>
					      <input type="text" class="form-control" placeholder="Last name" name="lastname">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email:</label>
					      <input type="email" class="form-control" placeholder="Email" name="email">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">@lang('global.phone')</label>
					      <input type="number" class="form-control" placeholder="@lang('global.phone')" name="cellphone">
					    </div>
					  </div>
					   <div class="form-row">
					   	 <div class="form-group col-md-4">
							<label for="country">@lang('global.country')</label>
							<input type="text" class="form-control" placeholder="@lang('global.country')" name="country">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputCity">@lang('global.city')</label>
					      <input type="text" class="form-control" name="city" id="inputCity">
					    </div>
					    <div class="form-group col-md-4">
							<label for="inputState">@lang('global.state')</label>
					     	<input type="text" class="form-control" name="state" id="inputCity">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">@lang('global.pickup')</label>
					    <input type="text" class="form-control" id="inputAddress" name="pk_adress" placeholder="1234 Main St">
					  </div>
					   {{-- <div class="form-row">
					   	<div class="form-group col-md-12">
					   		<strong>Person 1</strong>
					   	</div>
					   	 <div class="form-group col-md-4">
					      <label for="inputCity">Name:</label>
					      <input type="text" class="form-control" id="inputCity">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputCity">Lastname</label>
					      <input type="text" class="form-control" id="inputCity">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputState">Age</label>
					      <select id="inputState" class="form-control">
					        <option selected>Choose...</option>
					        <option>...</option>
					      </select>
					    </div>
					  </div> --}}
					  <div class="form-row">
						<div class="form-group col-md-12">
							<label>@lang('global.special-required')</label>
							<textarea class="form-control" id="special-required" name="special_required" rows="3"></textarea>
						</div>
					  </div>
					  <div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" id="gridCheck">
					      <label class="form-check-label" for="gridCheck">
					    	@lang('global.term')
					      </label>
					    </div>
					  </div>
					  <button type="submit" class="btn-hover color-9">@lang('global.confirm-btn')</button>
					</form>