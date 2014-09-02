<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model{

    public function validate($emailInput,$passwordInput){
        
        $email = $this->security->xss_clean($emailInput);
        $password = $this->security->xss_clean($passwordInput);
        
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        
        $query = $this->db->get('donor');
        
        if($query->num_rows == 1)
        {
            $row = $query->row();
            $data = array(
                    'dId' => $row->dId,
                    'fName' => $row->fname,
                    'lName' => $row->lname,
                    'email' => $row->email,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        return false;
    }
}