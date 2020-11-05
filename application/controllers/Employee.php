<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeesData');
    }
    public function index()
    {
        $this->load->view('dash/dashboard');
    }
    public function view()
    {
        $this->load->view('dash/listEmployee');
    }

    public function add()
    {
        $this->load->view('dash/addEmployee');
    }

    public function save()
    {
        if ($this->input->post('addButton')) {
            $employeeName = $this->input->post('nameEmployee');
            $employeeEmail = $this->input->post('emailEmployee');
            $phone = $this->input->post('phone');
            $job = $this->input->post('job');


            $employee = array(
                'nameEmployee' => $employeeName,
                'emailEmployee' => $employeeEmail,
                'phone' => $phone,
                'job' => $job
            );

            $this->EmployeesData->add($employee);

            redirect('employee/view', 'refresh');
        }
    }
    public function edit($id)
    {

        $this->load->view('dash/updateEmployee', $id);
    }

    public function update($id)
    {
        if ($this->input->post('updateButton')) {
            $employeeName = $this->input->post('nameEmployee');
            $employeeEmail = $this->input->post('emailEmployee');
            $phone = $this->input->post('phone');
            $job = $this->input->post('job');

            $employeesData = array(
                'nameEmployee' => $employeeName,
                'emailEmployee' => $employeeEmail,
                'phone' => $phone,
                'job' => $job
            );

            $this->db->where('id', $id);
            $this->db->update('employees', $employeesData);



            redirect('employee/view', 'refresh');
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('employees');

        redirect('employee/view', 'refresh');
    }
}
