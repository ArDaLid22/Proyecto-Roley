<?php
class conexion1{

    public $db;

    
    public function __construct(){
       
        $usuario = 'root';
        $contraseña= '';
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=roleydb',$usuario,$contraseña);
        } catch (PDOException $e){
            echo "Error : " . $e->getMessage();
        }
  
    }
    public function cerrarconexion(){
        $this->db  = null;
    }
}
?>