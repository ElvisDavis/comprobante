<?php
require_once("../modelos/Plan.php");
$plan = new Plan();
$idplan = isset($_POST["idplan"]) ? $_POST["idplan"] : "";
$idtipocontribuyente= isset($_POST["idtipoconytibuyente"]) ? $_POST["idtipocontribuyente"] :"";
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$costo = isset($_POST["costo"]) ? $_POST["costo"] : "";

switch ($_GET["op"]) {
    case 'guardaryeditar':
        # code...
        if (empty($idplan)) {
            $rspta = $plan->insertar($idtipocontribuyente, $nombre, $costo);
            echo $rspta ? "Plan ingresado correctamente" : "El plan no se pudo ingresar correctamente";

        } else {
            $rspta = $plan->editar($idplan, $idtipocontribuyente, $nombre,  $costo);
            echo $rspta ? "Plan editado correctamente" : "El Plan no se pudo editar correctamente";
        }
        break;
    case 'desactivar':
        $rspta = $plan->desactivar($idplan);
        echo $rspta ? "Plan desactivado correctamente" : "El plan no se pudo desactivar";
        break;

    case 'activar':
        $rspta = $plan->activar($idplan);
        echo $rspta ? "Plan activado correctamente" : "El plan no se pudo activar";
        break;

    case 'mostrar':
        $rspta = $plan->mostrar($idplan);
        //codificamos los datos utilizando json 
        echo json_encode($rspta);
        break;
    case 'listar':
        $rspta = $plan->lista();
        //declaramos un array
        $data = array();
        while ($reg = $rspta->fetch_object()) {
            $data[] = array(
                "0" => $reg->idplan,
                "1" => $reg->idtipocontribuyente,
                "2" => $reg->nombre,
                "3" => $reg->costo,
                "4" => ($reg->estado) ? '<span class="label bg-green">Activado</span>' :
                    '<span class="label bg-red">Desactivado</span>',
                "5" => ($reg->estado) ? '<button class="btn btn-warning" onclick="mostrar(' . $reg->idplan . ')"><i class="fa fa-pencil"></i></button>' .
                    ' <button class="btn btn-danger" onclick="desactivar(' . $reg->idplan . ')"><i class="fa fa-close"></i></button>' :
                    '<button class="btn btn-warning" onclick="mostrar(' . $reg->idplan . ')"><i class="fa fa-pencil"></i></button>' .
                    ' <button class="btn btn-primary" onclick="activar(' . $reg->idplan . ')"><i class="fa fa-check"></i></button>',
            );
        }
        $results = array(
            "sEcho" => 1,
            //Información para el datatables
            "iTotalRecords" => count($data),
            //enviamos el total registros al datatable
            "iTotalDisplayRecords" => count($data),
            //enviamos el total registros a visualizar
            "aaData" => $data
        );
        echo json_encode($results);

        break;
    
}


?>