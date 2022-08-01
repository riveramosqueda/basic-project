<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Hi, {{ $user->name }}!</h1>
	<h2>You have been registered in {{ config('app.name') }} or your password has changed</h2>
	<h3>Email: {{ $user->email }}</h3>
	<h3>Password: {{ $password }}</h3>
	<a href="{{ url('/') }}">Click here to login!</a>
</body>
</html>