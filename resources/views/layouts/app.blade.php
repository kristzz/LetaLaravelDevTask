<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <header>
            <div class="w-[100vw] bg-slate-500">
                @include('layouts.header')
            </div>
        </header>

        <main>
            <div class="w-full">
                @yield('content')
            </div>

        </main>
    </div>
</body>
</html>
