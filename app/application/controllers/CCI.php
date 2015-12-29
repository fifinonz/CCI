<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to start session in order to access it through CI

class CCI extends CI_Controller {
    public $data;

    /*    Required Libraries    */

    function __construct(){
        parent::__construct();
        $this->load->library('Cphpmailer');
        $this->load->database();
        $this->load->library('cart');
        $this->load->library('session');
//        $this->load->library('encrypt');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
//        $this->load->model('');
    }
    public function _load_view(){
        $this->load->view('inc/tmp',$this->data);
    }

    /*  Page Controllers    */

    public function index(){
        $this->home();
    }

    public function home(){
        $this->data['title'] 	= "CCI | Home";
        $this->data['main_content'] 	= "home";

        $this->_load_view();
    }
    /* Secured Home Page */

    /* USER REGISTRATION*/

/* VIEW CONTROLLERS*/

    public function about(){
        $this->data['title'] 	= "About Relay";
        $this->data['main_content'] 	= "about";

        $this->_load_view();
    }


    public function mission(){
        $this->data['title'] 	= "CCI Mission Statement";
        $this->data['main_content'] 	= "about-us/mission";

        $this->_load_view();
    }
    public function vision()
    {
        $this->data['title'] 	= "CCI Vision Statement";
        $this->data['main_content'] 	= "about-us/vision";


        $this->_load_view();

    }

    public function cis(){

        $this->data['title'] 	= "Cancer Info Service";
        $this->data['main_content'] 	= "CIS";

        $this->_load_view();
    }
    public function programmes(){
        $this->data['title'] 	= "CCI Programmes";
        $this->data['main_content'] 	= "programmes";

        $this->_load_view();
    }
    public function donate(){
        $this->data['title'] 	= "Make a Donation";
        $this->data['main_content'] 	= "donate";

        $this->_load_view();
    }

 /*    IMAGE GALLERY*/

    public function gallery_image(){
        $this->data['title'] 	= "Gallery";
        $this->data['main_content'] 	= "image-gallery.html";

        $this->_load_view();
    }

    public function resource_center(){
        $this->data['title'] 	= "Resource Center";
        $this->data['main_content'] 	= "resource-center.html";

        $this->_load_view();
    }



    public function contact_us(){
        $this->data['title'] 	= "Contact US";
        $this->data['main_content'] 	= "contact.php";

        $this->_load_view();
    }


    public function shujaa(){
        $this->data['title'] 	= "Mashujaa | Cancer Warriors";
        $this->data['main_content'] 	= "shujaa.html";

        $this->_load_view();
    }

    /*CONTACT US */


}