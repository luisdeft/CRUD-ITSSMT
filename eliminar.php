<?php 
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];
$query = $con->prepare("DELETE FROM usuarios WHERE id=?");
if($query->execute([$id]))
{
    var_dump("registro eliminado");
}else{
    var_dump("registro eliminado");
}
?>