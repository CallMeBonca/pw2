<?php 

require_once 'View.php';
/**
* 
*/
class KonfigurasiUI extends View
{
	
	public function tampilLengkap()
	{
		include_once 'pages/konfigurasi.php';
		$this->end();
	}
}



 ?>