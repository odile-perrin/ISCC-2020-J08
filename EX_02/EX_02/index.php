<!DOCTYPE html>
<html>
<header>
    <title>SCC Accueil</title>
    <div id="blocimage"> 
        <h1>Summer Code Camp</h1>
    </div>      

<?php $page = $_SERVER['PHP_SELF']; ?>


<nav class="menu">
<ul>
    <li class="<?php if($page=='accueil'){echo 'active';}?>"><A HREF="http://localhost/ISCC/J08/EX_02/EX_02/vitrine-accueil.php">ACCUEIL</A> 
    <li class="<?php if($page=='programme'){echo 'active';}?>"><A HREF="http://localhost/ISCC/J08/EX_02/EX_02/vitrine-programme.php">CONTACT</A> 
    <li class="<?php if($page=='contact'){echo 'active';}?>"><A HREF="http://localhost/ISCC/J08/EX_02/EX_02/vitrine-contacts.php">CONTACT</A> 
</ul>
</nav>

</header>

<body>
<?php
    if($_GET['page'] == ACCUEIL){
   echo '<A HREF="vitrine-accueil.php">ACCUEIL</A>';

}
    elseif($_GET['page'] == PROGRAMME){
    echo '<A HREF="vitrine-programme.php">PROGRAMME</A>';
}
    elseif ($_GET['page'] == CONTACT){
    echo '<A HREF="vitrine-contacts.php">CONTACT</A>';
}
?>
    <footer>
    <a href="https://www.epitech.eu/digital/">
        <img class="logo" src="assetD04/logo_epitech.png" alt="Logo epitech"></a>

    </footer>
</body>

</html>