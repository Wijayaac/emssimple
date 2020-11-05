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
    </div>
</div>
<!-- end dash data -->

<!-- end content -->

<?php $this->load->view('dash/layout/footerDash'); ?>