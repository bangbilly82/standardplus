<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

    var $template = 'template';
    var $title = 'Standardplus - Event Organizer';

    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }
    
    function index(){
        $this->sendEmail();
    }
    
    function sendEmail(){        
        
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "bill.billy.br@gmail.com";
        $config['smtp_pass'] = "free69Bensoes";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        $this->email->initialize($config);
        
        $this->email->from('billyrizkyjuristra@gmail.com','Billy Rizky J');
        $this->email->to('info@standardplus.co.id');        
        $this->email->subject('Cek Email Bro');
        $this->email->message('Kirim email berhasil bro');
        if($this->email->send()){
            echo 'Sukses';
        }        
        else{
            show_error($this->email->print_debugger());
            echo 'Gagal';
        }
    }

}