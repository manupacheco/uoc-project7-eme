<?php

    session_start();

    class Client{

        private $conn;

        public function __CONSTRUCT(PDO $pdo){
            $this->conn = $pdo;
        }

        public function loadNews(){

            try{

                $sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();

                $result = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_UNIQUE);

                //LOAD NOTICIAS

            }catch(PDOException $e){

                echo "Error: ".$e->getMessage();

            } 

        }

        public function logIn($user, $pass){

            try{

                $sql = "SELECT * FROM usuarios WHERE user.usuarios =:user";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute([':user'=>$user]);

                $result = $stmt->fetchObject();

                if($pass == $result->password){
                    
                    $_SESSION['user'] = $result;

                }

            }catch(PDOExceptio $e){
                echo "Error: ".$e->getMessage();
            }

        }

    }

?>