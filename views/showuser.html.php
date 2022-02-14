
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {

  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#6d1c7d;
  color: white;
}
</style>

<?php
require_once 'controller/fonction.php';
$_SESSION["users"]= getUsers("controller/data_user");


if (isset(($_SESSION["role"])) && $_SESSION["role"] == "admin") {
     ?>
        
<div class="container">
<h1>Liste des Utilisateurs</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Nom Complet</th>
    <th>Role</th>
  </tr>
  <?php
  $i = 1;
    foreach ($_SESSION['users'] as $user) { ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= ucwords($user['name']) ?></td>
            <td><?= ucfirst($user['role'])  ?></td>
        </tr>
   <?php }
  ?>

</table>
</div>
   <?php }else{ ?>
        <p class="container" style="color: red; font-weight: bold; font-size: 20px;">Acces Refuser</p>
    <?php }

?>



