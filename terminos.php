<?php include 'templates/header.php'; ?>
<script>
    $(document).ready(function() {
        $("a.anchor").on('click',function(evt) {
            evt.preventDefault();
            var target = $(this).attr('href');
            $('html, body').stop(true,true).animate({
                scrollTop: $(target).offset().top
            }, 1500);
        }); 
    });
</script>
<section class="content">
    <div class="page_wrapper simple-layout terminos">
        <div class="columns clearfix background-1">
            <div class="col col1">
                <div class="fixed-item background-2">
                    <div class="item">
                        <a class="anchor" href="#avisolegal">Aviso legal</a>
                    </div>
                    <div class="item">
                        <a class="anchor" href="#confidencialidad">Confidencialidad</a>
                    </div>
                    <div class="item">
                        <a class="anchor" href="#autor">Derechos de autor</a>
                    </div>
                    <div class="item">
                        <a class="anchor" href="#usositio">Uso del sitio web</a>
                    </div>                    
                    <div class="item">
                        <a class="anchor" href="#restricciones">Restricciones del uso</a>
                    </div> 
                    <div class="item">
                        <a class="anchor" href="#limitacion">Limitación de responsabilidad</a>
                    </div>
                    <div class="item">
                        <a class="anchor" href="#responsabilidad">Responsabilidad Civil</a>
                    </div>
                    <div class="item">
                        <a class="anchor" href="#infogeneral">Información general</a>
                    </div>
                </div>
            </div>
            <div class="col col2 ">
                <div class="text-wrapper">
                    <h3 class="heading">Politica de Privacidad <span>VillasPlanet.com</span></h3>
                    <div id="avisolegal">
                        <h4>AVISO LEGAL</h4>
                        <p>La información contenida en el sitio web <strong>VILLASPLANET.COM</strong> sobre cada uno de los inmuebles y promociones es la que facilitan los propietarios, que incluyen imágenes, planos, proyectos en ejecución o futuros proyectos a <strong>VILLASPLANET S.L.</strong> Todos los datos que el servicio proporciona, salvo errores tipográficos, proceden directamente de dichos anunciantes que son, en consecuencia, los responsables de su veracidad y <strong>ESTA INFORMACIÓN EN NINGÚN CASO CONSTITUYE DOCUMENTO CONTRACTUAL.</strong> </p>
                        <p>Cada inmueble o promoción están directamente relacionados con su anunciante. Por lo tanto, toda la información relativa al <strong>Real Decreto 515/1989 del 21 de abril, Ley Orgánica de Protección de datos de Carácter Personal (LOPD)</strong>, Protección de los consumidores en cuanto a la información a suministrar en la compraventa y arrendamiento de viviendas se encontrará a disposición del público en nuestra oficina ubicada en el Puerto de Alcudia.</p>
                    </div>
                    <div id="confidencialidad">
                        <h4>Confidencialidad</h4>
                        <p>De conformidad con lo establecido en la Ley 15/1999, de 13 de diciembre, de Protección de Datos de Carácter Personal, le informamos de que todos los datos que nos facilite se incluirán en el fichero General CLIENTES código de inscripción nº 2083460368 en el Registro General de Protección de Datos (RGPD), automatizado del cual forman parte del mismo los ficheros CONTACTO, FORMULARIO ALQUILER, FORMULARIO VENTA del que es responsable VILLASPLANET, S.L., con domicilio a efectos de notificación en C/ Mar i Estany 1, Local A-B - 07400 Puerto de Alcudia (Mallorca - Baleares).</p>
                        <p>Asimismo, le informamos que los datos que nos facilite serán accesibles por los propietarios al cual comercializamos el/los inmueble(s) y del cual usted solicita información. Al facilitarnos sus datos, el cliente declara a VillasPlanet que son veraces, en la medida de su conocimiento. Igualmente, VillasPlanet guardará esos datos con la finalidad de remitirle ofertas, mediante correo electrónico, de productos y servicios propios o de terceros que puedan ser de su interés.</p>
                        <p>El cliente, y en su caso quien lo represente, podrá ejercitar los derechos de acceso, rectificación, oposición y cancelación por correo electrónico dirigido a: info@villasplanet.com	o mediante solicitud escrita y firmada a VILLASPLANET, S.L., C/ Mar i Estany 1, Local A-B - 07400 Puerto de Alcudia (Mallorca - Baleares). Dicha solicitud deberá contener los siguientes datos: nombre y apellidos del cliente, domicilio a efectos de notificaciones, fotocopia del documento nacional de identidad o pasaporte, y petición concreta de la solicitud. En caso de representación, deberá probarse la misma mediante documento fehaciente. </p>
                        <p>Por último, le informamos de que el Fichero de CLIENTES de VillasPlanet, donde están guardados todos sus datos, cumple con todas las medidas de seguridad que garantizan la confidencialidad y seguridad del tratamiento de sus datos por lo que le garantizamos la más absoluta seguridad de la información que nos facilite.</p>
                    </div>
                    <div id="autor">
                        <h4>Derechos de autor</h4>
                        <p>Nuestros sitios web: <strong>www.villasplanet.com</strong>, <strong>www.mallorca-villasplanet.com</strong>, <strong>www.villasplanet.es</strong> incluyendo, con carácter exclusivo, el texto, software, contenido, fotografías, iconos, iconos de botones, archivos de audio en cualquiera de sus formatos, archivos de video en cualquiera de sus formatos, material audiovisual y gráficos, está protegido por derechos de autor y otros derechos legítimos registrados, de acuerdo con los tratados internacionales en los que España es parte y otros derechos de propiedad y leyes del reino de España. 
                            Las imágenes utilizadas en este sitio web son propiedad de VILLASPLANET, S.L.</p>
                    </div>
                    <div id="usositio">
                        <h4>Uso del sitio web</h4>
                        <p>Los sitios web: <strong>www.villasplanet.com</strong>, <strong>www.mallorca-villasplanet.com</strong>, <strong>www.villasplanet.es</strong> son única y exclusivamente para uso personal de los usuarios. Se prohíbe su modificación, reproducción, duplicación, copia, distribución, venta, reventa y demás formas de explotación con fines comerciales o no. Usted se compromete a no utilizar los sitios web arriba mencionados para fines ilegales o prohibidos. En particular, el usuario acepta que únicamente utilizará los sitios web para sí mismo y que los productos o servicios adquiridos a través de los sitio web www.villasplanet.com, www.mallorca-villasplanet.com, www.villasplanet.es serán para uso o consumo propio o de las personas en nombre de las cuales esté legalmente autorizado para actuar. El usuario no revenderá productos o servicios adquiridos a través de los sititos web a otras personas.</p>
                    </div>
                    <div id="restricciones">
                        <h4>Restricciones de uso</h4>
                        <p>Usted no puede utilizar el servicio para fines ilícitos. Acepta usar el servicio sólo para su uso personal no lucrativo. Asimismo, acepta no usar, transferir, distribuir o disponer de la información incluida en el servicio de forma que compita de manera desleal con VillasPlanet. Reconoce que el servicio ha sido desarrollado, compilado, preparado, revisado, seleccionado y conformado por VillasPlanet. Acepta proteger los derechos de autor de VillasPlanet durante la vigencia de este acuerdo. Acepta informar a VillasPlanet, por escrito y de manera oportuna, si observa un uso no autorizado o adecuado del servicio por terceros o violaciones de derechos de autor, marcas registradas y otros derechos que el servicio pudiera estar infringiendo o viceversa.</p>
                    </div>
                    <div id="limitacion">
                        <h4>LIMITACION DE RESPONSABILIDAD</h4>
                        <p>VillasPlanet ofrece este sitio web "tal y como está", es decir, VillasPlanet no garantiza expresa o implícitamente los elementos. En cuanto al funcionamiento del sitio web, o la información, contenido, software, diseños, archivos, o productos incluidos en el mismo, VillasPlanet queda exonerada de cualesquiera garantías, incluidas, entre otras, la garantía de idoneidad para un fin determinado. VillasPlanet NO SERÁ RESPONSABLE DE LOS DAÑOS O PERJUICIOS DE CUALQUIER ÍNDOLE QUE PUEDAN DERIVARSE DEL USO DE ESTE SITIO WEB, INCLUIDOS, ENTRE OTROS, LOS DAÑOS DIRECTOS E INDIRECTOS.</p>
                        <p>Sin perjuicio de lo dispuesto en el párrafo anterior, VillasPlanet no asume responsabilidad alguna que pudiere derivarse de la falta de veracidad, completud, actualización y precisión de los datos o informaciones sobre productos o servicios, precios, rutas, distancias, características y cualesquiera otros datos e informaciones relevantes acerca de los productos y servicios ofrecidos a través del sitio web por los proveedores de productos o servicios. </p>
                        <p>VillasPlanet no garantiza que el servicio sea compatible con su equipo físico o lógico, ni tampoco que el servicio no tenga errores, virus, gusanos o "caballos de troya" y no se hace responsable de daños causados por estos elementos destructivos. Usted reconoce que VillasPlanet, sus proveedores y agentes no son responsables de (1) daños, ya sean éstos causados por la negligencia de sus empleados, contratistas, agentes, proveedores o ya surjan en conexión con el servicio, no siendo VillasPlanet responsable de ninguna pérdida de ganancias, pérdida en general, daños indirectos o colaterales, ni a consecuencia de la interposición de demandas en contra de VillasPlanet por terceros; ni de (2) fallos, discrepancias, omisiones, tardanzas u otros errores en el servicio causados por su ordenador o por el uso del servicio en tal equipo. El contenido de otros sitios web, bienes o anuncios publicitarios que puedan estar vinculados al servicio no se administra o controla por VillasPlanet. Asimismo, VillasPlanet se exonera de cualquier responsabilidad derivada del incumplimiento o cumplimiento defectuoso por los proveedores de productos o servicios, de las obligaciones derivadas de la normativa en vigor y de los términos y condiciones de venta de cada uno de los productos y que se contraten a través del sitio web. VillasPlanet (a) no garantiza, en forma explícita o implícita, el uso de los enlaces proporcionados en o hacia el servicio, (b) no garantiza la exactitud, la totalidad, la utilidad o la adecuación de cualquier otros sitios web, servicios, bienes o anuncios publicitarios que puedan estar vinculados al servicio, (c) ni promueve en forma implícita o explícita otros sitios web, servicios, bienes o anuncios publicitarios que puedan estar vinculados al servicio.</p>
                    </div>
                    <div id="responsabilidad">
                        <h4>Responsabilidad Civil</h4>
                        <p>VillasPlanet, sus directivos y empleados, socios colectivos, así como sus agentes no serán responsables, directa o indirectamente, en manera alguna, frente a usted o cualquier otra persona por: (1) errores y omisiones del servicio; (2) retrasos, errores o interrupciones en la transmisión o entrega del servicio o (3) pérdidas o daños ocasionados o por cualquier otra razón de incumplimiento.</p>
                    </div>
                    <div id="infogeneral">
                        <h4>Información general</h4>
                        <p>El presente Aviso Legal, así como cualquier relación entre usted como usuario y VillasPlanet se regirán por la legislación del reino de España. Para cualquier cuestión litigiosa derivada de la existencia o contenido de este Aviso Legal o de las relaciones entre el usuario y VillasPlanet, ambas partes, con renuncia expresa a cualquier otro fuero que pudiera corresponderles, se someten a la jurisdicción y competencia exclusiva de los Juzgados y Tribunales de Mallorca (Illes Balears -España). Nos reservamos el derecho a realizar cambios en cualquier momento en nuestro sitio web, así como en este Aviso Legal. </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include 'templates/footer.php'; ?>