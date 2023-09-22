<?php
 require 'includes/header.php';
?>

      <main class="contenedor seccion">
        <h1>Contacto</h1>

        <picture>  
            <img src="build/img/1.webp" alt="Imagen Contacto">

        </picture>

        <h2>Llene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion Personal</legend>


                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu nombre" id="nombre"> 
           
                <label for="email">E-Mail</label>
                <input type="email" placeholder="Tu email" id="email"> 
                
                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telefono"> 
           
                <label for="mensaje">Mensaje: </label>
                <textarea id="mensaje"></textarea>  
            </fieldset> <!--TERMINACION DE DATOS PERSONALES-->
            
            <fieldset>
                <legend>Informacion sobre el servicio </legend>
                
                <label for="opciones">Tipo de evento </label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">FAMILIAR</option>
                    <option value="Vende">SOCIAL</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto"> 
            </fieldset> <!--TERMINACION INFORMACION PROPIEDAD-->

            <fieldset>
                <legend>Contacto</legend>

                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">
              
                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email"> 
                </div>

                <p>Si eligió Telefono, elija la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha"> 
           
                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="08:00" max="18:00"> 
           
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">

        </form>

    </main>

<?php
require 'includes/footer.php';
?>