<?php

include "components/define-domain.php";
include "components/svg-sprite.php";

?>
<!doctype html>
<html lang="tr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Demirkol global">
    <title>Demirkol Global</title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link media="print" onload="this.onload=null;this.removeAttribute('media');"
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="<?= domain ?>assets/css/main.css<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>">
</head>

<body>

    <header class="header_lg absolute top-0 left-0 w-screen z-4 block md:hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 relative before-absolute bg-black pb-9.5 pt-16" id="header_left">
                    <a href="index.php" class="logo relative block">
                        <img src="<?= domain ?>assets/img/svg/logo.svg" alt="Demirkol global" class="block h-25">
                    </a>
                </div>
                <div class="col-lg-6 offset-lg-3 pt-9 relative before-absolute flex flex-col items-end"
                    id="header_right">
                    <div class="flex items-center justify-end gap-x-17 pb-4 relative z-0">
                        <div class="social flex items-center gap-x-3">
                            <span class="text-secondary text-xs">TAKİP EDİN: </span>
                            <nav id="header_social" aria-label="Sosyal medya" class="flex items-center gap-x-2">
                                <a href="" rel="me" target="_blank" class="block aspect-square">
                                    <?= getSprite("facebook", "fill-white aspect-square w-5") ?>
                                </a>
                                <a href="" rel="me" target="_blank">
                                    <?= getSprite("instagram", "fill-white aspect-square w-5") ?>
                                </a>
                            </nav>
                        </div>
                        <div class="contact flex items-center gap-x-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="123.3 0 595.3 595.2"
                                class="w-7 fill-secondary aspect-square">
                                <path
                                    d="m703 459.2-120.5-80.3c-15.3-10.1-35.8-6.8-47.1 7.6l-35.1 45.1c-4.5 5.9-12.7 7.7-19.2 4l-6.7-3.7c-22.1-12.1-49.7-27.1-105.1-82.6-55.5-55.5-70.5-83.1-82.6-105.1l-3.7-6.7c-3.7-6.5-2-14.8 4-19.3l45.1-35.1c14.4-11.3 17.8-31.8 7.7-47.1L259.3 15.6C249 .1 228.2-4.6 212.2 5l-50.4 30.3c-15.8 9.3-27.4 24.4-32.4 42.1-18.1 66.1-4.5 180.2 163.6 348.3 133.7 133.7 233.2 169.6 301.6 169.6 15.7.1 31.4-2 46.6-6.1 17.7-5 32.8-16.6 42.1-32.4l30.3-50.4c9.6-16 4.9-36.8-10.6-47.2zm-6.5 37-30.2 50.4c-6.7 11.4-17.5 19.8-30.3 23.5-61 16.8-167.6 2.9-329-158.5-161.3-161.3-175.2-268-158.5-329 3.6-12.8 12-23.6 23.5-30.3l50.4-30.2c7-4.2 16-2.2 20.5 4.6l43.6 65.5 36.6 54.9c4.4 6.6 2.9 15.5-3.3 20.4l-45.1 35.1c-13.7 10.5-17.6 29.5-9.2 44.6l3.6 6.5c12.7 23.3 28.4 52.2 86 109.7 57.5 57.5 86.5 73.3 109.7 86l6.5 3.6c15.1 8.4 34.1 4.5 44.6-9.2l35.1-45.1c4.9-6.3 13.8-7.7 20.4-3.3l120.5 80.4c6.7 4.5 8.8 13.5 4.6 20.4zM460.6 99.3c93.1.1 168.5 75.5 168.6 168.6 0 5.5 4.4 9.9 9.9 9.9s9.9-4.4 9.9-9.9c-.1-104-84.4-188.4-188.5-188.5-5.5 0-9.9 4.4-9.9 9.9.1 5.5 4.5 10 10 10z" />
                                <path
                                    d="M460.6 158.8c60.2.1 109 48.9 109.1 109.1 0 5.5 4.4 9.9 9.9 9.9s9.9-4.4 9.9-9.9c-.1-71.2-57.8-128.9-129-129-5.5 0-9.9 4.4-9.9 9.9.1 5.5 4.5 10 10 10z" />
                                <path
                                    d="M460.6 218.3c27.4 0 49.6 22.2 49.6 49.6 0 5.5 4.4 9.9 9.9 9.9s9.9-4.4 9.9-9.9c0-38.3-31.1-69.4-69.4-69.4-5.5 0-9.9 4.4-9.9 9.9s4.4 9.9 9.9 9.9z" />
                            </svg>
                            <div class="text-white">
                                <span class="font-light block text-xs leading-none mb-1">ŞİMDİ ARA</span>
                                <span class="block text-xs leading-none"><b>+90 531</b> 438 72 70</span>
                            </div>
                        </div>
                    </div>
                    <nav aria-label="Main menu" id="main-nav" class="flex items-center gap-x-8 font-semibold text-sm relative z-1">
                        <a href="" class="text-white relative after-absolute py-6">ANASAYFA</a>
                        <a href="" class="text-white relative after-absolute py-6">KURUMSAL</a>
                        <a href="" class="text-white relative after-absolute py-6">YATIRIMLAR</a>
                        <a href="" class="text-white relative after-absolute py-6">KABA İNŞAAT</a>
                        <a href="" class="text-white py-6">İLETİŞİM</a>
                    </nav>

                </div>
            </div>
        </div>
    </header>

    <header class="header_sm relative hidden md:block bg-primary z-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="" class="logo">
                        <img src="<?= domain ?>assets/img/svg/logo.svg" alt="">
                    </a>
                </div>
                <div class="col-6 flex items-center">
                    <div class="menuButton bg-primary relative flex flex-col items-center justify-between">
                        <span class="block w-100"></span>
                        <span class="block w-100 absolute"></span>
                        <span class="block w-100"></span>
                        <span class="block w-100"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mobileMenu hidden md:block fixed w-screen h-screen z-4 bg-primary">
        <nav aria-label="Mobile menu" id="nav-mobile-1"></nav>
    </div>