
  <div class="container">
    <div class="title">Ouverture de compte</div>
    <div class="content">
    <p style="color: red; font-weight: bold; font-size: 20px; text-align: center;"><?= (isset($_SESSION['error'])) ? $_SESSION['error'] : ''  ?></p>

      <form action="controller/security.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nom  Complet</span>
            <input type="text" placeholder="Entrez votre nom" name="nom">
          </div>
          <div class="input-box">
            <span class="details">Login</span>
            <input type="text" placeholder="Entrer votre email" name="login">
          </div>
          
          <div class="input-box">
            <span class="details">Mot de passe</span>
            <input type="text" placeholder="Entrer votre mot de passe" name="mdp">
          </div>
          <div class="input-box">
            <span class="details">Confirmer mot de passe</span>
            <input type="text" placeholder="Confirmez votre mot de passe" name="mdpC">
          </div>
        </div>
        <div class="gender-details">
            <select name="role" >
               <option selected disabled>Role</option>
               <option value="admin">Admin</option>
               <option value="visit">Visiteur</option>
            </select>
        </div>
        <div class="button">
        <input type="submit" value="Valider" name="validate"><br><br>
        <p style="color: red;  text-align: center;"><a href="index.php" >Se connecter</a></p>

        </div>
      </form>
    </div>
  </div>
