<?php
	function test_input($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
		return $data;
	}

	function redirect($url) {
		ob_clean();
		header('Location:'.$url);
		ob_end_flush();
		die();
	}
?>