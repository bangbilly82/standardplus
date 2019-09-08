<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    var $template = 'template';
    var $title = 'Standardplus - Event Organizer';

    function __construct() {
        parent::__construct();
    }

    function index($pages) {            

        switch ($pages) {
            case "training-provider":
                $data['content'] = 'pages/services/training/index';        
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "event-organizer":
                $data['content'] = 'pages/services/event/index';        
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "wedding-organizer":
                $data['content'] = 'pages/services/wedding/index';        
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "merchandising":
                $data['content'] = 'pages/services/merchandising/index';        
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
        
    }
    
    function training() {
        $data['content'] = 'pages/services/training/index';        
        $data['title'] = $this->title;
        $this->load->view($this->template, $data);
    }
    
    function event() {
        $data['content'] = 'pages/services/event/index';        
        $data['title'] = $this->title;
        $this->load->view($this->template, $data);
    }
    
    function wedding() {
        $data['content'] = 'pages/services/wedding/index';        
        $data['title'] = $this->title;
        $this->load->view($this->template, $data);
    }
    
    function merchandising() {
        $data['content'] = 'pages/services/merchandising/index';        
        $data['title'] = $this->title;
        $this->load->view($this->template, $data);
    }

}