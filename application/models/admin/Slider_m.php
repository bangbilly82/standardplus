<?php

Class Slider_m extends CI_Model{

    var $table = 'slider';
    var $imagestable = 'images';
    
    function __construct() {
        parent::__construct();
    }
    
    function getSliderByPage($id){
        $this->db->select('*');
        $this->db->from('slider');        
        $this->db->join('images', 'images.images_category = slider.slider_id');
        $this->db->where('slider_id', $id);
        $this->db->order_by('images_year');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function insertSliderAll(){   
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "slider_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/slide",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "3000",
            'max_height' => "4000",
            'max_width' => "4000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('images_name');
                
        $upload_data = $this->upload->data();
        
        $data = array(            
            'images_category'=>$this->input->post('images_category'),
            'images_client_name'=>$this->input->post('images_client_name'),
            'images_caption'=>$this->input->post('images_caption'),
            'images_year'=>$this->input->post('images_year'),
            'images_name'=>$upload_data['file_name']
        );
        $this->db->insert($this->imagestable,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function insertSlider(){  
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "slider_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/slide",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "3000",
            'max_height' => "4000",
            'max_width' => "4000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('images_name');
                
        $upload_data = $this->upload->data();
        
        $data = array(            
            'images_category'=>$this->input->post('images_category'),
            'images_name'=>$upload_data['file_name']
        );
        $this->db->insert($this->imagestable,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateSlider($id){
        
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
    
    function editSlider(){
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
    
    function deleteSlider($id) {
        $this->db->where('images_id', $id);
        $this->db->delete($this->imagestable);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}