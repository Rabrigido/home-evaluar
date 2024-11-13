<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Evaluar | Enfocar la mirada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#2b293b">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Evaluar">
    <meta name="application-name" content="Evaluar">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#2b293b">
    <meta name="description" content="Evaluacion docente" />
    <meta name="keywords" content="evaluar, evaluación, evaluaciones, evaluar, docente, docentes, profesor, profesores, colegio, colegios, curso,  cursos, evaluación docente, evaluaciones docentes, calificar, calificaciones, calificar docentes" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@eval_docentes" />
    <meta name="twitter:title" content="Evaluar" />
    <meta name="twitter:description" content="Enfocar la mirada" />
    <meta name="twitter:image" content="//www.evaluar.cl/img/global/logo.png" />
    <link href="//fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="home/css/animate.css">
    <link rel="stylesheet" href="home/css/icomoon.css">
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/css/magnific-popup.css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="home/css/style.css">
    <link href="frameworks/jquery-confirm.min.css" rel="stylesheet"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="home/js/modernizr-2.6.2.min.js"></script>
    <script src="js/docready.js"></script>
    <!--[if lt IE 9]>
<script src="home/js/respond.min.js"></script>
<![endif]-->
</head>

<?php

if (isset($_GET["p"])) {
    $page = $_GET["p"];
} else {
    $page = null;
}

?>

