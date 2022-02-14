<?php
session_start ();
require 'controller/fonction.php';

    if (isset($_GET['deconnect'])) {
        session_unset();
        session_destroy();
      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    <title>Document</title>
</head>
<body>
<?php
    
    
    require_once './views/include/topbar.php'

   
?>
    


<div class="">
    <?php
    

        $page = isset($_GET["page"]) ? $_GET["page"] : "login";
        $page .=".html.php";
        require_once "views/".$page; 

    ?>
</div>
</body>
</html>


