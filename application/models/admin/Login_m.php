<?php

Class Login_m extends CI_Model{

    var $table = 'admin_user';
    
    function __construct() {
        parent::__construct();
    }
    
    function authCheck($data){
        return $this->db->get_where($this->table,$data);
    }
    
//    function updateContact($id){        
//        $data = array(
//            'address'=>$this->input->post('address'),
//            'phone'=>$this->input->post('phone'),
//            'fax'=>$this->input->post('fax'),
//            'email'=>$this->input->post('email')
//        );
//        $this->db->where('contact_id',$id);
//        $this->db->update($this->table,$data);
//        if($this->db->affected_rows() == 1){
//            return TRUE;
//        }
//        else{
//            return FALSE;
//        }
//    }

}