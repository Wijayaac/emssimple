<?php $this->load->view('dash/layout/headerDash'); ?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!$_SESSION['username']) {
    redirect('home', 'refresh');
} ?>
<!-- main content -->
<!-- dashboard data -->
<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Add Jobs Position</h4>

                    <?= form_open('jobs/add'); ?>
                    <div class="form-group">
                        <label>Job Name</label>
                        <input type="text" name="jobName" class="form-control" required placeholder="Type something" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="addButton" class="btn btn-primary btn-sm" value="Submit Job" />
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- end dash data -->

    <!-- end content -->

    <?php $this->load->view('dash/layout/footerDash'); ?>