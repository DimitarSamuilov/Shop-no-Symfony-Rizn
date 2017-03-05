<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Multivac</title>
    <link rel="stylesheet" href="Content/css/shop-style.css">
    <link rel="stylesheet" href="Content/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="Content/css/font-awesome-4.6.3.min.css">
</head>
<body>
<header>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 search-bar">
            <img class="logo-img" src="Content/Images/logo.png">
            <div class="cart-bar" style="position: absolute;">
                <span class="space">0 прод</span>|<span class="space">0,00лв.</span>
                <div class="cart-btn">
                    <a href="#" class="navbar-link">
                        <img src="Content/Images/cart.png"><span class="cart-txt"> Кошница </span></a>
                </div>
            </div>
            <div class="header-search-box">
                <div class="search-bar">
                    <form>
                        <span class="fa fa-search"></span>
                        <input class="keyword-field" type="text" name="search"
                               placeholder="Търсете навсякъде в нашия сайт">
                        <button class="search-btn" name="submit">Търси</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <hr class="white-line">
    <div class="row">
        <div class="col-2 autentication-botton-clear"></div>
        <div class="col-8 clear-all">
            <ul class="navbar-list authentication-bar">
                <li>
                    <span>Добре дошли в нашият онлайн магазин</span>
                </li>
                <?php if ($data[1]): ?>
                    <?php if ($data[2]): ?>
                        <li class="nav-right-child">
                            <span class="fa-chevron-right fa"></span>
                            <a class="authentication-link" href="adminView.php">Админ страница</a>
                        </li>
                    <?php endif ?>
                    <li class="nav-right-child">
                        <span class="fa-chevron-right fa"></span>
                        <a href="logout.php" class="authentication-link">Изход</a>
                    </li>
                <?php else: ?>
                    <li class="nav-right-child">
                        <span class="fa-chevron-right fa"></span>
                        <a href="register.php" class="authentication-link">Регистрация</a>
                    </li>
                    <li class="nav-right-child">
                        <span class="fa-chevron-right fa"></span>
                        <a href="login.php" class="authentication-link">Вход</a>
                    </li>
                <?php endif ?>
            </ul>
        </div>
        <div class="col-2 autentication-botton-clear"></div>
    </div>
    <div class="row">
        <div class="col-12 navbar-background clear-all" style="background-image:url('navigation.jpg')">
            <div class="col-2"></div>
            <div class="col-8 navbar" style="padding: inherit;">
                <div class="col-1" style="padding: 0;"><a href="#"><img
                            src="Content/Images/ico-home.png"></a>
                </div>
                <div class="col-11 " style="padding-right: 0;">
                    <ul class="navbar-list">
                        <li><a href="#" class="navbar-link">промоции</a></li>
                        <li><a href="#" class="navbar-link">камерни машини</a></li>
                        <li><a href="#" class="navbar-link">консумативи</a></li>
                        <li><a href="#" class="navbar-link">компактни термоформи</a></li>
                        <li class="nav-right-child"><a href="#" class="navbar-link">Контакти</a></li>
                        <li class="nav-right-child"><a href="#" class="navbar-link">Сертификати</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</header>
