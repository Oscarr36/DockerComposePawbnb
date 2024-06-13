<?php


class RegistroLogin {
    private $db;

    public function __construct(){
        $this->db= new Base;
    }



    //Insert del usuario registrado en la bd

    public function Registro($user) {
        try {
            // Sanitizar y validar entradas
            $name = $user['name'];
            $apll = $user['apll'];
            $date = $user['date'];
            $num_telf = $user['num_telf'];
            $email = $user['email'];
            $local = $user['local'];
            $pss = $user['pss'];
    
            // Preparación de la consulta SQL
            $query = 'INSERT INTO usuario (Nombre, Apellidos, fecha_nac, num_telf, correo_electronico, localidad, contrasena)
                 VALUES (:nombre, :apellidos, :fecha_nac, :num_telf, :correo_electronico, :localidad, :contrasena)';
            
            $this->db->query($query);
            
            // Enlazar parámetros
            $this->db->bind(':nombre', $name);
            $this->db->bind(':apellidos', $apll);
            $this->db->bind(':fecha_nac', $date);
            $this->db->bind(':num_telf', $num_telf);
            $this->db->bind(':correo_electronico', $email);
            $this->db->bind(':localidad', $local);
            $this->db->bind(':contrasena', $pss); 
            
            // Ejecutar la consulta
           $this->db->execute();
         
        } catch (Exception $e) {       
            
        }   
    }
    
    
    
}

