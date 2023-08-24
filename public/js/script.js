$(".info-item .btn").click(function () {
  $(".container").toggleClass("log-in");
});

function comprobarClave() {

  if ($_POST) {
    $pass = $_POST['contrasena1_signin'];
    $pass2 = $_POST['contrasena2_signin'];
    if ($pass == $pass2) {
      echo ("Registro exitoso");
    }

  }

}
