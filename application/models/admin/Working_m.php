<?php

Class Working_m extends CI_Model{

    var $table = 'working';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllWorking(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('working_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertWorking(){   
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "working_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/working",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('working_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'working_name'=>$this->input->post('working_name'),
            'working_description'=>$this->input->post('working_description'),
            'working_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateWorking($id){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "working_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/working",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('working_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'working_name'=>$this->input->post('working_name'),
            'working_description'=>$this->input->post('working_description'),
            'working_image'=>$upload_data['file_name']
        );
        $this->db->where('working_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editWorking(){
        $id = $this->input->get('id');
        $this->db->where('working_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteWorking($id) {
        $this->db->where('working_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}