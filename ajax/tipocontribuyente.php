<?php
require_once "../modelos/TipoContribuyente.php";
$tipocontribuyente = new TipoContribuyente();
$idtipocontribuyente = isset($_POST["idtipocontribuyente"]) ? limpiarCadena($_POST["idtipocontribuyente"]) : "";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";

switch ($_GET["op"]) {
    case 'guardaryeditar':
        # code...
        if (empty($idtipocontribuyente)) {
            $rspta = $tipocontribuyente->insertar($nombre);
            echo $rspta ? "Tipo Contribuyente ingresado con exito " : "Tipo contribuyente no se pudo registrar";

        } else {
            $rspta = $tipocontribuyente->editar($idtipocontribuyente, $nombre);

        }
        break;
    case 'activar':
        $rspta = $tipocontribuyente->activar($idtipocontribuyente);
        echo $rspta ? "Tipo de contribuyente activado" : "Tipo de contribuyente no se pudo editar";
        break;
    case 'desactivar':
        $rspta = $tipocontribuyente->desactivar($idtipocontribuyente);
        echo $rspta ? "Tipo de contribuyente desactivado" : "Tipo de contribuyente no se pudo desactivar";
        break;
    case 'mostrar':
        $rspta = $tipocontribuyente->mostrar($idtipocontribuyente);
        //codificamos el resultado utilizando json 
        echo json_encode($rspta);
        break;
    case 'listar':
        $rspta = $tipocontribuyente->listar();
        $data = array();
        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "0" => $reg->idtipocontribuyente,
                "1" => $reg->nombre,
                "2" => ($reg->estado) ? '<span class="label bg-green">Activado</span>' : '<span class="label bg-red">Desactivado</span>',
                "3" => ($reg->estado) ? '<button class="btn btn-warning" onclick="mostrar(' . $reg->idtipocontribuyente . ')"><i class="fa fa-pencil"></i></button>' .
                    ' <button class="btn btn-danger" onclick="desactivar(' . $reg->idtipocontribuyente . ')"><i class="fa fa-lock"></i></button>' :
                    '<button class="btn btn-warning" onclick="mostrar(' . $reg->idtipocontribuyente . ')"><i class="fa fa-pencil"></i></button>' .
                    ' <button class="btn btn-success" onclick="activar(' . $reg->idtipocontribuyente . ')"><i class="fa fa-unlock"></i></button>'
            );
        }
        $results = array(
            "sEcho" => 1, //informacion para la base de datos
            "iTotalRecords" => count($data), //enviamos el total registro al datatable
            "iTotalDisplayRecords" => count($data), //enviamos el total de registros a visualizar
            "aaData" => $data
        );
        echo json_encode($results);

        break;    
}
?>