<body>
    <div class="fh5co-loader"></div>
    <div id="page">


    <div id="forst">

        <nav class="fh5co-nav" role="navigation">
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-right">
                            <p class="num navt">Contáctanos:<a class="navt" href="mailto:info@evaluar.cl" target="_top">info@evaluar.cl</a></p>
                            <p class="num navt">Síguenos en:<a class="navt" href="//twitter.com/eval_docentes" target="_blank">@eval_docentes&nbsp;<i class="icon-twitter"></i></a></p>
                            <p class="num navt"><a class="navt" href="//evaluar.cl/?z=home&p=notify">NOTIFICAR PAGO&nbsp;</a></p>
                        </div>
                        <div class="col-xs-1">
                            <div id="fh5co-logo">
                                <a class="navt" href="./"><img src="img/global/web.png" alt="Smiley face" height="80px"></a>
                            </div>
                        </div>
                        <div class="col-xs-11 text-right menu-1">
                            <ul id="navegacion">
                                <?php
                                $active_home="";$active_about="";$active_pricing="";$active_faq="";$active_contact="";
                                switch ($page) {
                                    case "":
                                    case false:
                                    case null:
                                        $active_home = ' class="active"';
                                        break;
                                    case "about":
                                        $active_about = ' class="active"';
                                        break;
                                    case "pricing":
                                        $active_pricing = ' class="active"';
                                        break;
                                    case "faq":
                                        $active_faq = ' class="active"';
                                        break;
                                    case "contact":
                                        $active_contact = ' class="active"';
                                        break;
                                }
                                echo '
                                <li class="navt"'.$active_home.'><a class="navt" href="./?z=home">INICIO</a></li>
                                <li class="navt"'.$active_about.'><a class="navt" href="./?z=home&p=about">QUIÉNES SOMOS</a></li>

                                <li class="navt"'.$active_faq.'><a class="navt" href="./?z=home&p=faq">FAQ</a></li>
                                <li class="navt"'.$active_contact.'><a class="navt" href="./?z=home&p=contact">CONTACTO</a></li>
                                <li class="btn-cta"><a class="navt" href="https://sistema.evaluar.cl"><span>PORTAL</span></a></li>
                                ';
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>
       
        <?php

        switch ($page) {
            case "":
            case false:
            case null:
                include ("home/pages/principal.php");
                break;
            case "about":
                include ("home/pages/about.php");
                break;
            case "pricing":
                include ("home/pages/pricing.php");
                break;
            case "faq":
                include ("home/pages/faq.php");
                break;
            case "contact":
                include ("home/pages/contact.php");
                break;
            case "partner":
                include ("home/pages/partner.php");
                break;
            case "notify":
                include ("home/pages/notify.php");
                break;
        }

        ?>

        <div id="last">
 
        <footer id="fh5co-footer" role="contentinfo">
            <div class="container">
                <div class="row">
	                
                    <div class="col-sm-3">
                        <h4 class="footer-h4">Sé parte de nuestro equipo</h4>
                        <p class="footer-p">
                            • Suscribiendo tu Colegio a nuestro Servicio;</br>
                            • Ingresando tus datos en nuestro Formulario;</br>
                            • Siendo parte de nuestros “<a href="./?z=home&p=partner">Socios de Referencia</a>”
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <h4 class="footer-h4">Sitios de Interés</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="http://www.mineduc.cl" target="_blank" class="footer-a">MINEDUC</a></li>
                            <li><a href="https://www.docentemas.cl" target="_blank" class="footer-a">Docentemás</a></li>
                            <li><a href="http://www.cpeip.cl" target="_blank" class="footer-a">CPEIP</a></li>
                            <li><a href="http://www.agenciaeducacion.cl" target="_blank" class="footer-a">Agencia de Calidad de la Educación</a></li>
                            <li><a href="https://www.docentemas.cl/docentes_documentos.php" target="_blank" class="footer-a">Documentos Descargables</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4 class="footer-h4">Nuestro Sitio</h4>
                        <ul class="fh5co-footer-links">
                            <li><a href="./?z=home" class="footer-a">Inicio</a></li>
                            <li><a href="./?z=home&p=about" class="footer-a">Quiénes Somos</a></li>
                            <li><a href="./?z=home&p=pricing" class="footer-a">Planes y Cotización</a></li>
                            <li><a href="./?z=home&p=faq" class="footer-a">Preguntas Frecuentes</a></li>
                            <li><a href="./?z=home&p=contact" class="footer-a">Contacto</a></li>
                        </ul>
                    </div>
                    <!--
                    <div class="col-sm-3">
                        <h4 class="footer-h4">Patrocinadores</h4>
                        <ul class="fh5co-footer-links">
                            <li><img src="home/images/innovo.png" width="65%"></li>
                            <li><img src="home/images/corfo.png" style=" margin-top: 5px" width="65%"></li>
                        </ul>
                    </div>
                    -->
                </div>
                </br>
                </br>
                <div class="row copyright">
                    <div class="col-md-12 text-center">
                        <p id="right">
                            <small class="block footer-small">Enfoquemos la mirada ahora en nuestros docentes.&nbsp;&nbsp;-&nbsp;&nbsp;Contáctanos a <a href="mailto:info@evaluar.cl" target="_top">info@evaluar.cl</a>&nbsp;&nbsp;-&nbsp;&nbsp;Síguenos en: <a href="//twitter.com/eval_docentes" target="_blank">Twitter&nbsp;<i class="icon-twitter"></i></a></small>
                            <br>
                            <small class="block footer-small">Evaluar.cl se reserva el derecho para modificar, en cualquier momento, los descuentos, promociones, y servicios ofrecidos en el presente sitio.<br>
							Contamos además con los derechos que impiden la reproducción parcial o total de este sitio y sus servicios.</small>
                            <br>
                            <small class="block footer-small">&copy; <script>document.write(new Date().getFullYear())</script> Evaluar.cl</small>
                            <!--
                            <small class="block footer-small">Designed by <a href="http://geopixel.cl/" target="_blank">Geopixel.cl</a></small>
                            -->
                        </p>
                        <!--
                        <p>
                            <ul class="fh5co-social-icons">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-dribbble"></i></a></li>
                            </ul>
                        </p>
						-->
                    </div>
                </div>
            </div>
        </footer>

        </div>

        
        <a href="https://outlook.office365.com/owa/calendar/Evaluarcl@evaluar.onmicrosoft.com/bookings/" target="_blank"><button class="btn btn-info btn-lg" style="position: fixed; bottom: 20px; left: 20px">Agenda reunión <i class="fa fa-hand-pointer-o" aria-hidden="true"></i></button></a>
        
        
        
        <!--Boton con chat MatIAs -->
        <!--<a href="https://t.me/EvaluarBot" target="_blank"><button class="btn btn-info btn-lg" style="position: fixed; bottom: 20px; right: 20px">Chat MatIAs &nbsp;<i class="fa fa-telegram" style="transform: scale(1.5)" aria-hidden="true"></i></button></a>-->
        
    </div>

    <!--
    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    -->

    <!-- ChatBot -->
    <script src="https://cdn.pulse.is/livechat/loader.js" data-live-chat-id="66468014b9a8b211400ce4e4" async></script>
    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="home/js/jquery.easing.1.3.js"></script>
    <!-- jQuery-ui -->
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="home/js/jquery.waypoints.min.js"></script>
    <!-- Stellar Parallax -->
    <script src="home/js/jquery.stellar.min.js"></script>
    <!-- Carousel -->
    <script src="home/js/owl.carousel.min.js"></script>
    <!-- countTo -->
    <script src="home/js/jquery.countTo.js"></script>
    <!-- Magnific Popup -->
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/magnific-popup-options.js"></script>
    <script src="frameworks/jquery-confirm.min.js"></script>
    <!-- Main -->
    <script src="home/js/main.js"></script>
    <script src="home/js/scripts.js"></script>
    <script src="js/jquery.redirect.js"></script>
    <script src=" //code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
    <script type="text/javascript" src="js/validation.min.js"></script>
    <script type="text/javascript" src="js/validator.min.js"></script>
    
    

    <script type="text/javascript">
        script = document.createElement('script')
        script.src = 'https://static.sppopups.com/assets/loader.js';
        script.async = true;
        script.setAttribute("data-chats-widget-id",'abdc9942-653e-489c-8b04-dd0eec248a92');
        document.head.appendChild(script);
    </script>

    
</body>

</html>