<?php
    class Cregis extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('mregis');
        }

        function simpandata()
        {
           $this->mregis->simpandata(); 
           redirect('clogin/formlogin');
        }
    }
?>