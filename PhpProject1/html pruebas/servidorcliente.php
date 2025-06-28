<HTML LANG="es">

<HEAD>
   <TITLE>¡Bienvenido!</TITLE>
</HEAD>

<BODY>

<H1>¡Bienvinido al servicio PCBang!</H1>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    define("valorHora", 3500);
//Validación Variables

    if (
        empty($_REQUEST['usuario']) ||
        empty($_REQUEST['ID']) ||
        empty($_REQUEST['horas']) ||
        empty($_REQUEST['pago']) ||
        empty($_REQUEST['accion'])
    ) {
    echo "<strong style='color:red;'>Por favor completa todos los campos.</strong>";
    }
    $horas = intval($_REQUEST['horas']);
    $valorPago = $horas*valorHora;
    $numPC = rand(1,20);

    //Datos mensaje de bienvenida

    $nombreUsuario = $_REQUEST['usuario'];
    $pago = $_REQUEST['pago'];
    $registro = $_REQUEST['accion'];

    if(strtolower($registro) == "usuario nuevo" ){
        echo "<h2> ¡Bienvenido $nombreUsuario, disfruta tu experiencia!</h2>";
        echo"<p> Tu pago es de: $valorPago, en $pago </p>";
        echo"<p> PC asignada: $numPC </p>";
    }else{
        echo "<h2> ¡Bienvenido de nuevo $nombreUsuario, disfruta tu experiencia!</h2>";
        echo"<p> Tu pago es de: $valorPago, en $pago </p>";
        echo"<p> PC asignada: $numPC </p>";
    }

?>

<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>

</html>