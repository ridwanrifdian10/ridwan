<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>WELCOME!</title>
  </head>
  <body>
    <div class="flex flex-col justify-center h-screen items-center">
        <h1 class="text-3xl font-bold text-center">
          SELAMAT DATANG DI WEBSITE RENTAL
        </h1>
        <a href="{{ route('login') }}" class="m-5 bg-blue-400 hover:bg-blue-300 text-white rounded px-4 py-2">
            Get Started
        </a>
    </div>
  </body>
</html> 