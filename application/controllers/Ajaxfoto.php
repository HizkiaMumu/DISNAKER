<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajaxfoto extends CI_Controller {
		
	public function __construct(){
		parent::__construct();
		//$this->input->is_ajax_request() or die('Ajax Request Only');
	}

	public function poto(){


		define('UPLOAD_PATH', 'foto/');
		if (!$_POST['data']) { exit; }
		 
		$photo = $_POST['data'];

			if (preg_match('/^data:image\/(jpg|jpeg|png)/i', $photo, $matches)) {
				$type = $matches[1];
			} else {
				return false;
			}
			
			// Remove the mime-type header
			// Remove the mime-type header
			$split=explode('base64,', $photo);
			$data=array_reverse($split);
			reset($data);
			
			// Use strict mode to prevent characters from outside the base64 range
			$image = base64_decode($data[0], true);
			
			//	die(var_dump($image));
			
			if (!$image) { return false; }
			
			$image = array(
				'data' => $image,
				'type' => $type
			);




		if (!$image) { exit; }
		// Just use a unique ID for the filename for this example
		$filename = uniqid() . '.' . $image['type'];
		if (is_writable(UPLOAD_PATH) && !file_exists(UPLOAD_PATH . $filename)) {
			if (file_put_contents(UPLOAD_PATH . $filename, $image['data']) !== false) {
				echo "1";
				// $isi = mysql_query("INSERT INTO pencaker SET 
				// 			NIK='0123123', 
				// 			NAMA='Herma Djumafo', 
				// 			TGLLAHIR='2018-02-02', 
				// 			ALAMAT = 'Sepinggan Baru 123', 
				// 			DTINGKAT2='$filename'");
			} else {
				echo "0";
			}
		} else {
			echo "0";
		}


	}

}

?>