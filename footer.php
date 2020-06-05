<!-- FOOTER -->
    <footer>
        <div class="row full">
            <div class="large-6 medium-6 small-12 columns small-only-text-center">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_ivetaustral.png" width="150" alt="" class="logo">
            </div>

            <div class="large-6 medium-6 small-12 columns large-text-right medium-text-right small-text-center">
                <ul>
                    <li>
                        <span>Invet Austral Ltda</span>
                    </li>
                    <li>Dirección: Maipú #719, Punta Arenas</li>
                    <li>Teléfonos: +56 9 8500 2122 - +56 9 3387631</li>
                    <li>Mail:invet.austral@tie.cl</li>
                    <li>www.invetaustral.cl</li>
                    <br>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/certificado.png" width="100" alt="">
                    </li>
                </ul>
            </div>
        </div>

        <div class="row full croop">
            <div class="large-1 medium-2 small-2 columns large-centered medium-centered small-centered">
                <a href="https://www.croop.cl/" target="_blank">
                    <img src="https://www.croop.cl/agencia/wp-content/themes/wp-croop2k18/img/agencia-digital-croop-blanco.png" alt="Agencia Digital Croop">
                    <br>
                </a>
            </div>
        </div>

    </footer>

<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script>
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            },
        });
        $('.play').on('click', function() {
            owl.trigger('play.owl.autoplay', [5000])
        })
    </script>


</body>

</html>
