<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <script src = "jquery-3.6.0.min.js"></script>
<link rel = "stylesheet" type = "text/css" href = "style.css">

    <script> 
    
$(document).ready(function(){
    $("#cep").blur(function () {
        $.post("buscar_cep.php", "cep="+ $("#cep").val(), function(data) {
            if (data !="" ){
              var obj = jQuery.parseJSON(data);
              $("#cidade").val(obj.localidade);
              $("#rua").val(obj.logradouro);
              $("#estado").val(obj.uf);
              $("#bairro").val(obj.bairro);

            }
        })
    });
})
</script>

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
              <h3 class="login-heading mb-4">Welcome back!</h3>

              <!-- Sign In Form -->
              <form action="inserir.php" method="post">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name ="nome">
                  <label>Nome</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email">
                  <label for="floatingInput">Email </label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" name="senha">
                  <label for="floatingPassword">Senha</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="cep">
                  <label for="floatingPassword">CEP</label>
                </div>
            
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="rua">
                  <label for="floatingPassword">Rua</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="bairro">
                  <label for="floatingPassword">Bairro</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="cidade">
                  <label for="floatingPassword">Cidade</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="estado">
                  <label for="floatingPassword">Estado</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Cadastrar</button>
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