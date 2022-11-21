<?php
require ("conexion1.php");
class Usuario{
    protected $_db1;
    protected $clienteID;
    protected $nombre;
    protected $apellido;
    protected $direccion;
    protected $telefono;

    
     public function InsertUsuario(){
        $ic = new conexion1() ;
        $sql = "INSERT INTO cliente (nombre,apellido,direccion,telefono) values (?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1,$this->nombre);
        $insertar->bindParam(2,$this->apellido);
        $insertar->bindParam(3,$this->direccion);
        $insertar->bindParam(4,$this->telefono);

        $insertar->execute();
     }


     protected function consultarUsuario(){
        include_once 'conexion1.php';
         $ic = new conexion1();
         $sql="SELECT * FROM cliente WHERE nombre='$this->nombre'";
         $consulta = $ic->db->prepare($sql);
         $consulta -> execute();
         $objetousuario = $consulta->fetchAll(PDO::FETCH_OBJ);
         foreach($objetousuario as $usuario){ }
         if(empty($usuario)){
            $usuario="sindatos";
         }
         return $usuario;



     }
    
}