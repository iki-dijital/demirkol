<?php include "header.php"; ?>
<main>
<section class="page-banner bg-cover bg-center bg-no-repeat relative z-3"
        style="background-image: url(<?= domain ?>assets/img/banner_img.webp)">
        <div class="container h-full">
            <div class="row h-full">
                <div class="col-lg-6 h-full">
                    <div class="content h-full flex flex-col justify-center text-white relative before-absolute">
                        <h1 class="font-bold text-4xl my-0 relative z-1">KABA İNŞAAT YAPIMI</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project-detail" class="pt-20 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-13">
                    <h2
                        class="relative before-absolute text-primary text-bold text-5xl pt-10.5 my-0 leading-none">
                        Tekin İnşaat - Green Garden
                    </h2>
                </div>
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-lg-6">
                        <a href="<?=domain?>assets/img/delete_project.webp" class="listing_item glightbox text-black block mb-7">
                            <div class="img p-5.5 bg-white">
                                <img src="<?= domain ?>assets/img/delete_project.webp" alt="Proje başlık"
                                    class="block w-full h-full object-cover object-center">
                            </div>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>