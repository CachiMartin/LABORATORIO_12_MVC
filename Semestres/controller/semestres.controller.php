<?php
require_once 'model/semestres.php';
class SemestresController{
private $model;
public function __CONSTRUCT(){
$this->model = new Semestres();
}
public function Index(){
require_once 'view/header.php';
require_once 'view/semestres/semestres.php';
require_once 'view/footer.php';
}
public function Crud(){
$sem = new Semestres();
if(isset($_REQUEST['id'])){
$sem = $this->model->Obtener($_REQUEST['id']);
}
require_once 'view/header.php';
require_once 'view/semestres/semestres-editar.php';
require_once 'view/footer.php';
}
public function Guardar(){
$sem = new Semestres();
$sem->id_con = $_REQUEST['id-form'];
$sem->semestre_numeral_con = $_REQUEST['semestre_numeral-form'];
$sem->semestre_literal_con = $_REQUEST['semestre_literal-form'];

if ($sem->id_con > 0 ) {
$this->model->Actualizar($sem);
}else{
$this->model->Registrar($sem);
}
header('Location: index.php');
}
public function Eliminar(){
$this->model->Eliminar($_REQUEST['id']);
header('Location: index.php');
}
}
?>