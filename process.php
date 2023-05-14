<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$csvFile = $_FILES['csvFile']['tmp_name'];
		$csvData = file_get_contents($csvFile);
		echo $csvData;
	}
?>