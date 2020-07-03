<!DOCTYPE html>
<html>
<header>
    <title>SCC Accueil</title>
    
    <?php include ("navigation.php");?>

    <div id="blocimage"> 
        <h1>Summer Code Camp</h1>
    </div>      

    <link rel="stylesheet" href="navigation.css">
<?php $page = $_SERVER['PHP_SELF']; ?>


<nav class="menu">
<ul>
    <li class="<?php if($page=='accueil'){echo 'active';}?>"><A HREF="vitrine-accueil.php">ACCUEIL</A> 
    <li class="<?php if($page=='programme'){echo 'active';}?>"><A HREF="vitrine-programme.php">PROGRAMME</A> 
    <li class="<?php if($page=='contact'){echo 'active';}?>"><A HREF="vitrine-contacts.php">CONTACT</A> 
</ul>
</nav>

</header>

<body>
    <footer>
    <a href="https://www.epitech.eu/digital/">
        <img class="logo" src="assetD04/logo_epitech.png" alt="Logo epitech"></a>

    </footer>
</body>

</html>