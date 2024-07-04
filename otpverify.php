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
									<h3 class="heading-title pb-2">Email Verification</h3>
									<p class="content">Please enter the 6-digit verification code that was sent to john@mailinator.com</p>
									<div class="formcontentbox">
										<form class="otpverifybg">
											<div class="form-group d-flex">
												<input name="code" class="form-control code-input" id="codeinput">
												<input name="code" class="form-control code-input" id="codeinput">
												<input name="code" class="form-control code-input" id="codeinput">
												<input name="code" class="form-control code-input" id="codeinput">
												<input name="code" class="form-control code-input" id="codeinput">
												<input name="code" class="form-control code-input" id="codeinput"> 
                                            </div>
											<div class="form-group text-center">
												<input type="submit" name="" class="btn sitebtn" value="Submit" id="submit"> 
                                            </div>
										</form>
									</div>
								</div>
								<div class="logbottomcellbox">
									<p class="btngray mb-0">Mail not received click resend link, <a href="signin.php" class="t-blue">Send Code</a></p>
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
const inputElements = [...document.querySelectorAll('input.code-input')]

inputElements.forEach((ele, index) => {
    ele.addEventListener('keydown', (e) => {
        // if the keycode is backspace & the current field is empty
        // focus the input before the current. Then the event happens
        // which will clear the "before" input box.
        if (e.keyCode === 8 && e.target.value === '') inputElements[Math.max(0, index - 1)].focus()
    })
    ele.addEventListener('input', (e) => {
        // take the first character of the input
        // this actually breaks if you input an emoji like 👨‍👩‍👧‍👦....
        // but I'm willing to overlook insane security code practices.
        const [first, ...rest] = e.target.value
        e.target.value = first ??
            '' // first will be undefined when backspace was entered, so set the input to ""
        const lastInputBox = index === inputElements.length - 1
        const insertedContent = first !== undefined
        if (insertedContent && !lastInputBox) {
            // continue to input the rest of the string
            inputElements[index + 1].focus()
            inputElements[index + 1].value = rest.join('')
            inputElements[index + 1].dispatchEvent(new Event('input'))
        }
    })
})


// mini example on how to pull the data on submit of the form
function onSubmit(e) {
    e.preventDefault()
    const code = [...document.getElementsByTagName('input')]
        .filter(({
            name
        }) => name)
        .map(({
            value
        }) => value)
        .join('')
    console.log(code)
}
</script>
<script>
$("body").addClass("loginbanner");
</script>