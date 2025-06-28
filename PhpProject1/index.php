<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <!-- <meta> sirve para metadatos-->
        <meta charset="UTF-8"> 
        <title></title>
    </head>
    <body>
        <?php
        echo '<p>Hola desde la UM</p>';
        
        echo '==========VARIABLE============='."<br>" ;       
        //Variable simples
        $a = 137;
        $b = "9.99";
        $c = "ejemplo variables PHP";
        // impresión
        echo $a."<br>".$b."<br>".$c."<br>";

        if ($a > $b)
        //{
           print("$a > $b\n\n");
        //}
        else if($a == $b)
        {
           print("$a = $b\n\n");

        }
        else
        {
           print("$a < $b\n\n");
            
        }
        echo "<br>"."<br>" ;       

        //Arreglos
        $vector1 = array();
        $vector2 = array('php', 'python', 'ruby', 'javaScript');
        echo '==========ARREGLO============='."<br>" ;       
        echo 'Figuras: [' ;       
        foreach( $vector2 as $vec)
        {
            echo 'Figura actual '.$vec.", " ;       
        }
        echo ']'."<br>"."<br>" ;       
        // Esto devolverá el valor "python”
        echo "Posición 2".$vector2[1]."<br>.<br>";
        
        //Arreglo asociativo
        $persona = array(
        'nombre'=>'Hipatia', 
        'apellido'=>'Pi', 
        'direccion'=>'calle ciencia', 
        'nacionalidad'=>'egipcia'
        );
        echo '==========ARREGLO ORGINAL============='."<br>" ;       
        echo 'Figuras: [' ;       
        foreach( $persona as $p)
        {
            echo 'Figura actual '.$p.", " ;       
        }
        echo ']'."<br>"."<br>" ;       
        // esto nos devolverá Pi
        echo "clave apellido-->".$persona['apellido']."<br>";
        
        //Editar arreglo
        $figuras = array('cuadrado', 'triángulo', 'circulo');
        echo '==========ARREGLO ORGINAL============='."<br>" ;       
        echo 'Figuras: [' ;       
        foreach( $figuras as $fig)
        {
            echo 'Figura actual '.$fig.", " ;       
        }
        echo ']'."<br>"."<br>" ;       

        echo '==========REEMPLAZO============='."<br>" ;       
        $figuras[1] = 'rectángulo';
        // quedando ('rectángulo', 'triángulo', 'circulo')
        echo 'Figuras: [' ;       
        foreach( $figuras as $fig)
        {
            echo $fig.", " ;       
        }
        echo ']'."<br>"."<br>" ;       
        
        echo '===========ADICIÓN================'."<br>" ;       
        array_push($figuras, 'pentágono');
        // quedando ('rectángulo', 'triángulo', 'circulo', 'pentagono')
        echo 'Figuras: [' ;       
        foreach( $figuras as $fig)
        {
            echo $fig.", " ;       
        }
        echo ']'."<br>"."<br>" ;       

        echo '============INSERCIÓN POR DELANTE==============='."<br>" ;       
        array_unshift($figuras ,'pentágono');
        // quedando ('pentagono', 'rectángulo', 'triángulo', 'circulo')
        echo 'Figuras: [' ;       
        foreach( $figuras as $fig)
        {
            echo $fig.", " ;       
        }
        echo ']'."<br>"."<br>" ;       
        
        echo '==========ELIMINACIÓN DEL ÚLTIMO================='."<br>" ;       
        array_pop($figuras);
        // quedando ('pentagono', 'rectángulo', 'triángulo')
        echo 'Figuras: [' ;       
        foreach( $figuras as $fig)
        {
            echo $fig.", " ;       
        }
        echo ']'."<br>"."<br>" ;       
        
        echo '========ELIMINACIÓN DEL PRIMERO==================='."<br>" ;       
        array_shift($figuras);
        // quedando ('rectángulo', 'triángulo')
        echo 'Figuras: [' ;       
        foreach( $figuras as $fig)
        {
            echo $fig.", " ;       
        }
        echo ']'."<br>"."<br>" ;       
        
        echo '========ELIMINACIÓN DE CUALQUIER POSICIÓN: ANTES==================='."<br>" ;       
        print_r($persona);
        echo "<br>" ;       
        array_splice($persona, 2, 1);
        //quedando $persona = array('nombre'=>'Hipatia', 'direccion'=>'calle ciencia', 'nacionalidad'=>'egipcia');
        echo '========ELIMINACIÓN DE CUALQUIER POSICIÓN: DESPUÉS==================='."<br>" ;       
        print_r($persona);
        echo "<br>"."<br>" ;       
        
        //Tipos de Ciclos
        echo '==========ORDENACIÓN: FIGURAS==============='."<br>" ;       
        sort($figuras);
        print_r($figuras);
        echo "<br>"."<br>" ;       
        
            echo '==========ORDENACIÓN: PERSONA==============='."<br>" ;       
        sort($persona);
        print_r($figuras);
        ?>
        
        <BR>
        <hr><hr>
        <BR>
        <H1>Conversor de euros a pesetas</H1>
        <!--lLAMADO DE FORMULARIO--><!--POST:enviar información al servidor: crear o actualizar un recurso -->
        <FORM ACTION="Servicio.php" METHOD="POST">
            <!--Action: enviar al php1-->
        <P>Cantidad en euros:
        <INPUT TYPE="TEXT" NAME="euros" SIZE="10">
        <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="convertir">
        </P>

        </FORM>
        
        <BR>
        <hr><hr>
        <BR>
        
        <H1>Inserción de vivienda</H1>

        <P>Introduzca los datos de la vivienda:</P>

        <FORM CLASS="borde" ACTION="Servicio2.php" METHOD="POST" ENCTYPE="multipart/form-data">

        <P><LABEL>Tipo de vivienda:</LABEL>
        <SELECT NAME="tipo">
           <OPTION VALUE="Piso" SELECTED>Piso
           <OPTION VALUE="Adosado">Adosado
           <OPTION VALUE="Chalet">Chalet
           <OPTION VALUE="Casa">Casa
        </SELECT></P>

        <P><LABEL>Zona:</LABEL>
        <SELECT NAME="zona">
           <OPTION VALUE="Centro">Centro
           <OPTION VALUE="Nervión">Nervión
           <OPTION VALUE="Triana">Triana
           <OPTION VALUE="Aljarafe">Aljarafe
           <OPTION VALUE="Macarena">Macarena
        </SELECT></P>

        <P><LABEL>Dirección:</LABEL>
        <INPUT TYPE="TEXT" NAME="direccion"></P>
        <P><LABEL>Nómero de dormitorios:</LABEL>        
        
        <BR>
        <hr><hr>
        <BR>
        
        <INPUT TYPE="radio" NAME="ndormitorios" VALUE="1">1
        <INPUT TYPE="radio" NAME="ndormitorios" VALUE="2">2
        <INPUT TYPE="radio" NAME="ndormitorios" VALUE="3" CHECKED>3
        <INPUT TYPE="radio" NAME="ndormitorios" VALUE="4">4
        <INPUT TYPE="radio" NAME="ndormitorios" VALUE="5">5</P>

        <P><LABEL>Precio:</LABEL>
        <INPUT TYPE="TEXT" NAME="precio"> &euro;</P>

        <P><LABEL>Tamaño:</LABEL>
        <INPUT TYPE="TEXT" NAME="tamano"> metros cuadrados</P>

        <P><LABEL>Extras (marque los que procedan):</LABEL>
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Piscina" CHECKED>Piscina
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Jardín" CHECKED>Jardín
        <INPUT TYPE="checkbox" NAME="extras[]" VALUE="Garage" CHECKED>Garage</P>

        <P><LABEL>Foto:</LABEL>
        <INPUT TYPE="HIDDEN" NAME="MAX_FILE_SIZE" VALUE="102400">
        <INPUT TYPE="FILE" NAME="foto"></P>

        <P><LABEL>Observaciones:</LABEL>
        <TEXTAREA NAME="observaciones" COLS="50" ROWS="5"></TEXTAREA></P>

        <P><INPUT TYPE="submit" NAME="insertar" VALUE="Insertar vivienda"></P>
        </FORM>
        
    </body>
</html>
