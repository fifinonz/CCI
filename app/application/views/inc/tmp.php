<?php


// *********************************************************************
// Public Header//
//if (!$this->ion_auth->logged_in())
//{
    $this->load->view('inc/header');
    $this->load->view($main_content);
    $this->load->view('inc/footer');
//}
//		else
//{
//    // Accessed Only By Users Who are logged in!//
//
//    $this->load->view('inc/secure_header');
//    $this->load->view($main_content);
//    $this->load->view('inc/footer');
//
//
//}
//


/* End of file 'tmp.php */