<?php
class Articulos extends CI_Controller {

   function index()
   {

      $this->load->view('mivista');
      
   }
   function ordenadores($marca=null, $modelo=null){
      if (is_null($marca) && is_null($modelo)){
         echo 'Aquí se muestran los productos de ordenadores';
      }elseif(is_null($modelo)){
         echo 'Mostrando ordenadores de marca ' . $marca;
      }else{
         echo 'Mostrando ordenadores de marca ' . $marca . ' y modelo ' . $modelo;
      }
   }

   function monitores()
   {
   		echo "Ac&aacute; vamos a ver los distintos monitores que tenemos en stock.. ";
   }
}
?> 
