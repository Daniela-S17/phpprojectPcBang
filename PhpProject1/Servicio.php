<HTML LANG="es">

<HEAD>
   <TITLE>Conversor de euros a pesetas. Resultados del formulario</TITLE>
</HEAD>

<BODY>

<H1>Conversor de euros a pesetas</H1>

<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

   define ("EUROPTS", 4200);

   $dolar = $_REQUEST['euros'];
   if ($dolar == "")
   {
      print ("<P>Debe introducir una cantidad</P>\n");
   }
   else
   {
      $pesos = $dolar*EUROPTS;
      print ("<P>$dolar dólares(s) equivale(n) a $pesos pesos</P>\n");
   }
   
?>

<P>[ <A HREF='javascript:history.back()'>Volver</A> ]</P>

</html>



