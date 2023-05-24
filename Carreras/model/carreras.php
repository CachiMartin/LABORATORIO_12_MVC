<?php
class Carreras{
private $pdo;
public $id;
public $carrera_codigo;
public $carrera_nombre;
public $carrera_abreviacion;
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
$stm = $this->pdo->prepare("SELECT * FROM carreras");
$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}catch(Exception $e){
die($e->getMessage());
}
}
public function Obtener($id){
try {
$stm = $this->pdo->prepare("SELECT * FROM carreras WHERE id =
?");
$stm->execute(array($id));
return $stm->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Eliminar($id){
try {
$stm = $this->pdo->prepare("DELETE FROM carreras WHERE id = ?");
$stm->execute(array($id));
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Actualizar($data){
try {
$sql = "UPDATE carreras SET
carrera_codigo = ?,
carrera_nombre = ?,
carrera_abreviacion = ?
WHERE id = ?";
$this->pdo->prepare($sql)
->execute(
array(
$data->carrera_codigo_con,
$data->carrera_nombre_con,
$data->carrera_abreviacion_con,
$data->id_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Registrar(Carreras $data){
try {
$sql = "INSERT INTO carreras (carrera_codigo,carrera_nombre,carrera_abreviacion)
VALUES (?, ?, ?)";
$this->pdo->prepare($sql)
->execute(
array(
$data->carrera_codigo_con,
$data->carrera_nombre_con,
$data->carrera_abreviacion_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
}
?>
