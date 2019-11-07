@extends("site.app")
@section("title")
    HRM - Cloud HR Software for Small and Medium Businesses
@endsection

@section("content")


    <div class="front-inner-banner grey">
    	<div class="container">
    		<div class="row">
    			<div class="front-inner-banner-content">
    				
	    			<div class="col-md-6">
	    				<div class="left">
		    				<!-- <h4>HRM SELF-SERVICE HR SOFTWARE</h4> -->
		    				<h2>We’re here to help you run your payroll like a pro.</h2>
		    				<form action="" class="banner-form">
		    					<p>Introducing the friendliest web-based payroll solution.</p>

		    					<input type="text" placeholder="Company Name" class="form-control">
		    					<input type="email" placeholder="Work Email" class="form-control">
		    					<input type="number" placeholder="Promo Code (optional)" class="form-control">
		    					<select name="" id="" class="form-control">
		    						<option value="" class="form-control">Choose Location</option>
		    						<option value="" class="form-control">Singapore</option>
		    						<option value="" class="form-control">Hongkong</option>
		    						<option value="" class="form-control">Malasiya</option>
		    					</select>
		    					<label class="custom-checkbox">I agree to hrm's Terms of Service and Privacy Policy.
								  <input type="checkbox" checked="checked">
								  <span class="checkmark"></span>
								</label>
								<a href="#" class="btn btn-style-2">Try Our Free Plan</a>
		    				</form>
		    			</div>
	    			</div>

	    			<div class="col-md-6">
	    				<div class="right">
	    					<img src="{{ asset('assets/site/images/payroll-tab.png') }}" class="img-responsive" alt="">
	    				</div>
	    			</div>
	    			
	    		</div>
    			<img src="{{ asset('assets/site/images/shape-header-hero.svg') }}" class="img-responsive blue-shape" alt="">
    		</div>
    	</div>
    	<img src="{{ asset('assets/site/images/shape-header-bg-1.svg') }}" class="img-responsive grey-shape" alt="">
    	<img src="{{ asset('assets/site/images/shape-header-bg-2.svg') }}" class="img-responsive blue-shape2" alt="">
    </div>

    <section class="goodbye">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h3>Easy, precise and flexible</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/payroll-small-01.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Online payroll</h4>
								<p>Our payroll system is web-based and accessible anytime. Access a host of functions such as spreadsheet imports, one-click payment to banks, and automatic emailing of paychecks when a payroll batch is confirmed.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/payroll-small-02.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>We get the fine print</h4>
								<p>We aim to cater to country-specific stipulations such as minimum wage and tax rates. Simply let us know which country or city you want us to be in - we'll get there as soon as we possibly can.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/payroll-small-03.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Flexible payroll options</h4>
								<p>Run individual or payroll batches based on your payment schedule. We cater to both monthly and weekly payments.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/payroll-small-04.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Xero integration</h4>
								<p>HRM and Xero are fully integrated, so you can send those pay entries to Xero with one click.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="unlimited-access ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h3>Powerful and versatile payroll calculation</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="unlimited-text">
							<h4>Built-in calculation engine</h4>
							<p>Our advanced built-in calculation engine calculates for a wide variety of pay structures and groups, so you don't have to manually compute for every kind of scenario.</p>
							<h5>Validations for paychecks</h5>
							<p>We've preset check processes to adjust for things like over-time pay and absence calculations in each payroll calculation.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="unlimited-img" data-aos="fade-left" data-aos-offset="500" data-aos-duration="500">
							<img src="{{ asset('assets/site/images/unlimited-1.png') }}" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="unlimited-img" data-aos="fade-right" data-aos-offset="500" data-aos-duration="500">
							<img src="{{ asset('assets/site/images/unlimited-2.png') }}" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="unlimited-text">
							<h4>Updated with the latest labor regulations</h4>
							<p>Understanding and applying labor regulations to your HR processes can be daunting. That’s why we keep track of the changes so you don’t have to. Now you don’t have to worry if your payroll calculations are automatically updated or not. They are.</p>
							<h5>Consider your taxes done</h5>
							<p>Our HR apps will take care of country-specific tax calculations and levies, among others.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="unlimited-text">
							<h4>Complete integration</h4>
							<p>Do you know that our HR system is completely integrated with external systems such as accounting software Xero AND local banks? Now you can get your payrolls processed with the click of a button.</p>
							<h5>Collaboration with banks and financial institutions</h5>
							<p>We always make it an effort to partner with the local banks you require in your country. Similarly, we regularly configure our system so your payroll files are always compatible with the various banks for easy export and uploads.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="unlimited-img" data-aos="fade-left" data-aos-offset="500" data-aos-duration="500">
							<img src="{{ asset('assets/site/images/unlimited-1.png') }}" class="img-responsive" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="testimonial-section">
	<div id="stripes" aria-hidden="true">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>

    <div class="testimonial">
    	<div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<div class="col-md-4">
	    				<div class="testimonial-box" data-aos="fade-up" data-aos-offset="500" data-aos-duration="500">
	    					<div class="img-box">
	    						<img src="https://img.icons8.com/bubbles/2x/user.png" class="img-responsive" alt="">
	    					</div>
	    					<div class="text-box">
    							<h3>John Deo</h3>
    							<h4>Web Developer</h4>
    							<p>
    								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    							</p>
    							<div class="rating">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    							</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- col-4 end -->
	    			<div class="col-md-4">
	    				<div class="testimonial-box" data-aos="fade-up" data-aos-offset="500" data-aos-duration="500">
	    					<div class="img-box">
	    						<img src="https://asian-promotions.com/admin_assets/img/administrator-male.png" class="img-responsive" alt="">
	    					</div>
	    					<div class="text-box">
    							<h3>Jack P.</h3>
    							<h4>CEO</h4>
    							<p>
    								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    							</p>
    							<div class="rating">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    							</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- col-4 end -->
	    			<div class="col-md-4">
	    				<div class="testimonial-box" data-aos="fade-up" data-aos-offset="500" data-aos-duration="500">
	    					<div class="img-box">
	    						<img src="https://img.icons8.com/bubbles/2x/user.png" class="img-responsive" alt="">
	    					</div>
	    					<div class="text-box">
    							<h3>Martin S.</h3>
    							<h4>Analyst</h4>
    							<p>
    								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    							</p>
    							<div class="rating">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    								<img src="https://img.icons8.com/officexs/16/000000/filled-star.png">
    							</div>
	    					</div>
	    				</div>
	    			</div>
	    			<!-- col-4 end -->
	    		</div>
	    	</div>
	    </div>
    </div>
