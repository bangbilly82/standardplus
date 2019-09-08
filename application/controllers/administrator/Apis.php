<?php

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
//header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

defined('BASEPATH') OR exit('No direct script access allowed');

class Apis extends CI_Controller {

    var $template = 'admin/template';
    var $title = 'Administrator Panel';

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Pages_m', 'mpage');
        $this->load->model('admin/Team_m', 'mteam');
        $this->load->model('admin/Facilitator_m', 'mfac');
        $this->load->model('admin/Praktisi_m', 'mprak');
        $this->load->model('admin/Working_m', 'mwork');
        $this->load->model('admin/Client_m', 'mcli');
        $this->load->model('admin/Testimony_m', 'mtes');
        $this->load->model('admin/Contact_m', 'mcon');
        $this->load->model('admin/Slider_m', 'mslid');
        $this->load->model('admin/Event_m', 'meve');
        $this->load->model('admin/Service_m', 'mser');
        $this->load->model('admin/Gallery_m', 'mgal');
        $this->load->model('admin/Training_m', 'mtra');
    }
    
    function index(){
        $data['content'] = 'admin/pages/dashboard/index';
        $data['title'] = $this->title;        
        $this->load->view($this->template, $data);
    }
    
    // Pagesi Apis
    function getPages(){
        $data['items'] = $this->mpage->getPages();
        echo json_encode($data['items']);
    }
    
    function editPages(){
        $result = $this->mpage->editPages();
        echo json_encode($result);
    }
    
    function updatePages($id){
            $this->form_validation->set_rules('page_name','page_name','required');
            $this->form_validation->set_rules('page_description','page_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mpage->updatePages($id);
                redirect('admin/manage/pages');
            }      
            else{
                echo 'Failed';
            }
    }
    
    // Team Apis
    function team(){
        $data['items'] = $this->mteam->getTeamMember();
        echo json_encode($data['items']);
    }
    
    function addTeam(){
            $this->form_validation->set_rules('team_name','team_name','required');
            $this->form_validation->set_rules('team_role','team_role','required');
            $this->form_validation->set_rules('team_description','team_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mteam->insertTeam();
                redirect('admin/manage/team');
//                $result = $this->mteam->insertTeam();
//                $msg['success'] = false;
//                if($result){
//                    
//                    $msg['success'] = true;                    
//                }
//                echo json_encode($msg); 
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editTeam(){
        $result = $this->mteam->editTeam();
        echo json_encode($result);
    }
    
    function updateTeam($id){
        $this->form_validation->set_rules('team_name','team_name','required');
            $this->form_validation->set_rules('team_role','team_role','required');
            $this->form_validation->set_rules('team_description','team_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mteam->updateTeam($id);
                redirect('admin/manage/team');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteTeam($id){
        $this->mteam->deleteTeam($id);
        redirect('admin/manage/team');
    }
    
    // Facilitator Apis
    function getFacilitator(){
        $data['items'] = $this->mfac->getAllFacilitator();
        echo json_encode($data['items']);
    }
    
    function addFacilitator(){
            $this->form_validation->set_rules('facilitator_name','facilitator_name','required');
            $this->form_validation->set_rules('facilitator_description','facilitator_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mfac->insertFacilitator();
                redirect('admin/manage/facilitator');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editFacilitator(){
        $result = $this->mfac->editFacilitator();
        echo json_encode($result);
    }
    
    function updateFacilitator($id){
        $this->form_validation->set_rules('facilitator_name','facilitator_name','required');
            $this->form_validation->set_rules('facilitator_description','facilitator_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mfac->updateFacilitator($id);
                redirect('admin/manage/facilitator');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteFacilitator($id){
        $this->mfac->deleteFacilitator($id);
        redirect('admin/manage/facilitator');
    }
    
    // Praktisi Apis
    function getPraktisi(){
        $data['items'] = $this->mprak->getAllPraktisi();
        echo json_encode($data['items']);
    }
    
    function addPraktisi(){
            $this->form_validation->set_rules('praktisi_name','praktisi_name','required');
            $this->form_validation->set_rules('praktisi_description','praktisi_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mprak->insertPraktisi();
                redirect('admin/manage/praktisi-wirausaha');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editPraktisi(){
        $result = $this->mprak->editPraktisi();
        echo json_encode($result);
    }
    
    function updatePraktisi($id){
        $this->form_validation->set_rules('praktisi_name','praktisi_name','required');
            $this->form_validation->set_rules('praktisi_description','praktisi_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mprak->updatePraktisi($id);
                redirect('admin/manage/praktisi-wirausaha');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deletePraktisi($id){
        $this->mprak->deletePraktisi($id);
        redirect('admin/manage/praktisi-wirausaha');
    }
    
    // Working Apis
    function getWorking(){
        $data['items'] = $this->mwork->getAllWorking();
        echo json_encode($data['items']);
    }
    
    function addWorking(){
            $this->form_validation->set_rules('working_name','working_name','required');
            $this->form_validation->set_rules('working_description','working_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mwork->insertWorking();
                redirect('admin/manage/working-with-us');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editWorking(){
        $result = $this->mwork->editWorking();
        echo json_encode($result);
    }
    
    function updateWorking($id){
        $this->form_validation->set_rules('working_name','working_name','required');
            $this->form_validation->set_rules('working_description','working_description','required');
            if($this->form_validation->run() == TRUE){
                $this->mwork->updateWorking($id);
                redirect('admin/manage/working-with-us');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteWorking($id){
        $this->mwork->deleteWorking($id);
        redirect('admin/manage/working-with-us');
    }
    
    // Clients Apis
    function getClient(){
        $data['items'] = $this->mcli->getAllClient();
        echo json_encode($data['items']);
    }
    
    function addClient(){
            $this->form_validation->set_rules('clients_name','clients_name','required');
            if($this->form_validation->run() == TRUE){
                $this->mcli->insertClient();
                redirect('admin/manage/client');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editClient(){
        $result = $this->mcli->editClient();
        echo json_encode($result);
    }
    
    function updateClient($id){
        $this->form_validation->set_rules('clients_name','clients_name','required');
            if($this->form_validation->run() == TRUE){
                $this->mcli->updateClient($id);
                redirect('admin/manage/client');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteClient($id){
        $this->mcli->deleteClient($id);
        redirect('admin/manage/client');
    }
    
    // Testimony Apis
    function getTestimony(){
        $data['items'] = $this->mtes->getAllTestimony();
        echo json_encode($data['items']);
    }
    
    function addTestimony(){
            $this->form_validation->set_rules('testimony_name','testimony_name','required');
            $this->form_validation->set_rules('testimony_from','testimony_from','required');
            $this->form_validation->set_rules('testimony_text','testimony_text','required');
            if($this->form_validation->run() == TRUE){
                $this->mtes->insertTestimony();
                redirect('admin/manage/testimony');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editTestimony(){
        $result = $this->mtes->editTestimony();
        echo json_encode($result);
    }
    
    function updateTestimony($id){
        $this->form_validation->set_rules('testimony_name','testimony_name','required');
        $this->form_validation->set_rules('testimony_from','testimony_from','required');
        $this->form_validation->set_rules('testimony_text','testimony_text','required');
            if($this->form_validation->run() == TRUE){
                $this->mtes->updateTestimony($id);
                redirect('admin/manage/testimony');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteTestimony($id){
        $this->mtes->deleteTestimony($id);
        redirect('admin/manage/testimony');
    }
    
    // Contact Api
    function updateContact($id){
            $this->form_validation->set_rules('address','address','required');
            $this->form_validation->set_rules('phone','phone','required');
            $this->form_validation->set_rules('fax','fax','required');
            $this->form_validation->set_rules('email','email','required');
            if($this->form_validation->run() == TRUE){
                $this->mcon->updateContact($id);
                redirect('admin/manage/contact');
            }      
            else{
                echo 'Failed';
            }
    }
    
    // Slider Apis
    function getSlider(){
        $data['items'] = $this->mslid->getAllSlider();
        echo json_encode($data['items']);
    }
    
    function addSlider($page){
        $this->mslid->insertSlider();
        switch ($page) {
            case "homepage":
                redirect('admin/manage/slider/'.$page);
                break;
            case "training-provider":
                redirect('admin/manage/slider/'.$page);
                break;
            case "event-organizer":
                redirect('admin/manage/slider/'.$page);
                break;
            case "wedding-organizer":
                redirect('admin/manage/slider/'.$page);
                break;
            case "merchandising":
                redirect('admin/manage/slider/'.$page);
                break;
            default:
                redirect('admin/manage/slider/'.$page);
        }
    }
    
    function addSliderAll($page){
        $this->mslid->insertSliderAll();
        switch ($page) {
            case "training-provider":
                redirect('admin/manage/slider/'.$page);
                break;
            case "event-organizer":
                redirect('admin/manage/slider/'.$page);
                break;
            default:
                redirect('admin/manage/slider/'.$page);
        }
    }
    
    function editSlider(){
        $result = $this->mslid->editSlider();
        echo json_encode($result);
    }
    
    function updateSlider($id){
        $this->form_validation->set_rules('testimony_name','testimony_name','required');
        $this->form_validation->set_rules('testimony_from','testimony_from','required');
        $this->form_validation->set_rules('testimony_text','testimony_text','required');
            if($this->form_validation->run() == TRUE){
                $this->mslid->updateSlider($id);
                redirect('admin');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteSlider($page,$id){
        $this->mslid->deleteSlider($id);
        switch ($page) {
            case "training-provider":
                redirect('admin/manage/slider/'.$page);
                break;
            case "event-organizer":
                redirect('admin/manage/slider/'.$page);
                break;
            case "wedding-organizer":
                redirect('admin/manage/slider/'.$page);
                break;
            case "merchandising":
                redirect('admin/manage/slider/'.$page);
                break;
            default:
                redirect('admin/manage/slider/'.$page);
        }
    }
    
    // Event Apis
    function getEvent(){
        $data['items'] = $this->meve->getAllEventArchive();
        echo json_encode($data['items']);
    }
    
    function addEvent(){
            $this->form_validation->set_rules('event_archive_name','event_archive_name','required');
            $this->form_validation->set_rules('event_archive_place','event_archive_place','required');
            $this->form_validation->set_rules('event_archive_year','event_archive_year','required');
            if($this->form_validation->run() == TRUE){
                $this->meve->insertEventArchive();
                redirect('admin/manage/archive/event-organizer');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editEvent(){
        $result = $this->meve->editEventArchive();
        echo json_encode($result);
    }
    
    function updateEvent($id){
            $this->form_validation->set_rules('event_archive_name','event_archive_name','required');
            $this->form_validation->set_rules('event_archive_place','event_archive_place','required');
            $this->form_validation->set_rules('event_archive_year','event_archive_year','required');
            if($this->form_validation->run() == TRUE){
                $this->meve->updateEventArchive($id);
                redirect('admin/manage/archive/event-organizer');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteEvent($id){
        $this->meve->deleteEventArchive($id);
        redirect('admin/manage/archive/event-organizer');
    }
    
    // Service Apis
    function getService(){
        $data['items'] = $this->mser->getAllService();
        echo json_encode($data['items']);
    }
    
    function addService(){
            $this->form_validation->set_rules('training_service_name','training_service_name','required');
            if($this->form_validation->run() == TRUE){
                $this->mser->insertService();
                redirect('admin/manage/training-services');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editService(){
        $result = $this->mser->editService();
        echo json_encode($result);
    }
    
    function updateService($id){
            $this->form_validation->set_rules('training_service_name','training_service_name','required');
            if($this->form_validation->run() == TRUE){
                $this->mser->updateService($id);
                redirect('admin/manage/training-services');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteService($id){
        $this->mser->deleteService($id);
        redirect('admin/manage/training-services');
    }
    
    // Gallery Apis
    function getGallery(){
        $data['items'] = $this->mgal->getAllGallery();
        echo json_encode($data['items']);
    }
    
    function addGallery($page,$year){
        $this->mgal->insertGallery();
        switch ($page) {
            case "training":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            case "event":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            default:
                redirect('admin/manage/'.$page.'/gallery');
        }
    }
    
    function addGalleryAll($page){
        $this->mgal->insertGalleryAll();
        switch ($page) {
            case "training":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            case "event":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            default:
                redirect('admin/manage/'.$page.'/gallery');
        }
    }
    
    function addTrainingGallery($page){
        $this->mgal->insertTrainingGallery();
        switch ($page) {
            case "training":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            case "event":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            default:
                redirect('admin/manage/'.$page.'/gallery');
        }
    }
    
    function editGallery(){
        $result = $this->mgal->editGallery();
        echo json_encode($result);
    }
    
    function updateGallery($id){
        $this->form_validation->set_rules('testimony_name','testimony_name','required');
        $this->form_validation->set_rules('testimony_from','testimony_from','required');
        $this->form_validation->set_rules('testimony_text','testimony_text','required');
            if($this->form_validation->run() == TRUE){
                $this->mgal->updateGallery($id);
                redirect('admin');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteGallery($page,$id){
        $this->mgal->deleteGallery($id);
        switch ($page) {
            case "training":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            case "event":
                redirect('admin/manage/'.$page.'/gallery');
                break;
            default:
                redirect('admin/manage/'.$page.'/gallery');
        }
    }
    
    // Training Apis
    function getTraining(){
        $data['items'] = $this->mtra->getAllTrainingArchive();
        echo json_encode($data['items']);
    }
    
    function addTraining(){
            $this->form_validation->set_rules('training_archive_name','training_archive_name','required');
            $this->form_validation->set_rules('training_archive_place','training_archive_place','required');
            $this->form_validation->set_rules('training_archive_year','training_archive_year','required');
            $this->form_validation->set_rules('training_archive_key','training_archive_key','required');
            if($this->form_validation->run() == TRUE){
                $this->mtra->insertTrainingArchive();
                redirect('admin/manage/archive/training-provider');
            }      
            else{
                echo 'Failed';
            }

    }
    
    function editTraining(){
        $result = $this->mtra->editTrainingArchive();
        echo json_encode($result);
    }
    
    function updateTraining($id){
            $this->form_validation->set_rules('training_archive_name','training_archive_name','required');
            $this->form_validation->set_rules('training_archive_place','training_archive_place','required');
            $this->form_validation->set_rules('training_archive_year','training_archive_year','required');
            $this->form_validation->set_rules('training_archive_key','training_archive_key','required');
            if($this->form_validation->run() == TRUE){
                $this->mtra->updateTrainingArchive($id);
                redirect('admin/manage/archive/training-provider');
            }      
            else{
                echo 'Failed';
            }
    }
    
    function deleteTraining($id){
        $this->mtra->deleteTrainingArchive($id);
        redirect('admin/manage/archive/training-provider');
    }
    
    // View Gallery Apis
    function deleteGalleryTraining($id,$key){
        $this->mgal->deleteGalleryTraining($id);
        redirect('admin/manage/training/gallery/detail/'.$key);
    }
    
    function deleteGalleryEvent($id,$key){
        $this->mgal->deleteGalleryEvent($id);
        redirect('admin/manage/event/gallery/detail/'.$key);
    }
    
    function addGalleryTraining($key){
        $this->mgal->insertTrainingGallery();
        redirect('admin/manage/training/gallery/detail/'.$key);
    }
    
    function addGalleryEvent($key){
        $this->mgal->insertGallery();
        redirect('admin/manage/event/gallery/detail/'.$key);
    }
    
}
