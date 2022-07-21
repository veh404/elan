<?php

session_start();

if(isset($_GET['action'])){

    switch($_GET['action']){
        case "supprimer":
            unset($_SESSION['products']);
            header("location:recap.php");
            die;
            break;

        case "add": 
        if(isset($_POST['submit'])){
            $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
            $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

            if($name && $price && $qtt){

                $product = [
                    "name" => $name,
                    "price" => $price,
                    "qtt" => $qtt,
                    "total" => $price*$qtt
                ];
                
                $_SESSION['products'][] = $product;

                header("Location:index.php");
                die;
            }
        } break; // fin du switch "delete" et "add"

        case "up":
            if(isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]])){
                // incrémenter la quantité courante du produit passé en paramètre
                $_SESSION["products"][$_GET["id"]]["qtt"]++;
                // redirection 
                }
                header("Location: recap.php");
                die();
                break;

        case "down":
            if(isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]]) && $_SESSION["products"][$_GET["id"]]["qtt"] > 1){
                // décrémenter la quantité courante du produit passé en paramètre
                $_SESSION["products"][$_GET["id"]]["qtt"]--;
            } else{
                unset($_SESSION["products"][$_GET["id"]]);
            } 
            
            header("Location: recap.php");
            die();
            break;

        case "delete":
            if(isset($_GET["id"]) && isset($_SESSION["products"][$_GET["id"]])){
                unset($_SESSION["products"][$_GET["id"]]);
            } 
            header("Location: recap.php");
            die();
            break;
    }
}

