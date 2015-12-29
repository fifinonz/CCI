<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start(); //we need to start session in order to access it through CI

class Relay extends MY_Controller {


/*    Required Libraries    */

	function __construct(){
		parent::__construct();
		$this->load->library('Cphpmailer');
        $this->load->library('auth/ion_auth');
        $this->load->database();
        $this->load->library('cart');
        $this->load->library('session');
//        $this->load->library('encrypt');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
//		$this->load->model('app_model');
//        $this->load->model('create_team_model');
	}


    /*  Page Controllers    */

	public function index(){
		$this->home();
	}

    public function home(){
//        $this->data['products'] = $this->app_model->retrieve_products(); // retrieve an array with all products
        $this->data['title'] 	= "Home Relay";
        $this->data['main_content'] 	= "home";

        $this->_load_view();
    }

    /* Secured Home Page */
    public function my_home(){

        $this->data['title'] 	= "Home Relay";
        $this->data['main_content'] 	= "home";

        $this->_secured_load_view();
    }

    /* USER REGISTRATION*/

/* VIEW CONTROLLERS*/
    public function what_is_relay()
    {
        $this->data['title'] 	= "About Us";
        $this->data['main_content'] 	= "about";

        $this->_load_view();

    }

    public function about(){
        $this->data['title'] 	= "About Relay";
        $this->data['main_content'] 	= "what-is-relay";

        $this->_load_view();
    }


    public function join_team(){
        $this->data['title'] 	= "Participate in Relay 2015";
        $this->data['main_content'] 	= "join_team";

        $this->_load_view();
    }

    public function donate(){
        $this->data['title'] 	= "Make a Donation";
        $this->data['main_content'] 	= "donate";

        $this->_load_view();
    }
        /*      SHOPPING CART    */

//    public function buy_product(){
//        $this->data['products'] = $this->app_model->retrieve_products(); // retrieve an array with all products
//        $this->data['title'] 	= "Buy Products";
//        $this->data['main_content'] 	= "products";
//
//        $this->_load_view();
//    }
//
//    function add_cart_item(){
//
//        if($this->app_model->validate_add_cart_item() == TRUE){
//
//            // Check if user has javascript enabled
//            if($this->input->post('ajax') != '1'){
//                redirect('relay/buy_product'); // If javascript is not enabled, reload the page with new data
//            }else{
//                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
//            }
//        }
//
//    }
//
//    function add_cart_item_home(){
//
//        if($this->app_model->validate_add_cart_item() == TRUE){
//
//            // Check if user has javascript enabled
//            if($this->input->post('ajax') != '1'){
//                redirect('relay/view_cart','refresh'); // If javascript is not enabled, reload the page with new data
//            }else{
//                echo 'true'; // If javascript is enabled, return true, so the cart gets updated
//            }
//        }
//
//    }
//
//    function update_cart(){
//        $this->app_model->validate_update_cart();
//        redirect('relay/view_cart/#');
//    }
//
//    public function view_cart(){
//        $this->data['title'] 	= "Buy Products";
//        $this->data['main_content'] 	= "cart.php";
//
//        $this->_load_view();
//    }
//
//    function empty_cart(){
//        $this->cart->destroy(); // Destroy all cart data
//        redirect('relay/view_cart'); // Refresh the page
//    }
//    public function checkout(){
//        $this->data['title'] 	= "Buy Products";
//        $this->data['main_content'] 	= "checkout.html";
//
//        $this->_load_view();
//    }
///////////////////             END SHOPPING CART               ////////////////////////////////////////////////////////////////////////////////

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

    public function faqs(){
        $this->data['title'] 	= "Frequently Asked Questions";
        $this->data['main_content'] 	= "faq.php";

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