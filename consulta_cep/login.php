<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src = "jquery-3.6.0.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Bem vindo de volta!</h3>

              <!-- Sign In Form -->
              <form action="validar.php" method="post">
                
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email">
                  <label for="floatingInput">Email </label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="senha">
                  <label for="floatingPassword">Senha</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">
                    Entrar</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>