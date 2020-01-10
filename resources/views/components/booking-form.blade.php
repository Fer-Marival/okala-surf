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
				<h3>Reservation data</h3>
			  <div class="form-row">
				<div class="form-group col-md-8">	
					<label for="inputClasses">Please select lesson</label>
					<select id="inputClasess" class="form-control" name="classes" >
					  <option>Choose...</option>
					  <option @isset( $optionSurfLesson ) selected @endisset value="Surf">SURF</option>
					  <option @isset( $optionSnorkelLesson ) selected @endisset value="Snorkel">SNORKEL</option>
					  <option @isset( $optionSupLesson ) selected @endisset value="SUP">SUP</option>
					</select>
				  </div>
					<div class="form-group col-md-6">
					  <label for="name">Name:</label>
					  <input type="text" class="form-control" name="name" placeholder="reservation name">
					</div>
					<div class="form-group col-md-6">
					  <label for="lastname">Last Name:</label>
					  <input type="text" class="form-control" placeholder="Last name" name="lastname">
					</div>
				  </div>
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="inputEmail4">Email</label>
					  <input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="form-group col-md-6">
					  <label for="inputPassword4">Cell phone</label>
					  <input type="number" class="form-control" placeholder="Phone" name="cellphone">
					</div>
				  </div>
				   <div class="form-row">
						<div class="form-group col-md-4">
						<label for="country">Country</label>
						<input type="text" class="form-control" placeholder="country" name="country">
					</div>
					<div class="form-group col-md-4">
					  <label for="inputCity">City</label>
					  <input type="text" class="form-control" name="city" id="inputCity">
					</div>
					<div class="form-group col-md-4">
						<label for="inputState">State</label>
						 <input type="text" class="form-control" name="state" id="inputCity">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputAddress">Pick up Address</label>
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
						<label>Special required</label>
						<textarea class="form-control" id="special-required" name="special_required" rows="3"></textarea>
					</div>
				  </div>
				  <div class="form-group">
					<div class="form-check">
					  <input class="form-check-input" type="checkbox" id="gridCheck">
					  <label class="form-check-label" for="gridCheck">
						I accept terms and conditions
					  </label>
					</div>
				  </div>
				  <button type="submit" class="btn-hover color-9">Confirm Booking</button>
				</form>