<?php
$hidden = 'hidden';

if (isset($_SESSION['role'])) {
   $hidden = '';
}

?>


<nav>
         <label class="logo">IOC</label>
         <ul  <?= $hidden ?> >
            <li><a class="active" href="?page=admin" >Accueil</a></li>
    
            <li><a href="?page=showuser" >Utilisateurs</a></li>

            <li><a href="index.php?deconnect" class="btn">Se deconnecter</a></li>
         </ul>
         
      </nav>