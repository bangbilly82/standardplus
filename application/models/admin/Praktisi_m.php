<?php

Class Praktisi_m extends CI_Model{

    var $table = 'praktisi';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllPraktisi(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('praktisi_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertPraktisi(){   
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "praktisi_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/praktisi",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('praktisi_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'praktisi_name'=>$this->input->post('praktisi_name'),
            'praktisi_description'=>$this->input->post('praktisi_description'),
            'praktisi_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updatePraktisi($id){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "praktisi_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/praktisi",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "1000",
            'max_width' => "1000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('praktisi_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'praktisi_name'=>$this->input->post('praktisi_name'),
            'praktisi_description'=>$this->input->post('praktisi_description'),
            'praktisi_image'=>$upload_data['file_name']
        );
        $this->db->where('praktisi_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editPraktisi(){
        $id = $this->input->get('id');
        $this->db->where('praktisi_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deletePraktisi($id) {
        $this->db->where('praktisi_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}