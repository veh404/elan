<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&family=Inter&family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ajout produit</title>
</head>

<body>

<?php 
session_start();
require "nav.php"; 
?>

    <div class="formulaire">
        <h1>Ajouter un produit</h1>

        <form action="traitement.php?action=add" method="post">

            <p class="p-form">
                <label class="label-form" for="" >Nom du produit : </label>
                <input class="input-form" type="text" name="name" required>
            </p>

            <p class="p-form">
                <label class="label-form" for="">Prix du produit :</label>
                <input class="input-form" type="number" step="any" name="price" required>
            </p>

            <p class="p-form">
                <Label class="label-form"> Quantité :</Label>
                <input class="input-form" type="number" name="qtt" value="1" required>     
            </p>

            <p>
                <input class="supprimer" type="submit" name="submit" value="Ajouter le produit">       
            </p>

        </form>

    </div>
</body>

</html>