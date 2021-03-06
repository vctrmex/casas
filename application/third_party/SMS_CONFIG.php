<?php
// - Este archivo es su licencia para acceder al servicio remoto de env�o de SMS, queda bajo su responsabilidad el uso que le de al mismo y queda estrictamente prohibida su distribuci�n y/o comercializaci�n.
//Estos son los par�metros de configuraci�n, y deber�n ser establecidos conforme las instrucciones del personal t�cnico de Auronix.

define('HOST','www.calixtaondemand.com');
define('PORT',80);
define('TIMEOUT',40);
define('CLIENTE',47942);
//define('PASSWORD','a96d0e1ffc3a0461a70ca5cc328b3bcafa118163e54bc6797c7f465dbc90662c');
define('PASSWORD','f558fc63a34656c6b74e204300ad066f6bc33858eba4538dddcea0f819fd05b0');
define('USER','vctr.31@hotmail.com');

function checkValidSession(){
	//Esta funci�n debe devolver TRUE cuando la sesi�n actual es v�lida para env�o de SMS, y FALSE en cuanquier otro caso.
	return true;
}
?>
