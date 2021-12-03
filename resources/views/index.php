<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agile Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"  crossorigin="anonymous"/>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
 
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
            .h-custom {
            height: calc(100% - 73px);
            }
            @media (max-width: 450px) {
            .h-custom {
                height: 100%;
            }
            }
        
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script>
            function alerta(){
                alert("Icono agregado para darle mayor atractivo al sitio");
            }

            function mover(){
                window.location.assign("home.php");
            }

            function redireccion(link){
                
                if (link = "f"){
                    window.location.assign("https://www.facebook.com/Agilesoft-102711768519204");
                }

                if (link = "t"){
                    alert("No lo encontré");
                }

                if (link = "l"){
                    window.location.assign("https://www.linkedin.com/company/agilesoft-spa/?originalSubdomain=cl");
                }
                
            }

            function Ingresar(){

              var username = document.getElementById("txtusuario").value;
              var password = document.getElementById("txtpass").value;

              if (username == 0){
                alert("Ingrese Nombre de usuario");
                return false;
              }

              if (password == 0){
                alert("Su Contraseña se encuentra vacía");
                return false;
              }

              var username = username;
              var password = password;

              $.ajax({
                url: 'http://161.35.140.236:9005/api/auth/login',
                
                type: 'POST',
                dataType: 'JSON',
                data: {username: username, password: password}
              })
              .done(function(Json) {
                  localStorage.setItem('token', Json.data.payload.token);
                  localStorage.setItem('refresh_token', Json.data.payload.refresh_token);

                  var email = (Json.data.user.email);
                  var firstName = (Json.data.user.firstName);
                  var lastName = (Json.data.user.lastName);

                  location.href="home.php?email="+email+"&firstName="+firstName+"&lastName="+lastName+"";
                  
                  
              })
              .fail(function(e) {
                  if(e.responseJSON.statusCode != 201){
                      alert(e.responseJSON.message);
                      localStorage.clear();
                  }
              })
            }

        </script>
    </head>
    <body>
    <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="../img/agilesoft.png" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Nosotros:</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f" onclick="redireccion('f');"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter" onclick="redireccion('t');"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in" onclick="redireccion('l');"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="txtusuario" name="txtusuario" class="form-control form-control-lg"
              placeholder="Ingrese su usuario" />
            <label class="form-label" for="form3Example3">Ingrese Usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="txtpass" name="txtpass" class="form-control form-control-lg"
              placeholder="Ingrese su contraseña" />
            <label class="form-label" for="form3Example4">Contraseña</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <a href="#!" class="text-body" onclick="alerta();">Olvido su contraseña?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <input type="button" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Ingreso" onclick="Ingresar();">
            <p class="small fw-bold mt-2 pt-1 mb-0">No tiene una cuenta? <a href="#!"
                class="link-danger" onclick="mover();">Registro</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2021. Formulario sacado de internet por Jeremy Hidalgo.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f" onclick="redireccion('f');"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter" onclick="redireccion('t');"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in" onclick="redireccion('l');"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
</section>




    </body>
</html>
