<?php
    $name=$_POST['nom et prénom'];
    $mail=$_POST['mail'];
    $amelioration=$_POST['amelioration'];

    if(empty($name); empty($mail); empty ($amelioration)){
        echo '<p>Aucune donnée reçue.</p>';
    }

    else{
        echo '<p>Nom et prénom : '.$name.'</p>';
        echo '<p>Email : ' .$mail.'</p>';
        echo '<p>Message : ' .$amelioration.'</p>';
    }
?>