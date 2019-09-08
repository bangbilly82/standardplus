<?php

Class Testimony_m extends CI_Model{

    var $table = 'testimony';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllTestimony(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('testimony_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function insertTestimony(){   
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "testimony_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/testimony",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('testimony_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'testimony_name'=>$this->input->post('testimony_name'),
            'testimony_from'=>$this->input->post('testimony_from'),
            'testimony_service'=>$this->input->post('testimony_service'),
            'testimony_text'=>$this->input->post('testimony_text'),
            'testimony_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateTestimony($id){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "testimony_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/testimony",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('testimony_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'testimony_name'=>$this->input->post('testimony_name'),
            'testimony_from'=>$this->input->post('testimony_from'),
            'testimony_service'=>$this->input->post('testimony_service'),
            'testimony_text'=>$this->input->post('testimony_text'),
            'testimony_image'=>$upload_data['file_name']
        );
        $this->db->where('testimony_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editTestimony(){
        $id = $this->input->get('id');
        $this->db->where('testimony_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteTestimony($id) {
        $this->db->where('testimony_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}