<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Open+Sans:wght@600&family=Prompt:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
    <title>Login-Wifi-Mesh</title>
</head>
<body>
   <form action="" class="formulario" method="post" id='formulario'>
    <div class="centrado">
        <img class="adapt-img" src="img/Logo.png" alt="icono">
    </div>
        <h1>Utilizá el mismo usuario y contraseña <br>que tenés en la Sucursal Virtual</h1>
           <!-- Grupo: correo -->
                <div class="formulario__grupo" id="grupo__correo">
				    <p class="formulario__label">Correo Electrónico</p>
				
					<input type="email" class="formulario__input" name="correo" id="correo" >
					<h3 class="formulario__input-error" id="correo1" >Por favor ingresá un correo válido.<br>
                        Por ejemplo: juan@mail.com</h3>
			    </div>
            <!-- Grupo: Contraseña -->
                <div class="formulario__grupo" id="grupo__password">
                    <p class="formulario__label">Contraseña</p>
                    <input type="password" class="formulario__input" name="password" id="password">
                </div>
                    <a class="subr" id="subr" href="https://telecentro.com.ar/login#recupero-clave" >Olvidé la contraseña</a>
                    <a class="subr-x" id="subr-x" href="https://telecentro.com.ar/login#registrarme" >Nombre de usuario o contraseña <br>incorrecta.</a>
                <div class="centraboton">
                    <button type="submit"><a class="letra"  >Ingresar</a></button>
                </div>
                    <a class="subr1" href="https://telecentro.com.ar/login#registrarme">No tengo mi usuario y contraseña</a>
                    <a class="subr2" id="subr2" href="https://telecentro.com.ar/terminos">Términos y condiciones - Política de Privacidad</a>
   </form>


<!--MODAL 1-->
    <section class="modal" id="modal1">
        <div class="modal_container">
            <div >
                <img src="img/Home.png" class="modal_img">
            </div>
            <div>
                <a  class="modal_close" onclick="closeModal1()" id="close">X</a>
                <h2 class="modal_title">Aún no tenés contratado nuestro servicio de WiFi Mesh.</h2>
                <button type="submit" class="modal_boton"><a  class="modal_boton_letras" id="modal_cambia_ref" href="https://telecentro.com.ar/terminos" >Conocer más</a></button>
            </div>
        </div>
    </section>

<!--MODAL 2-->
    <section class="modal2" id="modal2">
        <div class="modal_container2">
            <div >
                <img src="img/Home.png" class="modal_img2">
            </div>
            <div>
              
                <h2 class="modal_title2">Aún no tenés el servicio instalado, por favor espera a tenerlo en funcionamiento.</h2>
                <button type="submit" class="modal_boton2"><a class="modal_boton_letras2" id="aceptar" onclick="closeModal2()" >Aceptar</a></button>
            </div>
        </div>
    </section>

   <script src="js/formulario.js"></script>
    <?php if($this->data['badUserPass']): 
        echo "<script> openModals('" . $this->data['errordescr'] . "'); </script>";
        ?>
    <?php endif; ?>
</body>
</html>