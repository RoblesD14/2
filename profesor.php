<?php

class Profesor {
    
    private  $idProfesor;
    private $nombre;
    private $idioma;
    
    function getIdProfesor() {
        return $this->idProfesor;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getIdioma() {
        return $this->idioma;
    }

    function setIdProfesor($idProfesor) {
        $this->idProfesor = $idProfesor;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setIdioma($idioma) {
        $this->idioma = $idioma;
    }

 function MostrarCategoria() 
 {
        require_once '../db/ConexionDB.php';
        $conexionDB = new ConexionDB();
        $conn = $conexionDB->abrirConexion();
        $sql = "SELECT * FROM profesor";
        $conexionDB->cerrarConexion();
        return $conn->query($sql);
    }


}