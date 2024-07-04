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
									<h3 class="heading-title">Reset Password</h3>
									<div class="formcontentbox">
										<form>
                                            <div class="form-group">
                                                <label>Email Address </label>
                                                <input type="text" name="" class="form-control" id="email"> 
                                            </div>
                                            <div class="form-group">
												<label>Password</label>
												<div class="input-group">
													<input type="password" class="form-control" id="password">
													<div class="input-group-append"> 
                                                        <span class="input-group-text"><img src="images/eyeicon.svg" class="eicon" /></span> 
                                                    </div>
												</div>
											</div>
                                            <div class="form-group">
												<label>Confirm Password</label>
												<div class="input-group">
													<input type="password" class="form-control" id="password-confirm">
													<div class="input-group-append"> 
                                                        <span class="input-group-text"><img src="images/eyeicon.svg" class="eicon" /></span> 
                                                    </div>
												</div>
											</div>
											<div class="form-group text-center">
												<input type="submit" name="" class="btn sitebtn" value="Submit" id="submit"> 
                                            </div>
										</form>
									</div>
								</div>
								<div class="logbottomcellbox">
								<p class="btngray mb-0"> <a href="signin.php" class="t-blue" id="login"><i
                                        class="fa fa-long-arrow-left me-2"></i> Back to login</a></p>
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