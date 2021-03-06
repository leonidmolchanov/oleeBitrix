<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
use Bitrix\Main\Page\Asset;
?>
<!--/footer-->
<footer class="footer text-left">
    <div class="container py-4 py-sm-5">

        <div class="row py-sm-4 py-3">



            <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_menu", Array(
                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                "CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                "COMPONENT_TEMPLATE" => "horizontal_multilevel"
            ),
                false
            );?>

            <div class="offset-lg-4"></div>
            <div class="col-lg-4 footer-end-grid mt-md-0 mt-sm-5" data-aos="fade-up">
                <h2>
                    <a href="#">
                        <i class="fas fa-crosshairs"></i> Recognize
                    </a>
                </h2>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-between pt-lg-3  footer-bottom-cpy">
            <div class="copy-right-w3ls">
                <p>© 2018 Recognize. All rights reserved | Design by
                    <a href="#"> W3layouts </a>

                </p>
            </div>
            <div class="social-content pb-md-0 pb-4">
                <ul class="social-icons text-center d-flex">
                    <li class="ml-lg-5">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!--//footer-->

<!--model-forms-->
<!--/Login-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:system.auth.form",
                    "auth",
                    array(
                        "COMPONENT_TEMPLATE" => "auth",
                        "REGISTER_URL" => "",
                        "FORGOT_PASSWORD_URL" => "",
                        "PROFILE_URL" => "",
                        "SHOW_ERRORS" => "N"
                    ),
                    false
                );?>
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Login Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="mb-2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                        </div>
                        <div class="form-check mb-2">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                        <p class="text-center pb-4">
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!--//Login-->
<!--/Register-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login px-4 mx-auto mw-100">
                    <h5 class="text-center mb-4">Register Now</h5>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label>First name</label>

                            <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                        </div>

                        <div class="form-group">
                            <label class="mb-2">Password</label>
                            <input type="password" class="form-control" id="password1" placeholder="" required="">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="password2" placeholder="" required="">
                        </div>

                        <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                        <p class="text-center pb-4">
                            <a href="#">By clicking Register, I agree to your terms</a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
<!--//Register-->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-2.2.3.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/aos.js"></script>

<?//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/aos.js");?>
<script>
    AOS.init({
        easing: 'ease-out-back',
        duration: 1000
    });

</script>
<!-- sticky nav bar-->
<script>
    $(() => {

        //On Scroll Functionality
        $(window).scroll(() => {
            var windowTop = $(window).scrollTop();
            windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
            windowTop > 100 ? $('ul.nav-honey').css('top', '50px') : $('ul.nav-honey').css('top', '160px');
        });

        //Click Logo To Scroll To Top
        $('#logo').on('click', () => {
            $('html,body').animate({
                scrollTop: 0
            }, 500);
        });

        //            //Smooth Scrolling Using Navigation Menu
        //            $('a[href*="#"]').on('click', function(e) {
        //                $('html,body').animate({
        //                    scrollTop: $($(this).attr('href')).offset().top - 100
        //                }, 500);
        //                e.preventDefault();
        //            });

        //Toggle Menu
        $('#menu-toggle').on('click', () => {
            $('#menu-toggle').toggleClass('closeMenu');
            $('ul').toggleClass('showMenu');

            $('li').on('click', () => {
                $('ul').removeClass('showMenu');
                $('#menu-toggle').removeClass('closeMenu');
            });
        });

    });

</script>
<!-- //sticky nav bar -->
<!-- Include jQuery Timeline Plugin -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.roadmap.js"></script>

<script>
    $(document).ready(function() {

        var events = [{
            date: 'Oct 2018 - Present',
            content: 'Company Name <small>Co-founder, Front-end Designer</small>'
        },
            {
                date: '2016 - 2018',
                content: 'Company Name <small>Senior Visual Designer</small>'
            },
            {
                date: '2013 - 2016',
                content: 'Company Name <small>Mid-level Designer</small>'
            },
            {
                date: '2012 - 2013',
                content: 'Company Name <small>Mid-level Designer</small>'
            },
            {
                date: '2012 - 2013',
                content: 'Company Name <small>Freelance</small>'
            },
            {
                date: '2011 - 2012',
                content: 'San Diego university  <small>For Design</small>'
            },
            {
                date: '2010 - 2011',
                content: 'New York university  <small>For Graphic Design</small>'
            },

            {
                date: '2009 - 2010',
                content: 'New York university  <small>For Graphic Design</small>'
            },

            {
                date: '2008 - 2009',
                content: 'New York university  <small>For Graphic Design</small>'
            },
            {
                date: '2005 - 2008',
                content: 'Lorem Ipsum  <small>Add Description</small>'
            },
            {
                date: '2003 - 2005',
                content: 'Lorem IPsum  <small>Add Description</small>'
            },
            {
                date: '2001 - 2003',
                content: 'Lorem IPsum  <small>Add Description</small>'
            }
        ];

        $('#my-timeline').roadmap(events, {
            eventsPerSlide: 6,
            slide: 1,
            prevArrow: '<i class="fas fa-chevron-left"></i>',
            nextArrow: '<i class="fas fa-chevron-right"></i>'
        });
    });

</script>
<!-- simpleLightbox -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/simpleLightbox.js"></script>
<script>
    $('.proj_gallery_grid a').simpleLightbox();

</script>
<!-- //simpleLightbox -->
<!-- stats -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.waypoints.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countup.js"></script>

<script>
    $('.counter').countUp();

</script>
<!-- //stats -->

<!--/ start-smoth-scrolling -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/move-top.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/easing.js"></script>

<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });

</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });

</script>
<!--// end-smoth-scrolling -->

<!-- //js -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.js"></script>

</body>

</html>