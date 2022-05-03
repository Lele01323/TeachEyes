<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/login-style.css">
    <!-- <meta name="google-signin-client_id" content="348047829127-fi8d0ju9c2he3b81gaheu4euego3pds4.apps.googleusercontent.com"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>TeachEyes</title>
    
  </head>
  <body>
    
  <!-- Arquivo de Header include nao foi--> 
  <!-- <?php
    include('components/header.php');
  ?> -->

<div class="text-center" data-new-gr-c-s-check-loaded="14.1009.0" data-gr-ext-installed="">
    
<main class="form-signin">
  <form>
    <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Login</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="textOU">Ou</p>
    <!-- <div id="buttonDiv"></div> -->

    <div class="loginGoogle">
      <div id="g_id_onload"
         data-client_id="348047829127-fi8d0ju9c2he3b81gaheu4euego3pds4.apps.googleusercontent.com"
         data-login_uri="http://localhost:3000/index.php"
         data-auto_select="false"
         data-auto_prompt="false">
      </div>
      <div class="g_id_signin"
         data-type="standard"
         data-size="large"
         data-theme="outline"
         data-text="sign_in_with"
         data-shape="rectangular"
         data-logo_alignment="center">
      </div>
    </div>
    
    <a href="http://localhost:3000/pages/cadastro.php">Não tem conta? Clique aqui.</a>

    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</main>

  <!-- Arquivo de Footer include nao foi-->
  <!-- <?php
    include('components/footer.php');
  ?> -->

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>
    <script src="/script/loginScript.js" ></script>
  </body>
</html>
