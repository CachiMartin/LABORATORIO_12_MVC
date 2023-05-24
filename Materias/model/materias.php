<?php
class Materias{
private $pdo;
public $id;
public $materia_nombre;
public $hora_academica;
public $tipo;
public $pensum;
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
$stm = $this->pdo->prepare("SELECT * FROM materias");
$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}catch(Exception $e){
die($e->getMessage());
}
}
public function Obtener($id){
try {
$stm = $this->pdo->prepare("SELECT * FROM materias WHERE id =
?");
$stm->execute(array($id));
return $stm->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Eliminar($id){
try {
$stm = $this->pdo->prepare("DELETE FROM materias WHERE id = ?");
$stm->execute(array($id));
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Actualizar($data){
try {
$sql = "UPDATE materias SET
materia_nombre = ?,
hora_academica = ?,
tipo = ?,
pensum = ?
WHERE id = ?";
$this->pdo->prepare($sql)
->execute(
array(
$data->materia_nombre_con,
$data->hora_academica_con,
$data->tipo_con,
$data->pensum_con,
$data->id_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Registrar(Materias $data){
try {
$sql = "INSERT INTO materias (materia_nombre,hora_academica,tipo,pensum)
VALUES (?, ?, ?, ?)";
$this->pdo->prepare($sql)
->execute(
array(
$data->materia_nombre_con,
$data->hora_academica_con,
$data->tipo_con,
$data->pensum_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
}
?>
