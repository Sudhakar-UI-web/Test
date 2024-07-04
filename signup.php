<?php include("menu/header.php"); ?>
	<?php include("menu/headermenu.php"); ?>
		<section class="formbg">
			<div class="container">
				<div class="formboxbg regform">
					<div class="leftsideformbox">
					<h2 class="h2">Join the crypto revolution. <br>Sign up & Trade Today!</h2> <img src="images/exchange.svg" /> </div>
					<div class="rightsideformbox">
						<div class="login-form">
							<div class="loginformbox">
								<div class="logcenterbox">
									<h3 class="heading-title">Register</h3>
									
									<div class="innerpagetab historytab mb-4">
										<ul class="nav nav-tabs tabbanner" role="tablist">
											<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#email">Email</a></li>
											<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#mobile">Mobile</a></li>
										</ul>
									</div>
									<div class="formcontentbox">
										<form>
											<div class="tab-content">
												<div id="email" class="tab-pane fade in show active">
													<div class="form-group">
														<label>Email Address </label>
														<input type="text" name="" class="form-control" id="email">
													</div>
												</div>
												<div id="mobile" class="tab-pane fade in">
													<div class="form-group mb-4 phonetab">
														<label>Mobile Number</label>
														<div class="input-group"> 
															<span class="input-group-text">
                                                        		<input type="text" class="form-control phone">
                                                    		</span>
															<input type="text" class="form-control" id="phone"> 
														</div>
													</div>
												</div>
											</div>
												<div class="form-group">
													<label>Password</label>
													<div class="input-group">
														<input type="password" class="form-control" id="password">
														<div class="input-group-append"> 
															<span class="input-group-text">
																<img src="images/eyeicon.svg" class="eicon" />
															</span> 
														</div>
													</div>
												</div>
												<div class="form-group">
													<label>Confirm Password</label>
													<div class="input-group">
														<input type="confirmpassword" class="form-control" id="password-confirm">
														<div class="input-group-append"> 
															<span class="input-group-text">
																<img src="images/eyeicon1.svg" class="eicon" />
															</span> 
														</div>
													</div>
												</div>									
											<div class="form-group">
												<div class="form-check">
													<input type="checkbox" class="form-check-input">
													<label class="form-check-label">I have read & agree to the <a href="#">terms
                                                    of service.</a></label>
												</div>
											</div>
											<div class="text-center">
												<button type="submit" class="btn sitebtn" id="submit">Create Account</button>
											</div>
										</form>
									</div>
								</div>
								<div class="logbottomcellbox">
									<p class="btngray">Already have an account? <a href="signin.php" class="t-blue" id="login">Log in</a> </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="loginfootbg">
					<p>Copyright © 2024 Waltex. All rights reserved.</p>
				</div>
			</div>
		</section>
<?php include("menu/footer.php"); ?>
<script>
$("body").addClass("loginbanner");
</script>