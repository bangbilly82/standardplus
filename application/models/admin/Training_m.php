<?php

Class Training_m extends CI_Model{

    var $table = 'training_archive';
    var $table2 = 'training_images';
    
    function __construct() {
        parent::__construct();
    }
    
    function getAllTrainingArchive(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('training_services', 'training_services.training_service_id = training_archive.training_archive_key');
        $this->db->order_by('training_archive_year');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getTrainingArchiveByKey(){
        $key = $this->input->get('q');
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('training_services', 'training_services.training_service_id = training_archive.training_archive_key');
//        $this->db->join('gallery_images', 'gallery_images.gallery_image_key = event_archive.event_archive_id');
        $this->db->where('training_archive_key',$key);
        $this->db->order_by('training_archive_year');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getEventArchiveByYear($year){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('archive', 'archive.archive_id = event_archive.event_archive_year');
//        $this->db->join('gallery_images', 'gallery_images.gallery_image_key = event_archive.event_archive_id');
        $this->db->where('archive_year',$year);
        $this->db->order_by('event_archive_name');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getAllEventGalleryByKey($id){
//        $id = 1;
        $this->db->select('gallery_image_name');
        $this->db->from($this->table2);
//        $this->db->join('event_archive', 'event_archive.event_archive_id = gallery_images.gallery_image_key');
//        $this->db->join('archive', 'archive.archive_id = event_archive.event_archive_year');
//        $this->db->group_by("event_archive_name");
        //$this->db->group_by("archive_year");
        $this->db->where('gallery_image_key',$id);
//        $this->db->order_by('gallery_image_name');
//        $this->db->order_by('archive_year');
        $this->db->order_by('gallery_image_id');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertTrainingArchive(){
        $data = array(
            'training_archive_name'=>$this->input->post('training_archive_name'),
            'training_archive_place'=>$this->input->post('training_archive_place'),
            'training_archive_year'=>$this->input->post('training_archive_year'),
            'training_archive_key'=>$this->input->post('training_archive_key')
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateTrainingArchive($id){
        $data = array(
            'training_archive_name'=>$this->input->post('training_archive_name'),
            'training_archive_place'=>$this->input->post('training_archive_place'),
            'training_archive_year'=>$this->input->post('training_archive_year'),
            'training_archive_key'=>$this->input->post('training_archive_key')
        );
        $this->db->where('training_archive_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editTrainingArchive(){
        $id = $this->input->get('id');
        $this->db->where('training_archive_id', $id);
        $this->db->join('training_services', 'training_services.training_service_id = training_archive.training_archive_key');
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteTrainingArchive($id) {
        $this->db->where('training_archive_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

}