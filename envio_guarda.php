<?php
// print_r($_POST);
// exit;
if (
    !isset($_POST['idenvio']) || empty($_POST['idenvio'])
    || !isset($_POST['idventa']) || empty($_POST['idventa'])
    || !isset($_POST['fecha']) || empty($_POST['fecha'])
    || !isset($_POST['direccion']) || empty($_POST['direccion'])
    ) {
    header('Location: envio_formu.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into envio set
idenvio = :idenvio
, idventa = :idventa
, fecha = :fecha
, direccion = :direccion
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':idenvio' => $_POST['idenvio']
    , ':idventa' => $_POST['idventa']
    , ':fecha' => $_POST['fecha']
    , ':direccion' => $_POST['direccion']
]);
header('Location: envio_formu.php?info=envio creado exitosamente: ' . $_POST['idenvio']);
?>