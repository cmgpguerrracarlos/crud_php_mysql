<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            padding: 10px;
            background-color: lightgreen;
            width: 300px;
        }
        input{
            margin: 10px;
            padding: 0px 10px;
        }
    </style>
</head>
<body>
<?
    $id = $_GET['id'];
    include './ManejoCliente.php';
    $mc = new ManejoCliente();
    $res = $mc->getClienteById($id);
    echo "<form action='./guardar.php' method='POST'>";
    foreach($res[0] as $k => $v){
        if($k == 'id_cliente'){
            echo "$k: <input type='text' value=$v name=$k /> <br>";
        }else if($k == 'email'){
            echo "$k: <input type='email' value=$v name=$k /> <br>";
        }else if($k == 'saldo'){
            echo "$k: <input type='number' value=$v name=$k step='.1' /> <br>";
        }else{
            echo "$k: <input type='text' value=$v name=$k /> <br>";
        }
        
    }
    echo "<input type='submit' value='guardar'/>";
    echo "</form>";
?>
<br>
<a href="./app.php">regresar</a>
</body>
</html>