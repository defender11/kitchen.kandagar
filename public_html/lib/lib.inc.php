<?php
	$dir = '/home/user/www/kitchen.kandagar/public_html/';

	function clearInt($data) {
		return abs((int) $data);
	}

	function clearStr($data) {
		return trim(strip_tags($data));
	}

	function clearStrMysql($data) {
		return mysqli_escape_string(trim(strip_tags($data)));
	}

	function scanForOmniBox($dir) {
		$tempDir = scandir($dir);
		$tempArr = array();

		foreach ($tempDir as $val) {
			if ($val == '..' ||
				$val == '.' ||
				$val == "index.php" ||
				$val == "js" ||
				$val == "css" ||
				$val == "head.php" ||
				$val == "footer.php" ||
				$val == "toMD5.php" ||
				$val == "basic" ||
				$val == ".htaccess" ||
				$val == "admin" ||
				$val == "composer.phar" ||
				$val == "fonts" ||
				$val == "NULL" ||
				$val == "lib") {
				
				unset($val);
			}
			$tempArr[] = $val;
		}
		return $tempArr;
	}

	function scanDirectory($data) {
		$tempDir = scandir($data);
	}

?>