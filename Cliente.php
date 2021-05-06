<?
    class Cliente{
        private $id;
        private $nombre;
        private $apellido;
        private $email;
        private $telefono;
        private $saldo;

        public function __construct($nombre,$apellido,$email,$telefono,$saldo){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->email = $email;
            $this->telefono = $telefono;
            $this->saldo = $saldo;
        }

        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getApellido(){
            return $this->apellido;
        }

        public function setApellido($apellido){
            $this->apellido = $apellido;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getTelefono(){
            return $this->telefono;
        }

        public function setTelefono($telefono){
            $this->telefono = $telefono;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
    }

?>