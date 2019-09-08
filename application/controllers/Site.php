<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    var $template = 'template';
    var $title = 'Standardplus - Event Organizer';

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Contact_m', 'mcon');
        $this->load->model('admin/Team_m', 'mteam');
        $this->load->model('admin/Facilitator_m', 'mfac');
        $this->load->model('admin/Praktisi_m', 'mprak');
        $this->load->model('admin/Working_m', 'mwork');
        $this->load->model('admin/Pages_m', 'mpage');
        $this->load->model('admin/Client_m', 'mcli');
        $this->load->model('admin/Testimony_m', 'mtes');
        $this->load->model('admin/Slider_m', 'mslid');
        $this->load->model('admin/Archive_m', 'marc');
        $this->load->model('admin/Event_m', 'meve');
        $this->load->model('admin/Service_m', 'mser');
    }

    function index() {
        $data['content'] = 'pages/home/index';
        $data['title'] = $this->title;
        $data['page'] = $this->mpage->getPageById(1);
        $data['items'] = $this->mcli->getAllClient();
        $data['sliders'] = $this->mslid->getSliderByPage(1);
        $this->load->view($this->template, $data);            
    }
    
    function contact($test = null) {
        $data['content'] = 'pages/contact/index';        
        $data['title'] = 'Contact Us | '.$this->title;
        $data['items'] = $this->mcon->getAllContact();
        $this->load->view($this->template, $data);
    }
    
    function testimony() {
        $data['content'] = 'pages/testimony/index';        
        $data['title'] = 'Testimony | '.$this->title;
        $data['page'] = $this->mpage->getPageById(6);
        $data['items'] = $this->mtes->getAllTestimony();
        $this->load->view($this->template, $data);
    }
    
    function about($pages,$test = null){
        switch ($pages) {
            case "team":
                $data['content'] = 'pages/about/team/index';        
                $data['title'] = 'Our Team | '.$this->title;
                $data['page'] = $this->mpage->getPageById(2);
                $data['items'] = $this->mteam->getTeamMember();
                $this->load->view($this->template, $data);
                break;
            case "facilitator":
                $data['content'] = 'pages/about/facilitator/index';        
                $data['title'] = 'Facilitator | '.$this->title;
                $data['page'] = $this->mpage->getPageById(3);
                $data['items'] = $this->mfac->getAllFacilitator();
                $this->load->view($this->template, $data);
                break;
            case "praktisi-wirausaha":
                $data['content'] = 'pages/about/mentor/index';        
                $data['title'] = 'Praktisi Wirausaha | '.$this->title;
                $data['page'] = $this->mpage->getPageById(4);
                $data['items'] = $this->mprak->getAllPraktisi();
                $this->load->view($this->template, $data);
                break;
            case "working-with-us":
                $data['content'] = 'pages/about/work/index';        
                $data['title'] = 'Working With Us | '.$this->title;
                $data['page'] = $this->mpage->getPageById(5);
                $data['items'] = $this->mwork->getAllWorking();
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Page not found!";
        }
    }
    
    function services($pages){                
        $content = 'pages/services/detail/index';
        switch ($pages) {
            case "training-provider":
                $data['content'] = 'pages/services/training/index';        
                $data['title'] = 'Training Provider | '.$this->title;
                $data['sliders'] = $this->mslid->getSliderByPage(4);
                $data['page'] = $this->mpage->getPageById(7);
                $data['services'] = $this->mser->getAllService();                    
                $this->load->view($this->template, $data);
                break;
            case "event-organizer":
                $data['content'] = 'pages/services/event/index';        
                $data['title'] = 'Event Organizer | '.$this->title;
                $data['sliders'] = $this->mslid->getSliderByPage(5);
                $data['page'] = $this->mpage->getPageById(8);
                $data['archives'] = $this->marc->getAllArchive();
                //print_r($data['archives']);
                $this->load->view($this->template, $data);
                break;
            case "wedding-organizer":
                $data['content'] = 'pages/services/wedding/index';        
                $data['title'] = 'Wedding Organizer | '.$this->title;
                $data['sliders'] = $this->mslid->getSliderByPage(2);
                $data['page'] = $this->mpage->getPageById(9);
                $this->load->view($this->template, $data);
                break;
            case "merchandising":
                $data['content'] = 'pages/services/merchandising/index';        
                $data['title'] = 'Merchandising | '.$this->title;
                $data['sliders'] = $this->mslid->getSliderByPage(3);
                $data['page'] = $this->mpage->getPageById(10);
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Page not found!";
        }
    }
}
