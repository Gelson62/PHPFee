<?php require_once("../lib.php");?>

<?php if (function_exists("checkstatus"))
{
   $checkstatus=checkstatus("portal_level");
   if ($checkstatus=5 || $checkstatus>11)
   { echo '
   
<h4>Mod -> Leitfaden -> Grundlagen</h4>
<ul>
<li>Das Auftreten des Moderatoren sollte bei jeder Sendung eine h�chstm�gliche Proffesionalit�t sein. 
</li>
<li>Das PW f�r den TS f�r unregistrierte ist bei den Bewerbungs-Admins zu holen. In unregelm��igen Abst�nden wird es ge�ndert. Als registrierter Benutzer kommt man nach wie vor ohne Probleme in den TS. 
</li>
<li>Solltet Ihr von H�rern im Chat angesprochen werden, so verweist bitte an die Bewerbungsadmins-Admins. 
</li>
<li>
im MSN-Messi w�re es w�nschenswert, wenn im Namen oder der Statusinformation unsere URL eingetragen ist 
</li>
<li>im Profil auf unserer HP ist auf jeden Fall die eMail-Addy von Discollection eingetragen sein, keine andere, private 
</li>
<li>Profile auf der HP sollen vollst�ndig ausgef�llt werden. 
</li>
<li>Das Streamen mit Aktivierter Titelanzeige ist zu unterlassen. Stattdessen bitte die Zeichenkette "discollection-radio.de" eintragen. 
</li>
<li>Moderatoren haben sich neutral gegen�ber den Zuh�rern zu verhalten, Privates sollte auch privat bleiben, da es sich sonst negativ auf das Radio auswirkt und dann nicht mehr privat ist. Gleiches gilt f�r das Verh�ltnis zwischen Moderatoren untereinander, Neutralit�t ist zwingend zu wahren. Auch Gr��e an Lebenspartner �ber den Stream sind zu unterlassen. 
</li>
<li>W�hrend der Sendung sollten nur die Verantwortlichen den Moderator bei wirklich massiven Problemen anschreiben wenn etwas falsch l�uft. (z.B. Mic stimmt nicht oder Musik klingt etwas unsauber ect...) um es vielleicht nachzuregeln, wenn m�glich.
</li>
<li>Unstimmigkeiten sind pers�nlich zu kl�ren und nicht �ber Foreneintr�ge 
</li>
<li>Wer den Nonstop kickt, muss nicht mehr im Forum posten, hier gilt eindeutig �Wer zuerst kommt, malt zuerst�. Wer aber den Nonstop kickt, muss bis zu, Beginn der n�chsten Sendung und nicht nur f�r eine Stunde und R�ck�bergabe an Nonstop. 
</li><li>Anliegen an Andy per E-Mail an ihn schicken, da sonst die Gefahr besteht, dass Dinge untergehen, was nie b&ouml;se gemeint ist, aber die Informationen, die auf ihn einprasseln sind einfach sehr massiv. (Wendet euch zuerst an die Entsprechenden Verantwortlichen -> Mitwirkende)</li>
   <li>Wir bitten noch einmal eindringlich nicht in Gerede zu verfallen, wenn etwas seltsam erscheint, sondern die Admins anzusprechen. Alle Admins stehen f�r R�ckfragen jederzeit zur Verf�gung.</li></ul>
 
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

