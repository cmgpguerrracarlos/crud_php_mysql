<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        td {
            padding: 5px 10px;
            border: 1px solid black;
            text-align: center;
        }

        th {
            background-color: black;
            color: wheat;
        }
    </style>
</head>

<body>
    <h1>Listado de clientes</h1>
    <?php
    include './ManejoCliente.php';
    $c = new ManejoCliente();
    $resul = $c->getAll();
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Saldo</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($resul as $k => $v) {
                echo "<tr>";
                foreach ($v as $v1 => $v2) {
                    echo "<td>$v2</td>";
                }
                $id = $v['id_cliente'];
                echo "<td><a href='editar.php?id=$id'>editar</a></td><td><a href='borrar.php?id=$id'>borrar</a></td></tr>";
            }

            ?>
        </tbody>
    </table>
    <br>
    <a href="agregar.php">Agregar cliente</a>
</body>

</html>