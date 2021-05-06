<?
    require 'conexion.php';

    class ManejoCliente{
        
        public function getAll(){
            $con = Conexion::getConexion();
            $stmt = $con->prepare("SELECT * FROM cliente");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $con = Conexion::cerrar();
            return $result;
        }

        public function getClienteById($id){
            $con = Conexion::getConexion();
            $stmt = $con->prepare("SELECT * FROM cliente WHERE id_cliente=$id");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $con = Conexion::cerrar();
            return $result;
        }

        public function addCliente($cliente){
            echo "getall";
            return null;
        }

        public function updateCliente($id,$nombre,$apellido,$email,$telefono,$saldo){
            $sql = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono', saldo='$saldo'  WHERE id_cliente=$id";
            $con = Conexion::getConexion();
            $stmt = $con->prepare($sql);
            $stmt->execute();          
            $resul = $stmt->rowCount();
            $con = Conexion::cerrar();
            return $resul;
        }

        public function deleteClienteById($id){
            echo "getall";
            return null;
        }

        public function deleteClienteByEmail($email){
            echo "getall";
            return null;
        }
    }

?>