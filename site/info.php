<?php
	if(isset($_SESSION['mess'])) {
		$text = $_SESSION['mess']['text'];
		echo $text . '<br>';

		unset($_SESSION['mess']);
	}

	if(!empty($_SESSION['messReg'])) {
		foreach($_SESSION['messReg'] as $k=>$v) {
			$fieldReg[$k] = $v;
		}

		unset($_SESSION['messReg']);
	}
?>