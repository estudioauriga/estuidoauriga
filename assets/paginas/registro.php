<!DOCTYPE html>
<html>
    <head>
        <title>auriga | contacta</title>
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" href="./../css/styles_generales.css">
        <link rel="stylesheet" href="./../css/styles_contacta.css"> 
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="./../favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./../favicon/favicon-16x16.png">
    </head>
    <body>
        <section class="nav-bar-fn">
            <div class="movil-fn">
                <div class="visible">
                    <a href="./../../index.html">
                        <img id="iso" src="./../imagenes/logos/auriga_isotipo.png" alt="isotipo">
                    </a>
                    <h2 id="h2-fn">contacta</h2>
                    <img id="ham" src="./../imagenes/iconos/menu-hamburguesa-fn.png" alt="hamb-fb">
                </div>
                <div class="oculto">
                    <div class="links-fn-movil">
                        <a href="./sobre_auriga.html">sobre auriga</a>
                        <a href="./proyectos-tipos.html">proyectos</a>
                        <a id="active-fn" href="#">contacta</a>
                    </div>
                </div>
            </div>

            <div class="desktop-fn">
                <div class="logo">
                    <a href="./../../index.html">
                    <img src="./../imagenes/logos/auriga_logotipo.png" alt="logotipo">
                    </a>
                </div>
                <div class="links-fn-desktop">
                    <a href="./sobre_auriga.html">sobre auriga</a>
                    <a href="./proyectos-tipos.html">proyectos</a>
                    <a id="active-fn" href="#">contacta</a>
                </div>  
            </div>
        </section >

        <section id="registrado">
            
        <?php
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $motivo = $_POST["motivo"];

        //conectamos a la base de datos
        $conexion_base_datos = mysqli_connect("localhost", "root", null, "mi_club");
        //comprobamo que la conexión es correcta
        if(mysqli_connect_errno()){
            echo "Ha habido un error al conectar a la base de datos";
            exit();
        }

        //cuando hemos acabado de comprobar registramos los datos en la base de datos
        $query="insert into socios (nombre, empresa,  telefono, mail,  motivo) values ('$nombre', '$apellidos',  '$telefono', '$email', '$motivo')";
        $insertar_usuario = mysqli_query($conexion_base_datos, $query);


        $query = "select * from socios where nombre='".$nombre."'";
        $resultado_inscripcion = mysqli_query($conexion_base_datos, $query);
        
        if (mysqli_num_rows ($resultado_inscripcion)>0){
            echo "Muchas gracias ".$nombre. ", hemos recibido su solucitud de información con éxito";
        }
        

        ?>
        
        </section>
        
        <section>
            <div class="contacto-directo">
                <p>
                    También puede contactarnos directamente a través de:
                </p>
                <div class="redes">
                    <div class="redes-1">
                        <div class="whatsapp">
                            <img id="whatsapp" src="./../imagenes/iconos/whatsapp.png" alt="whastapp">
                            <span id="numero">+34 658 23 24</span>
                        </div>
                        <div class="mail">
                            <a class="mail-contacto" href="mailto:estudioauriga@gmail.com?interesado=Aquí%20el%20asunto%20del%20mail">
                            <img id="mail" src="./../imagenes/iconos/mail.png" alt="mail">
                            </a>
                            <span id="correo">estudioauriga@gmail.com</span>
                        </div>   
                    </div>
                    
                    <div class="redes-2">
                        <div class="instagram">
                            <img id="instagram" src="./../imagenes/iconos/instagram.png" alt="instagram">
                            <span id="insta">@auriga_design</span>
                        </div>
                        <div class="facebook">
                            <img id="facebook" src="./../imagenes/iconos/facebook.png" alt="facebook">
                            <span id="face">estudio auriga</span>
                        </div>  
                    </div>
                    
                </div>
            </div>
                       
        </section>

        <script src="./../jquery/jquery.js"></script>
        <script src="./../jquery/index.js"></script>
        
    </body>
</html>


