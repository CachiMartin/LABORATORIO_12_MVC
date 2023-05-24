<?php
require_once 'model/docentes.php';
class docentesController{
private $model;
public function __CONSTRUCT(){
$this->model = new docentes();
}
public function Index(){
require_once 'view/header.php';
require_once 'view/docentes/docentes.php';
require_once 'view/footer.php';
}
public function Crud(){
$doc = new docentes();
if(isset($_REQUEST['id'])){
$doc = $this->model->Obtener($_REQUEST['id']);
}
require_once 'view/header.php';
require_once 'view/docentes/docentes-editar.php';
require_once 'view/footer.php';
}
public function Guardar(){
$doc = new docentes();
$doc->id_con = $_REQUEST['id-form'];
$doc->ci_con = $_REQUEST['ci-form'];
$doc->nombres_con = $_REQUEST['nombres-form'];
$doc->fecha_nacimiento_con = $_REQUEST['fecha_nacimiento-form'];
$doc->direccion_con = $_REQUEST['direccion-form'];
$doc->celular_con = $_REQUEST['celular-form'];
if ($doc->id_con > 0 ) {
$this->model->Actualizar($doc);
}else{
$this->model->Registrar($doc);
}
header('Location: index.php');
}
public function Eliminar(){
$this->model->Eliminar($_REQUEST['id']);
header('Location: index.php');
}
}
?>