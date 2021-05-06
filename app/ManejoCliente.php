<?
    require 'conexion.php';

    class ManejoCliente{
        
        public function getAll(){
            $con = Conexion::getConexion();
            $stmt = $con->prepare("SELECT * FROM cliente");
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            return $result;
        }

        public function getClienteById(){
            echo "getall";
            return null;
        }

        public function addCliente($cliente){
            echo "getall";
            return null;
        }

        public function updateCliente($cliente){
            echo "getall";
            return null;
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