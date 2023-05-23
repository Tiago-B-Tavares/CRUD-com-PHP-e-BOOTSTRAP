<html>
    <head>
    <meta charset='utf-8'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <title>Tela de Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' meida='screen' href='../css/estilo.css'/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src='../js/bootstrap.bundle.js'></script>
    </head>
    <body><div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Login</h5>
            <form method="post" action="login.php">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Digite seu nome">
                <label for="tNome">Nome usuário</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="txtSenha" name="txtSenha" placeholder="Digite sua senha">
                <label for="tSenha">Senha do Usuário</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="relembrarSenha">
                <label class="form-check-label" for="relembrarSenha">
                  Lembrar minha senha
                </label>
              </div>
              <div class="d-grid">
                <input class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" value="Entrar"/>
              </div>
              <div class="d-grid py-2">
                <input class="btn btn-secondary btn-login text-uppercase fw-bold" type="reset" value="Limpar"/>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Login com a conta Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Login com o Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    </body>
</html>
<?php
?>
