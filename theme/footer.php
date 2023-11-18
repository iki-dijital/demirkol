<footer style="background-image: url(<?= domain ?>assets/img/footer_bg.webp)"
    class="bg-cover bg-no-repeat bg-center pt-23 pb-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="social text-center mb-12">
                    <span class="text-primary block mb-4.5">SOSYAL MEDYAYA TAKİP EDİN</span>
                    <nav id="footer-social" aria-label="Sosyal medya" class="flex items-center justify-center gap-x-6">
                        <a href="">
                            <?= getSprite("facebook", "fill-secondary aspect-square w-11") ?>
                        </a>
                        <a href="">
                            <?= getSprite("instagram", "fill-secondary aspect-square w-11") ?>
                        </a>
                    </nav>
                </div>
                <form class="newsletter mb-5" action="" method="">
                    <span class="text-white text-center block mb-8.5 w-full text-sm">Yeniliklerden haberdar olmak için
                        e-bültene abone
                        olunuz</span>
                    <div class="relative">
                        <label for="newsletter" class="flex-1">
                            <input type="email" id="newsletter" name="newsletter" class="w-full px-8 py-7 text-sm"
                                placeholder="E-posta adresiniz">
                        </label>
                        <button
                            class="bg-primary text-white cursor-pointer border-none flex items-center h-full absolute top-0 right-0 h-full px-13 py-5">
                            ABONE OL
                        </button>
                    </div>
                </form>
                <nav id="policies" class="flex items-center justify-center gap-x-9 mb-13">
                    <a href="" class="text-white text-xs block py-5.5">Bilgi Toplumu Hizmetleri</a>
                    <a href="" class="text-white text-xs block py-5.5">Çerezler Politikası</a>
                    <a href="" class="text-white text-xs block py-5.5">KVKK Aydınlatma Metni</a>
                </nav>
                <div class="copy text-white text-sm flex items-center justify-center gap-x-8">
                    <p class="my-0 leading-none">Copyright &copy; 2023 Tüm Hakları Saklıdır. DEMİRKOL GLOBAL</p>
                    <a class="my-0 leading-none text-white my-0" href="">
                        Tasarım ve yazılım:
                        <span class="font-extrabold">mart<strong>medya</strong></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?= domain ?>assets/js/main.js<?= $_SERVER['REMOTE_ADDR'] == '::1' ? '?v=' . rand() : '' ?>"></script>
</body>

</html>