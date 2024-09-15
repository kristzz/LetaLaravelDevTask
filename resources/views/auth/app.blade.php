<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <main>
            <div class="w-[100vw]">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
