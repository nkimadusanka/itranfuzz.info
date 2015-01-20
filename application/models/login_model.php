<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        #load models
        $this->load->model('donor');
        $this->load->model('employee');
    }

    public function validate($emailInput,$passwordInput){

        $dFlag = false;
        $eFlag = false;

        $key = 'UyTHkbxiGCt2W4HzmtL0TRKMynDGEqYX';

        $email = $this->security->xss_clean($emailInput);
        $password = $this->security->xss_clean($passwordInput);
        

        #set where methods
        $this->db->where('email', $email);
        $query1 = $this->db->get('donor');

        if($query1->num_rows == 1){
            $depass = $query1->result()[0]->password;
            if($password == $this->encrypt->decode($depass,$key)){
                $dFlag = true;
            }
        }

        $this->db->where('email', $email);
        $query2 = $this->db->get('employee');

        if($query2->num_rows == 1){
            $depass = $query2->result()[0]->password;
            if($password == $this->encrypt->decode($depass,$key)){
                $eFlag = true;
            }
        }
        
        if($dFlag)
        {
            $row = $query1->row();
            $donor = new Donor($row);
            $data = array(
                    'user_Mode' => 'd',
                    'dId' => $donor->getDId(),
                    'lname' => $donor->getLname(),
                    'photo' => $donor->getPhoto(),
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }else if($eFlag)
        {
            $row = $query2->row();
            $employee = new Employee($row);
            $data = array(
                    'user_Mode' => $employee->getType(),
                    'eId' => $employee->getEId(),
                    'lname' => $employee->getLname(),
                    'photo' => $employee->getPhoto(),
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}