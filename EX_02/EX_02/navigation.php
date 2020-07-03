<link rel="stylesheet" href="navigation.css">
<?php $page = $_SERVER['PHP_SELF']; ?>


<nav class="menu">
<ul>
    <li class="<?php if($page=='accueil'){echo 'active';}?>"><A HREF="http://localhost/ISCC/J08/EX_02/EX_02/index.php?page=accueil">ACCUEIL</A> 
    <li class="<?php if($page=='programme'){echo 'active';}?>"><A HREF="http://localhost/ISCC/J08/EX_02/EX_02/index.php?page=programme">PROGRAMME</A> 
    <li class="<?php if($page=='contact'){echo 'active';}?>"><A HREF="http://localhost/ISCC/J08/EX_02/EX_02/index.php?page=contact">CONTACT</A>
</ul>
</nav>
