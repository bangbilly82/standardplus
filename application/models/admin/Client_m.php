<?php

Class Client_m extends CI_Model{

    var $table = 'clients';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllClient(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('clients_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function insertClient(){  
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "client_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/client",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('clients_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'clients_name'=>$this->input->post('clients_name'),
            'clients_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateClient($id){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "client_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/client",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('clients_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'clients_name'=>$this->input->post('clients_name'),
            'clients_image'=>$upload_data['file_name']
        );
        $this->db->where('clients_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editClient(){
        $id = $this->input->get('id');
        $this->db->where('clients_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteClient($id) {
        $this->db->where('clients_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}