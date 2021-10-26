<?php


include 'connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $p=$_POST['pass'];
    $g=$_POST['gen'];
    if($_FILES['f1']['name']){
    move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
    $img="image/".$_FILES['f1']['name'];
    }
    $i="insert into reg(name,username,password,image,gender)value('$t','$u','$p','$img','$g')";
    mysqli_query($con, $i);
}
?>

<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link
      rel="icon"
      type="image/png"
      href="LoginAssets/images/icons/favicon.ico"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/vendor/bootstrap/css/bootstrap.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/vendor/animate/animate.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/vendor/css-hamburgers/hamburgers.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/vendor/animsition/css/animsition.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/vendor/select2/select2.min.css"
    />
    <!--===============================================================================================-->
    <link
      rel="stylesheet"
      type="text/css"
      href="LoginAssets/vendor/daterangepicker/daterangepicker.css"
    />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="LoginAssets/css/util.css" />
    <link rel="stylesheet" type="text/css" href="LoginAssets/css/main.css" />
    <!--===============================================================================================-->
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('LoginTp/images/bg-01.jpg'); background-repeat: round;" >
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
          <form class="login100-form validate-form" method="POST" enctype="multipart/form-data">
            <span class="login100-form-title p-b-33"> RocketHome </span>

            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input
                class="input100"
                type="text"
                name="text"
                placeholder="Usuário"
              />
              <span class="focus-input100-1"></span>
              <span class="focus-input100-2"></span>
            </div>

            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input
                class="input100"
                type="text"
                name="user"
                placeholder="Email"
              />
              <span class="focus-input100-1"></span>
              <span class="focus-input100-2"></span>
            </div>

            <div
              class="wrap-input100 rs1 validate-input"
              data-validate="Password is required"
            >
              <input
                class="input100"
                type="password"
                name="pass"
                placeholder="Senha"
              />
              <span class="focus-input100-1"></span>
              <span class="focus-input100-2"></span>
            </div>

           
              
            <div
              class="wrap-input100 rs1 validate-input"
              data-validate="Password is required"
            >
              <input
                class="input100"
                type="text"
                name="gen"
                placeholder="Gênero"
              />
              <span class="focus-input100-1"></span>
              <span class="focus-input100-2"></span>
            </div>

            <div><br>
            <h6>Foto de Perfil<h6>
            <input class=" input100btn btn btn-outline-secondary btn-sm" type="file" name="f1"/>
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
            <div>

            <div class="container-login100-form-btn m-t-20">
              <button class="login100-form-btn" type="submit" name="sub" value="submit">Registrar</button>
            </div>
            <div class="text-center p-t-45 p-b-4">
              
            </div>

            <div class="text-center">
              <span class="txt1"> Já tem conta? </span>

              <a href="login.php" class="txt2 hov1"> Logar </a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!--===============================================================================================-->
    <script src="LoginAssets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="LoginAssets/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="LoginAssets/vendor/bootstrap/js/popper.js"></script>
    <script src="LoginAssets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="LoginAssets/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="LoginAssets/vendor/daterangepicker/moment.min.js"></script>
    <script src="LoginAssets/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="LoginAssets/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="LoginAssets/js/main.js"></script>
  </body>
</html>


