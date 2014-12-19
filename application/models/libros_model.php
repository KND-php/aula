  <?php 
class Libros_model extends CI_Model {

   public function __construct()
    {
        parent::__construct();
    }

   /*
    * Vamos a buscar los libros de la base de datos con SQL. Gracias al framework podemos usar cualquier motorcito.
    * Ahora vamos a usar como el framework Codeigniter nos ofrece para hacerlo mas rapido.
    *
    * Let's find the books DB with SQL. Thanks to framewok we can use any engine.
    * 
    */
    public function get_libros()
    { 
       // $this->db->where('idlibros',$id);
        $sql = $this->db->get('libros' , 10,2);
        return $sql->result();
    }

     public function agregar_usuario($nombre,$autor,$tema, $link)
    {
        $this->db->insert('libros',array(
            'nombre'=> $nombre,
            'autor' => $autor,
            'tema' => $tema,
            'link' => $link
        ));
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