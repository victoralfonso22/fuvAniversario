
<!-- Header -->
<?php include('../template/cabecera.php'); ?>
<?php
    if(isset($_GET['tipo'])){
if($_GET['tipo'] == 1){
    echo "<script>$(document).ready(function() {
    $('#obliMenos').hide();
    $('#obliMas').show();
    $('html,body').animate({
    scrollTop: $('#obliMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 2){
    echo "<script>$(document).ready(function() {
    $('#comiMenos').hide();
    $('#comiMas').show();
    $('html,body').animate({
    scrollTop: $('#comiMas').offset().top
    }, 1000);
});</script>";
}else if ($_GET['tipo'] == 3){
    echo "<script>$(document).ready(function() {
    $('#privMenos').hide();
    $('#privMas').show();
    $('html,body').animate({
    scrollTop: $('#privMas').offset().top
    }, 1000);
});</script>";
}
}?>

<div class="container">
<header class="style1">
    <br/>
<h2>Unidad de Transparencia</h2>
<div class="bordeAbajo"></div>
</header>
    
</div>
<div id="contenedorBlog" class="container">
<div  class="container">
    <div id="contenidoSub">
    <!----------------    Texto para seccion Programa de becas     ----------------->    
    <div id="obliMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('obliMas','obliMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Obligaciones</label>
    </div>
    <div id="obliMas" style="display: none">
    <div id="divSubMenuNota">

    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('obliMenos','obliMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Obligaciones</label>
    </div>
        <div class="div1Notas" style="width:90%;">    
            <ul>                                
                <li type= disc>1. Marco normativo
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/1. Marco Normativo/Estatuto vigente - Reforma Marzo2011.PDF" target="_blank">&bull;&nbsp;Estatuto Vigente (reforma realizada en marzo de 2011)&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/1. Marco Normativo/Designación Pdte Jta Directiva Dic2015.pdf" target="_blank">&bull;&nbsp;Designación del Presidente de la Junta Directiva / Dic 2015 – Dic 2017&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"></a></li>
                        <li><a style="text-decoration: none" href="pdf/1. Marco Normativo/Designacion VicePdte-Srio-Tesorera Jta Directiva Ago 2016.pdf" target="_blank">&bull;&nbsp;Designación del Vicepresidente, Secretario y Tesorero de la Junta Directiva / Ago 2016 – Dic 2017&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"></a></li>
                        <li><a style="text-decoration: none" href="pdf/1. Marco Normativo/Reglamento 2017.pdf" target="_blank">&bull;&nbsp;Reglamento del Campus CAD Xalapa 2017&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"></a></li>
                    </ul>
                </li>
                <li type= disc>2. Estructura orgánica
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/2. Estructura Orgánica/Organigrama FUV 2016.pdf" target="_blank">&bull;&nbsp;Organigrama 2016&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                    </ul>
                </li>                
                <li type= disc>3. Facultades de cada área / No aplica</li>
                <li type= disc>4. Metas y objetivos de las áreas / No aplica</li>
                <li type= disc>5. Indicadores relacionados con temas de interés público o trascendencia social / No aplica </li>
                <li type= disc>6. Indicadores que permitan rendir cuenta de sus objetivos y resultados / No aplica </li>
                <li type= disc>7. Directorio  (a partir de Jefe de Departamento)
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/7. Directorio/Directorio Honorifico Miembros y Directivos FUV - Marz2017.pdf" target="_blank">&bull;&nbsp;Honorífico, Miembros Asociados y personal Directivo 2017&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/7. Directorio/Directorio Comités Regionales de  Becas - Marzo2017.pdf" target="_blank">&bull;&nbsp;Comités Regionales de Becas 2017: Veracruz-Boca del Río, Xalapa y Coatzacoalcos&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                    </ul>
                </li>
                <li type= disc>8. Remuneraciones / No aplica</li>
                <li type= disc>9. Gastos de representación y viáticos / No aplica</li>
                <li type= disc>10. Número total de plazas y del personal / No aplica</li>
                <li type= disc>11. Contrataciones de servicios profesionales por honorarios / No aplica</li>
                <li type= disc>12. Declaraciones patrimoniales de servidores públicos / No aplica</li>
                <li type= disc>13. Domicilio de la Unidad de Transparencia
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/13. Domicilio de la Unidad de Transparencia/Ficha de contacto FUV-UT.pdf" target="_blank">&bull;&nbsp;Ficha de contacto&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>                        
                        <li><a style="text-decoration: none" href="https://www.fundacionuv.org/fuvAniversario/contacto/">&bull;&nbsp;Ubicación geográfica</a></li>
                    </ul>
                </li>
                <li type= disc>14. Convocatorias a concursos para ocupar cargos públicos / No aplica</li>
                <li type= disc>15. Información de programas de subsidios, estímulos y apoyos / No aplica</li>
                <li type= disc>16. Condiciones generales de trabajo / No aplica</li>
                <li type= disc>17. Información curricular (desde Jefe de Departamento) / No aplica</li>
                <li type= disc>18. Listado servidores públicos con sanciones administrativas / No aplica</li>
                <li type= disc>19. Servicios que se ofrecen / No aplica</li> 
                <li type= disc>20. Trámites, requisitos y formatos que se ofrecen / No aplica</li> 
                <li type= disc>21. Presupuesto / No aplica</li> 
                <li type= disc>22. Información relativa a deuda pública / No aplica</li> 
                <li type= disc>23. Montos destinados a gastos en comunicación social / No aplica </li>
                <li type= disc>24. Informes de resultados de auditorías
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/24. Auditorías/Auditoria SUV 2011 y FUV 2011-2012.pdf" target="_blank">&bull;&nbsp;2011-2012 Fundación de la Universidad Veracruzana, A.C.; Sorteo UV 2011&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                    </ul>
                </li>
                <li type= disc>25. Resultado de la dictaminación de los estados financieros
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/25. Estados financieros/Estado de Actividades 2015 B16.pdf" target="_blank">&bull;&nbsp;Estado de actividades 2015&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/25. Estados financieros/Estado de Resultados 2015 Clásico.pdf" target="_blank">&bull;&nbsp;Estado de resultados 2015&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/25. Estados financieros/Estado de Situación Financiera 2015 B16.pdf" target="_blank">&bull;&nbsp;Estado de situación financiera 2015 B-16&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/25. Estados financieros/Estado de Situación Financiera 2015 Clásico.pdf" target="_blank">&bull;&nbsp;Estado de situación financiera 2015 Clásico&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                    </ul>
                </li>
                <li type= disc>26. Montos, criterios, convocatorias y listado de personas físicas-morales a quieren se les asigne o permita usar recursos públicos / No aplica</li>
                <li type= disc>27. Concesiones, contratos, convenios, permisos, licencias o autorizaciones otorgados / No aplica</li>
                <li type= disc>28. Información sobre resultados de procedimientos de adjudicación directa, invitación restringida y licitación / No aplica</li>
                <li type= disc>29. Informes que por disposición legal generen los Sujetos Obligados
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/29. Informes que por disposición legal generen los Sujetos Obligados/Informe Anual a UV septiembre 2015- agosto 16.pdf" target="_blank">&bull;&nbsp;Informe Anual de Labores para la Universidad Veracruzana (septiembre 2015 – agosto 2016)&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/29. Informes que por disposición legal generen los Sujetos Obligados/Informe Anual Comision Fomento OSC-Sedesol CLUNI 2016.pdf" target="_blank">&bull;&nbsp;Informe Anual para la Comisión de Fomento de las Actividades de las Organizaciones de la Sociedad Civil – SEDESOL (CLUNI)&nbsp;&nbsp;<img src="img/pdf-icon.png" width="5%"/></a></li>                        
                    </ul>
                </li>
                <li type= disc>30. Estadísticas que generen  el cumplimientos de sus facultades / No aplica</li>
                <li type= disc>31. Informe de avances programáticos o presupuestales, balances generales y su estado financiero / No aplica</li>
                <li type= disc>32. Padrón de proveedores y contratistas / No aplica</li>
                <li type= disc>33. Convenios de coordinación de concertación con los sectores social y privado / No aplica</li>
                <li type= disc>34. Inventario de bienes muebles e inmuebles en posesión y propiedad / No aplica</li>
                <li type= disc>35. Recomendaciones en Derechos Humanos / No aplica</li>
                <li type= disc>36. Resoluciones y laudos que se emitan en procesos o procedimientos en forma de juicio / No aplica</li>
                <li type= disc>37. Mecanismos de participación ciudadana / No aplica</li>
                <li type= disc>38. Programas que se ofrecen / No aplica</li>
                <li type= disc>39. Actas y resoluciones del Comité de Transparencia del Sujeto Obligado / No aplica</li>
                <li type= disc>40. Evaluaciones y encuestas que hagan los Sujetos Obligados a programas financiados con recursos públicos / No aplica</li>
                <li type= disc>41. Estudios financiados con recursos públicos </li>
                <li type= disc>42. Listado de jubilados y pensionados y el monto que reciben / No aplica</li>
                <li type= disc>43. Ingresos recibidos por cualquier concepto señalando el nombre de los responsables de recibirlos, administrarlos y ejercerlos   / No aplica</li>
                <li type= disc>44. Donaciones hechas a terceros en dinero o en especie / No aplica</li>
                <li type= disc>45. Catálogo de disposición y guía de archivo documental /No aplica</li>
                <li type= disc>46. Actas de sesiones ordinarias y extraordinarias, así como las opiniones y recomendaciones que emitan, en su caso, los consejos consultivos / No aplica</li>
                <li type= disc>47. Listado de solicitudes a las empresas concesionarias de telecomunicaciones y proveedores de servicios o aplicaciones de internet para la intervención de comunicaciones privadas… / No aplica</li>
                <li type= disc>48. Cualquier otra información de utilidad y del interés público
                    <ul>
                        <li><a style="text-decoration: none" href="pdf/48. Otra información de interés público/FUV Donataria Autorizada.pdf" target="_blank">Fundación de la Universidad Veracruzana A.C., Donataria Autorizada, publicación del DOF del 9 de enero de 2017&nbsp;&nbsp;<img src="img/pdf-icon.png" width="3%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/48. Otra información de interés público/FUV Autorizada para recibir donativos deducibles de los EUA.pdf" target="_blank">Fundación de la Universidad Veracruzana A.C., Autorizada para recibir donativos deducibles de los EUA, publicación del DOF del 9 de enero de 2017&nbsp;&nbsp;<img src="img/pdf-icon.png" width="3%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/48. Otra información de interés público/Constancia RFOSC - CLUNI.PDF" target="_blank">Inscripción de la Fundación de la Universidad Veracruzana, A.C., en el Registro Federal de las Organizaciones de la Sociedad Civil (CLUNI)&nbsp;&nbsp;<img src="img/pdf-icon.png" width="3%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/48. Otra información de interés público/Acreditación CEMEFI.PDF" target="_blank">Acreditación en Institucionalidad y Transparencia otorgado por el Centro Mexicano para la Filantropía, A.C. (CEMEFI), a la Fundación de la Universidad Veracruzana, A.C.&nbsp;&nbsp;<img src="img/pdf-icon.png" width="3%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/48. Otra información de interés público/Inscripción al Padrón de Beneficencia Pública del estado de Veracruz.pdf" target="_blank">Inscripción de la Fundación de la Universidad Veracruzana, A.C., en el Padrón de Asociaciones Civiles de la Beneficencia Pública del Estado de Veracruz&nbsp;&nbsp;<img src="img/pdf-icon.png" width="3%"/></a></li>
                        <li><a style="text-decoration: none" href="pdf/48. Otra información de interés público/Constancia IVEC Actividad Cultural.pdf" target="_blank">Constancia de realización de actividades culturales emitida por el Instituto Veracruzano de la Cultural (IVEC), a la Fundación de la Universidad Veracruzana, A.C.&nbsp;&nbsp;<img src="img/pdf-icon.png" width="3%"/></a></li>
                    </ul>
                </li>
            </ul>             
    </div> 
</div>

</div>

<!--<div class="separadorSubmenu">
    
</div>
   <div id="comiMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('comiMas','comiMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Acreditaciones y certificaciones</label>
    </div>
    <div id="comiMas" style="display: none">
    <div id="divSubMenuNota">
        <div class="div1">
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('comiMenos','comiMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Acreditaciones y certificaciones</label>
    </div>        
    <ul>
    <li type= disc><b>Ejemplo1</b>
            <ul>                                
                <li type= disc>Ejemplo A</li>
                <li type= disc>Ejemplo B</li>                                
            </ul>    
    </li>
    </ul>
    </div>
</div>

</div>-->

<div class="separadorSubmenu">
    
</div>
    <div id="privMenos" class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('privMas','privMenos');" style="vertical-align: middle; padding-top: .3em;" src="img/desplegar icon.png">&nbsp;&nbsp;<label>Aviso de privacidad</label>
    </div>
    <div id="privMas" style="display: none">
    <div id="divSubMenuNota">
        
    <div class="encabezadoSub">
        <img class="puntero" onclick="mostrarOcultar('privMenos','privMas');" style="vertical-align: middle; padding-top: .3em;" src="img/encoger-icon.png">&nbsp;&nbsp;<label>Aviso de privacidad</label>
    </div>
            <div class="div1Notas" style="width:95%;text-align: justify">
                <p>La Fundación de la Universidad Veracruzana, A.C., con domicilio en la calle Veracruz No. 46, int. 2 y 3, en el Fracc. Pomona en la ciudad de Xalapa, Veracruz, utilizará tus datos personales aquí recabados para crear y actualizar bases de datos, ofrecerte un servicio personalizado y acorde a tus necesidades, dar seguimiento a peticiones, enviar información relativa a nuestros distintos programas; y elaborar estadísticas acumulativas, para realizar investigaciones de mercado y otras actividades relacionadas. En el caso de los datos sensibles recabados, estos se utilizarán para dar seguimiento a los procesos de selección de becarios, y de inscripción a los Cursos de Verano y Centros de Formación Deportiva y programas de capacitación o especialización ofrecidos por la Fundación UV, así como para el contacto con ganadores de Sorteos UV.</p>
                <p><b>Cómo contactarnos:</b><br/>
                Domicilio: Calle Veracruz No. 46, int. 2 y 3, Fracc. Pomona en la ciudad de Xalapa, Veracruz<br/>
                Correo electrónico: contacto@fundacionuv.org<br/>
                Teléfonos: (228) 841 45 80 / 818 41 34</p>
                <p><b>¿Para qué recabamos y utilizamos tus datos personales?</b><br/>
                Los datos personales contenidos en la información confidencial son utilizados para las siguientes finalidades:
                <ul>
                    <li>1. Creación y actualización de bases de datos de beneficiarios de nuestros programas, para ofrecer un servicio personalizado y acorde a las necesidades de nuestros usuarios.</li>
                    <li>2. Seguimiento de peticiones.</li>
                    <li>3. Seguimiento e invitación a Colaboradores vendedores y Compradores de boletos de Sorteos UV que se han acumulado durante las ediciones.</li>
                    <li>4. Transferencia de información de los ganadores del Magno Sorteo UV, Sorteos para Colaboradores UV y Sorteos Soy UV a la Secretaría de Gobernación, Dirección General de Juegos y Sorteos y a la Secretaría de Hacienda y Crédito Público, así como a aquellas autoridades que de manera oficial nos requieran información sobre la entrega de premios.</li>
                    <li>5. Seguimiento del proceso de selección de becarios.</li>
                    <li>6. Seguimiento del proceso de inscripción a los Cursos de Verano, Centro de Formación Deportiva de futbol soccer, futbol americano y baloncesto de la Fundación UV.</li>
                    <li>7. Seguimiento al proceso de inscripción para participar en algún curso de capacitación o especialización organizado por la Fundación UV.</li>
                    <li>8. Envío de información relativa a los distintos programas de la Fundación UV.</li>
                    <li>9. Elaboración de estadísticas acumulativas, para realizar investigaciones de mercado y otras actividades relacionadas.</li>
                    <li>10. Seguimiento del trámite de Acceso, Rectificación, Cancelación y Oposición de Datos Personales.</li>
                </ul>
                </p>
                <p>Para mayor información acerca del tratamiento y de los derechos que puedes hacer valer, accede al <a href="pdf/Aviso de privacidad/Aviso de Privacidad FUV (Extenso).pdf" target="_blank">Aviso de Privacidad completo.</a><br><br><b>Última actualización: 20 de marzo de 2017</b></p>
            </div>
   
        
    <div id="paddinFonfo" />
    </div>  
    
    
      
</div>

</div>          
    
</div>
</div>
    </div>
        
<!-- contenido -->

<!-- Pié de página -->				
<?php include('../template/pie.php'); ?>