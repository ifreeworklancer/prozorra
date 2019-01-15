<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>

    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">

</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="facebook-icon" viewBox="0 0 455.73 455.73">
        <path d="M0,0v455.73h242.704V279.691h-59.33v-71.864h59.33v-60.353c0-43.893,35.582-79.475,79.475-79.475
	    h62.025v64.622h-44.382c-13.947,0-25.254,11.307-25.254,25.254v49.953h68.521l-9.47,71.864h-59.051V455.73H455.73V0H0z"/>
    </symbol>

    <symbol id="instagram-icon" viewBox="0 0 225 225">
        <path d="M0,0v225h225V0H0z M113,78.667c18.38,0,33.333,14.953,33.333,33.333S131.38,145.333,113,145.333S79.667,130.38,79.667,112
	S94.62,78.667,113,78.667z M30,26h34v22H30V26z M195,195H30v-79h19.806c2.073,33.064,29.616,59.333,63.194,59.333
	s61.121-26.269,63.194-59.333H195V195z"/>
    </symbol>

</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2 col-lg-3 text-center">
                <a href="/" class="logo">лого</a>
            </div>
            <div class="col-10 col-lg-9 d-flex justify-content-end d-sm-block">
                <div class="header-item d-none d-sm-block">
                    <div class="header-item-row header-item-row--top">
                        <ul class="header-nav-list">
                            <?php
                            foreach ($nav as $key => $value) {
                                echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="header-item-row header-item-row--bottom">
                        <div class="header-social-nav">
                            <ul class="social-nav-list">
                                <li class="social-nav-list-item social-nav-list-item--phone">
                                    <a href="tel:+38<?= phone_link($contacts['phone'])?>">
                                        <?= $contacts['phone'];?>
                                    </a>
                                </li>
                                <li class="social-nav-list-item social-nav-list-item--facebook">
                                    <a href="">
                                        <svg width="17" height="17">
                                            <use xlink:href="#facebook-icon"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="social-nav-list-item social-nav-list-item--instagram">
                                    <a href="">
                                        <svg width="17" height="17">
                                            <use xlink:href="#instagram-icon"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="burger-menu d-flex d-sm-none flex-column justify-content-center align-items-start">
                    <div class="line line--top"></div>
                    <div class="line line--middle d-flex justify-content-between align-items-start">
                        <div class="line line--small"></div>
                        <div class="line line--big"></div>
                    </div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="menu">
    <div class="menu-content">
        <ul class="menu-nav-list">
            <?php
            foreach ($nav as $key => $value) {
                echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
            }
            ?>
        </ul>
    </div>
</div>

<!-- Main -->
<main>