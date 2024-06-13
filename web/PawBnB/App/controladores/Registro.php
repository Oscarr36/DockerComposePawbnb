<?php

class Registro extends Controlador {
    private $RegistroLogin;
    private $usuarioModelo;

    
    public function __construct(){
        $this->RegistroLogin = $this->modelo('RegistroLogin');
        $this->usuarioModelo = $this->modelo('UsuarioModelo');

    }
    
    public function index(){

        //Registro de usuario
            if (
                isset($_POST['contrasena']) && 
                isset($_POST['contrasena2']) &&
                isset($_POST['Nombre']) &&
                isset($_POST['Apellidos']) &&
                isset($_POST['fecha_nac']) &&
                isset($_POST['telef']) &&
                isset($_POST['correo_electronico']) &&
                isset($_POST['localidad']) &&
                $_POST['contrasena'] == $_POST['contrasena2']
            ){ 
                //Instanciamos las variables
                $name =  $_POST['Nombre'];
                $apll =  $_POST['Apellidos'];
                $date =  $_POST['fecha_nac'];
                $num_telf =  $_POST['telef'];
                $email =  $_POST['correo_electronico'];
                $local = $_POST['localidad'];

                //Cifrado de contrasenas
                $pss = $_POST['contrasena'];

                $psshash = password_hash($pss, PASSWORD_DEFAULT);

                //Guardamos los datos para hacer el insert
                $user = [
                    'name' => $name,
                    'apll' => $apll,
                    'date' => $date,
                    'email' => $email,
                    'num_telf' => $num_telf,
                    'local' => $local,
                    'pss' => $psshash
                ];

                print_r($user);
                //Insert del Registro
                $resultado = $this->RegistroLogin->Registro($user);

                $this->datos['resultadoRegistro']=$resultado;
                    
                if ($resultado == 1) {
                    // Registro exitoso
                    echo "<script>toastr.success('¡Registro exitoso!', 'Éxito');</script>";
                } else {
                    // Error en el registro
                    echo "<script>toastr.error('¡Ocurrió un error al procesar el registro!', 'Error');</script>";
                }
                
            } 



        $this->vista('registro', $this->datos);
    }

    public function cargarCCAA(){
        $this->datos = $this->usuarioModelo->CargarCCAA();
        $this->vistaAPI($this->datos);
    }
    public function CargarProvincias($id){
        $this->datos = $this->usuarioModelo->CargarProvincias($id);
        $this->vistaAPI($this->datos);
    }
    public function CargarMunicipios($id){
        $this->datos = $this->usuarioModelo->CargarMunicipios($id);
        $this->vistaAPI($this->datos);
    }

}