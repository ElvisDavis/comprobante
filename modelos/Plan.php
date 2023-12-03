<?php
// incluimos inicialmente la conexión  a la base de datos
require "../config/Conexion.php";
class Plan
{
    //implementamos un constructor vacio
    public function __construct()
    {

    }

    //Implementamos un método para insertar lso registros 
    public function insertar ($idtipocontribuyente,$nombre,$costo)
    {
        $sql="INSERT INTO plan (idtipocontribuyente,nombre, costo, estado)
        VALUES('$idtipocontribuyente','$nombre', '$costo','1')";
        return ejecutarConsulta($sql);
    }
    //Implementamos un mpetodo para editar el contribuyente
    public function editar($idplan, $idtipocontribuyente, $nombre,$costo)
    {
        $sql="UPDATE plan SET idtipocontribuyente='$idtipocontribuyente', nombre='$nombre',costo='$costo' WHERE idplan='$idplan' ";
        return ejecutarConsulta($sql);
    }

    //IMplementamos una funcion para activar el plan 
    public function activar($idplan){
        $sql="UPDATE plan  SET estado = '1' WHERE idplan = '$idplan' ";
        return ejecutarConsulta($sql);
    }

    //Implementamos una funcion para desctiva rel plan 
    public function desactivar ($idplan){
        $sql="UPDATE plan SET estado='0', WHERE idplan = '$idplan '";
        return ejecutarConsulta($sql);
    }

    //Implementamos una funcion para mostrar el registro que se va amostrar y editar 
    public function mostrar($idplan){
        $sql="SELECT * FROM plan WHERE idplan='$idplan'";
        return ejecutarConsultaSimpleFila($sql);
    }

    //Implementamos una funcion para lsitar los regiistros 
    public function lista(){
        $sql="SELECT * FROM plan";
        return ejecutarConsulta($sql);
    }

}
?>