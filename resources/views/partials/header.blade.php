{{-- <header class="p-3">
    <img class="logo" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Laravel Logo">
    <span>Some links: </span>
    @foreach ($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
    @endforeach
</header> --}}

<header>
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo">
            </div>
            <div class="col d-flex align-items-center justify-content-center">
                <ul class="d-flex m-0 text-primary">
                    @foreach ($linkNav as $link)
                        <li class="px-3">{{$link}}</li>
                    @endforeach

                </ul>
            </div>
            <div class="col d-flex align-items-center">
                <input type="serchbar">
            </div>
        </div>
    </div>
    <div class="w-100 ">
        <div class="jumbotron">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </div>
    </div>
</header>
