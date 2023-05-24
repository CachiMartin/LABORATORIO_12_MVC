<?php
require_once 'model/carreras.php';
class CarrerasController{
private $model;
public function __CONSTRUCT(){
$this->model = new Carreras();
}
public function Index(){
require_once 'view/header.php';
require_once 'view/carreras/carreras.php';
require_once 'view/footer.php';
}
public function Crud(){
$car = new Carreras();
if(isset($_REQUEST['id'])){
$car = $this->model->Obtener($_REQUEST['id']);
}
require_once 'view/header.php';
require_once 'view/carreras/carreras-editar.php';
require_once 'view/footer.php';
}
public function Guardar(){
$car = new Carreras();
$car->id_con = $_REQUEST['id-form'];
$car->carrera_codigo_con = $_REQUEST['carrera_codigo-form'];
$car->carrera_nombre_con = $_REQUEST['carrera_nombre-form'];
$car->carrera_abreviacion_con = $_REQUEST['carrera_abreviacion-form'];
if ($est->id_con > 0 ) {
$this->model->Actualizar($car);
}else{
$this->model->Registrar($car);
}
header('Location: index.php');
}
public function Eliminar(){
$this->model->Eliminar($_REQUEST['id']);
header('Location: index.php');
}
}
?>