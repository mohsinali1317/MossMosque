<?php 
   class Home extends CI_Controller {
  
      public function index() { 
        $data = array(
            'title' => 'Index',
        );
         $this->template->load('default', 'home', $data);
      } 
      
       public function hello() { 
        $data = array(
            'title' => 'Home',
        );

        $this->template->load('default', 'content', $data);
      } 
   } 
?>