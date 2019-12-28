@extends('layout.principal')
@section('content')
	<div class="home">
		<div class="slider-pro" id="home-slider">
			<div class="sp-slides">
				<div class="sp-slide">
					<img class="sp-image" src="{{asset('img/slide-home/1.jpg')}}" />
				</div>
				<div class="sp-slide">
					<img class="sp-image" src="{{asset('img/slide-home/2.jpg')}}" />
				</div>
				<div class="sp-slide">
					<img class="sp-image" src="{{asset('img/slide-home/3.jpg')}}" />
				</div>
				<div class="sp-slide">
					<img class="sp-image" src="{{asset('img/slide-home/4.jpg')}}" />
				</div>
				<div class="sp-slide">
					<img class="sp-image" src="{{asset('img/slide-home/5.jpg')}}" />
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1170 193">
			<path fill="#09cbea" d="M1175 131.2c0 0-81-89.4-224.3-103.4S713 72 665 97c-86 46-148 63-271 7C221.7 25.5 56 104.5-4 197.4 -4 58.7-3.3 0.3-3.3 0.3L1175 0V131.2z"></path>
		</svg>
	</div>
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="service">	
						<img src="{!!asset('img/services/3.svg')!!}" alt="">
						<div class="title">
							@lang('global.table')
						</div>
						<div class="description">
							@lang('global.table-des')
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<img src="{!!asset('img/services/1.svg')!!}" alt="">
						<div class="title">
							@lang('global.transportation')
						</div>
						<div class="description">
							@lang('global.trans-des')
						</div>
					</div>					
				</div>
				<div class="col-md-4">
					<div class="service">
						<img src="{!!asset('img/services/2.svg')!!}" alt="">
						<div class="title">
							@lang('global.swimmer')
						</div>	
						<div class="description">
							@lang('global.swim-des')
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div id="wave">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1170 193">
			<path fill="#09cbea" d="M1175 131.2c0 0-81-89.4-224.3-103.4S713 72 665 97c-86 46-148 63-271 7C221.7 25.5 56 104.5-4 197.4 -4 58.7-3.3 0.3-3.3 0.3L1175 0V131.2z"></path>
		</svg>
	</div>	 --}}
	<div id="description">
		<div class="container-cool">
			<div class="row align-items-center" id="scene">
				<div class="col-md-6" data-depth="0.2">
					<div class="slider">
						<div class="sp-slides">
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/surf/surf1.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/surf/surf2.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/surf/surf5.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/surf/surf12.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/surf/surf15.jpeg')}}" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="title">
						<h4>Surf lessons</h4>
					</div>
					<div class="content">
						Surf and adventure school in puerto vallarta with tours all around the bay (PV, Mita, Sayulita). Finding the perfect waves for all different levels of experience and to practice safely surrounded by nature.<br /><br />
						<div class="btn-group">
								<a href="/surf-lesson" class="btn-hover btn-rounder">See details</a>
								<a href="/booking" class="btn-hover color-9">@lang('global.book')</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center gray">
				<div class="col-md-6 order-md-12">
					<div class="slider">
						<div class="sp-slides">
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/SUP/sup1.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/SUP/sup13.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/SUP/sup15.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/SUP/sup5.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/SUP/sup8.jpeg')}}" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 order-md-1">
					<div class="title">
						<h4 class="p-4">SUP</h4><strong>(Stand Up Paddle)</strong>
					</div>
					<div class="content">
						Book and have a magical and relaxing experience while incorporating exercise. Paddling from Mismaloya to Los Arcos to experience the beauty of Los Arcos and surrounding mountains.<br /><br />
						<div class="btn-group">
								<a href="/supstandup" class="btn-hover btn-rounder">See details</a>
								<a href="/booking" class="btn-hover color-9">@lang('global.book')</a>
							</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-md-6" data-depth="0.2">
					<div class="slider">
						<div class="sp-slides">
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/snorkel/snorkel1.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/snorkel/snorkel12.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/snorkel/snorkel15.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/snorkel/snorkel5.jpeg')}}" />
							</div>
							<div class="sp-slide">
								<img class="sp-image img-fluid" src="{{asset('img/snorkel/snorkel8.jpeg')}}" />
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="title">
						<h4>Snorkel</h4>
					</div>
					<div class="content">
						Book our snorkeling tour and enjoy the magical marine life surrounded by crystal clear water and lush green mountains on the Southern coast of Puerto Vallarta.<br /><br />
							<div class="btn-group">
								<a href="/snorkel" class="btn-hover btn-rounder">See details</a>
								<a href="/booking" class="btn-hover color-9">@lang('global.book')</a>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	{{-- <section class="instagram">
		<div class="container-fluid">
			<h3>@lang('global.moments')</h3>
			<div class="row">
				<div class="card-columns">
				  <div class="card">
				    	<img src="{!!asset('img/girls.jpg')!!}" class="card-img-top" alt="...">
				  </div>
				  <div class="card">
				    <img src="{!!asset('img/girls2.jpg')!!}" class="card-img-top" alt="...">
				  </div>
				  <div class="card">
				   	<img src="{!!asset('img/avent1.jpg')!!}" class="card-img-top" alt="...">
				   </div>
				  <div class="card">
				    <img src="{!!asset('img/lesson.jpg')!!}" class="card-img-top" alt="...">
				  </div>
				  <div class="card">
				   	<img src="{!!asset('img/events/1.jpeg')!!}" class="card-img-top" alt="...">
				  </div>
				  <div class="card">
				  	<img src="{!!asset('img/booking3.jpeg')!!}" class="card-img-top" alt="...">
				  </div>
				</div>
			</div>
		</div>
	</section> --}}
	<div id="social">
			<h3>@lang('global.follow')<span>&#x02992;</span></h3>
			<div id="instafeed" class='grid row'>
			  	<div class="grid-sizer"></div>
			</div>
	</div>
	<section class="coments">
		<div class="container">
			<div class="row">
				<div class="col"><h3 class="title">@lang('global.review')</h3></div>
				<div class="col-md-12">
						<div class="slider-pro" id="my-slider">
							<div class="sp-slides">
								<div class="sp-slide">
									<section>
										<img src="{!!asset('img/clientes/1.jpg')!!}" alt="" class="shadow">
										<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam ratione illo quos neque dolore velit, est adipisci dolor </p>
										<em>juana- USA</em>
									</section>
								</div>
								<div class="sp-slide">
									<section>
									<img src="{!!asset('img/clientes/2.jpg')!!}" alt="" class="shadow">
									<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam ratione illo quos neque dolore velit, est adipisci dolor </p>
									<em>juana- USA</em>
								</section>
								</div>
								<div class="sp-slide">
									<section>
										<img src="{!!asset('img/clientes/23.jpg')!!}" alt="" class="shadow">
										<span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam ratione illo quos neque dolore velit, est adipisci dolor </p>
										<em>juana- USA</em>
									</section>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<div class="clear"></div>
	{{--  <div class="coaches">
		<h3 class="title">Okala Coaches</h3>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col">
					<div class="coach">
						<img src="{!!asset('img/coach/jona.jpg')!!}" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col"><div class="coach">
						<img src="{!!asset('img/coach/1.jpeg')!!}" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col">
					<div class="coach">
						<img src="{!!asset('img/coach/1.jpeg')!!}" class="img-fluid" alt="">
					</div>	
				</div>
				<div class="col">
					<div class="coach">
						<img src="{!!asset('img/coach/1.jpeg')!!}" class="img-fluid" alt="">
					</div>
				</div>
				<div class="col">
					<div class="coach">
						<img src="{!!asset('img/coach/1.jpeg')!!}" class="img-fluid" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>  --}}
	<div class="clear"></div>
	<section class="events">
		<div class="container">
			<h2>@lang('global.events')</h2>
			<div class="row">
				<div class="col">
					<section class="event">
						<img src="{!!asset('img/events/1.jpeg')!!}" class="img-fluid" alt="">
						<em>Limpieza de playas</em>
						<a href="#">Read more…</a>
					</section>
				</div>
				<div class="col">
					<section class="event">
						<img src="{!!asset('img/events/2.jpg')!!}" class="img-fluid" alt="">
						<em>Apoyo a perros sin hogar</em>
						<a href="#">Read more…</a>
					</section>
				</div>
				<div class="col">
					<section class="event">
						<img src="{!!asset('img/events/3.jpg')!!}" class="img-fluid" alt="">
						<em>Limpieza de islas marietas</em>
						<a href="#">Read more…</a>
					</section>
				</div>
			</div>
		</div>
	</section>
	<div class="contact">
		<div class="container">
			<h3>@lang('global.contact') 🤙</h3>
			{{-- 
			<div class="row">
				<div class="col">
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
				<div class="col">
					<form>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputEmail4">Name</label>
				      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputPassword4">Email</label>
				      <input type="email" class="form-control" id="inputPassword4" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="inputAddress">Telephone</label>
				    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="inputCity">City</label>
				      <input type="text" class="form-control" id="inputCity">
				    </div>
				    <div class="form-group col-md-6">
				      <label for="inputState">State</label>
				      <select id="inputState" class="form-control">
				        <option selected>Choose...</option>
				        <option>...</option>
				      </select>
				    </div>
				  </div>
				    <div class="form-group">
					    <label for="exampleFormControlTextarea1">Say Aloha! 🤙</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					  </div>
				  <div class="form-group">
				    <div class="form-check">
				      <input class="form-check-input" type="checkbox" id="gridCheck">
				      <label class="form-check-label" for="gridCheck">
				        Acept Terms and conditions
				      </label>
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary">Send Message</button>
					</form>
				</div>
			
			</div>
			--}}
		</div>
	</div>
@endsection