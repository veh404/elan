<?php

abstract class Connect {
    public function seConnecter(){
       try {
            $bdd = new PDO('mysql:host=localhost;dbname=forum;', 'root', '');
             } catch (\PDOException $error){
                return $error->getMessage();
        }   return $bdd;
    }  
}