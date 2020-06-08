<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
Contenido del email.
<p>Recibiste un email de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
<p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
<p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
</body>
</html>
