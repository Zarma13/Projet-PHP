{extends file = '../layout.tpl'}
{block name=main_content}

<form class="form-inline" action="index.php?page=connexion" method="post">
  <div class="form-group">
    <label class="sr-only" for="login">Login</label>
    <input type="text" class="form-control" name="login" id="login" placeholder="Login">
  </div>
  <div class="form-group">
    <label class="sr-only" for="mdp">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de Passe">
  </div>
  <button type="submit" name="valid" id="valid" class="btn btn-default">Connexion</button>
</form>

{/block}