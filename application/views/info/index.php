<h1><a href="<?php echo base_url() ?>" class="back-button big page-back" style="display: inline-block"></a> Información Institucional</h1>

<div class="page-sidebar" id="side">
    <div id="sidebar">
        <ul>
            <li><a href="javascript:void(0)" onclick="page('historia')">Historia</a></li>
            <li><a href="javascript:void(0)" onclick="page('mision_vision')">Misión y Visión</a></li>
            <li><a href="javascript:void(0)" onclick="page('objetivos')">Objetivos</a></li>
            <li><a href="javascript:void(0)" onclick="page('himno')">Himno</a></li>
            <li class="dropdown active" data-role="dropdown"><a>Autoridades</a>
                <ul class="sub-menu light sidebar-dropdown-menu keep-opened open">
                    <li><a href="javascript:void(0)" onclick="page('autoridades_unsm')">Autoridades de la UNSM</a></li>
                    <li><a href="javascript:void(0)" onclick="page('jefe_departamento')">Jefes de Departamento</a></li>
                    <li><a href="javascript:void(0)" onclick="page('decanos_facultad')">Decanos de Facultad</a></li>
                    <li><a href="javascript:void(0)" onclick="page('directores_oficinas')">Directores de Oficina</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" onclick="page('gestion')">Gestión de Gobierno</a></li>
            <li><a href="javascript:void(0)" onclick="page('organigrama')">Organigrama</a></li>
        </ul>
    </div>
</div>
<div class="page-sidebar" id="sidebar2">
        <ul>
            <li><a href="javascript:void(0)" onclick="page('historia')">Historia</a></li>
            <li><a href="javascript:void(0)" onclick="page('mision_vision')">Misión y Visión</a></li>
            <li><a href="javascript:void(0)" onclick="page('objetivos')">Objetivos</a></li>
            <li><a href="javascript:void(0)" onclick="page('himno')">Himno</a></li>
            <li class="dropdown active" data-role="dropdown"><a>Autoridades</a>
                <ul class="sub-menu light sidebar-dropdown-menu keep-opened open">
                    <li><a href="javascript:void(0)" onclick="page('autoridades_unsm')">Autoridades de la UNSM</a></li>
                    <li><a href="javascript:void(0)" onclick="page('jefe_departamento')">Jefes de Departamento</a></li>
                    <li><a href="javascript:void(0)" onclick="page('decanos_facultad')">Decanos de Facultad</a></li>
                    <li><a href="javascript:void(0)" onclick="page('directores_oficinas')">Directores de Oficina</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)" onclick="page('gestion')">Gestión de Gobierno</a></li>
            <li><a href="javascript:void(0)" onclick="page('organigrama')">Organigrama</a></li>
        </ul>
</div>
<div class="span9 padding20" id="contenido_admision_web">
    <div id="contenido_admision">
        <?php include_once $mostrar.'.php';?>
    </div>
</div>
<style>
    #contenido_admision{
        text-align: center;
        margin: 0 auto
    }
    #contenido_admision img{
        width: 100%;
    }
</style>
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
    $("#contenido_admision").load(url+'informacion_institucional/'+pagina);
}
</script>