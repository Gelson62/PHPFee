<?php require_once("../lib.php");?>

<?php if (function_exists("checkstatus"))
{
   $checkstatus=checkstatus("portal_level");
   if ($checkstatus=5 || $checkstatus>11)
   { 
include("./lib/lib.php");   
show_fundus();
echo '<br /><br /> Wenn ihr interesse an Geschenken habt, wendet euch bitte pers�nlich an die Fundusadmins, und �bermittelt die Entsprechende ID des Geschenkes.
';
   
   }
   else
   {
   echo '<h1>Zugriff verweigert.</h1> ';
   exit();
   }
}
else
{
echo '<h1>Zugriff verweigert.</h1> ';
exit();
}


?>




