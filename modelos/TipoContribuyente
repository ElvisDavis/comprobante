<?php
//NOs conectamos  al base de datos
require "../config/Conexion.php";
class TipoContribuyente
{
    public function __construct()
    {

    }
    //Implementamso una funcion para insertar los datos del tipo del contribuyente
    public function insertar($nombre)
    {
        $sql = "INSERT INTO tipocontribuyente (nombre,estado) VALUES ('$nombre', '1')";
        return ejecutarConsulta($sql);
    }

    //Implementamos una funcion para editar el tipo de contribuyente
    public function editar($idtipocontribuyente, $nombre)
    {
        $sql = "UPDATE tipocontribuyente SET nombre='$nombre' WHERE idtipocontribuyente='$idtipocontribuyente'";
        return ejecutarConsulta($sql);
    }

    //implementamos una funcion para activar el tipo de contribuyente
    public function activar($idtipocontribuyente)
    {
        $sql = "UPDATE tipocontribuyente SET estado = '1' WHERE idtipocontribuyente='$idtipocontribuyente'";
        return ejecutarConsulta($sql);
    }
    //implementamos una funcion para desactivar el tipo de contribuyente
    public function desactivar($idtipocontribuyente)
    {
        $sql = "UPDATE tipocontribuyente SET estado = '0' WHERE idtipocontribuyente='$idtipocontribuyente'";
        return ejecutarConsulta($sql);
    }
    //implementamos una funcion para mostra un registro a modificar
    public function mostrar($idtipocontribuyente)
    {
        $sql = "SELECT * FROM tipocontribuyente WHERE idtipocontribuyente='$idtipocontribuyente'";
        return ejecutarConsultaSimpleFila($sql);
    }
    //Implementamos una fucnion para listar los tipos de contribuyente
    public function listar(){
        $sql="SELECT * FROM tipocontribuyente";
        return ejecutarConsulta($sql);
    }

    // Implementamos una funcion para listar los tipos de contribuyente activos
    public function listarActivos(){
        $sql="SELECT * FROM tipocontribuyente WHERE estado='1'";
        return ejecutarConsulta($sql);
    }




}
?>