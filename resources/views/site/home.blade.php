@extends("site.app")
@section("title")
    HRM - Cloud HR Software for Small and Medium Businesses
@endsection

@section("content")



<!-- <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url({{ asset('assets/site/images/slider/dashboard_home_1600.jpg') }});">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                 <h1 class="animation animated-item-1" style="text-shadow: 0 3px 6px rgba(0,0,0,0.2)">A Complete HR Management Solution that delivers</h1>
                                    <h2 class="animation animated-item-2" style="text-shadow: 0 3px 6px rgba(0,0,0,0.2); margin: 18px 0; font-weight: 400;">Over 10,000 companies worldwide trust {{ $setting->main_name }}</h2>
                        <form id="sign-up-form-1" method="post" class="form-inline animation animated-item-3" action="{{ route("signup") }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control input-lg" required="required" placeholder="Your Email ID"/>
                                        </div>
                                        <input type="submit" name="submit" class="input-lg btn btn-primary" value="Try for FREE!"/>
                                    </form>
                                    <h2 class="animation animated-item-2">No Credit Card required!</h2> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center">
                        <h2>Watch Demo Video</h2>
                        <p class="lead">Watch SnapHRM in action and see for yourself how simple and easy it can be to do your daily tasks.</p>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">

                                <div class="videoWrapper">
                                    <iframe src="https://www.youtube.com/embed/5qc0ZzdcfTQ" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
    
    
    <!-- <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Why you will <i class="fa fa-heart"></i> {{ $setting->main_name }}</h2>
                
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-{{ strtolower($setting->currency) }}"></i>
                            <h2>Pay Fixed Monthly</h2>
                            <h3>Don't pay per employee and skyrocket your monthly bills.</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-thumbs-o-up"></i>
                            <h2>Easy to Use</h2>
                            <h3>Get started straightway and save yourself from spending hours figuring out how to do basic tasks</h3>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-mobile"></i>
                            <h2>Mobile Friendly</h2>
                            <h3>Access from any device - HRM works seamlessly on desktop, mobile and tablet</h3>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-rocket"></i>
                            <h2>Ever Improving</h2>
                            <h3>Our constant effort to make HRM better gives you new features regularly without any extra cost</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 



    <section id="partner">
        <div class="container">
            <div class="center">
                <h2>Our Customers</h2>
                <p class="lead">Thousands of companies, from small businesses to enterprises use {{ $setting->main_name }} everyday.</p>
            </div>

            <div class="partners">
                <div class="row">
                    <div class="col-md-offset-1 col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partners/partner1.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partners/partner2.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partners/partner3.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partners/partner4.png') }}"></div>
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center" style="height: 100px"> <img class="img-responsive center-block" src="{{ asset('assets/site/images/partners/partner5.png') }}"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="center">
                        <h2>Get started today</h2>
                        <p class="lead">Sign Up and start using HRM for <b>FREE!</b> <em>No credit card required.</em></p>
                      <form id="sign-up-form-1" method="post" class="form-inline" action="{{ route("signup") }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control input-lg" required="required" placeholder="Your Email ID"/>
                            </div>
                            <input type="submit" name="submit" class="input-lg btn btn-primary" value="Sign Up"/>
                        </form>
                        </div>
                </div>
            </div>
        </div>
    </section> -->
    


    <div class="banner-section">
	    <div id="stripes" aria-hidden="true">
	      <span></span>
	      <span></span>
	      <span></span>
	      <span></span>
	      <span></span>
	    </div>

	    <div class="banner-content">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-6">
	    				<div class="left">
		    				<h4>HRM SELF-SERVICE HR SOFTWARE</h4>
		    				<h2>We serve the Singapore, Hong Kong and Malaysia markets.</h2>
		    				<form action="" class="banner-form">
		    					<p>The preferred Payroll and Absence Management solution for small businesses. Get started with a commitment-free 16-day trial.</p>

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
	    					<img src="{{ asset('assets/site/images/banner-tab.png') }}" class="img-responsive" alt="">
	    				</div>
	    			</div>

	    		</div>
	    	</div>
	    </div>
    </div>

    <section class="goodbye">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-heading">
					<h3>Say goodbye to Excel</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/icon1.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Updates at a glance</h4>
								<p>View employee profiles, payroll, and absence statuses from one place.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/icon2.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Updates at a glance</h4>
								<p>View employee profiles, payroll, and absence statuses from one place.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/icon3.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Updates at a glance</h4>
								<p>View employee profiles, payroll, and absence statuses from one place.</p>
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="bye-box" data-aos="fade-up" data-aos-duration="500">
							<div class="img-box">
								<img src="{{ asset('assets/site/images/icon4.png') }}" alt="">
							</div>
							<div class="text-box">
								<h4>Updates at a glance</h4>
								<p>View employee profiles, payroll, and absence statuses from one place.</p>
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
					<h3>Unlimited access to all apps</h3>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="unlimited-text">
							<h4>Profiles</h4>
							<p>View and edit your company and employee information quickly and easily from a central location/dashboard.</p>
							<h5>Onboard your company immediately</h5>
							<p>Set up your company on our HR system in minutes. Let the Profiles app guide you through importing existing employee information, or, manually key in the details yourself.</p>
							<a href="#" class="btn btn-style-2">Learn more</a>
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
							<h4>Payroll</h4>
							<p>The easiest way to run payroll and generate paychecks for your business.</p>
							<h5>Statutory employment regulations for your country</h5>
							<p>Our online payroll app comes preset with employment regulations and requirements specific to each location, so say goodbye to manual tax calculations. In addition, you can export local bank files and make payments in one click.</p>
							<a href="#" class="btn btn-style-2">Learn more</a>
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
							<h4>Leave</h4>
							<p>View and approve Leave of Absence applications directly from our Leave app. Set and manage leave grades and preferences for individual employees.</p>
							<h5>Preset with country-specific leave types</h5>
							<p>Whatever your business’ leave policy is, our app allows you to calculate and set variations in Annual Leave and Maternity leave, among others. The corresponding deductions and encashment will be automatically reflected in our Payroll app, so you won’t have to do the extra work.</p>
							<a href="#" class="btn btn-style-2">Learn more</a>
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

