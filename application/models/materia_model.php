<?php 
class Materia_model extends CI_Model {

   public function __construct()
    {
        parent::__construct();
    }

  
   


    public function getid($id = null){
    	$this->db->select()->from('materia');
    	//Cuando existe ID
    	if($id != null){
    		$this->db->where('id_materia',$id);
    	}
    	else{
    		$this->db->order_by('id_materia');
    	}
    $query = $this->db->get();//método recursivo.
    	if($id != null){
    		return $query->row_array(); //Fila de una materia.
    	}
    	else{
    		return $query->result_array(); //arreglo de resutlados.
    	}

    }


    public function baja_materia($id){
    	$this->db->where('id_materia',$id);
    	$this->db->delete('materia');
    }

/*Esta función toma el id si existe y hace la modificación,
  sino ejecuta el alta de materia*/
    public function alta_materia($data)
    {
        if(isset($data['id_materia'])){
        	$this->db->where('id_materia',$data['id_materia']);
        	$this->db->update('materia',$data);
        }
        else{
        $this->db->insert('materia',$data);
        }
    }



// estos metodos son pruebas anteriores que podemos estudiar algún truquillo.. ;)
   function listar_libros(){
      $this->db->where('idlibros', '1'); 
      //$this->db->where('clave', md5($clave)); 
      $query = $this->db->get('libros');
      if ($query->num_rows() > 0){
         return $query->row();
      }
      return 0;
   }

      function dame_ultimos_articulos(){
      $ssql = "select * from libros order by id desc limit 5";
      return mysql_query($ssql);
   }

   
   function inserta_usuario($datos = array()){
      if(!$this->_required(array("email_usuario","clave"), $datos)){
         return FALSE;
      }
      //clave, encripto
      $datos['clave']=md5($datos['clave']);
   
      $this->db->insert('usuario', $datos);
      return $this->db->insert_id();
   }
} 
 ?>