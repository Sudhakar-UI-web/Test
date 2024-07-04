<?php include("menu/header.php"); ?>
<?php include("menu/headermenu.php"); ?>
<section class="innerpagecontent">
    <div class="container">
    <h2 class="heading-title text-center">IEO Listing</h2>
        <div class="panelcontentbox apply-bg mx-auto">
            <form class="siteformbg">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Service</label>
                    <select class="form-control">
                        <option value="">Service Type</option>
                        <option value="">Service Type</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Project Website</label>
                    <input class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Coin/Token standard (eg.ERC20)</label>
                    <input class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" value="" rows="3"></textarea>
                </div>
                <div class="text-center mt-4">
                    <input type="submit" class="btn sitebtn" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</section>
<?php include("menu/footer.php"); ?>
<script>
$("body").addClass("innerpagebg ieolaunchbg");
</script>