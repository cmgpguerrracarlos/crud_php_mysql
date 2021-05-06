<?
    include './ManejoCliente.php';
    $mc = new ManejoCliente();
    $mc->updateCliente($_POST['id_cliente'],$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['telefono'],$_POST['saldo']);
    header('Location: ./app.php');
?>