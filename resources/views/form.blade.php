<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

<form action="/sapa" method="POST">
	@csrf
	<input type="text" name="nama">
	<button type="submit">masuk</button>
</form>


</body>
</html>