$(".info-item .btn").click(function () {
  $(".container").toggleClass("log-in");
});

function comprobarClave() {
  pass1 = URL('<?php echo base_url?>../Views/Login/login.php').getElementById('contrasena1_signin').value
  alert(pass1);
  pass2 = URL('<?php echo base_url?>../Views/Login/login.php').getElementById('contrasena2_signin').value

  if (pass1 == pass2) {
    alert("Registro exitoso...\nReadireccionando a la pagina principal...")
  } else {
    alert("las contraseñas no coinciden...")
  }
}
