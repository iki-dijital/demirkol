<?php include "header.php"; ?>
<main>
    <section class="page-banner bg-cover bg-center bg-no-repeat relative z-3"
        style="background-image: url(<?= domain ?>assets/img/banner_img.webp)">
        <div class="container h-full">
            <div class="row h-full">
                <div class="col-lg-6 h-full">
                    <div
                        class="content h-full flex flex-col justify-end text-white relative before-absolute pb-17 gap-y-14">
                        <h1 class="font-bold text-4xl my-0 gap-y-3 relative z-1">YATIRIMLAR</h1>
                        <nav id="breadcrumb" class="flex items-center gap-x-5 relative z-1">
                            <a href="" class="active text-primary relative before-absolute pl-3">Devam Eden Projeler</a>
                            <a href="" class="text-white relative before-absolute pl-3">Biten Projeler</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="box-listing" class="py-25">
        <div class="container">
            <div class="row">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                    <div class="col-lg-6">
                        <a href="projedetay.php" class="listing_item text-black block mb-8">
                            <div class="img p-5.5 bg-white mb-10">
                                <img src="<?= domain ?>assets/img/delete_project.webp" alt="Proje başlık" class="block w-full h-full object-cover object-center">
                            </div>
                            <span class="block pl-17.5 relative before-absolute font-extrabold text-2xl leading-tight h">Proje <?=$i?></span>
                        </a>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
</main>
<?php include "footer.php"; ?>