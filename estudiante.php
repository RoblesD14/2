<?php

include_once "ConexionDB.php";
class Estudiante
{
    private $nombre;
    private $email;

    public function mostrarEstudiantes(){
        try {
            $db = new ConexionDB();
            $conn = $db->abrirConexion();

            $sql = "SELECT * FROM estudiante";
            $respuesta = $conn->prepare($sql);
            $respuesta->execute();
            $result = $respuesta->fetchAll();

            $db->cerrarConexion();
            return $result;
        }
        
            echo $e->getMessage();
        }
    }

    public function mostrarEstudiantePorId($id_estudiante){
        try {
            $db = new ConexionDB();
            $conn = $db->abrirConexion();

            $sql = "SELECT * FROM estudiante WHERE id=$id_estudiante";
            $respuesta = $conn->prepare($sql);
            $respuesta->execute();
            $result = $respuesta->fetchAll();

            $db->cerrarConexion();
            return $result;
        }
            echo $e->getMessage();
        }
    }
}