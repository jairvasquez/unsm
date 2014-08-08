<script src="<?php echo base_url() ?>assets/js/jquery.jcarousellite.js"></script>
<script>
        $(function() {
            $(".jCarouselLite").jCarouselLite({
                auto: 4000,
                speed: 500,
                btnNext: ".next",
                btnPrev: ".prev"
            }); 
            $(".jcarousel").jCarouselLite({
                auto: 2000,
                speed: 1000
            }); 
        })
        function ver(id){
            if(id=='1'){
                $.Dialog({
                        'title'      : '10/07::CONTINUA LA SEMANA DE LA MEDICINA VETERINARIA Y ZOOTECNIA',
                        'content'    : '<div style="width:700px"><img src="assets/img/not1.jpg" style="float:left;padding:10px" alt="" />'+
                                        '<p style="text-align:justify">Con la participación de las autoridades, docentes, administrativos y estudiantes de la Facultad de Ciencias Agrarias presentaron continúa la celebración de la ?Semana de la Medicina Veterinaria y Zootecnia?, que inició el 05 y continuará hasta el 13 de Julio del presente año.<br/><br/>'+
'Toda las actividades se iniciaron con desfile en la plaza de armas de nuestra ciudad, continuando con la Primera Exposición y desparasitación canina a realizada en la ciudad universitaria, donde se brindaron servicios gratuitos de consultoría veterinaria, limpieza de orejas, corte de uñas, desparasitación, aplicación de vitaminas y asesoramiento nutricional, aplicando las destrezas de los alumnos de la Escuela de Medicina Veterinaria.<br/><br/>'+
'De igual manera, se realizó el III Foro ?Apoyo al desarrollo de la actividad pecuaria en la región San Martín?, la presentación de libros y el curso taller teórico-práctico ?Inyectables en animales pequeños?, hoy miércoles 10 el Seminario de presentación de trabajos de investigación de docentes y estudiantes en el Auditorio de videoconferencias y el jueves 11 la Feria de productos y servicios agropecuarios en el frontis del Auditorio de videoconferencias.<br/><br/>'+
'Estas actividades se programaron como un reconocimiento a la labor profesional que realiza el Médico Veterinario, en bien de la comunidad peruana y mundial, teniendo en cuenta que el día central fue el 8 de Julio en todo el perú. </p></div>',
                        'draggable'  : true,
                        'keepOpened' : true,
                        'closeButton': true,
                        'buttonsAlign': 'right',
                        'buttons'    : {
                            'Ok'    : {
                                'action': function() {}
                            }
                        }
                    });
            }
            if(id=='2'){
                $.Dialog({
                        'title'      : '09/07::CON IMPORTANTES ACUERDOS SE CLAUSURO ENCUENTRO INTERNACIONAL DE INVESTIGADORES',
                        'content'    : '<div style="width:850px"><img src="assets/img/not2.jpg" style="float:left;padding:10px" alt="" />'+
                                        '<p style="text-align:justify">En el Estado de Tabatinga Brasil, fue clausurado con éxito e importantes acuerdos el III Encuentro Internacional de Investigadores en Ciencias de la Amazonía, donde participaron investigadores peruanos, entre docentes de la Universidad Nacional de San Martín y del Instituto de Investigación de la Amazonia Peruana IIAP; uno de los acuerdostomados son: comprometerse a difundir los proyectos de investigación a todas las universidades amazónicas para impulsar desarrollo en las poblaciones, lograr la activa participación de la población en este tipo de eventos para que informen del beneficio que representa estos proyectos; así como la internalización de los alumnos y docentes en busca de experiencias diversas en su formación profesional.<br/><br/>'+
'Investigadores de la Universidad Nacional de san Martín, del IIAP encabezados por su Presidente KenetReategui, de la Universidad Nacional de Colombia, del Instituto SINCHI de Colombia y la Universidad Nacional de Amazonas de Brasil compartieron investigaciones en proyectos tales como gestión y educación ambiental, Frontera vivida y procesos de cambios : Tríple FRONTEIRA BRASIL ? COLÔMBIA ? PERU, Investigación en la amazonia , investigación de frutos de zonas amazónicas de la triple fontera, entre otros.<br/><br/>'+ 
'Previo a la clausura, el Dr. Alfredo Quinteros García Rector de la UNSM manifestó que es necesario, la presencia de las autoridades, la prensa y docentes de todas las áreas de las universidades amazónicas ´para socializar los proyectos y sobre todo tomar un compromiso de hacer investigaciones a nivel superior y que estos sean difundidos para incentivar en los alumnos de repotenciar las investigaciones en los diferentes países. </p></div>',
                        'draggable'  : true,
                        'keepOpened' : true,
                        'closeButton': true,
                        'buttonsAlign': 'right',
                        'buttons'    : {
                            'Ok'    : {
                                'action': function() {}
                            }
                        }
                    });
            }
            if(id=='3'){
                $.Dialog({
                        'title'      : '08/07::RECTOR DE LA UNSM INAUGURO III ENCUENTRO INTERNACIONAL DE INVESTIGADORES EN BRASIL',
                        'content'    : '<div style="width:850px"><img src="assets/img/not3.jpg" style="float:left;padding:10px" alt="" />'+
                                        '<p style="text-align:justify">La UNIVERSIDADES DO ESTADO DO AMAZONAS del estado de Tabatinga Brasil, viene desarrollando del 1 al 3 de julio el III Encuentro Internacional de Investigadores en Ciencias de la Amazonía, con el objetivo de fortalecer de manera teórico y práctico las acciones de sistematización y organización de las prácticas educativas e investigativas desarrolladas en la Amazonia, con la participación de investigadores de las universidades e institutos de la amazonia de los países de Perú, Colombia y Brasil.<br/><br/>'+
'En estos 3 días se propiciaran debates de cooperación entre estudiantes e investigadores en torno a los proyectos y resultados de las investigaciones en las diversas áreas del conocimiento en la región amazónica. Los docentes investigadores de la Universidad Nacional de San Martíntambién expondrán importantes proyectos como: Mitigación de la Contaminación invisible y calentamiento global mediante tecnología Leds y fotovoltaica a cargo del Ingeniero Horacio Ramírez García, Administración y gestión de los recursos forestales en la región San Martín por el Ingeniero Williams Ramírez Navarro, Desarrollo de la Investigación en campo turístico en Perú a cargo de la Licenciada Very Rengifo Hidalgo y Actividad Leshmanicida y caracterización química de los extractos huaca y barbasco en San Martin ?Perú por el Microbiólogo Heriberto Arévalo.<br/><br/>'+
'La apertura del evento estuvo a cargo del Dr. Alfredo Quinteros García Rector de la Universidad Nacional de San Martín, quien manifestó, que este encuentro propicia el poder compartir los conocimientos de las diferentes investigaciones programadas en estos días, además dijo sentirse privilegiado de inaugurar un evento de trascendental importancia para las universidades amazónicas presentes, estuvieron en la Mesa de honor la coordinadora de la Universidad amazónica de Brasil Marcela Pereira, el Presidente del IIAP keneth Reátegui del Águila, el reponsable del área de investigación de la Universidad de la Molina. <br/><br/>'+
'Al término de las ponencias habrá una mesa redonda trinacional en investigaciones de la triple frontera amazónica con representantes de las instituciones y universidades /UFAM/ UEA/IFAM de Brasil, UNAL Y SINCHI de Colombia, UNSM y el IIAP de Perú. </p></div>',
                        'draggable'  : true,
                        'keepOpened' : true,
                        'closeButton': true,
                        'buttonsAlign': 'right',
                        'buttons'    : {
                            'Ok'    : {
                                'action': function() {}
                            }
                        }
                    });
            }
            if(id=='4'){
                $.Dialog({
                        'title'      : '05/07::Del 5 al 12 de Julio SERA LA CELEBRACION DE LA SEMANA DE LA MEDICINA VETERINARIA Y ZOOTECNIA',
                        'content'    : '<div style="width:850px"><img src="assets/img/not4.jpg" style="float:left;padding:10px" alt="" />'+
                                        '<p style="text-align:justify">Las autoridades, docentes, administrativos y estudiantes de la Facultad de Ciencias Agrarias presentaron en conferencia de prensa, el programa de celebración de la ?Semana de la Medicina Veterinaria y Zootecnia?, a desarrollarse del 05 al 12 de Julio del presente año.<br/><br/>'+
'Las actividades serán diversas, entre las que resaltan la 1ra Exposición y desparasitación canina a realizarse el próximo domingo 7 en la ciudad universitaria, en la cual se brindará servicios gratuitos de consultoría veterinaria, limpieza de orejas, corte de uñas, desparasitación, aplicación de vitaminas y asesoramiento nutricional, aplicando las destrezas de los alumnos de la escuela.<br/><br/>'+
'De igual manera, el lunes 08 el III Foro ?Apoyo al desarrollo de la actividad pecuaria en la región San Martín?, el martes 9 la entrega y presentación de libros y el curso taller teórico-práctico ?Inyectables en animales pequeños?, el miércoles 10 el Seminario de presentación de trabajos de investigación de docentes y estudiantes y el jueves 11 la Feria de productos y servicios agropecuarios.<br/><br/>'+
'Esto es un reconocimiento a la labor profesional que realiza el Médico Veterinario, en bien de la comunidad peruana y mundial, teniendo en cuenta que el día central es el 8 de Julio.</p></div>',
                        'draggable'  : true,
                        'keepOpened' : true,
                        'closeButton': true,
                        'buttonsAlign': 'right',
                        'buttons'    : {
                            'Ok'    : {
                                'action': function() {}
                            }
                        }
                    });
            }
        }
