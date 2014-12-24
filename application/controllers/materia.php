<?php
class Materia extends CI_Controller {

   public function __construct() {
    parent::__construct();
    $this->load->model('materia_model');
    $this->load->helper('url');
    $this->load->helper('form');
    //$this->load->database('default');
  }

   function index()
   {
      $this->listar_materias();     
      

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
    extract($_POST);
    $data = array('uid' => $uid,
                  'nombre' => $nombre,
                  'descripcion' => $descripcion,
                  'finicio' => $finicio,
                  'fcierre' => $fcierre);
    $this->materia_model->alta_materia($data);

   }
   
}
?> 