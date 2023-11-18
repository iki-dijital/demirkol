<?php
include "header.php";
?>
<main>
    <section id="main_banner" class="h-screen">
        <div id="main-swiper" class="relative">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <div class="swiper-slide">
                        <div style="background-image: url('<?= domain ?>assets/img/delete_slide_<?= $i % 2 + 1 ?>.webp')"
                            class="h-screen bg-cover bg-no-repeat bg-center">
                            <div class="container h-full">
                                <div class="row h-full">
                                    <div class="col-lg-7 h-full">
                                        <div
                                            class="content pl-13.5 h-1/2 w-full flex flex-col justify-center gap-y-3 text-white relative before-absolute">
                                            <span class="text-2xl text-primary relative z-1">Çevreyolu Caddesinde</span>
                                            <h2 class="text-6xl my-0 relative z-1 leading-none">PROJE ADI</h2>
                                            <p class="my-0 relative z-1">Buraya yazı gelecek, projeyle alakalı bilgiler
                                                girilecek.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="swiper-bottom absolute bottom-25 z-2 w-full">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 flex items-center justify-between">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 288.1 408.8"
                                class="scroll_down w-9 fill-primary">
                                <path
                                    d="M133.7 408.8c-9.5-1.8-19.1-3.1-28.4-5.6-24.9-6.6-46-19.8-63.8-38.2-19.8-20.4-32.7-44.8-38.3-72.6-2.1-10.7-2.9-21.9-3-32.9-.4-36.7 0-73.4-.2-110.1-.1-35.4 10.1-67.3 32.2-95 20.4-25.5 46.4-42.7 78.4-50.2 42.8-10 82.2-2 117.8 23.8 25.8 18.7 43.1 43.8 52.9 74 4.9 15.3 6.8 31.1 6.8 47.1v111.3c0 40.5-13.4 75.8-41.7 105-22.4 23.1-49.7 37.2-81.8 41.9-3.4.5-6.8 1.1-10.2 1.6-6.9-.1-13.8-.1-20.7-.1zm126.9-204.1c.1 0 .1 0 0 0 .1-19 .1-38 .1-57.1 0-31.9-10.2-60.2-32.3-83.3-30.4-31.7-67.9-43.8-110.7-33.7-53.5 12.7-89.5 58.8-90.2 113.8-.5 39.9-.3 79.8 0 119.7.2 29.9 10.1 56.5 30.4 78.4 33.2 35.7 73.9 47.5 120.6 33.6 47.9-14.2 81.4-59.8 82.1-109.6.3-20.6 0-41.2 0-61.8z" />
                                <path
                                    d="M130.5 148.9c0-7.7-.1-15.4 0-23.1.1-7.8 5.9-13.8 13.4-13.9 7.7-.1 13.6 6 13.7 14 .1 15.5.1 56.1 0 71.6 0 7.9-5.9 13.8-13.4 13.9-7.7.1-13.6-6-13.7-14-.1-7.8 0-40.7 0-48.5z" />
                            </svg>
                            <div
                                class="swiper-nav flex items-center gap-x-8 text-white text-xl font-light bg-primary py-13 px-20.5 select-none">
                                <div class="prev cursor-pointer nav-item flex items-center">
                                    <?= getSprite("angle_left", "fill-white w-3") ?>
                                </div>
                                <div class="pagination w-6 text-center" id="main_swiper_index">1</div>
                                <div class="next cursor-pointer nav-item flex items-center">
                                    <?= getSprite("angle_left", "fill-white w-3") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="main-services" class="relative z-4">
        <img src="<?= domain ?>assets/img/logo-slogan.png" alt="Demirkol Grup" class="absolute left-11 top-1/5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 z-2">
                    <div class="swiper_nav pt-10 pb-7.5 flex items-center gap-x-12 select-none">
                        <div class="prev cursor-pointer">
                            <?= getSprite("angle_left", "fill-primary w-7") ?>
                        </div>
                        <div class="next cursor-pointer">
                            <?= getSprite("angle_left", "fill-primary w-7") ?>
                        </div>
                    </div>
                    <div class="content text-white bg-black pt-25 pb-22 relative before-absolute">
                        <h2 class="font-bold mt-0 pb-6 mb-6.5 leading-none relative z-1 after-absolute"
                            id="services-swiper-title">Yatırım Danışmanlığı
                        </h2>
                        <span class="block mb-10 font-light relative z-1 leading-normal" id="services-swiper-desc">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </span>
                        <div class="swiper-pag"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div id="services-swiper" class="relative before-absolute pb-11.5">
                        <div class="swiper-wrapper">
                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <div class="swiper-slide pl-5" data-title="Yatırım <br> Danışmanlığı <?= $i ?>"
                                    data-desc="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. <?= $i ?>">
                                    <img src="<?= domain ?>assets/img/delete_service_<?= $i % 2 + 1 ?>.webp"
                                        alt="Servis başlık" class="w-full h-full object-cover object-center" loading="lazy">
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="main-desc" style="background-image: url(<?= domain ?>assets/img/main-about-bg.webp)"
        class="bg-cover bg-bottom bg-no-repeat -mt-22 relative z-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content text-white">
                        <span class="font-extrabold">DEMİRKOL GLOBAL</span>
                        <h2 class="font-semibold text-5xl relative after-absolute pb-4.5 mb-3.5 mt-3">sizin için <br> en
                            iyisini düşünüyoruz</h2>
                        <p>
                            Konyamız ile özdeşleşen Mevlânâ Celâleddîn-i Rûmi'nin söylediği gibi...
                            HAMDIK, PİŞTİK, YANDIK.
                        </p>
                        <p> 2012 yılından beri uğraş verdiğimiz tüm sektörlerde, ilk günkü aşkla her gün gelişerek
                            hizmet
                            veriyoruz.
                        <p>
                            Kaliteye ve güvene verdiğimiz önem ile sağlam adımlarla DEMİRKOL GLOBAL YATIRIM olarak
                            ülkemize
                            ve konyamıza benzersiz projeler ile değer katmaya devam ediyoruz.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="main-news" class="pb-22 bg-cover bg-center relative z-2">
    <img src="<?=domain?>assets/img/main-news-bg.png" alt="Haberler" loading="lazy" class="absolute bottom-0 left-0 w-full">

        <div class="container relative z-1">
            <div class="row">
                <div class="col-lg-6 flex justify-between items-end mb-8">
                    <h2 class="text-primary font-extrabold my-0">Demirkol Global <br> haberler </h2>
                    <a href=""
                        class="all-news block relative before-absolute text-dark font-light pl-4 leading-none">Tüm
                        <strong class="font-semibold">haberler</strong></a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <!-- Diziye çektirip tekleri sola çiftleri sağa çektir -->
                        <div class="col-lg-6 flex flex-col justify-between">
                            <!-- Tekler buraya -->
                            <a href="" class="mb-8 block long"> <!-- Long classına dikkat et -->
                                <img src="<?= domain ?>assets/img/delete_news_1.webp" alt="Haber başlık"
                                    class="w-full object-cover object-center mb-5" loading="lazy">
                                <span class="relative before-absolute pl-11 block text-black font-medium">
                                    Gayrimenkul alım-satımda profesyonel hizmet.
                                </span>
                            </a>
                            <a href="" class="mb-8 block short"> <!-- Short classına dikkat et -->
                                <img src="<?= domain ?>assets/img/delete_news_2.webp" alt="Haber başlık"
                                    class="w-full object-cover object-center mb-5" loading="lazy">
                                <span class="relative before-absolute pl-11 block text-black font-medium">
                                    Yatırım danışmanlığında projelerimizi keşfedin.
                                </span>
                            </a>
                        </div>
                        <div class="col-lg-6 flex flex-col justify-between">
                            <!-- Çiftler buraya -->
                            <a href="" class="mb-8 block short">
                                <img src="<?= domain ?>assets/img/delete_news_3.webp" alt="Haber başlık"
                                    class="w-full object-cover object-center mb-5" loading="lazy">
                                <span class="relative before-absolute pl-11 block text-black font-medium">
                                    Yeni projemizi tanıttık.
                                </span>
                            </a>
                            <a href="" class="mb-8 block long">
                                <img src="<?= domain ?>assets/img/delete_news_4.webp" alt="Haber başlık"
                                    class="w-full object-cover object-center mb-5" loading="lazy">
                                <span class="relative before-absolute pl-11 block text-black font-medium">
                                    Kalıp işçiliğini yaptığımız proje tamamlandı.
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1" id="video_wrapper">
                    <a href="https://www.youtube.com/watch?v=WhWc3b3KhnY" class="video glightbox">
                        <div class="img relative overflow-hidden bg-black mb-9">
                            <img src="<?=domain?>assets/img/delete_thumbnail.webp" alt="Video başlık" loading="lazy" class=" block w-full h-full object-cover object-center opacity-40">
                            <div class="overlay absolute top-0 left-0 w-full h-full flex justify-center items-center">
                                <div class="play w-21 aspect-square flex items-center justify-center border-white border-solid rounded-full">
                                    <img src="<?=domain?>assets/img/svg/youtube-play.svg" alt="Oynat" loading="lazy" class="block w-9">
                                </div>
                            </div>
                        </div>
                        <span class="text-primary block pl-16.5 relative before-absolute leading-none"><strong>Tanıtım</strong> filmi</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>