</script>
<div class="clearfix">
    <div class="tile icon bg-color-green" onclick="window.open('http://unsm.edu.pe/webcpu')">
        <div class="tile-content">
            <img src="assets/img/ico_cpu.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Centro Pre Universitario</div>
        </div>
    </div>
    <div class="tile icon bg-color-orangeDark" onclick="window.location='<?php echo base_url() ?>admision'">
        <div class="tile-content">
            <img src="assets/img/ico_admision.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Admisión</div>
        </div>
    </div>
    <div class="tile triple image">
        <div class="tile-content">
            <img src="assets/img/examen.jpg" alt="" />
        </div>
    </div>
    <div class="tile icon bg-color-red selected" onclick="window.location='<?php echo base_url() ?>web/calendario_academico'">
        <b class="check"></b>
        <div class="tile-content">
            <img src="assets/img/calendar.png" alt=""/>
        </div>
        <div class="brand">
            <div class="name">Calendario Academico</div>
        </div>
    </div>
    <div class="tile icon bg-color-teal" onclick="window.open('http://www.posgrado.com.pe/Posgrado/')">
        <div class="tile-content">
            <img src="assets/img/postgrado.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Postgrado</div>
        </div>
    </div>
    <div class="tile icon bg-color-yellow" onclick="window.location='<?php echo base_url() ?>web/centros_produccion'">
        <div class="tile-content">
            <img src="assets/img/ico_ccpp.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Centros de Producción</div>
        </div>
    </div>
    <div class="tile triple bg-color-blueDark">
        <div class="tile-content">
            <div class="jCarouselLite">
                <ul>
                    <li>
                        <img src="assets/img/not1.jpg" class="place-left" alt="" />
                        <h3 style="margin-bottom: 5px;">10/07::CONTINUA  LA SEMANA DE<br/>LA MEDICINA VETERINARIA Y<br/>ZOOTECNIA</h3>
                        <p>
                            <a href="javascript:void(0)" onclick="ver('1')">Leer Más</a>
                        </p>
                    </li>
                    <li>
                        <img src="assets/img/not2.jpg" class="place-left" alt="" />
                        <h3 style="margin-bottom: 5px;">09/07::CON IMPORTANTES<br/>ACUERDOS SE CLAUSURÓ<br/>ENCUENTRO INTERNACIONAL DE INVESTIGADORES</h3>
                        <p>
                            <a href="javascript:void(0)" onclick="ver('2')">Leer Más</a>
                        </p>
                    </li>
                    <li>
                        <img src="assets/img/not3.jpg" class="place-left" alt="" />
                        <h3 style="margin-bottom: 5px;">08/07::RECTOR DE LA UNSM INAUGURÓ  III ENCUENTRO INTERNACIONAL DE INVESTIGADORES  EN BRASIL</h3>
                        <p>
                            <a href="javascript:void(0)" onclick="ver('3')">Leer Más</a>
                        </p>
                    </li>
                    <li>
                        <img src="assets/img/not4.jpg" class="place-left" alt="" />
                        <h3 style="margin-bottom: 5px;">05/07::Del 5  al 12 de Julio SERA LA CELEBRACION DE LA SEMANA DE<br/>LA MEDICINA VETERINARIA Y<br/>ZOOTECNIA</h3>
                        <p>
                            <a href="javascript:void(0)" onclick="ver('4')">Leer Más</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="brand">
            <span class="name">
                <span class="prev"><i class="icon-arrow-left-2"></i></span>&nbsp;&nbsp;&nbsp;
                <span class="next"><i class="icon-arrow-right-2"></i></span>
            </span>
        </div>
    </div>
    <div class="tile icon bg-color-orange selected" onclick="window.open('http://www.unsm.edu.pe/intranet_unsm')">
        <b class="check"></b>
        <div class="tile-content">
            <img src="assets/img/intranet.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Intranet</div>
        </div>
    </div>
    <div class="tile icon bg-color-redLight" onclick="window.location='<?php echo base_url() ?>web/actividades'">
        <div class="tile-content">
            <img src="assets/img/ico_actividades.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Actividades</div>
        </div>
    </div>
    <div class="tile icon bg-color-pinkDark" onclick="window.location='<?php echo base_url() ?>web/informacion_general'">
        <div class="tile-content">
            <img src="assets/img/ico_infogeneral.png" alt="" />
        </div>
        <div class="brand">
            <div class="name">Información General</div>
        </div>
    </div>
    <div class="tile triple image-slider" data-role="tile-slider" data-param-direction="left" data-param-period="3000">
        <div class="tile-content" onclick="window.open('http://coneisc.pe')">
            <img src="assets/img/coneisc.jpg" alt="">
        </div>
        <div class="tile-content" onclick="window.open('http://unsm.edu.pe/jovenesalaobra/index.php')">
            <img src="assets/img/projoven.jpg" alt="">
        </div>
        <div class="tile-content" onclick="window.open('http://www.posgrado.com.pe/')">
            <img src="assets/img/logoc.jpg" alt="">
        </div>
        <div class="tile-content" onclick="window.open('http://unsm.edu.pe/desc_documento/congreso_ecologia.pdf')">
            <img src="assets/img/coneia.jpg" alt="">
        </div>
        <div class="tile-content" onclick="window.open('http://www.cphcaa2013.edu.pe/')">
            <img src="assets/img/conper.jpg" alt="">
        </div>
    </div>
    <div class="tile image bg-color-purple selected">
        <b class="check"></b>
        <div class="tile-content" onclick="window.open('http://encuesta.unsm.edu.pe/')">
            <img src="assets/img/encuesta.jpg" alt=""/>
        </div>
    </div>
    <div class="tile bg-color-blue" style="width: 97.5%;height: 130px;padding: 1%">
        <div class="tile-content">
            <div class="jcarousel">
                <ul style="width: 1000px">
                    <li><a href="http://www.asoeducativa.com/" target="_blank"><img src="assets/img/enlace1.gif" alt="ASOEDUCATIVA" /></a></li>
                    <li><a href="http://www.universia.edu.pe/" target="_blank"><img src="assets/img/enlace2.gif" alt="UNIVERSIA" /></a></li>
                    <li><a href="http://pronafcap.unsm.edu.pe/" target="_blank"><img src="assets/img/enlace3.jpg" alt="PRONAFCAP" /></a></li>
                    <li><a href="http://www.peru.gob.pe/"  target="_blank"><img src="assets/img/enlace4.gif" alt="PERU" /></a></li>
                    <li><a href="http://www.anr.edu.pe/"  target="_blank"><img src="assets/img/enlace5.gif" alt="ANR" /></a></li>
                    <li><a href="http://www.sunat.gob.pe/pdt/pdtModulos/independientes/renta2009/index.html"  target="_blank"><img src="assets/img/enlace6.gif" alt="RENTA ANUAL" /></a></li>
                    <li><a href="http://transparencia-economica.mef.gob.pe/"  target="_blank"><img src="assets/img/enlace7.gif" alt="TRANSPARENCIA" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>