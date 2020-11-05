<?php
defined('BASEPATH') or exit('No direct script allowed');

class EmployeesJobs extends CI_Model
{

    public function add($jobDetails)
    {
        $this->db->insert('jobs', $jobDetails);
    }
}
