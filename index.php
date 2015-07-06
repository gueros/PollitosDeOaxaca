<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>
    <meta name="author" content="Incuoax">
    <meta name="description" content="Incuoax es una empresa 100% Oaxaqueña con más de 30 años de experiencia en el mercado, 
    dedicada a la producción de pollitos y pollitas de doble propósito (postura y engorda), 
    se caracteriza a nivel sureste del territorio mexicano por la gran calidad de sus productos y servicios.">
    <meta name="keywords" content="pollitos de oaxaca, rancho doña gracia, grupo trujillo, pollitos, pollitas, pollitas ponedoras, pollitas de postura, pollo gourmet, 
    incubadora en oaxaca, gallinas, incuoax, gallinas en oaxaca, redbro oaxaca, pollitos de doble proposito, pollitas de doble proposito, 
    pollitos, pollitas, incubadora, oaxaca">
	<title>Incuoax pollitos de oaxaca</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <section id="home">
                    <div class="col-sm-offset-3 col-sm-6">
                        <img class="logo" src="img/home/logo.png">
                    </div>
                </section>
                <section id="datocurioso">
                    <div class="col-sm-12">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="textoCurioso">
                                <p>Tenemos existencias para poder satisfacer el gusto y necesidades
                                    de nuestros clientes.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="nosotros">
                    <div class="col-sm-12">
                        <div class="trianguloArriba"></div>
                        <div class="trianguloAbajo"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <img class="logo-nosotros" src="img/nosotros/logo.png">
                        </div>
                        <div class="col-sm-9">
                            <div class="texto-nosotros">
                                <h3>Quienes Somos</h3>
                                <p>Somos una empresa 100% Oaxaqueña con más de 30 años
                                 de experiencia en el mercado, dedicada a la producción de 
                                 pollitos y pollitas de doble propósito (postura y engorda), nos 
                                 caracterizamos a nivel sureste del territorio mexicano por 
                                 la gran calidad de nuestros productos y servicios.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="mision">
                    <div class="col-sm-12" style="height:100%;">
                        <div class="col-sm-12 mision-info-container">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="texto-mision">

                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="mision-botones-container">
                                        <p class="mision center movil">Misi&oacute;n</p>
                                        <p class="vision center movil">Visi&oacute;n</p>
                                        <p class="filosofia center movil">Filosof&iacute;a</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="contacto">
                    <div class="col-sm-12">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="cuadroContacto">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <h3>&iquest;Tienes alguna duda?</h3>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="inputContacto form-control" id="nombre" name="nombre" placeholder="Nombre">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="inputContacto form-control" id="mail" name="mail" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <textarea class="inputContacto form-control" rows="3" id="mensaje" name="mensaje" placeholder="Mensaje"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <a class="btn enviarBtn inputContacto" id="mandarMensaje">Enviar</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript">
    var datocuriosoAnimado = false;
    var nosotrosAnimado = false;
    var contactoAnimado = false;
    function movil(){
        if(/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase())) return true;
        return false;
    }

    function animarNosotros(){
        if(nosotrosAnimado) return;
        $(".trianguloArriba").addClass("trianguloArriba-abierto");
        $(".trianguloAbajo").addClass("trianguloAbajo-abierto");
        $(".texto-nosotros h3").addClass("texto-nosotros-titulo");
        $(".texto-nosotros p").addClass("texto-nosotros-cuerpo");
        $(".logo-nosotros").addClass("logo-nosotros-show");
        nosotrosAnimado = true;
    }

    function animarContacto(){
        if(contactoAnimado) return;
        $(".cuadroContacto").addClass("cuadroContacto-listo");
        contactoAnimado = true;
    }

    function animarDatoCurioso(){
        if(datocuriosoAnimado) return;
        $(".textoCurioso").addClass("textoCurioso-listo");
        datocuriosoAnimado = true;
    }

    function waypointsLoad(){
        var sections = $("section"); //obtenemos las secciones
        sections.waypoint({
            handler: function (event, direction) { //verificamos que seccion esta seleccionada y si va hacia arriba o hacia abajo para decidir cual debe de ser el seleccionado
                var active_section = $(this);
                if(active_section.attr("id") == "datocurioso"){
                    animarDatoCurioso();
                }

                if(active_section.attr("id") == "nosotros"){
                    animarNosotros();
                }

                if(active_section.attr("id") == "contacto"){
                    animarContacto();
                }
            },
            offset: '5%'
        });
    }

    $(document).ready(function(){
        if(movil()){
            $("#home").css('background-attachment','local');
            $("#datocurioso").css('background-attachment','local');
            $("#nosotros").css('background-attachment','local');
            $("#contacto").css('background-attachment','local');
        }
        waypointsLoad();
    });
</script>