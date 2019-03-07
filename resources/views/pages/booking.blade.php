@extends('layout.principal')
@section('content')
<div class="container-fluid">
	<div class="bk-header"><div class="clear"></div></div>
</div>
<div class="booking-form">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="" class="form">
					<h3>Reservation data</h3>
				  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="name">Name:</label>
					      <input type="text" class="form-control"  placeholder="reservation name">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="lastname">Last Name:</label>
					      <input type="text" class="form-control" placeholder="Last name">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email</label>
					      <input type="email" class="form-control" placeholder="Email">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Cell phone</label>
					      <input type="number" class="form-control" placeholder="Phone">
					    </div>
					  </div>
					   <div class="form-row">
					   	 <div class="form-group col-md-4">
					       <label for="inputState">Cuntry</label>
					      <select id="inputState" class="form-control">
					        <option selected>Choose...</option>
					        <option>...</option>
					      </select>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputCity">City</label>
					      <input type="text" class="form-control" id="inputCity">
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputState">State</label>
					      <select id="inputState" class="form-control">
					        <option selected>Choose...</option>
					        <option>...</option>
					      </select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputAddress">Pick up Address</label>
					    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
					  </div>
					   <div class="form-row">
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
					  </div>
					  <div class="form-group">
					    <div class="form-check">
					      <input class="form-check-input" type="checkbox" id="gridCheck">
					      <label class="form-check-label" for="gridCheck">
					        Acepto terminos y condiciones
					      </label>
					    </div>
					  </div>
					  <button type="submit" class="btn btn-primary">Confirm Booking</button>
					</form>
			</div>
			<div class="col-md-4">
				<div class="slider-pro" id="booking-slider">
						<div class="sp-slides">
							<div class="sp-slide">
								<section>
									<img src="{!!asset('img/booking1.jpeg')!!}" alt="" class="sp-image">
								</section>
							</div>
							<div class="sp-slide">
								<section>
									<img src="{!!asset('img/booking2.jpeg')!!}" alt="" class="sp-image">
								</section>
							</div>
							<div class="sp-slide">
								<section>
									<img src="{!!asset('img/booking3.jpeg')!!}" alt="" class="sp-image">
								</section>
							</div>
							<div class="sp-slide">
								<section>
									<img src="{!!asset('img/booking4.jpeg')!!}" alt="" class="sp-image">
								</section>
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
@endsection