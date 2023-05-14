<!DOCTYPE html>
<html>
	<head>
		<title>Chương trình tải tập tin CSV</title>
		<script>
			function loadCSV() {
				var fileInput = document.getElementById('csvFile');
				var file = fileInput.files[0];
				var formData = new FormData();
				formData.append('csvFile', file);
				var xhr = new XMLHttpRequest();
				xhr.open('POST', 'process.php', true);
				xhr.onreadystatechange = function() {
					if (xhr.readyState === 4 && xhr.status === 200) {
						var resultDiv = document.getElementById('result');
						resultDiv.innerHTML = xhr.responseText;
					}
				};
				xhr.send(formData);
			}
		</script>
	</head>
	<body>
		<h1>Chương trình tải tập tin CSV</h1>
		<form id="csvForm" enctype="multipart/form-data">
			<input type="file" id="csvFile" name="csvFile" accept=".csv">
			<button type="button" onclick="loadCSV()">Tải lên</button>
		</form>
		<div id="result"></div>
	</body>
</html>
