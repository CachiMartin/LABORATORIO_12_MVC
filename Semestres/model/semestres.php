<?php
class Semestres{
private $pdo;
public $id;
public $semestre_numeral;
public $semestre_literal;

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
$stm = $this->pdo->prepare("SELECT * FROM semestres");
$stm->execute();
return $stm->fetchAll(PDO::FETCH_OBJ);
}catch(Exception $e){
die($e->getMessage());
}
}
public function Obtener($id){
try {
$stm = $this->pdo->prepare("SELECT * FROM semestres WHERE id =
?");
$stm->execute(array($id));
return $stm->fetch(PDO::FETCH_OBJ);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Eliminar($id){
try {
$stm = $this->pdo->prepare("DELETE FROM semestres WHERE id = ?");
$stm->execute(array($id));
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Actualizar($data){
try {
$sql = "UPDATE semestres SET
semestre_numeral = ?,
semestre_literal = ?,

WHERE id = ?";
$this->pdo->prepare($sql)
->execute(
array(
$data->semestre_numeral_con,
$data->semestre_literal_con,

$data->id_con
)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
public function Registrar(Semestres $data){
try {
$sql = "INSERT INTO semestres (semestre_numeral,semestre_literal)
VALUES (?, ?)";
$this->pdo->prepare($sql)
->execute(
array(
$data->semestre_numeral_con,
$data->semestre_literal_con,

)
);
} catch (Exception $e) {
die($e->getMessage());
}
}
}
?>