<main>
    <div class="row match-col">
        <div class="col-2 slide-side-color "></div>
        <div class="col-8 clear-all">
            <div class="slide-container">
                <div class="single-slide fade">
                    <div class="slide-text">
                        <h1 class="slide-title">Модел <span class="slide-model">PP31</span></h1><br>
                        <h3 class="slide-summary">Лесен за използване</h3><br>
                        <p> Замъкът е вид сграда
                            или комплекс от сгради
                        </p>
                    </div>
                    <div class="slide-buttons fade">
                        <a href="#">
                            <div class="slider-single-button">
                                <img src="Content/Images/btn-blue.png">
                                <span class="slider-btn-text more-info">Виж подробно</span>
                                <img src="Content/Images/btn-black.png">
                                <span class="slider-btn-text buy">Купи</span>
                            </div>
                        </a>
                    </div>
                    <img src="Content/Images/home-banner.jpg" style="width: 100%;">
                </div>
                <div class="single-slide">
                    <div class="slide-text">
                        <h1 class="slide-title">Модел <span class="slide-model">P555</span></h1><br>
                        <h3 class="slide-summary">Лесен за използване</h3><br>
                        <p> С цел осигуряване на вода с
                            необходимата температура за
                            стерилизация съоръжението е
                            оборудвано не само с резервоар за
                            миенето, но и с такъв за плакненето.
                        </p>
                    </div>
                    <div class="slide-buttons">
                        <a href="#">
                            <div class="slider-single-button">
                                <img src="Content/Images/btn-blue.png">
                                <span class="slider-btn-text more-info">Виж подробно</span>
                                <img src="Content/Images/btn-black.png">
                                <span class="slider-btn-text buy">Купи</span>
                            </div>
                        </a>
                    </div>
                    <img src="Content/Images/home-banner.jpg" style="width: 100%;">
                </div>
                <div class="single-slide fade">
                    <div class="slide-text">
                        <h1 class="slide-title">Модел <span class="slide-model">Т500</span></h1><br>
                        <h3 class="slide-summary">Лесен за използване</h3><br>
                        <p> Състои се от
                            шкаф за миене, плакнене/стерилизация,
                            два резервоара, намиращи се под шкафа,
                            и управление.
                        </p>
                    </div>
                    <div class="slide-buttons">
                        <a href="#">
                            <div class="slider-single-button">
                                <img src="Content/Images/btn-blue.png">
                                <span class="slider-btn-text more-info">Виж подробно</span>
                                <img src="Content/Images/btn-black.png">
                                <span class="slider-btn-text buy">Купи</span>
                            </div>
                        </a>
                    </div>
                    <img src="Content/Images/home-banner.jpg" style="width: 100%;">
                </div>
                <div class="single-slide fade">
                    <div class="slide-text">
                        <h1 class="slide-title">Модел <span class="slide-model">K600</span></h1><br>
                        <h3 class="slide-summary">Лесен за използване</h3><br>
                        <p> Машината е предназначена за бързо
                            и ефективно измиване на стандартни кошници
                            с ножове в предприятия от хранителната промишленост.
                        </p>
                    </div>
                    <div class="slide-buttons">
                        <a href="#">
                            <div class="slider-single-button">
                                <img src="Content/Images/btn-blue.png">
                                <span class="slider-btn-text more-info">Виж подробно</span>
                                <img src="Content/Images/btn-black.png">
                                <span class="slider-btn-text buy">Купи</span>
                            </div>
                        </a>
                    </div>
                    <img src="Content/Images/home-banner.jpg" style="width: 100%;">
                </div>
                <div>
                    <div class="dots-nav" style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2 slide-side-color"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 clear-all categories-align">
            <div class="col-4 cat-side">
                <a href="#">
                    <img src="Content/Images/banner.png"></a></div>
            <div class="col-4 cat-side "><a href="#">
                    <img src="Content/Images/banner.png"></a></div>
            <div class="col-4 cat-side "><a href="#">
                    <img src="Content/Images/banner.png"></a></div>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row">
        <div class="col-2" style="padding-bottom: 5px"></div>
        <div class="col-8 clear-all">
            <ul class="navbar-list align-info">
                <li>
                    <span class="products-text">Препоръчани продукти</span>
                </li>
                <li class="nav-right-child">
                    <span class="grey-text">всички продукти</span>
                </li>
            </ul>
        </div>
        <hr class="white-line">
        <div class="col-2 clear-all"></div>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 clear-all">
            <?php foreach ($data[0] as $single): ?>
                <div class="col-3 merchandise-space">
                    <div class="merchandise-box">
                    <span class="merchandise-box-name"><?= htmlentities($single->getName()); ?>
                    </span>
                        <img class="merchandise-main-image" src="<?= $single->getImage(); ?>">
                        <p class="fix-price">&#36;<?= htmlentities($single->getPrice()); ?></p>
                        <a href="#"><img class="merchandise-cart"
                                         src="Content/Images/add-to-cart.png"></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="col-2"></div>
    </div>
</main>
<div class="col-12">
    <hr class="white-line">
</div>
<footer>
    <div class=" row" style="margin-bottom:30px;padding-bottom: 20px">
        <div class="col-2"></div>
        <div class="col-5 clear-all">
            <div class="contact-info clear-all">
                <a href="#"><span>За нас </span></a>|<a href="#"><span>Как да поръчам </span></a>|<a href="#"><span>Начин на доставка</span></a>|<a href="#"><span>Условия за ползване</span></a>|<a href="#"><span>Контакти</span></a>
                <p>&copy All rights reserverd</p>
                <p>Designed by RIZN</p>
            </div>
        </div>
        <div class="col-3 clear-side">
            <div class="search-bar">
                <div class="buletin">
                    <h3>Бюлетин</h3>
                    <form>
                        <span class="fa fa-envelope-o"></span>
                        <input class="bul-field" type="text" name="buletin">
                        <button name="submit" class="close-icon btn-placer"><img
                                src="Content/Images/btn-newsletter.png"></button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</footer>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("single-slide");
        console.log(slides);
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
</body>
</html>
