<?php require_once("../lib.php");?>

<?php if (function_exists("checkstatus"))
{
   $checkstatus=checkstatus("portal_level");
   if ($checkstatus=5 || $checkstatus>11)
   { echo '
   
<h4>Mod -> Leitfaden -> On Air</h4>
<ul type="circle">
<li>Der Stream darf nur f�r Radiointerne Werbung genutzt werden. Andernfalls kann der Moderator aus dem Team ausgeschlossen werden 
</li>

<li>10 bis 20 Uhr sollte der kommerzielle Stil �berwiegen. 
</li>
<li>In diesem Sinne sollen die H�rer informiert werden �ber aktuelle Geschehnisse und Hintergrundinformationen. 
</li>
<li>Zu dieser Zeit soll nur in den ersten oder letzten 20 Sekunden in einen Titel reingesprochen werden 
</li>
<li>Folgende Musikrichtungen sind in dieser Zeit unerw�nscht: House, R\'n\'B, Aggressiver Hip hop Deutsch(Sido....)Englisch(50 Cent....) Soul, Techno mit mehr als 140 bps, Hard-Rock, Ska, Metal, Comedy Sendungen wie "Der Kleine Nils" ,"Micheal Mittermeier" oder "Mario Barth" sowie andere. Mehr als 2 Titel pro Genre das eben genannt wurde, sind verboten.
</li>
<li>Ab 20 Uhr gilt der altbekannte �Webradiostil�. 
</li>
<li>Das Verhalten vor dem Mikrophon sollte als ��ffentlichkeitstauglich� angesehen werden.Sowohl im Auftreten, als auch in �usserungen.
</li>
<li>"weiche" und harte Drogen sowie Alkohol in jeglicher Menge sind w�hrend des Streamens verboten. Wird ein Moderator erwischt, kann er aus dem Team ausgeschlossen werden 
</li>
<li>Kaffee, Tee und Tabak stehen zwar in dem Ruf, eine gewisse berauschende Wirkung zu haben, werden hiervon allerdings nicht ber�hrt. 
</li>
<li>Gewaltverherrlichende, sexuelle, rassistische und sonstige Aussagen fernab der �ffentlichen Meinung und der allgemeinen Moral sind verboten. 
</li>
<li>Jeder Moderator hat zwingend darauf zu achten einen wechselnden Musiktitel anzubieten. 
</li>
<li>Jeder Moderator m�chte immer darauf achten, wie viel Zuh�rer gerade zuh�ren, sich dementsprechend zu verhalten und auf die H�rer eingehen.Sam Benutzer k�nnen dieses direkt im Sam einstellen, f�r alle anderen empfehlen wir die Software "Radio Toolbox" 
</li>
<li>Die Musik ist in einem gemischtem Verh�ltnis gew�nscht, dass hei�t 80er, 90er und das Beste von heute, alles eben bisschen gemischt. 
</li>
<li>Ab 24 Uhr ist Platz f�r Sondersendungen jeglicher Art 
</li>
<li>Das PW f�r die Playlist wird in unregelm��igen Abst�nden ge�ndert, oder direkt in die Onairbox integriert. Neuer Benutzername: nanotechnologie, Passwort: playlist 
</li>
<li>Das durchsagen von anderen E-mail adressen au�er der eigenen, sind verboten.</li>  </ul> 
<br />
   
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

