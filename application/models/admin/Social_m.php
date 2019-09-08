<?php

Class Social_m extends CI_Model{

    var $table = 'social_media';
    
    function __construct() {
        parent::__construct();
    }
    
    function getSocial(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->row_array();
    }
    
    function updatePages($id){        
        $data = array(
            'page_name'=>$this->input->post('page_name'),
            'page_description'=>$this->input->post('page_description')
        );
        $this->db->where('page_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editPages(){
        $id = $this->input->get('id');
        $this->db->where('page_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }

}