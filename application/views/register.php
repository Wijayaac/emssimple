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
                    <h4 class="page-title text-center ">Register Page</h4>
                    <?= form_open('home/regProcess'); ?>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="emailRegister" id="" class="form-control input-group-sm" placeholder="Enter your email here" required>
                    </div>

                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="usernameRegister" id="" class="form-control input-group-sm" placeholder="Enter your username here">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="passwordRegister" id="" class="form-control input-group-sm" placeholder="Enter your password here">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="register" class="btn btn-primary" value="Register"></input>
                        <a name="" id="" class="btn btn-outline-primary ml-3" href="<?= site_url('home'); ?>" role="button">Back to Login</a>
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