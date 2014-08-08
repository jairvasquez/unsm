<h1><a href="<?php echo base_url() ?>" class="back-button big page-back" style="display: inline-block"></a> 
    Directorio</h1>

<div class="page-sidebar" id="side">
    <div id="sidebar">
        <ul>
            <li><a href="javascript:void(0)" onclick="page('diralu')">Directorio de Alumnos</a></li>
            <li><a href="javascript:void(0)" onclick="page('dirdoc')">Directorio de Docentes</a></li>
            <li><a href="javascript:void(0)" onclick="page('diradm')">Directorio Administrativo</a></li>
            <li><a href="javascript:void(0)" onclick="page('dirtel')">Directorio Telefónico</a></li>
        </ul>
    </div>
</div>
<div class="page-sidebar" id="sidebar2">
        <ul>
            <li><a href="javascript:void(0)" onclick="page('diralu')">Directorio de Alumnos</a></li>
            <li><a href="javascript:void(0)" onclick="page('dirdoc')">Directorio de Docentes</a></li>
            <li><a href="javascript:void(0)" onclick="page('diradm')">Directorio Administrativo</a></li>
            <li><a href="javascript:void(0)" onclick="page('dirtel')">Directorio Telefónico</a></li>
        </ul>
</div>
<div class="span9 padding20" id="contenido_admision_web">
    <div id="contenido_admision">
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
    $("#contenido_admision").load(url+'directorio/'+pagina);
}
</script>