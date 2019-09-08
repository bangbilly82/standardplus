<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends CI_Controller {

    var $template = 'template';
    var $title = 'Standardplus - Event Organizer';

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Archive_m', 'marc');
        $this->load->model('admin/Event_m', 'meve');
        $this->load->model('admin/Pages_m', 'mpage');
        $this->load->model('admin/Training_m', 'mtra');
        $this->load->model('admin/Service_m', 'mser');
        $this->load->model('admin/Gallery_m', 'mgal');
    }

    function index() {
        $data['content'] = 'pages/home/index';
        $data['title'] = $this->title;
        $data['page'] = $this->mpage->getPageById(1);
        $data['items'] = $this->mcli->getAllClient();
        $data['sliders'] = $this->mslid->getSliderByPage(1);
        $this->load->view($this->template, $data);            
    }
    
    function event($year){
        $data['content'] = 'pages/services/detail/event';  
        $data['title'] = 'Event Organizer Archive | '.$year;
        $data['year'] = $year;
        $data['page'] = $this->mpage->getPageById(8);
        $data['items'] = $this->meve->getEventArchiveByYear($year);
        $this->load->view($this->template, $data);
    }
    
    function event2($year){
        $data['content'] = 'pages/services/detail/event';  
        $data['title'] = 'Event Organizer Archive | '.$year;
        $data['year'] = $year;
        $cek = $this->meve->getEventArchiveByYear($year);
        for ($i = 0; $i < count($cek); $i++){            
//            echo $cek[$i]['event_archive_name']."</br>";
            echo "<pre>";
            print_r($cek[$i]);
            echo "</pre>";
            echo "";
            $merge = $this->meve->getAllEventGalleryByKey($cek[$i]['event_archive_id']);
            array_merge($cek, $merge);
            echo "<pre>";
            print_r($merge);
            echo "</pre>";
            echo "";
//            print_r($merge);
//            echo "</br>";
//            foreach ($merge as $mer) {
//                echo $mer['gallery_image_name']. "<br>";
//            }
        }
        $data['items'] = $this->meve->getEventArchiveByYear($year);        
//        $data['merge'] = $this->mgal->getAllGalleryByKey(1);
//        $data['test2'] = array_merge($cek, $merge);
        $data['test'] = array(
                            array(
                                'event_name' => 'Beauty Secret', 
                                'folder' => '2012',
                                'images'  => array('beauty_1.JPG','beauty_2.JPG','beauty_3.JPG','beauty_4.JPG','beauty_5.JPG')
                            ) 
                        );        
//          echo "<pre>";
//          print_r($data['test2']);
//          echo "</pre>";
//          echo "";
//          echo "<pre>";
//          print_r($data['items']);
//          echo "</pre>";
//        echo "";
//        echo "<pre>";
//        print_r($data['merge']);
//        echo "</pre>";
//        echo "";
//        echo "<pre>";
//        print_r($data['test']);
//        echo "</pre>";
        //$this->load->view($this->template, $data);
    }
    
    function training($service){
        $data['content'] = 'pages/services/detail/index';  
        $data['title'] = str_replace("&","and",str_replace("-"," ",ucwords($service)));
        $data['items'] = $this->mtra->getTrainingArchiveByKey();
        $this->load->view($this->template, $data);
        //$data['gal'] = $this->mgal->getAllTrainingGalleryByKey(9);
        //echo "<pre>";
        //print_r($data['items']);
        //echo "</pre>";
        //$this->load->view($this->template, $data);
    }
}
