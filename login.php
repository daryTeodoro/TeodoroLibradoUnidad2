<?php
    session_start();

    if (!empty($_SESSION['Usuario'])) {
        echo "<script>
            window.location.href = 'musica.php';
        </script>";
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/spacesongLogo.png" alt="favicon">
    <title>SpaceSongs</title>
    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--SweetAlert-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style type="text/css">
        #ARegistro{
            display: none;
        }#ALogin{
            display: none;
        }
    </style>
</head>
<body class="FuenteParrafos FondoObscuro" style="margin: 0px;color: #ffffff;">
<?php include('navbar.php'); ?>
<div class="ContenedorFull">

    <div align="center">
        <div class="FuentePrincipal" style="font-size: 2.6rem;"><b class="space">Space</b><b class="songs">Songs</b></div>

        <!--Fomulario de Inicio de Sesion-->
        <form method="post" action="" class="loginForm L-C" id="loginForm">
            <div class="FuenteSecundaria" style="font-size: 2rem; margin: 10px 0px;"><b>Iniciar Sesión</b></div>
            <!--Campos del formulario-->
            <input type="e-mail" name="L-Correo" id="L-Correo" class="CampoFormulario" style="margin-bottom: 10px;" placeholder="Ingresa tu Correo" autocomplete="off">
            
            <input type="password" name="L-Contrasena" id="L-Contrasena" class="CampoFormulario" style="margin-bottom: 20px;" placeholder="Ingresa tu Contraseña">
            <!--Boton para Ejecutar-->
            <div>
                <button type="sumbit" class="boton" id="IniciarSesion">Iniciar Sesion</button>
            </div><br>
            <!--Opcion para cambiar a formulario de Login-->
            <div class="change-view FuenteParrafos">
                ¿Aun no tienes una cuenta? <b class="change_L-C">Crear una Cuenta</b><br>
            </div>
        </form>

        

        <!--Fomulario de Registro-->
        <form method="post" action="" class="registroForm L-C" id="registroForm">
            <div class="FuenteSecundaria" style="font-size: 2rem; margin: 10px 0px;"><b>Crear Cuenta</b></div>
            <!--Campos del formulario-->
            <input type="text" name="C-Nombre" id="C-Nombre" class="CampoFormulario" style="margin-bottom: 10px;" placeholder="Ingresa tu Nombre" autocomplete="off">
            
            <input type="e-mail" name="C-Correo" id="C-Correo" class="CampoFormulario" style="margin-bottom: 10px;" placeholder="Ingresa tu Correo" autocomplete="off">
            
            <input type="password" name="C-Contrasena" id="C-Contrasena" class="CampoFormulario" style="margin-bottom: 20px;" placeholder="Ingresa tu Contraseña">
            <!--Boton para Ejecutar-->
            <div>
                <button type="sumbit" class="boton" id="Crear">Crear Cuenta</button>
            </div><br>
            <!--Opcion para cambiar a formulario de Login-->
            <div class="change-view FuenteParrafos">
                ¿Ya tienes una cuenta? <b class="change_L-C">Iniciar Sesión</b>
            </div>
        </form>

    </div>

</div>

<script src="js/alertas.js"></script>

<script type="text/javascript">
    /*Cambiar Formulario de Login a Registro y vicebersa*/
    $('.change-view .change_L-C').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });

    $(document).ready(function() {
        $('#loginForm').submit(function(e) {
            e.preventDefault(); // Prevenir el envío del formulario por defecto

            var Correo = $('#L-Correo').val();
            var Contrasena = $('#L-Contrasena').val();

            // Realizar la petición AJAX
            $.ajax({
                type: 'POST',
                url: 'loguear.php', // Archivo PHP para procesar los datos en el servidor
                data: { Psw: Contrasena, Correo: Correo }, // Se envia el dato
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    if (response == 1) {
                        window.location.href = "musica.php";
                    } else if (response == 2) {
                        mensajeError("Acceso Denegado", "El correo/contraseña es incorrecto");
                    } else {
                        mensajeError("Error en el Proceso", "Intente nuevamente");
                    }
                }
            });
        });

        $('#registroForm').submit(function(e) {
            e.preventDefault(); // Prevenir el envío del formulario por defecto

            var Nombre = $('#C-Nombre').val();
            var Correo = $('#C-Correo').val();
            var Contrasena = $('#C-Contrasena').val();

            // Realizar la petición AJAX
            $.ajax({
                type: 'POST',
                url: 'registrar.php', // Archivo PHP para procesar los datos en el servidor
                data: { Correo: Correo, Psw: Contrasena, Nombre: Nombre }, // Se envia el dato
                success: function(response) {
                    // Manejar la respuesta del servidor aquí
                    if (response == 1) {
                        window.location.href = "musica.php";
                    } else if (response == 2) {
                        campoInvalido("Correo Invalido", "El correo ya esta registrado");
                    } else {
                        mensajeError("Error en el Proceso", "Intente nuevamente");
                    }
                }
            });
        });

       
    });
</script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var hash = window.location.hash;
        if (hash === '#Registrar') {
            // Mostrar el formulario de registroForm
            $('#registroForm').show();
            $('#loginForm').hide();
        }
    });
</script>

<script type="text/javascript">
//Validacion de campos del formulaio del Login
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $("#IniciarSesion").click(function() {
        if ($("#L-Correo").val() == "") {
            campoInvalido('Campo Vacio','El correo esta vacio');
            return false;
        }else{
            if (!emailreg.test($("#L-Correo").val())) {
                campoInvalido('Campo Invalido','El formato del correo es invalido')
                return false;
            }
        } 

        if ($("#L-Contrasena").val() == "") {
            campoInvalido('Campo Vacio','La contraseña esta vacia')
            return false; 
        }
    });
});

//Validacion de campos del formulaio del Registro
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;

    $("#Crear").click(function() {
        if ($("#C-Nombre").val() == "") {
            campoInvalido('Campo Vacio','El nombre esta vacio')
            return false; 
        }

        if ($("#C-Correo").val() == "") {
            campoInvalido('Campo Vacio','El correo esta vacio');
            return false;
        }else{
            if (!emailreg.test($("#C-Correo").val())) {
                campoInvalido('Campo Invalido','El formato del correo es invalido')
                return false;
            }
        } 

        if ($("#C-Contrasena").val() == "") {
            campoInvalido('Campo Vacio','La contraseña esta vacia')
            return false; 
        }
    });
});
</script>


    <!--Libreria de Iconos-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>