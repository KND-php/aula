<?php
class Materia extends CI_Controller {

   public function __construct() {
    parent::__construct();
    $this->load->model('materia_model');
    $this->load->helper('url');
    //$this->load->database('default');
  }

   function index()
   {
      $this->listar();     
      

   }

   public function listar_materias(){
      $materia = $this->materia_model->listar();
      
      foreach($materia as $mat){
        $data[] = $mat;
      }

    $result = array();
    $result['title'] = 'Materias';
    $result['main_content'] = 'materia/materia';
    $result['data'] = $data;
    
    
    $this->load->view('main_template',$result);
   }

   public function alta_materia(){

    $data = array('uid' => $uid,
                  'finicio' => $finicio,
                  'fcierre' => $fcierre);
    $this->materia_model->alta_materia($data);

   }
   
}
?> 