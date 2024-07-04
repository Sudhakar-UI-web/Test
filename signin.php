<?php include("menu/header.php"); ?>
	<?php include("menu/headermenu.php"); ?>
		<section class="formbg">
			<div class="container">
				<div class="formboxbg">
					<div class="leftsideformbox">
						<h2 class="h2">Join the crypto revolution. <br>Sign up & Trade Today!</h2> <img src="images/exchange.svg" /> </div>
					<div class="rightsideformbox">
						<div class="login-form">
							<div class="loginformbox">
								<div class="logcenterbox">
									<h3 class="heading-title pb-2">Login</h3>
									<!-- <p>Please check out visiting the correct URL </p> -->
									<!-- <div class="loginsitelnk"> <img src="images/lock.svg"><a href="#"><span
                                        class="t-green">https://</span>Waltex.com</a> </div> -->
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
													<input type="email" class="form-control" id="password">
													<div class="input-group-append"> 
														<span class="input-group-text">
															<img src="images/eyeicon.svg" class="eicon" />
														</span> 
													</div>
												</div>
											</div>
											<p class="btngray"> <a href="forgot.php" class="t-blue" id="reset">Forgot your password?</a> </p>
											<div class="form-group text-center">
												<button type="submit" class="btn sitebtn" id="submit">Log In</button>
											</div>
											<p class="btngray">Don't have an account? <a href="signup.php" class="t-blue" id="register">Register</a> </p>
										</form>
									</div>
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