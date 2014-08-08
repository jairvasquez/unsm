<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title>UNSM - Tarapoto</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/favicon.ico" type="image/x-icon" />
        
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/modern.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/modern-responsive.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css" />
        <script src="<?php echo base_url()?>assets/js/jquery-1.9.0.min.js"></script>
    </head>
    <body class="metrouicss">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class="page header-banner padding10">
            <div class="block" id="bannertop">
                <img src="<?php echo base_url() ?>assets/img/banner.jpg" class="img-page" alt="" />
            </div>
            <div class="block" id="menutop">
                <div class="nav-bar">
                    <div class="nav-bar-inner bg-color-greenDark">
                        <span class="pull-menu"></span>
                        <ul class="menu menuizq" style="float: right">
                            <li><a href="<?php echo base_url() ?>directorio">Directorio</a></li>
                            <li><a href="javascript:void(0)" id="keepDialog">Contactenos</a></li>
                            <li><a href="<?php echo base_url() ?>web/mapasitio">Mapa del Sitio</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-h bg-color-greenDark"></div>
        <div class="page secundary">
            <div class="nav-bar bg-color-greenDark">
                <div class="nav-bar-inner">
                    <span class="pull-menu"></span>
                    <a href="<?php echo base_url() ?>">
                        <span class="element brand">
                            &nbsp;&nbsp;Inicio
                        </span>
                    </a>
                    <div class="divider"></div>
                    <ul class="menu">
                        <li data-role="dropdown">
                            <a href="javascript:void(0)">Información Institucional</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/">Historia</a></li>
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/mision_vision">Misión y Visión</a></li>
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/objetivos">Objetivos</a></li>
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/himno">Himno</a></li>
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/autoridades_unsm">Autoridades</a></li>
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/gestion">Gestión de Gobierno</a></li>
                                <li><a href="<?php echo base_url() ?>informacion_institucional/index/organigrama">Organigrama</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url() ?>web/servicios">Servicios</a></li>
                        <li data-role="dropdown">
                            <a href="javascript:void(0)">Facultades</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url() ?>facultades/index/agronomia/ciencias_agrarias">Ciencias Agrarias</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/enfermeria/ciencias_salud">Ciencias de la Salud</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/ing_agroindustrial/ingenieria_agroindustrial">Ingeniería Agroindustrial</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/arquitectura/ingenieria_civil_arquitectura">Ingeniería Civil y Arquitectura</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/ing_sistemas/ingenieria_sistemas">Ingeniería de Sistemas</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/ing_ambiental/ecologia">Ecología</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/derecho/derecho_ciencias_politicas">Derecho y Ciencias Políticas</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/medicina/medicina_humana">Medicina Humana</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/economia/ciencias_economicas">Ciencias Económicas</a></li>
                                <li><a href="<?php echo base_url() ?>facultades/index/idiomas/educacion_humanidades">Educación y Humanidades</a></li>
                            </ul>
                        </li>
                        <li><a href="http://unsm.edu.pe/transparencia/index.php" target="_blank">Transparencia</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page" id="cuerpo_web" style="padding: 2% 1.5%">
        <?php  include_once $contenido; ?>
        </div>
        <div id="footer" class="page bg-color-greenDark">
            <div class="grid no-margin">
                <div class="row">
                    <div class="span1"></div>
                    <div class="span2 padding10">
                        <img src="<?php echo base_url() ?>assets/img/logounsm.png" alt="Logo UNSM" />
                    </div>
                    <div class="span6 padding10">
                        Universidad Nacional de San Martín<br/>
                        Jr. Maynas N° 177<br/>
                        Telf.: (51-42) 52-4253<br/>
                        Correo: informes@unsm.edu.pe<br/>
                        Tarapoto - Perú
                    </div>
                    <div class="span3">
                        <div class="padding20">
                            <a href="https://www.facebook.com/UNSM.Portal.Oficial" target="_blank">
                                <img src="<?php echo base_url() ?>assets/img/facebook.png" class="padding5 imgfooter" alt="" />
                            </a>
                            <a href="https://twitter.com/#!/UNSMT" target="_blank">
                                <img src="<?php echo base_url() ?>assets/img/twitter.png" class="padding5 imgfooter" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <script src="<?php echo base_url()?>assets/js/dropdown.js"></script>
        <script src="<?php echo base_url()?>assets/js/tile-slider.js"></script>
        <script src="<?php echo base_url()?>assets/js/dialog.js"></script>
        <script>
            $(document).ready(function(){
                document.onkeydown = function(evt) {
                    evt = evt || window.event;
                    if (evt.keyCode == 27) {
                        $.Dialog.close();
                    }
                };
                $('#keepDialog').click(function(e) {
                    $.Dialog({
                        'title'      : 'Envienos un Mensaje',
                        'content'    : '<h3>Formulario de Contacto</h3><br />\n\
                                        <table>\n\
                                        <tr><td style="border:0">Nombres:</td><td style="border:0"><input type="text" /></td></tr>\n\
                                        <tr><td style="border:0">Email:</td><td style="border:0"><input type="email" /></td></tr>\n\
                                        <tr><td style="border:0">Mensaje:</td><td style="border:0"><textarea style="width:100%;height:100px"></textarea></td></tr>\n\
                                        </table>',
                        'draggable'  : true,
                        'keepOpened' : true,
                        'closeButton': true,
                        'buttonsAlign': 'right',
                        'buttons'    : {
                            'Enviar'    : {
                                'action': function() {alert('Enviado');}
                            },
                            'Cancelar'    : {
                                'action': function() {}
                            }
                        }
                    });
                });
            });
        </script>
    </body>
</html>
