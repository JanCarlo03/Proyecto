<?php
if (
    !isset($_POST['idproducto']) || empty($_POST['idproducto'])
    || !isset($_POST['idcatalogo']) || empty($_POST['idcatalogo'])
    || !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['material']) || empty($_POST['material'])
    || !isset($_POST['precio']) || empty($_POST['precio'])
    || !isset($_POST['sexo']) || empty($_POST['sexo'])
    ) {
    header('Location: producto.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
insert into producto set
idproducto = :idproducto
, idcatalogo = :idcatalogo
, nombre = :nombre
, material = :material
, precio = :precio
, sexo = :sexo
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':idproducto' => $_POST['idproducto']
    , ':idcatalogo' => $_POST['idcatalogo']
    , ':nombre' => $_POST['nombre']
    , ':material' => $_POST['material']
    , ':precio' => $_POST['precio']
    , ':sexo' => $_POST['sexo']
]);
header('Location: formulario_producto.php?info=Producto creado exitosamente: ' . $_POST['idproducto']);
?>