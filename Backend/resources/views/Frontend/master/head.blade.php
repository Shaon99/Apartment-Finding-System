<!doctype html>
<html class="no-js" lang="zxx">
<?php

use App\Models\Footer;

$footer = Footer::find(1);
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HomeSolution - BD</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <link rel="shortcut icon" href="{{ asset('/frontend/img/favicon.png') }}" type="image/x-icon" />

    <link rel="stylesheet" href="{{ asset('/frontend/css/font-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/plugins.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('/frontend/css/responsive.css') }}">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body>
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="mailto:{{ $footer['Email'] }}?Subject=Flower%20greetings%20to%20you"><i class="icon-mail"></i> {{ $footer['Email'] }}</a></li>
                                    <li><a href=" "><i class="icon-placeholder"></i>{{ $footer['Address'] }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-end">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li class="d-none">
                                            <!-- ltn__language-menu -->
                                            <div class="ltn__drop-menu ltn__currency-menu ltn__language-menu">
                                                <ul>
                                                    <li><a href="#" class="dropdown-toggle"><span class="active-currency">English</span></a>

                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="{{ $footer['Facebook'] }}" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="{{ $footer['Twitter'] }}" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="{{ $footer['Instagram'] }}" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="{{ $footer['Linkedin'] }}" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                                    <li><a href="{{ $footer['Youtube'] }}" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- header-top-btn -->
                                            <div class="header-top-btn">
                                                <a href="{{route('seller.login')}}">Want to Sell</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <i style="font-size:50px;" class="fas fa-home"></i> <a href="/">
                                        <h5>Home Solution BD</h5>
                                    </a>
                                </div>
                                <div class="get-support clearfix d-none">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6>Get Support</h6>
                                        <h4><a href="tel:+123456789">123-456-789-10</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col header-menu-column">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li><a href="/"><i class="fas fa-home"></i> Home</a>

                                            </li>
                                            <li class="menu-icon"><a href="#"><i class="fas fa-building"></i>
                                                    Apartment</a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('sell.apartment') }}">Buy Apartment</a>


                                                    </li>
                                                    <li>
                                                        <a href="{{ route('rent.apartment') }}">Rent Apartment</a>


                                                    </li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('search') }}"><i class="fas fa-search"></i> Search
                                                    By District</a>

                                            </li>
                                            </li>

                                            <li class="menu-icon"><a href="#"><i class="fab fa-servicestack"></i>
                                                    Services</a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('interior') }}">Interior</a>

                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('residential.interior') }}">Residential</a>

                                                            </li>
                                                            <li>
                                                                <a href="{{ route('commercial.interior') }}">Commercial</a>
                                                            </li>


                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>

                                    </div>

                                </nav>
                            </div>
                        </div>
                        <div class="col ltn__header-options ltn__header-options-2 mb-sm-20">


                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewBox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <nav>
            <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
                <div class="ltn__utilize-menu-inner ltn__scrollbar">
                    <div class="ltn__utilize-menu-head">
                        <div class="site-logo">
                            <i style="font-size:50px;" class="fas fa-home"></i> <a href="/">

                            </a>
                        </div>
                        <button class="ltn__utilize-close">×</button>
                    </div>

                    <div class="ltn__utilize-menu">
                        <ul>
                            <li class="menu-icon">
                                <a href="/">Home</a>

                            </li>
                            <li class="menu-icon">
                                <a href="#"> <i class="fas fa-buildin"></i>Apartment</a>
                                <ul>
                                    <li>
                                        <a href="{{ route('sell.apartment') }}">Buy Apartment</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('rent.apartment') }}">Rent Apartment</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('search') }}"> <i class="fas fa-search"></i> Search By
                                    District</a>

                            </li>

                            <li class="menu-icon"><a href="#"> <i class="fab fa-servicestack"></i> Services</a>
                                <ul>

                                    <li>
                                        <a href="{{ route('residential.interior') }}">Residential</a>

                                    </li>
                                    <li>
                                        <a href="{{ route('commercial.interior') }}">Commercial</a>
                                    </li>


                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="ltn__social-media-2">
                        <ul>
                            <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>