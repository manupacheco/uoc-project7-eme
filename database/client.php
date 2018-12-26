<?php

    session_start();

    class Client{

        private $conn;

        public function __CONSTRUCT(PDO $pdo){
            $this->conn = $pdo;
        }

        // LOAD NEWS

        public function loadNews(){

            try{

                $sql = "SELECT * FROM noticias ORDER BY fecha_publicacion DESC";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();

                $_SESSION['news'] = $stmt->fetchAll(PDO::FETCH_CLASS);

                //LOAD NOTICIAS

            }catch(PDOException $e){

                echo "Error: ".$e->getMessage();

            } 

        }

        // LOAD NEWS PERIODISTA

        public function loadPeriodista($id){

            try{

                $sql = "SELECT * FROM noticias WHERE autor = $id";
                $stmt = $this->conn->prepare($sql);
                $stmt->execute();

                $_SESSION['periodista'] = $stmt->fetchAll(PDO::FETCH_CLASS);

            }catch(PDOException $e){

                echo "Error: ".$e->getMessade();

            }

        }

        // LOAD SECTION

        public function loadSection($idSeccion){

            try{

                $sql = "SELECT articulos FROM seccion WHERE IdSeccion = $idSeccion";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchColumn();

                return $result;
                
            }catch(PDOException $e){

                echo "Error: ".$e->getMessage();

            }
        }

        // LOAD DETAILS

        public function loadDetail($id){

            try{

                $sql = "SELECT * FROM noticias WHERE IdNoticia = $id";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();

                $_SESSION['details'] = $stmt->fetchAll(PDO::FETCH_CLASS);

                //LOAD NOTICIAS

            }catch(PDOException $e){

                echo "Error: ".$e->getMessage();

            } 

        }

        // LOAD AUTHOR

        public function loadAuthor($id){

            try{

                $sql = "SELECT user FROM usuarios WHERE IdUsuario = $id";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchColumn();

                return $result;

            }catch(PDOException $e){

                echo "Error: ".$e->getMessage();

            } 

        }

        // LOG IN

        public function logIn($user, $pass){

            try{

                $sql = "SELECT * FROM `usuarios` WHERE `user` LIKE '$user'";

                $stmt = $this->conn->prepare($sql);
                $stmt->execute();

                $result = $stmt->fetchObject();

                if($pass == $result->password){
                    
                    $_SESSION['user'] = $result;
                    return TRUE;

                }

            }catch(PDOExceptio $e){
                echo "Error: ".$e->getMessage();
                return FALSE;
            }

        }

    }

?>