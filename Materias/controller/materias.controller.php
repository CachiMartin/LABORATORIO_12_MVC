<?php
require_once 'model/materias.php';
class MateriasController{
private $model;
public function __CONSTRUCT(){
$this->model = new Materias();
}
public function Index(){
require_once 'view/header.php';
require_once 'view/materias/materias.php';
require_once 'view/footer.php';
}
public function Crud(){
$mat = new Materias();
if(isset($_REQUEST['id'])){
$est = $this->model->Obtener($_REQUEST['id']);
}
require_once 'view/header.php';
require_once 'view/materias/materias-editar.php';
require_once 'view/footer.php';
}
public function Guardar(){
$mat = new Materias();
$mat->id_con = $_REQUEST['id-form'];
$mat->materia_nombre_con = $_REQUEST['materia_nombre-form'];
$mat->hora_academica_con = $_REQUEST['hora_academica-form'];
$mat->tipo_con = $_REQUEST['tipo-form'];
$mat->pensum_con = $_REQUEST['pensum-form'];
if ($est->id_con > 0 ) {
$this->model->Actualizar($mat);
}else{
$this->model->Registrar($mat);
}
header('Location: index.php');
}
public function Eliminar(){
$this->model->Eliminar($_REQUEST['id']);
header('Location: index.php');
}
}
?>