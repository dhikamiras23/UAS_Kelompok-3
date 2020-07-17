<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'id14363643_deryali';
$db_pass		= 'Chiliarch_330';
$db_database	= 'id14363643_baru'; 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>