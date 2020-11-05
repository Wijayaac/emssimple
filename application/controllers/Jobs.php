<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jobs extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EmployeesJobs');
    }

    public function index()
    {
        $this->load->view('dash/addJob');
    }

    public function add()
    {
        if ($this->input->post('addButton')) {
            $jobName = $this->input->post('jobName');

            $jobsData = array(
                'jobName' => $jobName
            );

            $this->EmployeesJobs->add($jobsData);

            redirect('jobs/view', 'refresh');
        }
    }
    public function view()
    {
        $this->load->view('dash/listJob');
    }

    public function update($id)
    {

        $this->load->view('dash/updateJob', $id);
    }

    public function save($id)
    {
        if ($this->input->post('updateButton')) {
            $jobName = $this->input->post('updateJobName');

            $jobsData = array(
                'jobName' => $jobName
            );

            $this->db->where('id', $id);
            $this->db->update('jobs', $jobsData);



            redirect('jobs/view', 'refresh');
        }
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jobs');

        redirect('jobs/view', 'refresh');
    }
}
