<?php

Class Service_m extends CI_Model{

    var $table = 'training_services';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllService(){
        $this->db->select('*');
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertService(){  
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "services_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/archive/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('training_service_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'training_service_name'=>$this->input->post('training_service_name'),
            'training_service_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateService($id){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "services_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/archive",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('training_service_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'training_service_name'=>$this->input->post('training_service_name'),
            'training_service_image'=>$upload_data['file_name']
        );
        $this->db->where('training_service_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editService(){
        $id = $this->input->get('id');
        $this->db->where('training_service_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteService($id) {
        $this->db->where('training_service_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}