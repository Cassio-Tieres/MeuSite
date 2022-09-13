<?php get_header(); ?>

<section class="descricao" id="header">
    <div class="container">
        <div class="row justify-content-center aling-items-center">
            <div class="col-md-4">
                <img src="<?php echo the_field('imagem_eu'); ?>" alt="Eu" class="img-eu" style="margin-top: 50%;">
            </div>
            <div class="col-md-6">
                <h4 style="color: white; margin-top: 40%;">Quem sou eu?</h4>
                <p class="p-principal">
                    <?php
                    the_field('descricao_eu');
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="um-pouco-mais" id="sobre-mim">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="big-font mt-5">Sobre Mim</h2>
            <p class="p-title">
                Um pouco mais sobre mim
            </p>
            <div class="col-md-8 text-justify sobre-mim mb-0">
                <p class="p-principal" style="color: white;">
                    <?php echo the_field('sobre_mim');?>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="tecnologias" id="tecnologias">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="big-font mt-5">Tecnologias</h2>
            <p class="p-title">
                Tecnologias que eu trabalho
            </p>

            <div class="owl-carousel owl-theme tecnology">
                <div class="item">
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projetos" id="projetos">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="big-font mt-5">Projetos</h2>
            <p class="p-title">
                Veja os destaques dos meus projetos
            </p>
            <a href="" class="saiba-mais">Saiba mais</a>
        </div>
    </div>
</section>



<section class="contato-section" id="contato">
    <div class="container">
        <div class="row text-center justify-content-center">
            <h2 class="big-font mt-5">Contato</h2>
            <p class="p-title">
                Entre em contato comigo
            </p>

            <div class="col-md-3 text-justify mt-5">
                <ul>
                    <li><a href="<?php echo the_field('linkedin') ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="<?php echo the_field('github') ?>" target="_blank"><i class="bi bi-github"></i></a></li>
                    <li><a href="<?php echo the_field('instagram') ?>" target="_blank"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
            </div>
        </div>
    </div>
</section>

<script src="wp-content/themes/atelie/assets/js/jquery-3.6.1.min.js"></script>
<script src="wp-content/themes/atelie/assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script> 

<script>

</script>

<?php get_footer(); ?>