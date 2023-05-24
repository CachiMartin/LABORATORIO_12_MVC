<?php
class docentes{
private $pdo;
public $id;
public $ci;
public $nombres;
public $fecha_nacimiento;
public $direccion;
public $celular;
public function __CONSTRUCT(){
try{
$this->pdo = Database::StartUp();
}catch(Exception $e){
die($e->getMessage());
}
}
public function Listar(){
try{
$result = array();
$stm = $this->pdo->prepare("SELECT * FROM docentes");
$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}catch(Exception $e){
die($e->getMessage());
}
}
public function Obtener($id){
try {
$stm = $this->pdo->prepare("SELECT * FROM docentes WHERE id =?");
$stm->execute(array($id));
return $stm->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Eliminar($id){
try {
$stm = $this->pdo->prepare("DELETE FROM docentes WHERE id = ?");
$stm->execute(array($id));
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Actualizar($data){
try {
$sql = "UPDATE docentes SET
ci = ?,
nombres = ?,
fecha_nacimiento = ?
direccion = ?
celular = ?
WHERE id = ?";
$this->pdo->prepare($sql)
->execute(
array(
$data->ci_con,
$data->nombres_con,
$data->fecha_nacimiento_con,
$data->id_con,
$data->direccon_con,
$data->celular_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Registrar(docentes $data){
try {
$sql = "INSERT INTO docentes (ci,nombres,fecha_nacimiento,direccon,celular)
VALUES (?, ?, ?, ?, ?)";
$this->pdo->prepare($sql)
->execute(
array(
$data->ci_con,
$data->nombres_con,
$data->fecha_nacimiento_con,
$data->direccion_con,
$data->celular_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
}
?>
