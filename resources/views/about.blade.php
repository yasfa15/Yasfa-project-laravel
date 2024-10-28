<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello, Im {{ $name}}!!!
  </h1>
  <p class="text-2x1 p-4">
    I live in {{$address}}, and my email is {{$email}}
</body>
</html>