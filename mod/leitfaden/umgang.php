<?php require_once("../lib.php");?>

<?php if (function_exists("checkstatus"))
{
   $checkstatus=checkstatus("portal_level");
   if ($checkstatus=5 || $checkstatus>11)
   { echo'
   
<u><b>Mod -> Leitfaden -> Umgang</b></u><br /><ul>
<li>Es kann immer einmal vorkommen, dass einige unliebsame Botschaften in der Grussbox landen.
Beleidigende Aussagen oder einfach nur Anspielungen.</li>
<li>Unerw�nschte Gr��e und Spam sind in der Gru�box zu bannen ohne dabei Ansagen �ber den Stream zu machen.</li>
<li>Unklare Textpassagen sind entsprechend kommentarlos zu l�schen.</li><br />
 
   
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

