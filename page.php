<?php get_header('interior'); ?>

    <section>
        <div class="row full collapse" id="banner">
            <div class="large-12 medium-12 small-12 columns">
								<?php the_post_thumbnail('feat');?>
            </div>
        </div>

        <div class="row" id="quienes_somos">
            <div class="large-12 medium-12 small-12 columns">
                <div class="titulo">
                    <h2><?php the_title();?></h2>
                    <hr>
                </div>

                <div class="texto">
										<?php the_content();?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
