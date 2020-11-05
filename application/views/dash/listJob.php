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
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <h4 class="mt-0 header-title">List Jobs Available</h4>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $jobList = $this->db->get('jobs');
                            foreach ($jobList->result() as $list) : ?>
                                <tr>
                                    <td><?= $list->id; ?></td>
                                    <td><?= $list->jobName; ?></td>
                                    <td><a href="<?= site_url(); ?>jobs/update/<?= $list->id; ?>" class="btn btn-warning  btn-xs"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                                    <td><a href="<?= site_url(); ?>jobs/delete/<?= $list->id; ?>" class="btn btn-danger  btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>

<!-- end dash data -->

<!-- end content -->
<!-- inline js -->

<?php $this->load->view('dash/layout/footerDash'); ?>