<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    var $template = 'admin/template';
    var $title = 'Administrator Panel';

    function __construct() {
        parent::__construct();
        
        if($this->session->userdata('status') == false){
			redirect(base_url("auth/login"));
		}
        
        $this->load->model('admin/Pages_m', 'mpage');
        $this->load->model('admin/Team_m', 'mteam');
        $this->load->model('admin/Facilitator_m', 'mfac');
        $this->load->model('admin/Praktisi_m', 'mprak');
        $this->load->model('admin/Working_m', 'mwork');
        $this->load->model('admin/Setting_m', 'mset');
        $this->load->model('admin/Contact_m', 'mcon');
        $this->load->model('admin/Client_m', 'mcli');
        $this->load->model('admin/Testimony_m', 'mtes');
        $this->load->model('admin/Service_m', 'mser');
        $this->load->model('admin/Social_m', 'msos');
        $this->load->model('admin/Slider_m', 'mslid');
        $this->load->model('admin/Event_m', 'meve');
        $this->load->model('admin/Archive_m', 'marc');
        $this->load->model('admin/Training_m', 'mtra');
        $this->load->model('admin/Gallery_m', 'mgal');
    }
    
    function index(){
        $data['content'] = 'admin/pages/dashboard/index';
        $data['title'] = $this->title;  
        $data['username'] = $this->session->userdata();
        $this->load->view($this->template, $data);      
    }
    
    function pages(){
        $data['content'] = 'admin/pages/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mpage->getPages();
        $this->load->view($this->template, $data);      
    }
    
    function team(){
        $data['content'] = 'admin/pages/about/team';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mteam->getTeamMember();
        $this->load->view($this->template, $data);      
    }
    
    function facilitator(){
        $data['content'] = 'admin/pages/about/facilitator';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mfac->getAllFacilitator();
        $this->load->view($this->template, $data);      
    }
    
    function praktisi(){
        $data['content'] = 'admin/pages/about/praktisi';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mprak->getAllPraktisi();
        $this->load->view($this->template, $data);      
    }
    
    function working(){
        $data['content'] = 'admin/pages/about/working';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mwork->getAllWorking();
        $this->load->view($this->template, $data);      
    }   
    
    function contact(){
        $data['content'] = 'admin/pages/contact/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mcon->getAllContact();
        $this->load->view($this->template, $data);      
    }  
    
    function client(){
        $data['content'] = 'admin/pages/client/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mcli->getAllClient();
        $this->load->view($this->template, $data);      
    } 
    
    function testimony(){
        $data['content'] = 'admin/pages/testimony/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mtes->getAllTestimony();
        $this->load->view($this->template, $data);      
    } 
    
    function setting(){
        $data['content'] = 'admin/pages/settings/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mset->getAllSetting();
        $this->load->view($this->template, $data);      
    }  
    
    function services(){
        $data['content'] = 'admin/pages/services/training/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mser->getAllService();
        //print_r($data['items']);
        $this->load->view($this->template, $data);      
    }  
    
    function training(){
        $data['content'] = 'admin/pages/archive/training/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->mtra->getAllTrainingArchive();
        $data['services'] = $this->mser->getAllService();
        //print_r($data['items']);
        $this->load->view($this->template, $data);      
    } 
    
    function event(){
        $data['content'] = 'admin/pages/archive/event/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->meve->getAllEventArchive();
        $data['years'] = $this->marc->getAllArchive();
        $this->load->view($this->template, $data);      
    } 
    
    function wedding(){
        $data['content'] = 'admin/pages/services/wedding/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $this->load->view($this->template, $data);      
    } 
    
    function merchandising(){
        $data['content'] = 'admin/pages/services/merchandising/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $this->load->view($this->template, $data);      
    } 
    
    function social(){
        $data['content'] = 'admin/pages/socialmedia/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->msos->getSocial();
        $this->load->view($this->template, $data);      
    } 
    
    function archive(){
        $data['content'] = 'admin/pages/archive/index';
        $data['title'] = $this->title;
        $data['username'] = $this->session->userdata();
        $data['items'] = $this->marc->getAllArchive();
        //print_r($data['items']);
        $this->load->view($this->template, $data);      
    } 
    
    function gallery($pages){
        switch ($pages) {
            case "training":
                $data['content'] = 'admin/pages/gallery/training/index';
                $data['title'] = $this->title;
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mgal->getAllTrainingGallery();
                $data['archives'] = $this->mtra->getAllTrainingArchive();
                //print_r($data['items']);
                $this->load->view($this->template, $data);
                break;            
            case "event":
                $data['content'] = 'admin/pages/gallery/event/index';
                $data['title'] = $this->title;
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mgal->getAllGallery();
                $data['events'] = $this->meve->getAllEventArchive();
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Page not found!";
        }              
    } 
    
    function slider($pages){
        switch ($pages) {
            case "homepage":
                $data['content'] = 'admin/pages/slider/homepage/index';        
                $data['title'] = $this->title; 
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mslid->getSliderByPage(1);
                $this->load->view($this->template, $data);
                break;            
            case "wedding":
                $data['content'] = 'admin/pages/slider/wedding/index';        
                $data['title'] = $this->title; 
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mslid->getSliderByPage(2);
                $this->load->view($this->template, $data);
                break;
            case "merchandising":
                $data['content'] = 'admin/pages/slider/merchandising/index';        
                $data['title'] = $this->title; 
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mslid->getSliderByPage(3);
                $this->load->view($this->template, $data);
                break;
            case "training":
                $data['content'] = 'admin/pages/slider/training/index';        
                $data['title'] = $this->title; 
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mslid->getSliderByPage(4);
                $this->load->view($this->template, $data);
                break;
            case "event":
                $data['content'] = 'admin/pages/slider/event/index';        
                $data['title'] = $this->title; 
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mslid->getSliderByPage(5);
                //print_r($data['items']);
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Page not found!";
        } 
    }
    
    function detail($pages,$id){
        switch ($pages) {
            case "training":
                $data['content'] = 'admin/pages/gallery/training/detail';
                $data['title'] = $this->title;
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mgal->getAllTrainingGalleryImages($id);
//                echo "<pre>";
//                print_r($data['items']);
//                echo "</pre>";
                $this->load->view($this->template, $data);
                break;            
            case "event":
                $data['content'] = 'admin/pages/gallery/event/detail';
                $data['title'] = $this->title;
                $data['username'] = $this->session->userdata();
                $data['items'] = $this->mgal->getAllEventGalleryImages($id);
//                echo "<pre>";
//                print_r($data['items']);
//                echo "</pre>";
                //print_r($id);
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Page not found!";
        }              
    } 

}