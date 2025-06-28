<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?PHP
           $insertar = $_REQUEST['insertar'];
           if (isset($insertar)){ //Verificar si una variable está definida y no es "null"
                // Obtener valores introducidos en el formulario
                $tipo = $_REQUEST['tipo'];
                $zona = $_REQUEST['zona'];
                $direccion = $_REQUEST['direccion'];
                $ndormitorios = $_REQUEST['ndormitorios'];
                $precio = $_REQUEST['precio'];
                $tamano = $_REQUEST['tamano'];
                $extras = $_REQUEST['extras'];
                $observaciones = $_REQUEST['observaciones'];
                
                print ("<H1>Inserción de vivienda</H1>\n");

                // Comprobar que se han introducido todos los datos obligatorios
                $errores = "";
                if (trim($direccion) == ""){
                       $errores = $errores . " <LI>Se requiere la dirección de la vivienda\n";
                }
                if (!is_numeric($tamano)){
                       $errores = $errores . " <LI>El tamaño debe ser un valor numérico\n";
                }
                if (!is_numeric($precio)){
                       $errores = $errores . " <LI>El precio debe ser un valor numérico\n";
                }

                // Subir fichero con la foto de la vivienda
                $copiarFichero = false;
                // Copiar fichero en directorio de ficheros subidos
                // Se renombra para evitar que sobreescriba un fichero existente
                // Para garantizar la unicidad del nombre se añade una marca de tiempo

                if (is_uploaded_file ($_FILES['foto']['tmp_name'])) {
                 $nombreDirectorio = "./Fotos/";
                 $nombreFichero = $_FILES['foto']['name'];
                 $copiarFichero = true;
                // Si ya existe un fichero con el mismo nombre, renombrarlo
                 $nombreCompleto = $nombreDirectorio . $nombreFichero;
                 if (is_file($nombreCompleto))
                 {
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                 }
                } // El fichero introducido supera el límite de tamaño permitido
                else if ($_FILES['foto']['error'] == UPLOAD_ERR_FORM_SIZE) {
                        $maxsize = $_REQUEST['MAX_FILE_SIZE'];
                        $errores = $errores . " <LI>El tamaño del fichero supera el límite permitido ($maxsize bytes)\n";
                }// No se ha introducido ningún fichero
                else if ($_FILES['foto']['name'] == "") {
                         $nombreFichero = '';

                } // El fichero introducido no se ha podido subir 
                else{
                         $errores = $errores . " <LI>No se ha podido subir el fichero\n";

                }
                // Mostrar errores encontrados
                if ($errores != "") {
                         print ("<P>No se ha podido realizar la inserción debido a los siguientes errores:</P>\n");
                         print ("<UL>\n");
                         print ($errores);
                         print ("</UL>\n");
                         print ("<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>\n");
                }
                else { // Mover foto a su ubicación definitiva
                    if ($copiarFichero){
                          move_uploaded_file ($_FILES['foto']['tmp_name'], $nombreDirectorio . $nombreFichero);
                    }

                    print ("<P>Estos son los datos introducidos:</P>\n");
                    print ("<UL>\n");
                    print ("   <LI>Tipo: $tipo\n");
                    print ("   <LI>Zona: $zona\n");
                    print ("   <LI>Dirección: $direccion\n");
                    print ("   <LI>Número de dormitorios: $ndormitorios\n");
                    print ("   <LI>Precio: $precio &euro;\n");
                    print ("   <LI>Tamaño: $tamano metros cuadrados\n");
                    print ("   <LI>Extras: ");

                    if (!empty($extras)){
                        foreach ($extras as $extra){
                              print ($extra . " ");
                        }
                        print ("\n");
                    }

                    if ($copiarFichero == true){
                          print (" <LI>Foto: <A TARGET='_blank' HREF='$nombreDirectorio$nombreFichero'>$nombreFichero</A>\n");
                    }
                    else{
                          print (" <LI>Foto: (no hay)\n");
                    }

                       print (" <LI>Observaciones: $observaciones\n");
                       print ("</UL>\n");
                       print ("<P>[ <A HREF='index.php'>Insertar otra vivienda</A> ]</P>\n");
                }
            }

?>
</body>
</html>
        