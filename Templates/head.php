<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Multivac</title>
    <link rel="stylesheet" href="Resources/css/shop-style.css">
    <link rel="stylesheet" href="Resources/css/bootstrap-datetimepicker.min.css">
</head>
<body>
<main>
    <header>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 search-bar">
                <img src="Resources/Images/logo.png">
                <div class="cart-bar" style="position: absolute;">
                    <span>0 прод</span>|<span>0,00лв.</span>
                    <div class="cart-btn">
                        <a href="#" class="navbar-link">
                            <img src="Resources/Images/cart.png"> Кошница </a>
                    </div>
                </div>
                <div class="header-search-box">
                    <div class="search-bar">
                        <form>
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
            <div class="col-2"></div>
            <div class="col-8 clear-all">
                <div class="col-5">
                    <p>Добре дошли в нашият онлайн магазин</p>
                </div>
                <div class="col-4 ">
                </div>
                <div class="col-3 search-bar">
                    <ul class="navbar-list authentication-bar">
                        <li>
                            <a class="authentication-link" href="#">Админ страница</a>
                        </li>
                        <li><a href="#" class="authentication-link">Изход</a>
                        </li>
                        {% else %}
                        <li><a href="#" class="authentication-link">Регистрация</a>
                        </li>
                        <li><a href="#" class="authentication-link">Вход</a>
                        </li>
                        {% endif %}
                    </ul>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
        <div class="row">
            <div class="col-12 navbar-background clear-all">
                <div class="col-2"></div>
                <div class="col-8" style="padding: inherit;">
                    <div class="col-1" style="padding: 0;"><a href="#"><img
                                src="Resources/Images/ico-home.png""></a>
                    </div>
                    <div class="col-8">
                        <ul class="navbar-list">
                            <li><a href="#" class="navbar-link">промоции</a></li>
<li><a href="#" class="navbar-link">камерни машини</a></li>
                            <li><a href="#" class="navbar-link">консумативи</a></li>
                            <li><a href="#" class="navbar-link">компактни термоформи</a></li>
                        </ul>
                    </div>
                    <div class="col-3 side-clear">
                        <div class="search-bar">
                            <ul class="navbar-list right-nav">
                                <li><a href="#" class="navbar-link">Сертификати</a></li>
                                <li><a href="#" class="navbar-link">Контакти</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </header>