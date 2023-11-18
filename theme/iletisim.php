<?php include "header.php"; ?>
<main>
    <section class="page-banner bg-cover bg-center bg-no-repeat relative z-3"
        style="background-image: url(<?= domain ?>assets/img/banner_img.webp)">
        <div class="container h-full">
            <div class="row h-full">
                <div class="col-lg-6 h-full">
                    <div class="content h-full flex flex-col justify-center text-white relative before-absolute">
                        <h1 class="font-bold text-4xl my-0 gap-y-3 relative">İLETİŞİM</h1>
                        <span class="text-xl relative">Hayalinizdeki yaşamın anahtarı burada.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-page" class="relative before-absolute z-3 pb-15.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="text-primary text-xl font-bold mt-0 mb-6 pb-7">DEMİRKOL GROUP & GLOBAL YATIRIM</h2>
                    <div class="contact flex flex-wrap gap-y-7 gap-x-4 font-medium">
                        <div class="flex-none w-full flex items-center gap-x-3">
                            <span class="flex items-center justify-center w-6 aspect-square bg-primary">
                                <img src="<?= domain ?>assets/img/svg/contact_map.svg" alt="Adres"
                                    class="w-3 h-3 object-contain object-center">
                            </span>
                            <p class="my-0">Parsana, Edipoğlu Cd. No: 118, 42130 Selçuklu/Konya</p>
                        </div>
                        <a href="tel:+903323323232" class="flex-none flex items-center gap-x-3 text-dark">
                            <span class="flex items-center justify-center w-6 aspect-square bg-primary">
                                <img src="<?= domain ?>assets/img/svg/contact_phone.svg" alt="Adres"
                                    class="w-3 h-3 object-contain object-center">
                            </span>
                            <p class="my-0">+90 332 332 32 32</p>
                        </a>
                        <a href="mailto:info@demirkolglobal.com" class="flex-none flex items-center gap-x-3 text-dark">
                            <span class="flex items-center justify-center w-6 aspect-square bg-primary">
                                <img src="<?= domain ?>assets/img/svg/contact_mail.svg" alt="Adres"
                                    class="w-3 h-3 object-contain object-center">
                            </span>
                            <p class="my-0">info@demirkolglobal.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <a href="javascript:void(0);" class="text-primary block leading-none font-bold mb-7" id="directions"
                        data-coordinates="37.9441045,32.4901708">YOL TARİFİ AL</a>
                    <div id="map" class="p-3 bg-white">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1573.2072950541362!2d32.490170805513706!3d37.944104490549925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d08fbd3c5fd9a9%3A0xe777cd450b417127!2sDemirkol%20Group%20%26%20Global%20Yat%C4%B1r%C4%B1m!5e0!3m2!1sen!2str!4v1700323033511!5m2!1sen!2str"
                            width="100%" height="300" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                            class="border-none"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-form" class="pt-20.5 pb-19">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <span class="text-primary block mb-12.5 leading-none text-2xl">
                        <strong class="font-bold">İLETİŞİM</strong>
                        FORMU
                    </span>
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="name" class="w-full">
                                    <input type="text" name="name" id="name" placeholder="Adınız Soyadınız" required
                                        class="w-full bg-transparent py-3 border-solid mb-8.5">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="email" class="w-full">
                                    <input type="email" name="email" id="email" placeholder="E-mail Adresiniz" required
                                        class="w-full bg-transparent py-3 border-solid mb-8.5">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="phone" class="w-full">
                                    <input type="tel" name="phone" id="phone" placeholder="GSM Numaranız" required
                                        class="w-full bg-transparent py-3 border-solid mb-8.5">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label for="subject" class="w-full">
                                    <input type="text" name="subject" id="subject" placeholder="Konu"
                                        class="w-full bg-transparent py-3 border-solid mb-8.5">
                                </label>
                            </div>
                            <div class="col-lg-12">
                                <label for="message" class="w-full">
                                    <input type="text" name="message" id="message" placeholder="Mesajınız" required
                                        class="w-full bg-transparent py-3 border-solid mb-8.5">
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="bg-primary cursor-pointer border-none text-white font-semibold text-xs leading-none py-5 px-11">
                            GÖNDER
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>