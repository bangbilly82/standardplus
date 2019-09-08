<?php

Class Gallery_m extends CI_Model{

    var $table = 'gallery_images';
    var $tabletraining = 'training_images';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllGallery(){
//        $id = 1;
        $this->db->select('*,count(gallery_image_key)');
        $this->db->from($this->table);
        $this->db->join('event_archive', 'event_archive.event_archive_id = gallery_images.gallery_image_key');
        $this->db->join('archive', 'archive.archive_id = event_archive.event_archive_year');
        //$this->db->group_by("event_archive_name");
        $this->db->group_by("gallery_image_key");
        //$this->db->group_by("archive_year");
//        $this->db->where('gallery_image_key',$id);
//        $this->db->order_by('gallery_image_name');
        $this->db->order_by('archive_year');
//        $this->db->order_by('gallery_image_id');
        $query = $this->db->get();
        return $query->result_array();
    }        
    
    function countAllGallery(){
//        $id = 1;
        $this->db->select('count(gallery_image_key)');
        $this->db->from($this->table);
        $this->db->join('event_archive', 'event_archive.event_archive_id = gallery_images.gallery_image_key');
        $this->db->join('archive', 'archive.archive_id = event_archive.event_archive_year');
        $this->db->group_by("event_archive_name");
        //$this->db->group_by("archive_year");
//        $this->db->where('gallery_image_key',$id);
//        $this->db->order_by('gallery_image_name');
        $this->db->order_by('gallery_image_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertGallery(){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "file_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/gallery",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('gallery_image_name');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'gallery_image_name'=>$upload_data['file_name'],
            'gallery_image_alt'=>'default',
            'gallery_image_key'=>$this->input->post('gallery_image_key')
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    // Training Gallery
    function getAllTrainingGallery(){
        $this->db->select('*,count(training_image_key)');
        $this->db->from($this->tabletraining);
        $this->db->join('training_archive', 'training_archive.training_archive_id = training_images.training_image_key');
        $this->db->join('training_services', 'training_services.training_service_id = training_archive.training_archive_key');
        $this->db->group_by("training_image_key");
        $this->db->order_by('training_archive_year');
        $query = $this->db->get();
        return $query->result_array();
    }  
    
    function insertTrainingGallery(){
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "training_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/gallery",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2000",
            'max_height' => "3000",
            'max_width' => "3000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('training_image_name');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'training_image_name'=>$upload_data['file_name'],
            'training_image_alt'=>'Not Defined',
            'training_image_key'=>$this->input->post('training_image_key')
        );
        $this->db->insert($this->tabletraining,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function getAllTrainingGalleryByKey($id){
//        $id = 1;
        $this->db->select('*');
        $this->db->from($this->tabletraining);
//        $this->db->join('event_archive', 'event_archive.event_archive_id = gallery_images.gallery_image_key');
//        $this->db->join('archive', 'archive.archive_id = event_archive.event_archive_year');
//        $this->db->group_by("event_archive_name");
        //$this->db->group_by("archive_year");
        $this->db->where('training_image_key',$id);
//        $this->db->order_by('gallery_image_name');
//        $this->db->order_by('archive_year');
        $this->db->order_by('training_image_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // View Event Gallery
    function getAllEventGalleryImages($id){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('event_archive', 'event_archive.event_archive_id = gallery_images.gallery_image_key');
        $this->db->where('gallery_image_key',$id);
        $this->db->order_by('gallery_image_name');
        $query = $this->db->get();
        return $query->result_array();
    }  
    
    function deleteGalleryEvent($id) {
        $this->db->where('gallery_image_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }
    
    // View Training Gallery
    function getAllTrainingGalleryImages($id){
        $this->db->select('*');
        $this->db->from($this->tabletraining);
        $this->db->join('training_archive', 'training_archive.training_archive_id = training_images.training_image_key');
        $this->db->where('training_image_key',$id);
        $this->db->order_by('training_image_name');
        $query = $this->db->get();
        return $query->result_array();
    } 
    
    function deleteGalleryTraining($id) {
        $this->db->where('training_image_id', $id);
        $this->db->delete($this->tabletraining);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}