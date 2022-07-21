<?php

use JetBrains\PhpStorm\ArrayShape;

require('model/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])){
    
        $cle = rand(100000000, 900000000);
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $password2 = password_hash($_POST['password2'], PASSWORD_DEFAULT);
        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);
        $pseudo = htmlspecialchars($_POST['pseudo']);


        $recupMail = $bdd->prepare('SELECT * FROM user WHERE email = '.$email.'');
        $recupMail->execute(array($email));

        if($recupMail->rowCount() == 0){

        
        }else{
            $errorMsgmail = "L'adresse email existe déjà";
        }

        $recupPseudo = $bdd ->prepare('SELECT pseudo FROM user WHERE pseudo = '.$pseudo.'');
        $recupPseudo->execute(Array($pseudo));

        if($recupPseudo->rowCount() == 0){

            if($_POST['password'] == $_POST['password2'] && $recupPseudo->rowCount() == 0 && $recupMail->rowCount() == 0)
            {
                $insererUser = $bdd->prepare('INSERT INTO user (pseudo, email, lastname, firstname, password, cle, confirmed) 
                VALUES("'.$pseudo.'","'.$email.'","'.$lastname.'","'.$firstname.'","'.$password.'","'.$cle.'", 0)');
                $insererUser->execute(array($pseudo, $email, $cle, 0, $lastname, $firstname, $password));
            } 

        
        }else{
            $errorMsg = "L'utilisateur existe déjà";
        }
    
    
    }else{
        $errorMsg = '<div class="alert alert-danger" role="alert"> Veuillez complétez tout les champs !</div>';
    }

    if(isset($_POST['password'])){
        if($_POST['password'] != $_POST['password2']){
            $errorPass = '<div class="alert alert-danger" role="alert">
          Les mots de passes doivent correspondre !</div>';
        }  
    }
    if(!empty($_POST['email'])){
        
        function smtpmailer($to, $from, $name, $subj, $msg)
            {
                $mail = new PHPMailer();
                $mail->isSendmail();
                $mail->setFrom($from, $name);
                $mail->addAddress($to);
                $mail->Subject = $subj;
                $mail->msgHTML($msg);
                $mail->AltBody = 'This is a plain-text message body';
                
                //send the message, check for errors
                if (!$mail->send()) {
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'Message sent!';
                }
        }
            
            $to   = $email;
            $from = 'contact@ultrasyre.xyz';
            $name = 'UltraSYRE';
            $subj = 'Confirmation de compte | UltraStickerClub';
            $msg = 'http://localhost/Mehdi_Mouatassim/Projet_Forum/verif.php?id='.$_SESSION['id'].'&cle='.$cle;
            
            $error=smtpmailer($to,$from, $name ,$subj, $msg);
            

}
}