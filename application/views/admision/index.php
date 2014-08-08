<h1><a href="<?php echo base_url() ?>" class="back-button big page-back" style="display: inline-block"></a> Admisión</h1>

<div class="page-sidebar" id="side">
    <div id="sidebar">
        <ul>
            <li><a href="javascript:void(0)" onclick="page('principal')">Principal</a></li>
            <li><a href="javascript:void(0)" onclick="page('comision')">Comisión de Admisión</a></li>
            <li><a href="javascript:void(0)" onclick="page('costos')">Costos</a></li>
            <li><a href="javascript:void(0)" onclick="page('cronograma')">Cronograma</a></li>
            <li><a href="javascript:void(0)" onclick="page('reglamento')">Reglamentos</a></li>
            <li><a href="javascript:void(0)" onclick="page('temario')">Temario</a></li>
            <li><a href="javascript:void(0)" onclick="page('examen')">Examen</a></li>
            <li><a href="javascript:void(0)" onclick="page('vacantes')">Vacantes</a></li>
            <li><a href="javascript:void(0)" onclick="page('requisitos')">Requisitos</a></li>
            <li><a href="javascript:void(0)" onclick="page('resultados')">Resultados</a></li>
        </ul>
    </div>
</div>
<div class="page-sidebar" id="sidebar2">
        <ul>
            <li><a href="javascript:void(0)" onclick="page('principal')">Principal</a></li>
            <li><a href="javascript:void(0)" onclick="page('comision')">Comisión de Admisión</a></li>
            <li><a href="javascript:void(0)" onclick="page('costos')">Costos</a></li>
            <li><a href="javascript:void(0)" onclick="page('cronograma')">Cronograma</a></li>
            <li><a href="javascript:void(0)" onclick="page('reglamento')">Reglamentos</a></li>
            <li><a href="javascript:void(0)" onclick="page('temario')">Temario</a></li>
            <li><a href="javascript:void(0)" onclick="page('examen')">Examen</a></li>
            <li><a href="javascript:void(0)" onclick="page('vacantes')">Vacantes</a></li>
            <li><a href="javascript:void(0)" onclick="page('requisitos')">Requisitos</a></li>
            <li><a href="javascript:void(0)" onclick="page('resultados')">Resultados</a></li>
        </ul>
</div>
<div class="span9 padding20" id="contenido_admision_web">
    <h2>Examen de admision 2013-II</h2>
    <div style="text-align: center">
        <img src="<?php echo base_url() ?>assets/img/admision/baner.jpg" alt="" />
        <div id="contenido_admision">
            <?php include_once $mostrar.'.php';?>
        </div>
    </div>
</div>
<script>
var url='<?php echo base_url() ?>';
var showStaticMenuBar = false;
$(window).scroll(function() {
    if(showStaticMenuBar == false){
        if($(window).scrollTop() >= 140){
            $("#sidebar").css("display","none");
            $("#side").css("background","none");
            $("#sidebar2").css("display","block");
            showStaticMenuBar=true;
        }
    }else{
        if($(window).scrollTop() <= 140){
            $("#sidebar").css("display","block");
            $("#side").css("background","#EBEBEB");
            $("#sidebar2").css("display","none");
            showStaticMenuBar=false;
        }   
    }
}
);
function page(pagina){
    $("#contenido_admision").load(url+'admision/'+pagina);
}
</script>