<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <link href="<?php echo get_stylesheet_uri() ?>" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
    <header>
        <nav class="top-menu">
            <div class="container">
                <div class="logo_menu">
                    <div class="alert"><?php the_custom_logo() ?></div>

                    <div href="#" class="open-close-menu">
                            <div class="strip"></div>
                            <div class="strip"></div>
                            <div class="strip"></div>
                    </div>
                        
                        <?php wp_nav_menu([
                            'theme_location' => 'header',
                            'container' => true,
                            'menu_class' => ' fancyNav'
                        ]) ?>
                </div>
            </div>
        </nav>
    </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $('ul#nav li').each(function () {if (this.getElementsByTagName("a")[0].href == location.href) this.className = "active";});
</script>
<script type="text/javascript">
    $(".fancyNav li").click(function () {
    
    $(".fancyNav li").removeClass("active");
    $(this).addClass("active");
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            if (  $(window).width() < 850) {
                $('.open-close-menu').click(function() {
                    $('nav ul').slideToggle().toggleClass('open');
                    if ($(window).scrollTop() > 40){
                    }else{
                        $('.header').toggleClass('scroll');
                    }
                });
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 40){
                        $('.header').addClass('scroll');
                    }else{
                        if ($('nav ul').hasClass('open')){
    
                        }else{
                            $('.header').removeClass('scroll');
                        }
                    }
                });
            }else {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 40) {
                        $('.header').addClass('scroll');
                    } else {
                        $('.header').removeClass('scroll');
                    }
                });
            }
        });
    </script>