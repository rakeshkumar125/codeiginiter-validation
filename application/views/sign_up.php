<div class="container">
<div class="row sign-up">
    <div class="col-md-6 box-padding">
		<form role="form" id="user_register_form" action="user/edit_objective">
			<h2 class="form-heading">Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
			
			<span id="form_response"></span>
			
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 form-background">
					 <div class="checkbox">
							<label><input type="radio" value="1" name="user_type" checked tabindex="1"> Job Seekers</label>
						  </div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 form-background">
					 	  <div class="checkbox">
							<label><input type="radio" value="2" name="user_type" tabindex="2"> Recruiter</label>
						  </div>
						
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="username" class="form-control input-lg" placeholder="Username" tabindex="3">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="fname" class="form-control input-lg" placeholder="First Name" tabindex="4">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="lname" class="form-control input-lg" placeholder="Last Name" tabindex="5">
					</div>
				</div>
			</div>
			
			
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="6">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="7">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="8">
					</div>
				</div>
			</div>
			
			
	
			
			<div class="row">
				<!-- <div class="col-md-12"><input type="submit" id="register_user" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="8"></div> -->
				<div class="col-md-12">
					
					<div name="submit" id="register_user" class="btn btn-primary btn-block btn-lg"  data-loading-text="Validating.. " value="submit" tabindex="9">Register</div>
				</div>


				
			</div>
		</form>
	</div>
	   <div class="col-md-6 box-padding">
		<form role="form" id="login_form" action="user/login">
			<h2 class="form-heading">Login here <small>Access our privileges .</small></h2>
			<div id="form_response"></div>
			<hr class="colorgraph">
				<div class="form-group">
					<input type="email" name="login_email" class="form-control input-lg" placeholder="Username Or Email Address" tabindex="9">
				</div>
				<div class="form-group">
					<input type="password" name="login_password" class="form-control input-lg" placeholder="Password" tabindex="10">
				</div>
				<div class="row">
						<div class="col-md-12">
						<div id="login_submit" class="btn btn-success btn-block btn-lg" tabindex="11">Sign In</div>
						</div>
				</div>
		</form>
	</div>
</div>
<!-- Modal -->

</div>