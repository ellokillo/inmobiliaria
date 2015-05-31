<?php include 'head.php'; ?>
<?php 
$value = isset($_GET['simpleLayout']) ? $_GET['simpleLayout'] : '';
if($value != true){
?>
<header>
    <div id="ac_background" class="ac_background">
        <img class="ac_bgimage" src="images/background-blur.jpg" alt="Background"/>
        <div class="ac_overlay"></div>
        <div class="ac_loading"></div>
    </div>
    <div id="ac_content" class="ac_content">
        <h1><img src="images/logo.png" alt="Logo"/></h1>
        <div class="ac_menu">
            <ul>
                <li>
                    <a class="selected" href="images/foto1.jpg">Venta de propiedades</a>
                    <div class="ac_subitem">
                        <span class="ac_close"></span>
                        <h2>Venta de propiedades</h2>
                        <ul class="submenu">
                            <li><a href="#">Pisos y apartamentos</a></li>
                            <li><a href="#">Villas y chalets</a></li>
                            <li><a href="#">Obra nueva</a></li>
                            <li><a href="#">Casas y fincas rústicas</a></li>
                            <li><a href="#">Solares y parcelas</a></li>
                            <li><a href="#">Casas de pueblo</a></li>
                            <li><a href="#">Casas de lujo</a></li>                                        
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="images/foto2.jpg">Alquiler vacacional</a>
                    <div class="ac_subitem">
                        <span class="ac_close"></span>
                        <h2>Alquiler vacacional</h2>
                        <ul class="submenu">
                            <li><a href="#">Casas rurales</a></li>
                            <li><a href="#">Villas y chalets</a></li>
                            <li><a href="#">Casas de lujo</a></li>
                            <li><a href="#">Casas de pueblo</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="images/foto3.jpg">Alquiler anual</a>
                    <div class="ac_subitem">
                        <span class="ac_close"></span>
                        <h2>Alquiler anual</h2>
                        <ul class="submenu">
                            <li><a href="#">Alquiler temporal</a></li>
                            <li><a href="#">Alquiler todo el año</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="idiomas" style="display: none;">
                <a href="#">Español</a>
                <a href="#">English</a>
                <a href="#">Deutsch</a>
            </div>
            <div class="tool-bar">
                <a title="Añadir a favoritos" href="#"><i class="fa fa-star"></i></a>
                <a title="Imprimir" href="#"><i class="fa fa-print"></i></a>
                <iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/villasplanet&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=verdana&amp;height=21" scrolling="no" frameborder="0" style="border:none; width:125px; height:21px;"></iframe>        
            </div>            
        </div>
    </div>  
</header>
<?php } ?>