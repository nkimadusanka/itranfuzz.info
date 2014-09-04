<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        #load models
        $this->load->model('donor');
        $this->load->model('employee');
    }

    public function validate($emailInput,$passwordInput){
        
        $email = $this->security->xss_clean($emailInput);
        $password = $this->security->xss_clean($passwordInput);
        
        #set where methods
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        
        #select method
        $query1 = $this->db->get('donor');
        $query2 = $this->db->get('employee');
        
        if($query1->num_rows == 1)
        {
            $row = $query1->row();
            $donor = new Donor($row);
            $data = array(
                    'user_Mode' => 'd',
                    'dId' => $donor->getDId(),
                    'lname' => $donor->getLname(),
                    'photo' => 'defualt.gif',
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }else if($query2->num_rows == 1)
        {
            $row = $query2->row();
            $employee = new Employee($row);
            $data = array(
                    'user_Mode' => $employee->getType(),
                    'eId' => $employee->getEId(),
                    'lname' => $employee->getLname(),
                    'photo' => 'defualt.gif',
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}