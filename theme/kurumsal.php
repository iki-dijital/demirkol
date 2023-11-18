<?php include "header.php"; ?>
<main>
    <section class="page-banner bg-cover bg-center bg-no-repeat relative z-3" style="background-image: url(<?= domain ?>assets/img/banner_img.webp)">
        <div class="container h-full">
            <div class="row h-full">
                <div class="col-lg-6 h-full">
                    <div class="content h-full flex flex-col justify-center text-white relative before-absolute">
                        <h1 class="font-bold text-4xl my-0 gap-y-3 relative">KURUMSAL</h1>
                        <span class="text-xl relative">Hayalinizdeki yaşamın anahtarı burada.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="page-content" class="relative before-absolute z-3">
        <div class="container">
            <div class="content_area paragraph_text">
                <h2>sizin için <br> en iyisini düşünüyoruz</h2>
                <p>
                    Konyamız ile özdeşleşen Mevlânâ Celâleddîn-i Rûmi'nin söylediği gibi... <br>
                    <b>HAMDIK, PİŞTİK, YANDIK.</b>
                </p>
                <p>
                    2012 yılından beri uğraş verdiğimiz tüm sektörlerde, ilk günkü aşkla her gün gelişerek hizmet veriyoruz.
                </p>
                <p>
                    Kaliteye ve güvene verdiğimiz önem ile sağlam adımlarla DEMİRKOL GLOBAL YATIRIM olarak ülkemize ve
                    konyamıza benzersiz projeler ile değer katmaya devam ediyoruz.
                </p>
            </div>
        </div>
    </section>
    <section id="main-news" class="pb-22 bg-cover bg-center relative z-2">
        <img src="<?= domain ?>assets/img/main-news-bg.png" alt="Haberler" loading="lazy"
            class="absolute bottom-0 left-0 w-full pointer-events-none select-none">

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
                            <img src="<?= domain ?>assets/img/delete_thumbnail.webp" alt="Video başlık" loading="lazy"
                                class=" block w-full h-full object-cover object-center opacity-40">
                            <div class="overlay absolute top-0 left-0 w-full h-full flex justify-center items-center">
                                <div
                                    class="play w-21 aspect-square flex items-center justify-center border-white border-solid rounded-full">
                                    <img src="<?= domain ?>assets/img/svg/youtube-play.svg" alt="Oynat" loading="lazy"
                                        class="block w-9">
                                </div>
                            </div>
                        </div>
                        <span
                            class="text-primary block pl-16.5 relative before-absolute leading-none"><strong>Tanıtım</strong>
                            filmi</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>