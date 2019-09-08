<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    var $template = 'template';
    var $title = 'Standardplus - Event Organizer';

    function __construct() {
        parent::__construct();
    }

    function index($pages) {}
    
    function archive($year){
        switch ($year) {
            case "2012":
                $data['content'] = 'pages/services/detail/event';        
                $data['name'] = $year;
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "2013":
                $data['content'] = 'pages/services/detail/event';        
                $data['name'] = $year;
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "2014":
                $data['content'] = 'pages/services/detail/event';        
                $data['name'] = $year;
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "2015":
                $data['content'] = 'pages/services/detail/event';        
                $data['name'] = $year;
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            case "2016":
                $data['content'] = 'pages/services/detail/event';        
                $data['name'] = $year;
                $data['title'] = $this->title;
                $this->load->view($this->template, $data);
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
    }

}