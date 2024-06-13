<?php
//Pasa las cosas del controlador aqui para hacer la consulta en la bd


class UsuarioModelo {
    private $db;

    public function __construct(){
        $this->db= new Base;
    }



    //Cargar datos para la localizacion

    public function CargarCCAA(){
        $this->db->query('SELECT * FROM ccaa');
        return $this->db->registros();
    }
    public function CargarProvincias($idCCAA){
        $this->db->query("SELECT * FROM provincias WHERE idCCAA = $idCCAA");
        return $this->db->registros();
    }
    public function CargarMunicipios($idProvincia){
        $this->db->query("SELECT * FROM municipios WHERE idProvincia = $idProvincia");
        return $this->db->registros();
    }
}