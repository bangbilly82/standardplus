<?php

Class Facilitator_m extends CI_Model{

    var $table = 'facilitator';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllFacilitator(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('facilitator_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertFacilitator(){   
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "facilitator_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/facilitator",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('facilitator_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'facilitator_name'=>$this->input->post('facilitator_name'),
            'facilitator_description'=>$this->input->post('facilitator_description'),
            'facilitator_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateFacilitator($id){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "facilitator_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/facilitator",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('facilitator_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'facilitator_name'=>$this->input->post('facilitator_name'),
            'facilitator_description'=>$this->input->post('facilitator_description'),
            'facilitator_image'=>$upload_data['file_name']
        );
        $this->db->where('facilitator_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editFacilitator(){
        $id = $this->input->get('id');
        $this->db->where('facilitator_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteFacilitator($id) {
        $this->db->where('facilitator_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}