<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back to school</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>

<body>


    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/images/backlogo.png') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="btn-1 mr-end" href="/start">Start</a>
        </div>
    </nav>

    <div class="">
        {{-- banner --}}
        <div class="banner">
            <img src="{{ asset('assets/images/bg_1 (1).png') }}" alt="">
        </div>
    </div>

    <div class="container">
        <p class="titleText">Start shopping for stationaries</p>
        <p class="subText">Categories</p>

        {{-- categories --}}
        <div class="row">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/bags.png') }}" alt="">
                            </div>
                            <div class="category-title">Bags</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/notebooks.png') }}" alt="">
                            </div>
                            <div class="category-title">Notebooks</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/files.png') }}" alt="">
                            </div>
                            <div class="category-title">Files</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/pins.png') }}" alt="">
                            </div>
                            <div class="category-title">Pins</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/stapler.png') }}" alt="">
                            </div>
                            <div class="category-title">Stapler</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/stickers.png') }}" alt="">
                            </div>
                            <div class="category-title">Stickers</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/tape.png') }}" alt="">
                            </div>
                            <div class="category-title">Tape</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/tape.png') }}" alt="">
                            </div>
                            <div class="category-title">Adhesives/Glue</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/tape.png') }}" alt="">
                            </div>
                            <div class="category-title">Math Set</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/bags.png') }}" alt="">
                            </div>
                            <div class="category-title">Bags</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/notebooks.png') }}" alt="">
                            </div>
                            <div class="category-title">Notebooks</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/files.png') }}" alt="">
                            </div>
                            <div class="category-title">Files</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/pins.png') }}" alt="">
                            </div>
                            <div class="category-title">Pins</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/stapler.png') }}" alt="">
                            </div>
                            <div class="category-title">Stapler</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/stickers.png') }}" alt="">
                            </div>
                            <div class="category-title">Stickers</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/tape.png') }}" alt="">
                            </div>
                            <div class="category-title">Tape</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/tape.png') }}" alt="">
                            </div>
                            <div class="category-title">Adhesives/Glue</div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="category">
                            <div class="category-image">
                                <img src="{{ asset('assets/images/tape.png') }}" alt="">
                            </div>
                            <div class="category-title">Math Set</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="base">
        <p class="download-notice">Download Zoidinc</p>
        <div class="downloadBtns">
            <button>
                <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.3849 9.25067L3.67093 0.51305L14.7578 6.87774L12.3849 9.25067ZM1.39658 -0.00012207C0.883298 0.268363 0.539795 0.757954 0.539795 1.39363V18.8175C0.539795 19.4532 0.883298 19.9428 1.39658 20.2113L11.528 10.1036L1.39658 -0.00012207ZM18.1846 8.90714L15.8591 7.56076L13.265 10.1074L15.8591 12.6541L18.232 11.3077C18.9427 10.7431 18.9427 9.47175 18.1846 8.90714ZM3.67093 19.7016L14.7578 13.3369L12.3849 10.964L3.67093 19.7016Z"
                        fill="#8417B8" />
                </svg>
                <span>Google Play</span>
            </button>
            <button class="btn2">
                <svg width="28" height="29" viewBox="0 0 28 29" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.9 7.17554L14.4103 6.29526C14.7243 5.74578 15.4251 5.56075 15.9746 5.87474C16.5241 6.18872 16.7091 6.88959 16.3951 7.43906L11.4891 15.9335H15.0382C16.1877 15.9335 16.8324 17.2848 16.3334 18.2211H5.93263C5.29905 18.2211 4.78883 17.7109 4.78883 17.0773C4.78883 16.4437 5.29905 15.9335 5.93263 15.9335H8.84822L12.5824 9.46315L11.4162 7.43906C11.1022 6.88959 11.2872 6.19433 11.8367 5.87474C12.3862 5.56075 13.0814 5.74578 13.401 6.29526L13.9 7.17554ZM9.48731 19.3989L8.38836 21.3053C8.07438 21.8547 7.37351 22.0398 6.82404 21.7258C6.27456 21.4118 6.08953 20.7109 6.40352 20.1614L7.22213 18.7485C8.14166 18.4626 8.89298 18.6812 9.48731 19.3989ZM18.9566 15.9386H21.9339C22.5675 15.9386 23.0777 16.4489 23.0777 17.0824C23.0777 17.716 22.5675 18.2263 21.9339 18.2263H20.2798L21.3956 20.1606C21.7096 20.7101 21.5246 21.4054 20.9751 21.725C20.4256 22.0389 19.7304 21.8539 19.4108 21.3044C17.5325 18.0468 16.1195 15.6078 15.1832 13.9818C14.2244 12.3278 14.9084 10.6682 15.5869 10.1075C16.3382 11.397 17.4596 13.3426 18.9566 15.9386ZM13.9051 0.845703C6.22366 0.845703 0 7.06936 0 14.7508C0 22.4323 6.22366 28.6559 13.9051 28.6559C21.5866 28.6559 27.8102 22.4323 27.8102 14.7508C27.8102 7.06936 21.5866 0.845703 13.9051 0.845703ZM26.0158 14.7506C26.0158 21.406 20.6276 26.8615 13.9049 26.8615C7.24955 26.8615 1.79403 21.4733 1.79403 14.7506C1.79403 8.09523 7.18226 2.63971 13.9049 2.63971C20.5603 2.63971 26.0158 8.02794 26.0158 14.7506Z"
                        fill="#8417B8" />
                </svg>
                <span>App Store</span>
            </button>
        </div>
    </div>
</body>

</html>
