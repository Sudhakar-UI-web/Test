<?php include("menu/header.php"); ?>

    <?php include("menu/headermenu.php"); ?>
    <section class="innerpagecontent">
        <div class="container">
                <h2 class="heading-title text-center">Contact Us</h2>
                <div class="login-form contactboxfrm">
                    <div class="loginformbox formcontentbox">
                        <form method="post" autocomplete="off">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea type="text" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center logbtn">
                                <button type="submit" class="btn sitebtn">Send message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
</section>
<?php include("menu/footer.php"); ?>
<script>
$("body").addClass("innerpagebg");
</script>