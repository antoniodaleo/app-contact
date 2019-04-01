<?php
     if(!isset($_SESSION['a'])){
        exit(); 
    }   

    // Metodos
    class funcoes{

        public static function VerificarLogin(){
            $resultado = false; 
            if(isset($_SESSION['id_utilizador'])){
                $resultado = true; 
            }
            return $resultado; 


        }

        public static function IniciarSessao($dados){
            $_SESSION['id_utilizador'] = $dados[0]['id_utilizador']; 

        }

        public static function DestroiSessao(){
            unset($_SESSION['id_utilizador']); 
        }

    }


?>