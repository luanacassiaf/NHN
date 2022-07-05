<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Núcleo de História Natural</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- BOOTSTRAP CSS -->
        <link href="<?= base_url("recursos/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!-- ESTILO CSS -->
        <link rel="stylesheet" href="<?= base_url("recursos/css/estilo-principal.css") ?>">

        <!-- SLIDER CSS -->
        <link href="<?= base_url("recursos/css/full-slider.css") ?>" rel="stylesheet">

        <!-- ESTILOS SCROLL MAGIC -->
        <script type="text/javascript" src="<?= base_url("recursos/js/lib/jquery.min.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/js/lib/highlight.pack.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/js/lib/modernizr.custom.min.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/js/examples.js") ?>"></script>


        <script type="text/javascript" src="<?= base_url("recursos/js/lib/velocity.min.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/scrollmagic/uncompressed/ScrollMagic.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/scrollmagic/uncompressed/plugins/animation.velocity.js") ?>"></script>
        <script type="text/javascript" src="<?= base_url("recursos/scrollmagic/uncompressed/plugins/debug.addIndicators.js") ?>"></script>
    </head>

    <body>

        <?= $this->menu->principal(); ?>



        <!-- Slider -->
        <header id="myCarousel" class="carousel slide">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for Slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <!-- Set the first background image using inline CSS below. -->
                    <div class="fill back_img1"></div>
                    <div class="carousel-caption">
                        <h2>Núcleo de História Natural</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the second background image using inline CSS below. -->
                    <div class="fill back_img2"></div>
                    <div class="carousel-caption">
                        <h2>Núcleo de História Natural</h2>
                    </div>
                </div>
                <div class="item">
                    <!-- Set the third background image using inline CSS below. -->
                    <div class="fill back_img3"></div>
                    <div class="carousel-caption">
                        <h2>Núcleo de História Natural</h2>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="icon-prev"></span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="icon-next"></span>
            </a>

        </header>


        <?= $contents ?>

        <?= $this->rodape->principal(); ?>

        <script type="text/javascript" src="<?= base_url("recursos/js/menu_ativador.js") ?>"></script>


        <!-- JQUERY -->
        <script src="<?= base_url("recursos/js/jquery.js") ?>"></script>

        <!-- SCRIPT DO BOOTSTRAP -->
        <script src="<?= base_url("recursos/js/bootstrap.min.js") ?>"></script>


        <!-- SCRIPTS DO SCROLL MAGIC -->
        <script type="text/javascript" src="<?= base_url("recursos/js/tracking.js") ?>"></script>
        <script>
            $(function () {

                $("html, body").animate({scrollTop: 0}, "slow");

                function timer() {
                    // init controller
                    var controller = new ScrollMagic.Controller();
                    // animate1 APARECE A PARTIR DA DIV trigger1, E APARECERÁ ENQUANTO ESTIVER DENTRO DESTA DIV
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger1"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate1", {opacity: 100}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                    //animate1 SOME A PARTIR DO trigger2, ZERAR A OPACIDADE PARA SUMIR
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger2"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate1", {opacity: 0}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                    // animate2 APARECE A PARTIR DA DIV trigger2, E APARECERÁ ENQUANTO ESTIVER DENTRO DESTA DIV
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger2"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate2", {opacity: 100}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                    //animate2 SOME A PARTIR DO trigger3, ZERAR A OPACIDADE PARA SUMIR
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger3"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate2", {opacity: 0}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                    // animate3 APARECE A PARTIR DA DIV trigger3, E APARECERÁ ENQUANTO ESTIVER DENTRO DESTA DIV
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger3"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate3", {opacity: 100}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                    //animate3 SOME A PARTIR DO trigger4, ZERAR A OPACIDADE PARA SUMIR
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger4"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate3", {opacity: 0}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                    // animate4 APARECE A PARTIR DA DIV trigger4, E APARECERÁ ENQUANTO ESTIVER DENTRO DESTA DIV
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger4"})
                            // trigger a velocity opaticy animation
                            .setVelocity("#animate4", {opacity: 100}, {duration: 250})
                            //.addIndicators() // add indicators (requires plugin)
                            .addTo(controller);
                }
                setTimeout(timer, 800);


            });

        </script>

        <!-- Script to Activate the Carousel -->
        <script>
            $('.carousel').carousel({
                interval: 3000 //changes the speed
            });
        </script>


    </body>
</html>