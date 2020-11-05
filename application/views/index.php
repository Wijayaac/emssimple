<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<div class="wrapper">
    <div class="container-fluid">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <div class="page-title-box text-left">
                    <h4 class="page-title text-center ">Login Page</h4>
                    <?= form_open('home/login'); ?>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" id="" class="form-control input-group-sm" placeholder="Enter your username here" required>
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" id="" class="form-control input-group-sm" placeholder="Enter your password here" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary" value="Login as Admin"></input>
                        <a name="" id="" class="btn btn-outline-primary ml-3" href="<?= site_url('home/register'); ?>" role="button">Register Here</a>
                    </div>

                    <?= form_close(); ?>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                © 2018 Annex by Mannatthemes.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->