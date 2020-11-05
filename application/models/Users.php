<?php
defined('BASEPATH') or exit('No direct script allowed');

class Users extends CI_Model
{

    public function insertUser($userData)
    {
        $this->db->insert('users', $userData);
    }
}
