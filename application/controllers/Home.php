<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('Users');
    }
    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('index');
        $this->load->view('layout/footer');
    }

    public function login()
    {
        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $userData = array(
                'username' => $username,
                'password' => $password
            );
            $usersList = $this->db->get_where('users', array('username' => $userData['username']));
            foreach ($usersList->result() as $user) {
                if ($userData['username'] == $user->username && $userData['password'] == $user->password) {

                    $_SESSION['username'] = $userData['username'];
                    redirect('dashboard', 'refresh');
                } else {
                    echo "<script> alert('Username or password incorrect'); </script>";
                    redirect('home', 'refresh');
                }
            }
        } else {
            redirect('home', 'refresh');
        }
    }
    public function register()
    {
        $this->load->view('layout/header');
        $this->load->view('register');
        $this->load->view('layout/footer');
    }

    public function regProcess()
    {
        if ($this->input->post('register')) {
            $email = $this->input->post('emailRegister');
            $username = $this->input->post('usernameRegister');
            $password = $this->input->post('passwordRegister');

            $registerData = array(
                'email' => $email,
                'username' => $username,
                'password' => $password
            );
            $this->Users->insertUser($registerData);
            redirect('home', 'refresh');
        } else {
            redirect('home', 'refresh');
        }
    }
    public function logout()
    {
        session_unset();
        session_destroy();
        redirect('home', 'refresh');
    }
}
