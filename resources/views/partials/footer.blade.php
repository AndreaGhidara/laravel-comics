<footer class="">
    <div class="footerTop text-white">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between py-2">

                    <div>
                        <p class="fw-bold">
                            DC Comics
                        </p>
                        <ul class="p-0">
                            @foreach ($footerDcComics as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                        <p class="fw-bold my-2">
                            Shop
                        </p>
                        <ul class="p-0">
                            @foreach ($footerShop as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <p class="fw-bold my-2">
                            DC
                        </p>
                        <ul class="p-0">
                            @foreach ($footerDc as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div>
                        <p class="fw-bold my-2">
                            SITES
                        </p>
                        <ul class="p-0">
                            @foreach ($footerSites as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col containerLogoFooter">
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="footerBottom py-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <button class="btn-primary">
                        sign-up now!
                    </button>
                </div>
                <div class="col d-flex justify-content-end">
                    <img class="ms-4" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="fb">
                    <img class="ms-4" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="fb">
                    <img class="ms-4" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="fb">
                    <img class="ms-4" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="fb">
                    <img class="ms-4" src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="fb">
                </div>
            </div>
        </div>
    </div>
</footer>
