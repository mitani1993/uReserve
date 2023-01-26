<html>
    <head>
        @livewireStyles
    </head>
    <body>
        <div>
            @if (session()->has('message'))
                <div class="">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        Livewireテスト
        {{-- <livewire:counter /> --}}
        @livewire('counter')
        @livewireScripts
    </body>
</html>
