<!DOCTYPE html>
<html>
<head>
	<title>formulir</title>
</head>
<body>

<form action="/selamatdatang" method="POST">
	@csrf
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<button type="submit">submit</button>
	


</form>

</body>
</html>