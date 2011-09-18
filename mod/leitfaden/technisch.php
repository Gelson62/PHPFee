<?php require_once("../lib.php");?>

<?php if (function_exists("checkstatus"))
{
   $checkstatus=checkstatus("portal_level");
   if ($checkstatus=5 || $checkstatus>11)
   { echo '
   
<h4>Mod -> Leitfaden -> Technische Grundlagen</h4>
<ul type="circle">

<li>Ab und an sind �nderungen in der Sendesoftware n�tig. Diese sind SOFORT umzusetzen. Informiert wird per E-Mail 
</li>
<li>Bei �nderungen an der Sendesoftware oder Sendetechnik sind die Verantwortlichen Administratoren zu verst�ndigen, damit Sie die Einstellungen auf dem Casting Stream �berpr�fen k�nnen und die Freigabe erteilen.
</li>
<li>Die Verantwortlichen schneiden stichprobenartig den Stream mit, um nach der Sendung dem Moderator Verbesserungsvorschl�ge zukommen zu lassen. 
</li>
<li>Jeder Moderator MUSS seine Technik auf dem Castingstreams (8050 oder 8052) vor Sendebeginn �berpr�fen. 
</li>
<li>Wenn der Moderator NICHT vor einer Sendung ist, und er m�chte den Castingstream nutzen, ist der Bewerbungsverantwortliche zu informieren 
</li>
<li>Sollten einmal kurzfristig Probleme auftreten, sollte der sendende Moderator auf jeden Fall entweder per Telefon oder �hnlichen Mitteln informiert werden. 
</li>
<li>Wenn er informiert wurde, schreibt er bitte in seinen Messinamen :" Problem bekannt " 
</li>
<li>Ist das Problem nicht auf die schnelle behebbar,muss schnellstm�glich ein Ersatz durch den ausfallenden Moderator gefunden werden. Au�erdem ist im letzten Schritt die Sendeplanleitung zu informieren.
</li>
<li>Jeder Moderator sollte sich auch ausgiebig mit seiner Sendetechnik auseinandersetzen da die Verantwortlichen nicht immer sofort greifbar sind. Bei schwierigen Problemen bitte Termine ausmachen mit den Verantwortlichen da es dann etwas l�nger dauern k�nnte. Es ist dann immer etwas problematisch wenn man gesagt bekommt keine Zeit, weil es ja wirklich so sein kann. ( Also nicht gleich b�se sein ).
</li></ul><br />
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

