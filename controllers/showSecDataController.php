<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class showSecDataController extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->model('showSecDataModel');   
         
    }

  public function showData()
  {
       $year = $this->input->post('year');
        $month = $this->input->post('months');
        $data = array(
            'year' => $year,
            'month' => $month
        );
         $query_res['attendance']= $this->showSecDataModel->showData($data);
            echo json_encode($query_res);
      
  }
  public function showGrainData(){
     $year = $this->input->post('year');
        $month = $this->input->post('months');
        $data = array(
            'year' => $year,
            'month' => $month
        );
         $query_res['oneToFive']= $this->showSecDataModel->showGrainData($data);
         
         $query_res['sixToSeven']= $this->showSecDataModel->showGrainData1($data);

         
       
        echo json_encode($query_res);
  }
 
}

