<?php
class Pages extends CI_Controller {

        public function index($page = 'home')
        {
        	 if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/navabar',  $data);
        $this->load->view('templates/footer', $data);
        }



}