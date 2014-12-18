<?php
/**
* 
*/
class Libros extends CI_Controller
{
	
	public function __construct()
	{
		# Acá se escribe todo lo que quiero que se cargue apenas se ejecuta el controlador
		#Here write down I want it to load just the controller runs.
		parent::__construct();
		
		//Cargamos el modelo para poder trabajar con los datos del motor de
		//BD. We load the model for working with data engine DB.
		$this->load->model('libros_model');

	}

	public function index()
	{
		//$this->load->view('index');
		//Vamos a listar los libros que hay en la BD.
		//We will list the books in the DB.
		$id = '98';
		$libros = $this->libros_model-> get_libros();

			# Acá lo correcto sería mandarlo a una vista, para cumplir con el model MVC.
			# Pero vamos a poner las dos formas.

		foreach ($libros as $libros) {
			//aca guardo los datos en un array para poder enviarlos a la vista.
			//keep the data in an array to send to the view
			$data = array(
					'nombre' => $libros->nombre,
					'autor' => $libros->autor,
					'tema' => $libros->tema ,
					'link' => $libros->link   );
			//acá cargo la vista y le mando el array para poder manejar los datos en la vista.
			//here load the view and I send the array for handle the data in the view.
			$this->load->view('/libros/listar_libros', $data);

			//Esta esta mal. Imprimimos directamente desde el controlador.
			//It's wrong. Print directly from the controller.

			/*echo 'nombre: '.$libros->nombre.'<br>';
            echo 'autor: '.$libros->autor.'<br>';
            echo 'tema: '.$libros->tema.'<br>';
            echo 'link: '.$libros->link. '<br>';*/
		}

	}
	public function insertar()
	{
		//cargo la libreria para poder captar los datos que vienen desde la vista.
		//Load the library to capture coming from the view.
		$this->load->library('input');
		
		$dato = $this->input->post('dato');
		
	}
}
?>