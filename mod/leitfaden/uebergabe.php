<?php require_once("../lib.php");?>

<?php if (function_exists("checkstatus"))
{
   $checkstatus=checkstatus("portal_level");
   if ($checkstatus=5 || $checkstatus>11)
   { echo '
   
<h4>Mod -> Leitfaden -> �bergabe</h4>
<ul type="circle">
<li>15 Minuten vor Sendebeginn hat der nachfolgende Moderator sich beim sendenden Moderator zu melden per Messi das er bereit ist.
</li>

<li>In dieser Zeit kann der nachfolgende Moderator schon die Playlist ausmachen so das bei der �bergabe diese nicht dazwischen funken kann und der connect sauber l�uft. Nach erfolgter �bergabe ist zu achten das der gesendete Moderator bitte die Playlist wieder neu startet.
</li>
<li>�bergabe erfolgt -/+ 3 Minuten vor der vollen Sendestunde. 
</li>
<li>Der Moderator der den Stream an seinen Nachfolger abgibt, hat noch 10 Minuten zu kontrollieren ob die Technik des Nachfolgers stimmt und ob sich alles "sauber" anh�rt. 
</li>
<li>Sollte dem nicht so sein, ist der Moderator und die anwesende Technik zu informieren. 
</li>
<li>Die �bergabe der Gru�box sollte ca 5 Minuten vor �bergabe des Streams erfolgen, im Zweifel muss ein Rest unbearbeitet mit �bergeben werden. 
</li>
<li>Nach erfolgreichem Connect mit dem Stream, unbedingt die Playlist starten, damit bei Freiflug die Playlist sofort startet. ( Eventueller direkter Einbau in die On Air Box)
</li></ul>   
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

