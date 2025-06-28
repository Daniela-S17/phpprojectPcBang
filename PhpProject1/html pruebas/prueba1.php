<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">

        <title></title>
    </head>

    <body>

        <H1> Registro de acceso a computadores </H1>

        <form action="servidorcliente.php" method="post">
            <label> Nombre: </label>
            <input type="text" name="usuario" required>
            <br>
            <br>
            <label> ID: </label>
            <input type="text" name="ID">
            <br>
            <br>
            <label>Cantidad de horas (Min: 2h - Max:8h)</label> 
            <input type="number" id="horas" name="horas" min="2" max="8" required>
            <br>
            <br>
            <label>Seleccione su método de pago</label>
            <br>
            <input type="radio" name="pago" value="Efectivo" required> Efectivo<br>
            <input type="radio" name="pago" onclick="mostrarTelefono()" value="Pago en línea" required > Pago en línea<br>

            <div id="campoTelefono" style="display:none;">
                <label>Número telefónico para pago digital:</label><br>
                <input type="tel" name="telefono"><br><br>
            </div>
            <br>
            <br>
            <input type="submit" name="accion" value="Usuario nuevo" required>
            <input type="submit" name="accion" value="Usuario registrado" required>
        </form>
        <br>
        <hr>
        <hr>

        <br>

        <h1> Servicio de cafeteria cibercafé PCBang </h1>

        <form action="servidorServiciosAdicionales.php" method="post" ENCTYPE="multipart/form-data">
           <input type="checkbox" id="combo1" name="comida[]" value="c1">
            <label for="combo1"> Combo 1  </label>
            <label>  Cantidad</label>
            <input type="number" id="CANTIDAD" name="cantidad1" value= 0 min="0" max="5" required>
            <p> Valor: $3.700</p><br>
            <input type="checkbox" id="combo2" name="comida[]" value="c2">
            <label for="combo2">Combo 2</label>
            <label>  Cantidad</label>
            <input type="number" id="CANTIDAD" name="cantidad2" value= 0 min="0" max="5" required>
            <p> Valor: $5.000</p><br>
            <input type="checkbox" id="Postre" name="comida[]" value="c3">
            <label for="Postre"> Postre</label>
            <label>  Cantidad</label>
            <input type="number" id="CANTIDAD" name="cantidad3" value= 0 min="0" max="5" required>
            <p> Valor: $2.000</p><br>
            <input type="checkbox" id="Bebida" name="comida[]" value="c4">
            <label for="Bebida"> Bebida </label>
            <label>  Cantidad</label>
            <input type="number" id="CANTIDAD" name="cantidad4" value= 0 min="0" max="5" required>
            <p> Valor: $2.000</p><br>
            <br>
            <br>
            <label>Requiere de servicio a domicilio:</label>
            <br>
            <br>
            <input type="radio" name="Domicilio" value="siDomicilio" required> Sí
            <input type= "radio" name="Domicilio" value="NoDomicilio" required >No
            <br>
            <br>
            <input type="submit" name="pedido" value="Enviar pedido">

            <br>
            <br>
            <hr>
            <hr>
            <br>

            <h2> ¿Tienes algún problema?</h2>
            <br>
            <p>Reporta algún conflicto en tu PC o servicio</p>
            <br>

       
            <label>Tipo de conflicto:</label>
            <SELECT name="tipo" id="tipo" onchange="mostrarFormulario()">
                <option value="" SELECTED>
                <OPTION value="PC"> PC
                <option value="Cafeteria"> Cafetería
                <OPTION VALUE = "General"> Servicio General
            </SELECT>
            <br>
            <br>

            <!--Formularios para cada conflicto-->
            <div id="formularioPC" style="display:none;">
                <label>Número PC Asignado:</label>
                <input type="number" name="PCNum"><br><br>
                <label>Daños: </label><br>
                <input type="checkbox" id="Sin_internet" name="reparar[]" value="r1">
                <label for="Sin_internet"> Sin internet</label>
                <input type="checkbox" id="Perifericos_rotos" name="reparar[]" value="r2">
                <label for="Perifericos_rotos">Perifericos rotos</label>
                <input type="checkbox" id="Otro" name="reparar[]" value="r3">
                <label for="Otro"> Otro</label><br>

                <P>
                    <LABEL>Foto:</LABEL>
                        <INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
                        <INPUT TYPE="FILE" NAME="foto">
                </P>

                <P>
                    <LABEL>Observaciones:</LABEL>
                        <TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA>
                </P>

                <P><INPUT TYPE="submit" NAME="QuejaIT" VALUE="Enviar peticion IT"></P>

            </div>

            <div id="formularioCafeteria" style="display:none;">
                <label>Número PC Asignado:</label><br>
                <input type="number" name="PCNum"><br><br>
                <label>¿Qué sucedio?: </label><br>
                <input type="checkbox" id="Sin_pedido" name="cafeteria[]" value="cafe1">
                <label for="Sin_pedido"> Mi pedido no llegó</label>
                <input type="checkbox" id="Comida_desagradable" name="cafeteria[]" value="cafe2">
                <label for="Comida_desagradable">Perifericos rotos</label>
                <input type="checkbox" id="Otro" name="cafeteria[]" value="cafe3">
                <label for="Otro"> Otro</label><br>

                <P>
                    <LABEL>Foto:</LABEL>
                        <INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
                        <INPUT TYPE="FILE" NAME="foto">
                </P>

                <P>
                    <LABEL>Observaciones:</LABEL>
                        <TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA>
                </P>

                <P><INPUT TYPE="submit" NAME="Servicio_Cafeteria" VALUE="Enviar queja"></P>

            </div>

            <div id="formularioSugerencias" style="display:none;">
                <label>Número PC Asignado:</label><br>
                <input type="number" name="PCNum"><br><br>
                <label>Cuentanos cómo podemos mejorar: </label><br>
                        <TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA>

                <P><INPUT TYPE="submit" NAME="sugerencias" VALUE="Enviar"></P>

            </div>

        </form>

        <script>
            function mostrarTelefono() {
                document.getElementById("campoTelefono").style.display = "block";
            }

            function mostrarFormulario(){
                const tipo = document.getElementById("tipo").value;

                document.getElementById("formularioPC").style.display = "none";
                document.getElementById("formularioCafeteria").style.display = "none";
                document.getElementById("formularioSugerencias").style.display = "none";

                // Muestra el formulario correspondiente
                if (tipo === "PC") {
                    document.getElementById("formularioPC").style.display = "block";
                } else if (tipo === "Cafeteria") {
                    document.getElementById("formularioCafeteria").style.display = "block";
                } else if (tipo === "General") {
                    document.getElementById("formularioSugerencias").style.display = "block";
                }

            }
        </script>

    </body>
</html>