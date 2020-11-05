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

                    <h4 class="mt-0 header-title">Edit Employee Company</h4>

                    <?= form_open('employee/update/' . $id); ?>
                    <?php

                    $employeeList = $this->db->get_where('employees', array('id' => $id));

                    foreach ($employeeList->result() as $list) : ?>
                        <div class="form-group">
                            <label>Employee Name</label>
                            <input type="text" name="nameEmployee" value="<?= $list->nameEmployee; ?>" class="form-control" required placeholder="Type something..." />
                        </div>
                        <div class="form-group">
                            <label>Employee Email</label>
                            <input type="email" name="emailEmployee" value="<?= $list->emailEmployee; ?>" class="form-control" required placeholder="Type something..." />
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="number" name="phone" value="<?= $list->phone; ?>" class="form-control" required placeholder="Type something..." />
                        </div>
                        <div class="form-group">
                            <label>Job Position</label>
                            <select name="job" class="form-control">
                                <option value="<?= $list->job; ?>"><?= $list->job; ?></option>
                                <?php
                                $jobList = $this->db->get('jobs');
                                foreach ($jobList->result() as $list) : ?>
                                    <option value="<?= $list->jobName; ?>"><?= $list->jobName; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    <?php endforeach;    ?>

                    <div class="form-group">
                        <input type="submit" name="updateButton" class="btn btn-primary btn-sm" value="Submit Employee" />
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- end dash data -->

    <!-- end content -->

    <?php $this->load->view('dash/layout/footerDash'); ?>