<html>
	
	<head>
		<title>Upload >>> </title>
	</head>
	<body>
		<form method="post" action="/upload/image" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="file" name="fileUpload">
			<button type="submit"> Upload </button>
		</form>
	</body>
</html>