</section>

<section class="clients ptb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-3">
					<div class="brand-logo">
						<img src="{{ asset('assets/site/images/attorney.png') }}" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="brand-logo">
						<img src="{{ asset('assets/site/images/m1.png') }}" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="brand-logo">
						<img src="{{ asset('assets/site/images/nissan-text-logo-1920x1080.png') }}" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="brand-logo">
						<img src="{{ asset('assets/site/images/nissan-text-logo-1920x1080.png') }}" class="img-responsive" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="try-plan ptb-60" id="try-plan">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h3>Save hours of your time. Give Hrm a minute.</h3>
					<h5>Sign up as a new company administrator.</h5>
				</div>
			</div>
		</div>
		<div class="row">
			<form action="" class="try-plan-form">
				<div class="col-md-3">
					<input type="text" placeholder="Company Name" class="form-control">
				</div>
				<div class="col-md-3">
					<input type="email" placeholder="Work Email" class="form-control">
				</div>
				<div class="col-md-3">
					<input type="number" placeholder="Promo Code (optional)" class="form-control">
				</div>
				<div class="col-md-3">
					<select name="" id="" class="form-control">
						<option value="" class="form-control">Choose Location</option>
						<option value="" class="form-control">Singapore</option>
						<option value="" class="form-control">Hongkong</option>
						<option value="" class="form-control">Malasiya</option>
					</select>
				</div>
				<div class="col-md-12">
					<label class="custom-checkbox">I agree to hrm's Terms of Service and Privacy Policy.
					  <input type="checkbox" checked="checked">
					  <span class="checkmark"></span>
					</label>
				</div>
				
				
				<a href="#" class="btn btn-style-2">Try Our Free Plan</a>
			</form>
		</div>
	</div>
</section>



    {{-- <img class="img-responsive" src="{{ asset('assets/site/images/dashboard_bottom_1600_1.jpg') }}" width="100%" />  --}}
@endsection

