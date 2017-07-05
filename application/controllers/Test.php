<?php 
   class Test extends CI_Controller {
  
      public function index() { 
         $this->load->view('test');
      } 
      
       public function hello() { 
         
        $data = array(
 
            'title' => 'Title goes here',

        );

        $this->template->load('default', 'content', $data);
      } 
   } 
?>