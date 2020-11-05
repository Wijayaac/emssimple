<?php
defined('BASEPATH') or exit('No direct script allowed');

class EmployeesData extends CI_Model
{

    public function add($employeeData)
    {
        $this->db->insert('employees', $employeeData);
    }
}
