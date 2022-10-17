<?php 
 require '../Modelos/Usuario.php';
 require 'StartertController.php';
 $ics = new StartertController();

 

 
class UsuarioControlador extends Usuario{

       public function AlistarDatos($nombre,$apellido,$usuario,$correo,$telefono,$contraseña,$fecharegistro,$estado)
    {
        $this->nombre = $nombre;
          $this->apellido= $apellido;
          $this->usuario=$usuario;
          $this->correo=$correo;
          $this->telefono=$telefono;
          $this->contraseña=$contraseña;
          $this->fecharegistro=$fecharegistro;
          $this->estado=$estado;
        
    }
    
      public function VerifyLogin($usuario,$contraseña){
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
        $infousuario = $this->SearchUsuarioForName();
        foreach($infousuario as $usuario){}
         var_dump($usuario);
    
        
      }
     


    
    public function MostrarLogin(){
        include_once '../Vistas/Usuario/login.php';
    }

    public function RegistroView(){
        require '../Vistas/Usuario/registrate.php';
    }

    public function InicioView(){
        require '../Vistas/Usuario/inicio.php';
    }

    public function Redirect(){
        header("location: ../");
    }

    public function RedirectLogin(){
        header("location: UsuarioControlador.php?action=login");
    }

 

}

if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> MostrarLogin();
}

if(isset($_GET['action']) && $_GET['action']=='registrate'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> RegistroView();
}

if(isset($_POST['action']) && $_POST['action']=='insertar'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> AlistarDatos($_POST['nombre'],$_POST['apellido'],$_POST['usuario'],$_POST['correo'],$_POST['fecharegistro'],$_POST['contraseña'],
    $_POST['telefono'],$_POST['estado']);
}



if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador -> VerifyLogin($_POST['usuario'],$_POST['contraseña']);
}
  

//INSERTAR DATOS A DB ->>
  if(isset($_POST['action']) && $_POST['action']== 'insert'){
      $instanciacontrolador = new UsuarioControlador();
      $password = password_hash($_POST['contraseña'],PASSWORD_ARGON2I);
      $instanciacontrolador-> AlistarDatos(
          $_POST['nombre'],
          $_POST['apellido'],
          $_POST['usuario'],
          $password, 
          $_POST['correo'],
          $_POST['telefono'],
          $_POST['fecharegistro'],
          $_POST['estado'],
                 
      );
  }

 if(isset($_POST['action']) && $_POST['action']=='login'){
     $instanciacontrolador = new UsuarioControlador();
     $instanciacontrolador-> VerifyLogin($_POST['usuario'],$_POST['contraseña']);
 }

      // ---- TRABAJO CON SESIONES----
      
    //   public function VerificarLogin($usuario,$contraseña){
    //     $this->usuario=$usuario;
    //      $this->contraseña=$contraseña;
    //      $usuario = $this->consultarUsuario();
    //      if($usuario=="sindatos"){
    //         $_SESSION['error'] = "No se encontro ese usuario en Nuestra BD";
    //         $this->RedirectLogin();
    //      }else{
    //         if(password_verify($contraseña,$usuario->contraseña)){
    //             $SESSION['NOMBRE'] = $usuario->nombre;
    //             $SESSION['APELLIDO'] = $usuario->apellido;            
    //             $SESSION['FECHA_REGISTRO_USUARIO'] = $usuario->fecharegistro;
    //             $SESSION['ESTADO_USUARIO'] = $usuario-> estado;
    //             $SESSION['CORREO'] = $usuario-> correo;
    //             $SESSION['TELEFONO'] = $usuario ->telefono;
    //             unset($_SESSION['error']);
    //             $this ->Redirect();
         
    //         }else{
    //             $_SESSION['error'] = "Contraseña Incorrecta, Por favor inicie Nuevamente";
    //             $this->RedirectLogin();
    //         }
    //      }
    //   }
    // if(password_verify($contraseña,$usuario->CONTRASEÑA)){
    //     echo "La contraseña es correcta";
    // }else{
    //     echo " La contraseña es incorrecta";
    // }


    // if(isset($_POST['action']) && $_POST['action']=='login'){
//     $instanciacontrolador = new UsuarioControlador();
//     $instanciacontrolador -> VerificarLogin($_POST['usuario'],$_POST['contraseña']);
// }
?>