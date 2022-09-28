<?php get_header(); ?>

<section class="descricao" id="header">
    <div class="container">
        <div class="row justify-content-center aling-items-center" data-anime="left">
            <div class="col-md-3">
                <img src="<?php echo the_field('imagem_eu'); ?>" alt="Eu" class="img-eu" style="margin-top: 50%;">
            </div>
            <div class="col-md-4">
                <p class="p-principal" style="font-size: 40px;">
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
        <div class="row text-center justify-content-center" data-anime="right">
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
        <div class="row text-center justify-content-center" data-anime="left">
            <h2 class="big-font mt-5">Tecnologias</h2>
            <p class="p-title">
                Tecnologias que eu trabalho
            </p>

            <div class="owl-carousel owl-theme tecnology justify-content-center">
                <?php if(!empty(have_rows('tecnologias'))):
                    while(have_rows('tecnologias')): the_row()?>
                <div class="item">
                    <img src="<?php echo the_sub_field('imagem_tecnologia'); ?>" alt="Tecnologias">
                </div>
                <?php endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="projetos" id="projetos">
    <div class="container">
        <div class="row text-center justify-content-center" data-anime="right">
            <h2 class="big-font mt-5">Projetos</h2>
            <p class="p-title">
                Veja os destaques dos meus projetos
            </p>
            <a href="" class="saiba-mais">Saiba mais</a>

            <?php if(have_rows('projetos_home')): 
                while(have_rows('projetos_home')): the_row()?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo the_sub_field('imagem_projeto') ?>" class="card-img-top" alt="<?php echo the_sub_field('nome_projeto') ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo the_sub_field('nome_projeto') ?></h5>
                            <p class="card-text"><?php echo the_sub_field('descricao_projeto')?></p>
                        </div>
                    </div>
                </div>
            <?php endwhile;  
            endif; ?>
        </div>
    </div>
</section>



<section class="contato-section" id="contato">
    <div class="container">
        <div class="row text-center justify-content-center" data-anime="left">
            <h2 class="big-font mt-5">Contato</h2>
            <p class="p-title">
                Entre em contato comigo
            </p>

            <div class="col-md-3 text-justify mt-5">
                <ul>
                    <li><a href="<?php echo the_field('linkedin') ?>" target="_blank"><i class="bi bi-linkedin"></i></a></li>
                    <li><a href="<?php echo the_field('github') ?>" target="_blank"><i class="bi bi-github"></i></a></li>
                    <!--<li><a href="<?php echo the_field('instagram') ?>" target="_blank"><i class="bi bi-instagram"></i></a></li>-->
                </ul>
            </div>
            <div class="col-md-4">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Contato"]'); ?>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js"></script> 

<?php get_footer(); ?>