<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- hot reload --}}
    @if (app()->isLocal())
        <script src="http://localhost:8000/webpack-dev-server.js"></script>
    @endif

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slider-radio.css">
    <link rel="stylesheet" href="css/select2.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/plyr.css">
    <link rel="stylesheet" href="css/main.css">

    {{-- tailwind cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="icon/favicon-32x32.png">


    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>FlixTV – Movies & TV Shows, Online cinema HTML Template</title>

</head>

<body>
    <!-- header (fixed style) -->
    <x-navbar />

    <!-- end header -->

    <!-- home -->
    <div class="home ">
        <div class="home__carousel owl-carousel " id="flixtv-hero">
            @foreach ($movies['results'] as $movie)
                <x-card-home
                    :link="'detail/' . $movie['id']"
                    :image="$movie['poster_path'] ? 'https://image.tmdb.org/t/p/original' . $movie['poster_path'] : asset('img/home/2.jpg')"
                    :title="$movie['title']"
                />
            @endforeach
        </div>


        <button class="home__nav home__nav--prev" data-nav="#flixtv-hero" type="button"></button>
        <button class="home__nav home__nav--next" data-nav="#flixtv-hero" type="button"></button>
    </div>
    <!-- end home -->

    <!-- catalog -->
    <div class="catalog catalog--list">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="catalog__nav">
                        <div class="catalog__select-wrap">
                            <x-genre-select class="catalog__select" name="genres" />
                            <select class="catalog__select" name="years">
                                <option value="All the years">All the years</option>
                                <option value="1">'50s</option>
                                <option value="2">'60s</option>
                                <option value="3">'70s</option>
                                <option value="4">'80s</option>
                                <option value="5">'90s</option>
                                <option value="6">2000-10</option>
                                <option value="7">2010-20</option>
                                <option value="8">2021</option>
                            </select>
                        </div>

                        <div class="slider-radio">
                            <input type="radio" name="grade" id="featured" checked="checked"><label
                                for="featured">Featured</label>
                            <input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
                            <input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
                        </div>
                    </div>

                    <div class="row row--grid">

                        <x-card title="The Good Lord Bird" image="img/card/1.png" link="details" rating="9.1"
                            year="2019" :tags="['Free', 'Action']" director="Rian Johnson"
                            tagline="«One man's struggle to take it easy»" />
                        <x-card title="The Good Lord Bird" image="img/card/1.png" link="details" rating="9.1"
                            year="2019" :tags="['Free', 'Action']" director="Rian Johnson"
                            tagline="«One man's struggle to take it easy»" />

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="catalog__paginator-wrap">
                                <span class="catalog__pages">12 from 144</span>

                                <ul class="catalog__paginator">
                                    <li>
                                        <a href="#">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.75 5.36475L13.1992 5.36475" stroke-width="1.2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M5.771 10.1271L0.749878 5.36496L5.771 0.602051"
                                                    stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>
                                        <a href="#">
                                            <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.1992 5.3645L0.75 5.3645" stroke-width="1.2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271"
                                                    stroke-width="1.2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end catalog -->

            <!-- subscriptions -->
            <section class="section section--pb0">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section__title">Subscriptions</h2>
                        </div>
                        <div class="col-12">
                            <div class="section__carousel-wrap">
                                <div class="section__carousel owl-carousel" id="subscriptions">
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                    <x-card-sub image="img/card/15.png" link="details" title="Psychological films"
                                        description="More than 200 movies" />
                                </div>


                                <button class="section__nav section__nav--cards section__nav--prev"
                                    data-nav="#subscriptions" type="button"><svg width="17" height="15"
                                        viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></button>
                                <button class="section__nav section__nav--cards section__nav--next"
                                    data-nav="#subscriptions" type="button"><svg width="17" height="15"
                                        viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end subscriptions -->

            <!-- plan -->
            <section class="section section--pb0 section--gradient">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section__title">Select Your Plan</h2>
                            <p class="section__text">No hidden fees, equipment rentals, or installation appointments.
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-xl-4 order-md-2 order-xl-1">
                            <div class="plan plan--style2">
                                <h3 class="plan__title">Regular</h3>
                                <span class="plan__price">$11.99<span>/month</span></span>
                                <ul class="plan__list">
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> FlixTV Originals</li>
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Switch plans or cancel anytime</li>
                                    <li class="red"><svg width="19" height="19" viewBox="0 0 19 19"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.596 1.59982L1.60938 17.5865" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.601 17.5961L1.60101 1.5928" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Stream 65+ top Live</li>
                                    <li class="red"><svg width="19" height="19" viewBox="0 0 19 19"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.596 1.59982L1.60938 17.5865" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.601 17.5961L1.60101 1.5928" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> TV channels</li>
                                </ul>

                                <button class="plan__btn" type="button">Select plan</button>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4 order-md-1 order-xl-2">
                            <div class="plan plan--style2 plan--best">
                                <h3 class="plan__title">Premium</h3>
                                <span class="plan__price">$34.99<span>/month</span></span>
                                <ul class="plan__list">
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> FlixTV Originals</li>
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Switch plans or cancel anytime</li>
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Stream 65+ top Live</li>
                                    <li class="red"><svg width="19" height="19" viewBox="0 0 19 19"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.596 1.59982L1.60938 17.5865" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.601 17.5961L1.60101 1.5928" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> TV channels</li>
                                </ul>

                                <button class="plan__btn" type="button">Select plan</button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-4 order-md-3 order-xl-3">
                            <div class="plan plan--style2">
                                <h3 class="plan__title">Premium + TV channels</h3>
                                <span class="plan__price">$49.99<span>/month</span></span>
                                <ul class="plan__list">
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> FlixTV Originals</li>
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Switch plans or cancel anytime</li>
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> Stream 65+ top Live</li>
                                    <li class="green"><svg width="19" height="14" viewBox="0 0 19 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.43994 6.95981L6.77477 12.2924L17.4399 1.62723" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg> TV channels</li>
                                </ul>

                                <button class="plan__btn" type="button">Select plan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end plan -->

            <!-- videos -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="section__title"><b>Flix</b>TV Originals</h2>
                            <p class="section__text">Celebrity interviews, trending entertainment stories, and expert
                                analysis.</p>
                        </div>

                        <div class="col-12">
                            <div class="section__carousel-wrap">
                                <div class="section__interview owl-carousel" id="flixtv">
                                    <div class="interview">
                                        <a href="interview" class="interview__cover">
                                            <img src="img/interview/1.jpg" alt="">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> 5:33
                                            </span>
                                        </a>
                                        <h3 class="interview__title"><a href="interview">What Was Ben Affleck Planning
                                                for
                                                His Unmade 'Batman' Film?</a></h3>
                                    </div>

                                    <div class="interview">
                                        <a href="interview" class="interview__cover">
                                            <img src="img/interview/2.jpg" alt="">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> 2:41
                                            </span>
                                        </a>
                                        <h3 class="interview__title"><a href="interview">A Guide to the Work of Ryan
                                                Murphy</a></h3>
                                    </div>

                                    <div class="interview">
                                        <a href="interview" class="interview__cover">
                                            <img src="img/interview/3.jpg" alt="">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> 7:19
                                            </span>
                                        </a>
                                        <h3 class="interview__title"><a href="interview">Gugu Mbatha-Raw Shares the
                                                Films
                                                That Give Her Hope</a></h3>
                                    </div>

                                    <div class="interview">
                                        <a href="interview" class="interview__cover">
                                            <img src="img/interview/4.jpg" alt="">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> 4:58
                                            </span>
                                        </a>
                                        <h3 class="interview__title"><a href="interview">Best of 2020: Top Trending
                                                Moments</a></h3>
                                    </div>

                                    <div class="interview">
                                        <a href="interview" class="interview__cover">
                                            <img src="img/interview/5.jpg" alt="">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> 3:52
                                            </span>
                                        </a>
                                        <h3 class="interview__title"><a href="interview">How Movies and TV Shaped Our
                                                Perception of HIV/AIDS</a></h3>
                                    </div>

                                    <div class="interview">
                                        <a href="interview" class="interview__cover">
                                            <img src="img/interview/6.jpg" alt="">
                                            <span>
                                                <svg width="22" height="22" viewBox="0 0 22 22"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11 1C16.5228 1 21 5.47716 21 11C21 16.5228 16.5228 21 11 21C5.47716 21 1 16.5228 1 11C1 5.47716 5.47716 1 11 1Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M14.0501 11.4669C13.3211 12.2529 11.3371 13.5829 10.3221 14.0099C10.1601 14.0779 9.74711 14.2219 9.65811 14.2239C9.46911 14.2299 9.28711 14.1239 9.19911 13.9539C9.16511 13.8879 9.06511 13.4569 9.03311 13.2649C8.93811 12.6809 8.88911 11.7739 8.89011 10.8619C8.88911 9.90489 8.94211 8.95489 9.04811 8.37689C9.07611 8.22089 9.15811 7.86189 9.18211 7.80389C9.22711 7.69589 9.30911 7.61089 9.40811 7.55789C9.48411 7.51689 9.57111 7.49489 9.65811 7.49789C9.74711 7.49989 10.1091 7.62689 10.2331 7.67589C11.2111 8.05589 13.2801 9.43389 14.0401 10.2439C14.1081 10.3169 14.2951 10.5129 14.3261 10.5529C14.3971 10.6429 14.4321 10.7519 14.4321 10.8619C14.4321 10.9639 14.4011 11.0679 14.3371 11.1549C14.3041 11.1999 14.1131 11.3999 14.0501 11.4669Z"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg> 3:52
                                            </span>
                                        </a>
                                        <h3 class="interview__title"><a href="interview">American Gods</a></h3>
                                    </div>
                                </div>

                                <button class="section__nav section__nav--interview section__nav--prev"
                                    data-nav="#flixtv" type="button"><svg width="17" height="15"
                                        viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.25 7.72559L16.25 7.72559" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7.2998 1.70124L1.2498 7.72524L7.2998 13.7502" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></button>
                                <button class="section__nav section__nav--interview section__nav--next"
                                    data-nav="#flixtv" type="button"><svg width="17" height="15"
                                        viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.75 7.72559L0.75 7.72559" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M9.7002 1.70124L15.7502 7.72524L9.7002 13.7502" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end videos -->

            <!-- footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 col-md-6 col-lg-4 col-xl-3 order-4 order-md-1 order-lg-4 order-xl-1">
                            <div class="footer__flixtv">
                                <img src="img/logo.svg" alt="">
                            </div>
                            <p class="footer__tagline">Movies & TV Shows, Online cinema,<br> Movie database HTML
                                Template.</p>
                            <div class="footer__social">
                                <a href="#" target="_blank"><svg width="30" height="30"
                                        viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                                            fill="#3B5998" />
                                        <path
                                            d="M16.5634 23.8197V15.6589H18.8161L19.1147 12.8466H16.5634L16.5672 11.4391C16.5672 10.7056 16.6369 10.3126 17.6904 10.3126H19.0987V7.5H16.8457C14.1394 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.4999V15.6592H13.1869V23.8197H16.5634Z"
                                            fill="white" />
                                    </svg></a>
                                <a href="#" target="_blank"><svg width="30" height="30"
                                        viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                                            fill="#55ACEE" />
                                        <path
                                            d="M14.5508 12.1922L14.5822 12.7112L14.0576 12.6477C12.148 12.404 10.4798 11.5778 9.06334 10.1902L8.37085 9.50169L8.19248 10.0101C7.81477 11.1435 8.05609 12.3405 8.843 13.1455C9.26269 13.5904 9.16826 13.654 8.4443 13.3891C8.19248 13.3044 7.97215 13.2408 7.95116 13.2726C7.87772 13.3468 8.12953 14.3107 8.32888 14.692C8.60168 15.2217 9.15777 15.7407 9.76631 16.0479L10.2804 16.2915L9.67188 16.3021C9.08432 16.3021 9.06334 16.3127 9.12629 16.5351C9.33613 17.2236 10.165 17.9545 11.0883 18.2723L11.7388 18.4947L11.1723 18.8337C10.3329 19.321 9.34663 19.5964 8.36036 19.6175C7.88821 19.6281 7.5 19.6705 7.5 19.7023C7.5 19.8082 8.78005 20.4014 9.52499 20.6344C11.7598 21.3229 14.4144 21.0264 16.4079 19.8506C17.8243 19.0138 19.2408 17.3507 19.9018 15.7407C20.2585 14.8827 20.6152 13.315 20.6152 12.5629C20.6152 12.0757 20.6467 12.0121 21.2343 11.4295C21.5805 11.0906 21.9058 10.7198 21.9687 10.6139C22.0737 10.4126 22.0632 10.4126 21.5281 10.5927C20.6362 10.9105 20.5103 10.8681 20.951 10.3915C21.2762 10.0525 21.6645 9.43813 21.6645 9.25806C21.6645 9.22628 21.5071 9.27924 21.3287 9.37458C21.1398 9.4805 20.7202 9.63939 20.4054 9.73472L19.8388 9.91479L19.3247 9.56524C19.0414 9.37458 18.6427 9.16273 18.4329 9.09917C17.8978 8.95087 17.0794 8.97206 16.5967 9.14154C15.2852 9.6182 14.4563 10.8469 14.5508 12.1922Z"
                                            fill="white" />
                                    </svg></a>
                                <a href="https://www.instagram.com/volkov_des1gn/" target="_blank"><svg
                                        width="30" height="30" viewBox="0 0 30 30" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                                            fill="white" />
                                        <mask id="mask0" maskUnits="userSpaceOnUse" x="0" y="0" width="30"
                                            height="30">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                                                fill="white" />
                                        </mask>
                                        <g mask="url(#mask0)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.9984 7C12.8279 7 12.5552 7.00949 11.7022 7.04834C10.8505 7.08734 10.2692 7.22217 9.76048 7.42001C9.23431 7.62433 8.78797 7.89767 8.3433 8.3425C7.8983 8.78717 7.62496 9.23352 7.41996 9.75952C7.22162 10.2684 7.08662 10.8499 7.04829 11.7012C7.01012 12.5546 7.00012 12.8274 7.00012 15.0001C7.00012 17.1728 7.00979 17.4446 7.04846 18.2979C7.08762 19.1496 7.22246 19.731 7.42013 20.2396C7.62463 20.7658 7.89796 21.2122 8.3428 21.6568C8.78731 22.1018 9.23365 22.3758 9.75948 22.5802C10.2685 22.778 10.85 22.9128 11.7015 22.9518C12.5548 22.9907 12.8273 23.0002 14.9999 23.0002C17.1727 23.0002 17.4446 22.9907 18.2979 22.9518C19.1496 22.9128 19.7316 22.778 20.2406 22.5802C20.7666 22.3758 21.2123 22.1018 21.6568 21.6568C22.1018 21.2122 22.3751 20.7658 22.5801 20.2398C22.7768 19.731 22.9118 19.1495 22.9518 18.2981C22.9901 17.4448 23.0001 17.1728 23.0001 15.0001C23.0001 12.8274 22.9901 12.5547 22.9518 11.7014C22.9118 10.8497 22.7768 10.2684 22.5801 9.7597C22.3751 9.23352 22.1018 8.78717 21.6568 8.3425C21.2118 7.89752 20.7668 7.62418 20.2401 7.42001C19.7301 7.22217 19.1484 7.08734 18.2967 7.04834C17.4434 7.00949 17.1717 7 14.9984 7ZM14.5903 8.44156L14.7343 8.44165L15.0009 8.44171C17.1369 8.44171 17.3901 8.44937 18.2336 8.4877C19.0136 8.52338 19.437 8.65369 19.719 8.76321C20.0923 8.9082 20.3585 9.08154 20.6383 9.36154C20.9183 9.64154 21.0916 9.9082 21.237 10.2816C21.3465 10.5632 21.477 10.9866 21.5125 11.7666C21.5508 12.6099 21.5591 12.8633 21.5591 14.9983C21.5591 17.1333 21.5508 17.3866 21.5125 18.23C21.4768 19.01 21.3465 19.4333 21.237 19.715C21.092 20.0883 20.9183 20.3542 20.6383 20.634C20.3583 20.914 20.0925 21.0873 19.719 21.2323C19.4373 21.3423 19.0136 21.4723 18.2336 21.508C17.3903 21.5463 17.1369 21.5547 15.0009 21.5547C12.8647 21.5547 12.6115 21.5463 11.7682 21.508C10.9882 21.472 10.5649 21.3417 10.2827 21.2322C9.90935 21.0872 9.64268 20.9138 9.36268 20.6338C9.08268 20.3538 8.90934 20.0878 8.76401 19.7143C8.65451 19.4326 8.52401 19.0093 8.48851 18.2293C8.45017 17.386 8.4425 17.1326 8.4425 14.9963C8.4425 12.8599 8.45017 12.6079 8.48851 11.7646C8.52417 10.9846 8.65451 10.5612 8.76401 10.2792C8.90901 9.90588 9.08268 9.63922 9.36268 9.35919C9.64268 9.07919 9.90935 8.90588 10.2827 8.76053C10.5647 8.65054 10.9882 8.52054 11.7682 8.48471C12.5062 8.45135 12.7922 8.44138 14.2832 8.4397V8.44171C14.3803 8.44156 14.4825 8.44153 14.5903 8.44156ZM18.3113 10.7296C18.3113 10.1994 18.7413 9.76987 19.2713 9.76987V9.76953C19.8013 9.76953 20.2313 10.1995 20.2313 10.7296C20.2313 11.2596 19.8013 11.6895 19.2713 11.6895C18.7413 11.6895 18.3113 11.2596 18.3113 10.7296ZM15.0011 10.8916C12.7323 10.8916 10.8928 12.7311 10.8928 15C10.8928 17.2688 12.7323 19.1075 15.0011 19.1075C17.27 19.1075 19.1088 17.2688 19.1088 15C19.1088 12.7311 17.2698 10.8916 15.0011 10.8916ZM17.6678 14.9999C17.6678 13.5271 16.4738 12.3333 15.0011 12.3333C13.5283 12.3333 12.3344 13.5271 12.3344 14.9999C12.3344 16.4726 13.5283 17.6666 15.0011 17.6666C16.4738 17.6666 17.6678 16.4726 17.6678 14.9999Z"
                                                fill="black" />
                                        </g>
                                    </svg></a>
                                <a href="#" target="_blank"><svg width="30" height="30"
                                        viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                                            fill="#4C6C91" />
                                        <path
                                            d="M15.7848 19.9226C15.7848 19.9226 16.0736 19.8911 16.2215 19.7351C16.3568 19.5922 16.3521 19.3226 16.3521 19.3226C16.3521 19.3226 16.3341 18.0636 16.9297 17.8777C17.5166 17.6949 18.2702 19.0952 19.07 19.6337C19.6741 20.0408 20.1327 19.9517 20.1327 19.9517L22.2699 19.9226C22.2699 19.9226 23.3874 19.855 22.8576 18.9923C22.8137 18.9216 22.5485 18.354 21.269 17.1879C19.9284 15.9673 20.1084 16.1647 21.7221 14.053C22.705 12.7672 23.0978 11.9821 22.975 11.6464C22.8584 11.3253 22.1353 11.4106 22.1353 11.4106L19.7297 11.4252C19.7297 11.4252 19.5513 11.4014 19.419 11.4789C19.2899 11.555 19.2061 11.7324 19.2061 11.7324C19.2061 11.7324 18.8258 12.7272 18.3179 13.5737C17.2466 15.3589 16.8185 15.4534 16.6433 15.3428C16.2355 15.0839 16.3373 14.3042 16.3373 13.7504C16.3373 12.0197 16.6049 11.2984 15.8169 11.1118C15.5555 11.0495 15.363 11.0088 14.6939 11.0019C13.8354 10.9935 13.1092 11.005 12.6976 11.2024C12.4237 11.3338 12.2124 11.6272 12.3415 11.6441C12.5004 11.6648 12.8604 11.7394 13.0513 11.9944C13.2978 12.3239 13.2892 13.0629 13.2892 13.0629C13.2892 13.0629 13.4308 15.1 12.9582 15.3528C12.6342 15.5264 12.1897 15.1723 11.2342 13.5522C10.7451 12.7226 10.3757 11.8054 10.3757 11.8054C10.3757 11.8054 10.3045 11.6341 10.177 11.5419C10.0228 11.4306 9.80759 11.396 9.80759 11.396L7.52173 11.4106C7.52173 11.4106 7.17818 11.4198 7.05219 11.5665C6.94029 11.6963 7.04358 11.966 7.04358 11.966C7.04358 11.966 8.8333 16.0764 10.8601 18.1481C12.7187 20.047 14.8285 19.9226 14.8285 19.9226H15.7848Z"
                                            fill="white" />
                                    </svg></a>
                                <a href="#" target="_blank"><svg width="30" height="30"
                                        viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                                            fill="#010101" />
                                        <path
                                            d="M13.2143 13.1245V12.4195C12.9696 12.3808 12.7224 12.3595 12.4747 12.356C10.0763 12.3509 7.95291 13.9051 7.23271 16.1928C6.51252 18.4805 7.36263 20.9708 9.33138 22.3405C7.85664 20.7622 7.44716 18.4646 8.28583 16.474C9.1245 14.4834 11.0547 13.1716 13.2143 13.1245Z"
                                            fill="#25F4EE" />
                                        <path
                                            d="M13.3472 21.1097C14.6881 21.1079 15.7904 20.0515 15.8491 18.7118V6.75693H18.0332C17.9886 6.50713 17.9673 6.25373 17.9696 6H14.9824V17.9433C14.9327 19.2898 13.8279 20.3564 12.4804 20.3586C12.0778 20.3552 11.6817 20.2561 11.3248 20.0697C11.794 20.7197 12.5456 21.1062 13.3472 21.1097Z"
                                            fill="#25F4EE" />
                                        <path
                                            d="M22.1125 10.8133V10.1489C21.3087 10.1491 20.5227 9.91193 19.8533 9.46704C20.4401 10.1493 21.2332 10.6219 22.1125 10.8133Z"
                                            fill="#25F4EE" />
                                        <path
                                            d="M19.8534 9.46693C19.1939 8.71597 18.8304 7.75063 18.8306 6.75122H18.0333C18.2414 7.86795 18.8996 8.84996 19.8534 9.46693Z"
                                            fill="#FE2C55" />
                                        <path
                                            d="M12.4747 15.343C11.324 15.3489 10.325 16.1372 10.0517 17.2551C9.77836 18.3729 10.3009 19.5333 11.3191 20.0695C10.7674 19.3078 10.6895 18.301 11.1174 17.4635C11.5453 16.626 12.4067 16.0992 13.3472 16.0999C13.598 16.103 13.8471 16.1419 14.0868 16.2155V13.1762C13.842 13.1395 13.5948 13.1202 13.3472 13.1184H13.2143V15.4296C12.9733 15.365 12.7242 15.3358 12.4747 15.343Z"
                                            fill="#FE2C55" />
                                        <path
                                            d="M22.1125 10.813V13.1242C20.6245 13.1214 19.1751 12.6503 17.9696 11.7779V17.8507C17.9632 20.881 15.5049 23.3341 12.4746 23.3341C11.3493 23.3361 10.251 22.9889 9.33136 22.3403C10.8662 23.991 13.2547 24.5344 15.3525 23.71C17.4504 22.8857 18.8301 20.8616 18.8306 18.6076V12.5522C20.0401 13.4189 21.4913 13.8838 22.9792 13.8812V10.9054C22.6879 10.9045 22.3975 10.8735 22.1125 10.813Z"
                                            fill="#FE2C55" />
                                        <path
                                            d="M17.9696 17.851V11.7782C19.1787 12.6456 20.6301 13.1105 22.1182 13.1071V10.7959C21.2391 10.6102 20.4441 10.1438 19.8532 9.46693C18.8994 8.84996 18.2413 7.86795 18.0331 6.75122H15.849V18.7119C15.8053 19.779 15.0906 20.7013 14.0682 21.01C13.0458 21.3186 11.9401 20.9459 11.3132 20.0813C10.295 19.5451 9.77243 18.3847 10.0457 17.2669C10.319 16.1491 11.3181 15.3607 12.4688 15.3548C12.7197 15.357 12.9688 15.396 13.2084 15.4704V13.1591C11.0368 13.1959 9.09197 14.5124 8.25091 16.5149C7.40985 18.5174 7.83142 20.8277 9.32553 22.4041C10.2543 23.0313 11.3541 23.3562 12.4746 23.3344C15.5049 23.3344 17.9632 20.8812 17.9696 17.851Z"
                                            fill="white" />
                                    </svg></a>
                            </div>
                        </div>

                        <div
                            class="col-6 col-md-4 col-lg-3 col-xl-2 order-1 order-md-2 order-lg-1 order-xl-2 offset-md-2 offset-lg-0 offset-xl-1">
                            <h6 class="footer__title">FlixTV</h6>
                            <div class="footer__nav">
                                <a href="about">About us</a>
                                <a href="profile">My profile</a>
                                <a href="pricing">Pricing plans</a>
                                <a href="contacts">Contacts</a>
                            </div>
                        </div>

                        <div class="col-12 col-md-8 col-lg-6 col-xl-4 order-3 order-lg-2 order-md-3 order-xl-3">
                            <div class="row">
                                <div class="col-12">
                                    <h6 class="footer__title">Browse</h6>
                                </div>

                                <div class="col-6">
                                    <div class="footer__nav">
                                        <a href="live">Live TV</a>
                                        <a href="live">Live News</a>
                                        <a href="live">Live Sports</a>
                                        <a href="live">Streaming Library</a>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="footer__nav">
                                        <a href="category">TV Shows</a>
                                        <a href="category">Movies</a>
                                        <a href="category">Kids</a>
                                        <a href="category">Collections</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 col-xl-2 order-2 order-lg-3 order-md-4 order-xl-4">
                            <h6 class="footer__title">Help</h6>
                            <div class="footer__nav">
                                <a href="privacy">Account & Billing</a>
                                <a href="privacy">Plans & Pricing</a>
                                <a href="privacy">Supported devices</a>
                                <a href="privacy">Accessibility</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="footer__content">
                                <div class="footer__links">
                                    <a href="privacy">Privacy policy</a>
                                    <a href="privacy">Terms and conditions</a>
                                </div>
                                <small class="footer__copyright">© FlixTV.template, 2021. Created by <a
                                        href="https://themeforest.net/user/dmitryvolkov/portfolio"
                                        target="_blank">Dmitry
                                        Volkov</a>.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end footer -->

            <!-- JS -->
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/slider-radio.js"></script>
            <script src="js/select2.min.js"></script>
            <script src="js/smooth-scrollbar.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/plyr.min.js"></script>
            <script src="js/main.js"></script>
</body>

</html>
