<?php

Class Team_m extends CI_Model{

    var $table = 'team';
    
    function __construct() {
        parent::__construct();
    }
    
    function getTeamMember(){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('team_role');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    // Insert New Team
    function insertTeam(){   
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "team_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/team",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('team_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'team_name'=>$this->input->post('team_name'),
            'team_role'=>$this->input->post('team_role'),
            'team_description'=>$this->input->post('team_description'),
            'team_image'=>$upload_data['file_name']
        );
        $this->db->insert($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function updateTeam($id){   
//        $id = $this->input->get('id');
        $rand = substr(md5(microtime()),rand(0,26),5);
        $file_name = "team_".$rand.time();
        $config = array(
            'upload_path' => "resources/images/team",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "1000",
            'max_height' => "2000",
            'max_width' => "2000",
            'file_name' => $file_name
        );
                
        $this->load->library('upload', $config);
        $this->upload->do_upload('team_image');
                
        $upload_data = $this->upload->data();
        
        $data = array(
            'team_name'=>$this->input->post('team_name'),
            'team_role'=>$this->input->post('team_role'),
            'team_description'=>$this->input->post('team_description'),
            'team_image'=>$upload_data['file_name']
        );
        $this->db->where('team_id',$id);
        $this->db->update($this->table,$data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function editTeam(){
        $id = $this->input->get('id');
        $this->db->where('team_id', $id);
        $query = $this->db->get($this->table);
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else{
            return false;
        }
    }
    
    function deleteTeam($id) {
        $this->db->where('team_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }

    function getArticle($permalink = FALSE, $start = 0, $perpage = 9){
        if($permalink === FALSE){
            $this->db->select('*');
            $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
            $this->db->from('article');        
            $this->db->join('category', 'category.id_category = article.id_category');
            $this->db->join('user', 'user.nameid = article.author');
            //$this->db->where('published_status', 1);
            $this->db->order_by('id_artilce','desc');
            $this->db->limit($perpage,$start);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result_array();
            }    
        }
        else{
            $this->db->select('*');
            $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
            $this->db->from('article');        
            $this->db->join('category', 'category.id_category = article.id_category');
            $this->db->join('user', 'user.nameid = article.author');
            $this->db->where('permalink', $permalink);
            $query = $this->db->get();
            return $query->result_array();
        }
        
    }
    
    function getArticleFeaturedbyCategory($category, $start = 0, $perpage = 6){
            $this->db->select('*');
            $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
            $this->db->from('article');        
            $this->db->join('category', 'category.id_category = article.id_category');
            $this->db->join('user', 'user.nameid = article.author');
            $this->db->order_by('rand()','desc');
            $this->db->where('category.id_category', $category);
            $this->db->limit($perpage,$start);
            $query = $this->db->get();
            if($query->num_rows() > 0){
                return $query->result_array();
            } 
    }
    
    function getRecommended(){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->order_by('id_artilce','desc');
        $this->db->limit($perpage,$start);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        }   
    }    
    
    function getArticlebyCategory($category){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->order_by('id_artilce','desc');
        $this->db->where('category.id_category', $category);
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        } 
    }
    
    function getAll($category,$author){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->order_by('id_artilce','desc');
        $this->db->where('category.category', $category);            
        $this->db->where('author', $author);            
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->result_array();
        } 
    }
    
    function getArticleContributor($id){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->where('id_artilce', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function editArticle($id){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->where('id_artilce', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getNumArticle($author){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->order_by('id_artilce','desc');
        $this->db->where('category.category', 'article');            
        $this->db->where('author', $author);            
        $query = $this->db->get();    
        return $query->num_rows();
    }
    
    function getNumComic($author){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->order_by('id_artilce','desc');
        $this->db->where('category.category', 'comic');            
        $this->db->where('author', $author);            
        $query = $this->db->get();    
        return $query->num_rows();
    }
    
    function getNumVideo($author){
        $this->db->select('*');
        $this->db->select("DATE_FORMAT(post_date, '%e %M %Y') as post_date");
        $this->db->from('article');        
        $this->db->join('category', 'category.id_category = article.id_category');
        $this->db->join('user', 'user.nameid = article.author');
        $this->db->order_by('id_artilce','desc');
        $this->db->where('category.category', 'video');            
        $this->db->where('author', $author);            
        $query = $this->db->get();    
        return $query->num_rows();
    }
    
    function updateArticle($id, $data){
        $this->db->where('id_artilce', $id);
        $this->db->update($this->table, $data);
        if ($this->db->affected_rows() == 1) {

            return TRUE;
        }
        return FALSE;
    }
    
    function deleteArticle($id) {
        $this->db->where('team_id', $id);
        $this->db->delete($this->table);
        if ($this->db->affected_rows() == 1) {
            return TRUE;
        }
        return FALSE;
    }
    

}