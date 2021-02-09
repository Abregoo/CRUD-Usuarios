<?php

class IndexModel {
	
	public function __construct() {
		
	}

	public function actionPerformed($enlace) {
		if(!empty($enlace)) {
			switch ($enlace) {
				case $enlace:
				$module = "View/Modules/" . $enlace . ".php";
				break;
				
				default:
				$module = "View/Modules/Home.php";
				break;
			}
		} else {
			$module = "View/Modules/Home.php";
		}
		return $module;
	}
	
}