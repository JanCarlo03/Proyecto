<?php
if (
    !isset($_POST['nombre']) || empty($_POST['nombre'])
    || !isset($_POST['primer_apellido']) || empty($_POST['primer_apellido'])
    || !isset($_POST['segundo_apellido']) || empty($_POST['segundo_apellido'])
    || !isset($_POST['telefono']) || empty($_POST['telefono'])
    || !isset($_POST['correo']) || empty($_POST['correo']) || !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)
    || !isset($_POST['contrasena']) || empty($_POST['contrasena']) || strlen($_POST['contrasena']) < 8
    || $_POST['contrasena'] != $_POST['confirma_contrasena']
    || !isset($_POST['perfil']) || empty($_POST['perfil']) || !in_array($_POST['perfil'], ['Administrador', 'Cliente'])
    ) {
    header('Location: perfil_editar.php');
    exit;
}
require_once './conexion.php';
$sql = <<<fin
update cliente set
nombre = :nombre
, primer_apellido = :primer_apellido
, segundo_apellido = :segundo_apellido
, telefono = :telefono
, correo = :correo
, contrasena = :contrasena
, perfil = :perfil
where
    idcliente = :idcliente
fin;
$sentencia = $conexion->prepare($sql, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$sentencia->execute([
    ':nombre' => $_POST['nombre']
    , ':primer_apellido' => $_POST['primer_apellido']
    , ':segundo_apellido' => $_POST['segundo_apellido']
    , ':telefono' => $_POST['telefono']
    , ':correo' => $_POST['correo']
    , ':contrasena' => password_hash ($_POST['contrasena'],  PASSWORD_BCRYPT,['cost' =>12])
    , ':perfil' => $_POST['perfil']
]);
header('Location: perfil.php?info=Perfil actualizado exitosamente: ' . $_POST['nombre']);
?>