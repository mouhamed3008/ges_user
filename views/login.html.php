<div class="center">
         <div class="header">
            Login Form
         </div>
         <form method="post" action="controller/security.php">
            <p  style="color: red;"><?= (isset($_SESSION['errorLog'])) ? $_SESSION['errorLog'] : ''  ?></p><br>
            <input type="text" placeholder="email@ioc.com" name="mail">
            <i class="far fa-envelope"></i>
            <input id="pswrd" type="password" placeholder="Mot de passe" name="mdp">
            <i class="fas fa-lock" onclick="show()"></i>
            <input type="submit" value="Se connecter" name="connect">
            <a href="?page=register">Ouvrir un compte</a>
         </form>
      </div>
      <script>
         function show(){
          var pswrd = document.getElementById('pswrd');
          var icon = document.querySelector('.fas');
          if (pswrd.type === "password") {
           pswrd.type = "text";
           pswrd.style.marginTop = "20px";
           icon.style.color = "#7f2092";
          }else{
           pswrd.type = "password";
           icon.style.color = "grey";
          }
         }
      </script>