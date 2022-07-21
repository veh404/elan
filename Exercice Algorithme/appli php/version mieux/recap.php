<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Récapitulatif des produits</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&family=Inter&family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>

<body>
    <div class="wrapper">
    <?php require "nav.php";?>

    <?php 
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "<div class='table-background'><table>",
            "<p class='noproducts'> Aucun produit en session... </p>";
        } else{
            echo "<div class='table-background'><table>",
                    "<thead>",
                        "<tr>",
                            "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix</th>",
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                            "<th>Action</th>",
                        "</tr>",
                    "</thead>",
                "<tbody>";

                $totalGeneral = 0;

                foreach($_SESSION['products'] as $index => $product){

                    $total = $product['price']*$product["qtt"];
                    
                    echo "<tr>",
                            "<td>".$index."</td>",
                            "<td>".$product['name']."</td>",
                            "<td>".number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>",

                            "<td><a href='traitement.php?action=down&id=$index'>
                            <button class='quantity-button'>-</button></a>".
                            $product['qtt']
                            ."<a href='traitement.php?action=up&id=$index'>
                            <button class='quantity-button'>+</button></a></td>",

                            "<td>".number_format($total, 2, ",", "&nbsp;")."&nbsp;€</td>",
                            "<td><a href='traitement.php?action=delete&id=$index' ><button>Delete</button></a></td>",
                         "</tr>";

                         $totalGeneral+=$total;
                }

                echo "<tr>",
                        "<td colspan=4> Total général : </td>",
                        "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
                     "</tr>",
                "</tbody>",
                "</table></div>";
        }
    ?>
        <a href="traitement.php?action=supprimer" class="suppr"><button class="supprimer">Supprimer</button></a>    
    </div>
</body>
</html>