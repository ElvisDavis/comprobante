var tabla;
// funcion que se ejecuta al inicio 
function init() {
    mostrarform(false);
    listar();
    $("#formulario").on("submit", function (e) {
        guardaryeditar(e);
    })
}

//Creamos una funcion para limpiar 
function limpiar() {
    $("#nombre").val("");
    $("#idtipocontribuyente").val("");
}

//Funcion mostrar formulario
function mostrarform(flag) {
    limpiar();
    if (flag) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    }
    else {
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();
    }
}

//imolementamos un metodo para el boton cancelar

function cancelarform() {
    limpiar();
    mostrarform(false);
}

//implementamos una fiunción para listar las cuentas asociadas
function listar() {
    tabla = $('#tbllistado').dataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax":
        {
            url: '../ajax/tipocontribuyente.php?op=listar',
            type: "get",
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "iDisplayLength": 5,//Paginación
        "order": [[0, "desc"]]//Ordenar (columna,orden)
    }).DataTable();
}
//funcionpara guardar o editar 

function guardaryeditar(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar").prop("disabled", true);
    var formData = new FormData($("#formulario")[0]);

    $.ajax({
        url: "../ajax/tipocontribuyente.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function (datos) {
            bootbox.alert(datos);
            mostrarform(false);
            tabla.ajax.reload();
        }

    });
    limpiar();
}
function mostrar(idtipocontribuyente) {
    $.post("../ajax/tipocontribuyente.php?op=mostrar", { idtipocontribuyente: idtipocontribuyente }, function (data, status) {
        data = JSON.parse(data);
        mostrarform(true);

        $("#nombre").val(data.nombre);

        $("#idtipocontribuyente").val(data.idtipocontribuyente);


    })
}
//Función para desactivar registros
function desactivar(idtipocontribuyente) {
    bootbox.confirm("¿Está Seguro de desactivar el usuario?", function (result) {
        if (result) {
            $.post("../ajax/tipocontribuyente.php?op=desactivar", { idtipocontribuyente: idtipocontribuyente }, function (e) {
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}

//Función para activar registros
function activar(idtipocontribuyente) {
    bootbox.confirm("¿Está Seguro de activar el Usuario?", function (result) {
        if (result) {
            $.post("../ajax/tipocontribuyente.php?op=activar", { idtipocontribuyente: idtipocontribuyente }, function (e) {
                bootbox.alert(e);
                tabla.ajax.reload();
            });
        }
    })
}


init();