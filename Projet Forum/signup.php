<?php        
require 'controler/head.php'; 
require 'model/signupModel.php'; 
?>
<!DOCTYPE html>
<html lang="fr">

<body>
    <br><br>
    <form class="container" method="POST">
        <?php if(isset($errorMsg)){ echo $errorMsg; } ?>
        <div class="form-group">
            <label for="exampleInputEmail1">Pseudo</label>
            <input type="text" class="form-control" name="pseudo" placeholder="IgorDosg0r66">
            <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="briceden1ce@gmail.com">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Dupont">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Prénom</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Robert">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="mot de passe">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Retapper Mot de passe</label>
                                    <input type="password" class="form-control" name="password2"
                                        placeholder="meme mot de passe">
                                        <?php if(isset($errorPass)){ echo '<br>'.$errorPass; } ?>
                                    <br>
                                </div>
                                <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
    </form>

</body>

</html>