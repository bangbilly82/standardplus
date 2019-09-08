<?php

Class Contact_m extends CI_Model{

    var $table = 'contact';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllContact(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    function updateContact($id){        
        $data = array(
            'address'=>$this->input->post('address'),
            'phone'=>$this->input->post('phone'),
            'fax'=>$this->input->post('fax'),
            'email'=>$this->input->post('email')
        );
        $this->db->where('contact_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

}