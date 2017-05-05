<?php 

require_once 'view.php';
/**
* 
*/
class berandaUI extends view
{
	
	public function tampilForm()
	{
		include_once 'pages/konfigurasi.php';
		$this->end();
	}
}


 ?>