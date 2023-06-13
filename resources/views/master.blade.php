<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Servers data</title>

	@vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div id="app" class="container mx-auto py-8">
        @yield('content')
    </div>
	@vite('resources/js/app.js')
</body>
</html>
