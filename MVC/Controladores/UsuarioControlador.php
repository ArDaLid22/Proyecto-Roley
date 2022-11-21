<?php session_start();

 require '../Modelos/Usuario.php';
 require 'StartertController.php';


 

 
class UsuarioControlador extends Usuario{


    
    
    public function MostrarLogin(){
        include_once '../Vistas/Usuario/login.php';
    }

    public function RegistroView(){
        require '../Vistas/Usuario/registrate.php';
    }
    public function MostrarProducto(){
        require '../Vistas/store/productos.php';
    }
    public function MostrarOfertas(){
        require '../Vistas/store/ofertas.php';
    }
    public function MostrarHome(){
        require '../Vistas/store/Home.php';
    }
    public function Mostrarnosotros(){
        require '../Vistas/store/nosotros.php';
    }
    public function Mostrarcontactanos(){
        require '../Vistas/store/contacto.php';
    }

    public function InicioView(){
        require '../Vistas/Usuario/inicio.php';
    }

    public function Redirect(){
        header("location:../");
    }

    public function RedirectLogin(){
        header("location: UsuarioControlador.php?action=login");
    }

    public function RedirectHome(){
        header("location: UsuarioControlador.php?action=home");
    }
    
    public function AlistarDatos($nombre,$password,$direccion,$telefono)
    {
        $this->nombre = $nombre;
        $this->apellido= $password;
        $this->direccion=$direccion;
        $this->telefono=$telefono;  
        $this->InsertUsuario();   
    }
    
    
    public function VerificarLogin($nombre,$apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        //SE USA EL METODO CONSULTARUSUARIO EN USUARIO DONDE SE CONSULTA BD
        $usuario = $this->consultarUsuario();
        if($usuario=="sindatos"){
            $_SESSION['error'] = "No se encontro ese usuario en Nuestra BD";
            $this->RedirectLogin();
        } else {
            if(password_verify($this->apellido,$usuario->apellido)){
                $_SESSION['nombre'] = $usuario -> nombre;
                $_SESSION['direccion'] = $usuario -> direccion;
                $_SESSION['telefono']= $usuario-> telefono;
                unset($_SESSION['error']);
                $this->RedirectHome();
                
            }else{
                $_SESSION['error']="Contraseña Incorrecta, Por favor inicie NuEVAMENTE";
                $this->RedirectLogin();
            }
        }
         
      }

 

}
//VISTAS GET
if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> MostrarLogin();
}

if(isset($_GET['action']) && $_GET['action']=='registrate'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> RegistroView();
}
if(isset($_GET['action']) && $_GET['action']=='home'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> MostrarHome();
}
if(isset($_GET['action']) && $_GET['action']=='productos'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> MostrarProducto();
}
if(isset($_GET['action']) && $_GET['action']=='ofertas'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> MostrarOfertas();
}
if(isset($_GET['action']) && $_GET['action']=='nosotros'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> Mostrarnosotros();
}
if(isset($_GET['action']) && $_GET['action']=='contacto'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> Mostrarcontactanos();
}

//ACCIONES POST
if(isset($_POST['action']) && $_POST['action']=='insertar'){
    $password = password_hash($_POST['Apellido'],PASSWORD_BCRYPT);
   
    
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador-> AlistarDatos($_POST['Nombre'],$password,
    $_POST['Direccion'],$_POST['Telefono']);

}

if(isset($_POST['action']) && $_POST['action']=='login'){
    $instanciacontrolador = new UsuarioControlador();
    $instanciacontrolador -> VerificarLogin($_POST['Nombreusu'],$_POST['Apellidousu']);
}
  

//GUARDAR DATOS CAJAS DE TEXTO ->>
  if(isset($_POST['action']) && $_POST['action']== 'insert'){
      $instanciacontrolador = new UsuarioControlador();
      $password = password_hash($_POST['contraseña'],PASSWORD_ARGON2I);
      $instanciacontrolador-> AlistarDatos(
          $_POST['nombre'],
          $_POST['apellido'],
          $_POST['usuario'],
          $password, 
          $_POST['correo'],
 
                 
      );
  }

?>