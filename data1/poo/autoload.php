<?php 

class Autoload {
	private function loadClass($class) {
		$path=str_replace('\\', '/', $class).'.php';
		if (file_exists($path)) {
			require_once $path;
		}
	}

	public function load() {
		spl_autoload_register(array($this, 'loadClass'));
	}

}


 ?>