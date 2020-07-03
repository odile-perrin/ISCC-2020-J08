<!DOCTYPE html>
<html>
<?php include ("header.php");?>


<body>
<?php
    if($_GET['page'] == 'accueil'){
   include ("vitrine-accueil.php");
}

    elseif($_GET['page'] == 'programme'){
    include ("vitrine-programme.php");
}

    elseif ($_GET['page'] == 'contact'){
    include ("vitrine-contacts.php");
}

    elseif ($_GET['page'] == 'contact-form'){
    include ("contact-form.php");
}

    else{
        include ("404.php");
}

?>
<?php include ("footer.php");?>
</body>

</html>