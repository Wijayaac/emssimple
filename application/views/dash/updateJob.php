<?php $this->load->view('dash/layout/headerDash'); ?>

<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!$_SESSION['username']) {
    redirect('home', 'refresh');
}
$id = $this->uri->segment(3);

?>
<!-- main content -->
<!-- dashboard data -->
<div class="container">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Update Jobs Position</h4>

                    <?= form_open('jobs/save/' . $id); ?>
                    <?php

                    $jobList = $this->db->get_where('jobs', array('id' => $id));

                    foreach ($jobList->result() as $job) : ?>

                        <div class="form-group">
                            <label>Job Name</label>
                            <input type="text" name="updateJobName" value="<?= $job->jobName; ?>" class="form-control" required placeholder="Type something" />
                        </div>

                    <?php endforeach;    ?>
                    <div class="form-group">
                        <input type="submit" name="updateButton" class="btn btn-primary btn-sm" value="Update Job" />
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- end dash data -->

    <!-- end content -->

    <?php $this->load->view('dash/layout/footerDash'); ?>