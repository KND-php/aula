<?php
class MiControlador extends CI_Controller {

   function index(){
      
      $datos = array(
         'titulo' => 'Página de prueba',
         'descripcion' => 'Esta es la descripción de esta página, un poco más larga.',
         'cuerpo' => 'El cuerpo de la página probablemente será un texto muy largo...<p>Con varios párrafos</p>'
      );
      
      $this->load->view('mivista', $datos);
   }
   function libros($idlibros)
   {
   		//cargo el modelo 
   		$this->load->model('Libros_model');
   		//llamo al metodo del modelo
   		$libros = $this->Libros_model->listar_libros($idlibros);
   		//creo el array
   		$datos_vista = array('libros' => $libros);
   		//cargo la vista pasando los datos
   		$this->load->view('mivista',$datos_vista);
   }
   
}
?> 
