<?php
require ("conexion.php");
class Usuario{
    protected $_db1;
    protected $nombre;
    protected $apellido;
    protected $usuario;
    protected $usuario1;
    protected $correo;
    protected $telefono;
    protected $contraseña;
    
    protected $fecharegistro;
    protected $estado;
    
 
     public function InsertUsuario(){
        $ic = new conexion() ;
        $sql = "INSERT INTO usuarios (NOMBRE,APELLIDO,USUARIO,CONTRASEÑA,FECHA_REGISTRO_USUARIO,ESTADO_USUARIO,CORREO,TELEFONO) values (?,?,?,?,?,?,?,?)";
        $insertar = $ic->db->prepare($sql);
        $insertar->bindParam(1,$this->nombre);
        $insertar->bindParam(2,$this->apellido);
        $insertar->bindParam(3,$this->usuario);
        $insertar->bindParam(4,$this->contraseña);
        $insertar->bindParam(5,$this->fecharegistro);
        $insertar->bindParam(6,$this->estado);
        $insertar->bindParam(7,$this->correo);
        $insertar->bindparam(8,$this->telefono);
        $insertar->execute();
     }

    //  protected function consultarUsuario(){
    //     include_once 'conexion.php';
    //      $ic = new conexion();
    //      $sql="SELECT * FROM usuarios WHERE USUARIO='$this->usuario'";
    //      $consulta = $ic->db->prepare($sql) ;
    //      $consulta->execute();
    //      $objetousuario = $consulta -> fetchAll(PDO::FETCH_OBJ);
    //      foreach($objetousuario as $usuario){
    //      }        
    //      if(empty($usuario)){
    //         $usuario="sindatos";
    //      }
    //     return $usuario;
    //  }

     protected function SearchUsuarioForName(){
        require_once 'conexion.php';
         $ic = new conexion();
         $sql="SELECT * FROM usuarios WHERE USUARIO='$this->usuario'";
         $consulta = $ic->db->prepare($sql);
         $consulta -> execute();
         $objetoconsulta = $consulta->fetchAll(PDO::FETCH_OBJ);
         return $objetoconsulta;



     }
    
}