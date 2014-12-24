<?php
/**
* 
*/
class Usuario extends CI_Controller
{
	
	public function __construct()
	{
		# Acá se escribe todo lo que quiero que se cargue apenas se ejecuta el controlador
		#Here write down I want it to load just the controller runs.
		parent::__construct();
		
		//Cargamos el modelo para poder trabajar con los datos del motor de
		//BD. We load the model for working with data engine DB.
		$this->load->model('abm_model');
		$this->load->helper('url');
        $this->load->library('form_validation');
	}

	public function index()
	{
		//$this->load->view('index');
		//Vamos a listar los libros que hay en la BD.
		//We will list the books in the DB.
		//$id = '98';
		//$usuario = $this->abm_model->listar();
		//echo json_encode($usuario);
			# Acá lo correcto sería mandarlo a una vista, para cumplir con el model MVC.
			# Pero vamos a poner las dos formas.
		//foreach ($usuario as $key) {
			//aca guardo los datos en un array para poder enviarlos a la vista.
			//keep the data in an array to send to the view
		//	$data = array(
		//			'nombre' => $key->nombre,
		//			'autor' => $key->apellido,
		//			'tema' => $key->dni ,
		//			'link' => $key->pass   );
			//acá cargo la vista y le mando el array para poder manejar los datos en la vista.
			//here load the view and I send the array for handle the data in the view.
		//	$this->load->view('plantillas/head.inc.php');
		//	$this->load->view('plantillas/cabeza.inc.php');
		//	$this->load->view('plantillas/pie.inc.php');

			//Esta esta mal. Imprimimos directamente desde el controlador.
			//It's wrong. Print directly from the controller.

			/*echo 'nombre: '.$usuarios->nombre.'<br>';
            echo 'autor: '.$usuarios->apellido.'<br>';
            echo 'tema: '.$usuarios->dni.'<br>';
            echo 'link: '.$usuarios->pass. '<br>';*/
		//}
        $data['title'] = 'Inicio';
		$data['main_content'] = 'contenido';
		$this->load->view('main_template',$data);
	}
	public function nuevo_usuario()
	{
		//cargo la libreria para poder captar los datos que vienen desde la vista.
		//Load the library to capture coming from the view.

		//$this->load->library('input');
		//$dato = $this->input->post('dato');
		$config = array(
               array(
                     'field'   => 'nombre',
                     'label'   => 'Nombre',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'pass',
                     'label'   => 'Password',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'dni',
                     'label'   => 'dni',
                     'rules'   => 'required'
                  ),   
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email'
                  )
            );

		$this->form_validation->set_rules($config); 
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contenido');
		}
		else
		{
			$this->load->view('contenido');
		}

		extract($_POST);
		$data = array('nombre' => $nombre,
					  //'apellido' => $apellido,
					  'dni' => $dni,
					  'telefono' => $tel,
					  'usuario' => $user,
					  'pass' => $pass );
		$data['pass'] = md5($data['pass']);
 		$this->abm_model->agregar($data);
				
	}
	public function listar_usuarios(){
		$usuario = $this->abm_model->listar();
		
		foreach ($usuario as $key) {
			//aca guardo los datos en un array para poder enviarlos a la vista.
			//keep the data in an array to send to the view
			/*$data = array(
					'nombre' => $key->nombre,
					'autor' => $key->apellido,
					'tema' => $key->dni ,
					'link' => $key->pass   );*/
			$data[] = $key;
			//$this->load->view('libros/listar_libros', $data);
		}
		$result = array();
		$result['title'] = 'Usuarios';
		$result['main_content'] = 'libros/listar_libros';
		$result['data'] = $data;
		
		
		$this->load->view('main_template',$result);


		
	}
}
?>