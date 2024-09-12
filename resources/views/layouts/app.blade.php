
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <header>
        <div class="w-full bg-slate-500">
            @include('layouts.header')
        </div>
    </header>

    <main>
        <div class="w-full bg-slate-500">
            @yield('content')
        </div>

    </main>

    <footer>
        {{-- @include('layouts.footer') --}}
    </footer>
</div>
