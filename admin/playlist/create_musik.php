<?php 
if (function_exists("allcheck"))
{ allcheck("admin_playlist","playlist_level",10);
include("./lib/lib.php"); }
else
{exit(); }
echo 'Musik bitte ausschlie�lich �ber FTP Hochladen. Entsprechender Account wird von Webmaster eingerichtet.';

?>