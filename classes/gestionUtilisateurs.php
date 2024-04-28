<?php

    
    class GestionUtilisateurs {
        private $bdd;

        public function __construct($b)
        {
            $this -> bdd = $b;
        }

        public function getBdd() {
            return $this -> bdd;
        }
        public function setBdd($b){
            $this -> bdd = $b;
        }

        public function ajouterUtilisateurs(Utilisateurs $u) {
            $sql=$this->bdd->prepare("INSERT INTO user VALUES (null,?,?,?,?,?)") ;
            $sql -> execute(array ($u -> getNom(), $u -> getPrenom(), $u -> getNomUtilisateur(), $u -> getEmail(), $u -> getPassword()
        ));
        }

    }


?>