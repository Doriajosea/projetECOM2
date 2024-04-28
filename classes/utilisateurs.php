<?php

    class Utilisateurs {
        private int $id;
        private string $nom;
        private string $prenom;
        private string $nomUtilisateur;
        private string $email;
        private string $password;
        

        public function __construct($i, $nom, $prenom, $nomUtilisateur, $email, $pass)
        {
            $this->id =$i;
            $this->nom =$nom;
            $this->prenom =$prenom;
            $this->nomUtilisateur =$nomUtilisateur;
            $this->email =$email;
            $this->password =$pass;
            

        }

        public function getId(){
            return $this -> id;
        }
        public function setId($i){
            $this -> id = $i;
        }

        public function getNom(){
            return $this -> nom;
        }
        public function setNom($nom){
            $this -> nom = $nom;
        }

        public function getPrenom(){
            return $this -> prenom;
        }
        public function setPrenom($prenom){
            $this -> prenom = $prenom;
        }

        public function getNomUtilisateur(){
            return $this -> nomUtilisateur;
        }
        public function setNomUtilisateur($nomUtilisateur){
            $this -> nomUtilisateur = $nomUtilisateur;
        }

        public function getEmail(){
            return $this -> email;
        }
        public function setEmail($email){
            $this -> email = $email;
        }

        public function getPassword(){
            return $this -> password;
        }
        public function setPassword($pass){
            $this -> password = $pass;
        }

        


    }


?>