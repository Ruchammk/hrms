@extends("site.app")
@section("title")
    HRM - Cloud HR Software for Small and Medium Businesses
@endsection

@section("content")




    <div class="banner-section contact-banner">
	    <div class="StripeBackground updated">
		    <div class="stripe s0"></div>
		    <div class="stripe s2 pattern"></div>
		  </div>

		  <div class="StripeBackground accelerated updated">
		    <div class="stripe s1"></div>
		    <div class="stripe s3"></div>
		    <div class="stripe s4"></div>
		  </div>

	    <div class="banner-content">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-md-12">
	    				<div class="page-heading">
	    					<h2>Contact Us</h2>
                            <h4>Send us a message and we’ll get right back in touch.</h4>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </div>

    <section class="contact-form ptb-60" data-aos="fade-up" data-aos-duration="800">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Name">
                        <input type="email" class="form-control" placeholder="Email">
                        <input type="text" class="form-control" placeholder="Phone">
                        <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                        <input type="submit" class="btn btn-style-2" value="Submit">
                    </form>
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

