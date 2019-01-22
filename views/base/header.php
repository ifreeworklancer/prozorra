<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="57x57" href="../../images/icon/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../../images/icon/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../../images/icon/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../../images/icon/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../../images/icon/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../../images/icon/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../../images/icon/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../../images/icon/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../../images/icon/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../../images/icon/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../images/icon/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../../images/icon/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../images/icon/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../images/icon/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>
        <?= $app_title ?>
    </title>


    <link rel="stylesheet" href="../../fonts/font.css">
    <link rel="stylesheet" href="../../dist/app.css">

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '302680690585844');
        fbq('track', 'PageView');
        fbq('track', 'ViewContent');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=302680690585844&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
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

    <symbol id="quote-icon" viewBox="0 0 32 32">
        <path d="M0,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H0z"/>
        <path d="M20,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H20z"/>
    </symbol>

    <symbol id="phone-icon" viewBox="0 0 27.442 27.442">
        <path d="M19.494,0H7.948C6.843,0,5.951,0.896,5.951,1.999v23.446c0,1.102,0.892,1.997,1.997,1.997h11.546
            c1.103,0,1.997-0.895,1.997-1.997V1.999C21.491,0.896,20.597,0,19.494,0z M10.872,1.214h5.7c0.144,0,0.261,0.215,0.261,0.481
            s-0.117,0.482-0.261,0.482h-5.7c-0.145,0-0.26-0.216-0.26-0.482C10.612,1.429,10.727,1.214,10.872,1.214z M13.722,25.469
            c-0.703,0-1.275-0.572-1.275-1.276s0.572-1.274,1.275-1.274c0.701,0,1.273,0.57,1.273,1.274S14.423,25.469,13.722,25.469z
            M19.995,21.1H7.448V3.373h12.547V21.1z"/>
    </symbol>

    <symbol id="email-icon" viewBox="0 0 510 510">
        <path d="M510,191.25c0-17.85-10.2-33.15-22.95-43.35L255,12.75L22.95,147.9C10.2,158.1,0,173.4,0,191.25v255    c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V191.25z M255,318.75L43.35,186.15L255,63.75l211.65,122.4L255,318.75z"/>
    </symbol>

    <symbol id="address-icon" viewBox="0 0 512.001 512.001">
        <path d="M503.402,228.885L273.684,19.567c-10.083-9.189-25.288-9.188-35.367-0.001L8.598,228.886    c-8.077,7.36-10.745,18.7-6.799,28.889c3.947,10.189,13.557,16.772,24.484,16.772h36.69v209.721    c0,8.315,6.742,15.057,15.057,15.057h125.914c8.315,0,15.057-6.741,15.057-15.057V356.932h74.002v127.337    c0,8.315,6.742,15.057,15.057,15.057h125.908c8.315,0,15.057-6.741,15.057-15.057V274.547h36.697    c10.926,0,20.537-6.584,24.484-16.772C514.147,247.585,511.479,236.246,503.402,228.885z"/>
        <path d="M445.092,42.73H343.973l116.176,105.636v-90.58C460.149,49.471,453.408,42.73,445.092,42.73z"/>
    </symbol>


    <symbol id="telegram-icon" viewBox="0 0 455.731 455.731">
        <rect x="0" y="0" style="fill:#61A8DE;" width="455.731" height="455.731"/>
        <path style="fill:#FFFFFF;" d="M358.844,100.6L54.091,219.359c-9.871,3.847-9.273,18.012,0.888,21.012l77.441,22.868l28.901,91.706
		c3.019,9.579,15.158,12.483,22.185,5.308l40.039-40.882l78.56,57.665c9.614,7.057,23.306,1.814,25.747-9.859l52.031-248.76
		C382.431,106.232,370.443,96.08,358.844,100.6z M320.636,155.806L179.08,280.984c-1.411,1.248-2.309,2.975-2.519,4.847
		l-5.45,48.448c-0.178,1.58-2.389,1.789-2.861,0.271l-22.423-72.253c-1.027-3.308,0.312-6.892,3.255-8.717l167.163-103.676
		C320.089,147.518,324.025,152.81,320.636,155.806z"/>
    </symbol>

    <symbol id="viber-icon" viewBox="0 0 455.731 455.731">
        <rect x="0" y="0" style="fill:#7D3DAF;" width="455.731" height="455.731"/>
        <path style="fill:#FFFFFF;" d="M371.996,146.901l-0.09-0.36c-7.28-29.43-40.1-61.01-70.24-67.58l-0.34-0.07
			c-48.75-9.3-98.18-9.3-146.92,0l-0.35,0.07c-30.13,6.57-62.95,38.15-70.24,67.58l-0.08,0.36c-9,41.1-9,82.78,0,123.88l0.08,0.36
			c6.979,28.174,37.355,58.303,66.37,66.589v32.852c0,11.89,14.49,17.73,22.73,9.15l33.285-34.599
			c7.219,0.404,14.442,0.629,21.665,0.629c24.54,0,49.09-2.32,73.46-6.97l0.34-0.07c30.14-6.57,62.96-38.15,70.24-67.58l0.09-0.36
			C380.996,229.681,380.996,188.001,371.996,146.901z M345.656,264.821c-4.86,19.2-29.78,43.07-49.58,47.48
			c-25.921,4.929-52.047,7.036-78.147,6.313c-0.519-0.014-1.018,0.187-1.38,0.559c-3.704,3.802-24.303,24.948-24.303,24.948
			l-25.85,26.53c-1.89,1.97-5.21,0.63-5.21-2.09v-54.422c0-0.899-0.642-1.663-1.525-1.836c-0.005-0.001-0.01-0.002-0.015-0.003
			c-19.8-4.41-44.71-28.28-49.58-47.48c-8.1-37.15-8.1-74.81,0-111.96c4.87-19.2,29.78-43.07,49.58-47.48
			c45.27-8.61,91.17-8.61,136.43,0c19.81,4.41,44.72,28.28,49.58,47.48C353.765,190.011,353.765,227.671,345.656,264.821z"/>
        <path style="fill:#FFFFFF;" d="M270.937,289.942c-3.044-0.924-5.945-1.545-8.639-2.663
			c-27.916-11.582-53.608-26.524-73.959-49.429c-11.573-13.025-20.631-27.73-28.288-43.292c-3.631-7.38-6.691-15.049-9.81-22.668
			c-2.844-6.948,1.345-14.126,5.756-19.361c4.139-4.913,9.465-8.673,15.233-11.444c4.502-2.163,8.943-0.916,12.231,2.9
			c7.108,8.25,13.637,16.922,18.924,26.485c3.251,5.882,2.359,13.072-3.533,17.075c-1.432,0.973-2.737,2.115-4.071,3.214
			c-1.17,0.963-2.271,1.936-3.073,3.24c-1.466,2.386-1.536,5.2-0.592,7.794c7.266,19.968,19.513,35.495,39.611,43.858
			c3.216,1.338,6.446,2.896,10.151,2.464c6.205-0.725,8.214-7.531,12.562-11.087c4.25-3.475,9.681-3.521,14.259-0.624
			c4.579,2.898,9.018,6.009,13.43,9.153c4.331,3.086,8.643,6.105,12.638,9.623c3.841,3.383,5.164,7.821,3.001,12.412
			c-3.96,8.408-9.722,15.403-18.034,19.868C276.387,288.719,273.584,289.127,270.937,289.942
			C267.893,289.017,273.584,289.127,270.937,289.942z"/>
        <path style="fill:#FFFFFF;" d="M227.942,131.471c36.515,1.023,66.506,25.256,72.933,61.356c1.095,6.151,1.485,12.44,1.972,18.683
			c0.205,2.626-1.282,5.121-4.116,5.155c-2.927,0.035-4.244-2.414-4.434-5.039c-0.376-5.196-0.637-10.415-1.353-15.568
			c-3.78-27.201-25.47-49.705-52.545-54.534c-4.074-0.727-8.244-0.918-12.371-1.351c-2.609-0.274-6.026-0.432-6.604-3.675
			c-0.485-2.719,1.81-4.884,4.399-5.023C226.527,131.436,227.235,131.468,227.942,131.471
			C264.457,132.494,227.235,131.468,227.942,131.471z"/>
        <path style="fill:#FFFFFF;" d="M283.434,203.407c-0.06,0.456-0.092,1.528-0.359,2.538c-0.969,3.666-6.527,4.125-7.807,0.425
			c-0.379-1.098-0.436-2.347-0.438-3.529c-0.013-7.734-1.694-15.46-5.594-22.189c-4.009-6.916-10.134-12.73-17.318-16.248
			c-4.344-2.127-9.042-3.449-13.803-4.237c-2.081-0.344-4.184-0.553-6.275-0.844c-2.534-0.352-3.887-1.967-3.767-4.464
			c0.112-2.34,1.822-4.023,4.372-3.879c8.38,0.476,16.474,2.287,23.924,6.232c15.15,8.023,23.804,20.687,26.33,37.597
			c0.114,0.766,0.298,1.525,0.356,2.294C283.198,199.002,283.288,200.903,283.434,203.407
			C283.374,203.863,283.288,200.903,283.434,203.407z"/>
        <path style="fill:#FFFFFF;" d="M260.722,202.523c-3.055,0.055-4.69-1.636-5.005-4.437c-0.219-1.953-0.392-3.932-0.858-5.832
			c-0.918-3.742-2.907-7.21-6.055-9.503c-1.486-1.083-3.17-1.872-4.934-2.381c-2.241-0.647-4.568-0.469-6.804-1.017
			c-2.428-0.595-3.771-2.561-3.389-4.839c0.347-2.073,2.364-3.691,4.629-3.527c14.157,1.022,24.275,8.341,25.719,25.007
			c0.102,1.176,0.222,2.419-0.039,3.544C263.539,201.464,262.113,202.429,260.722,202.523
			C257.667,202.578,262.113,202.429,260.722,202.523z"/>
    </symbol>

    <symbol id="whatsapp-icon" viewBox="0 0 455.731 455.731">
    <rect x="0" y="0" style="fill:#1BD741;" width="455.731" height="455.731"/>
        <path style="fill:#FFFFFF;" d="M68.494,387.41l22.323-79.284c-14.355-24.387-21.913-52.134-21.913-80.638
			c0-87.765,71.402-159.167,159.167-159.167s159.166,71.402,159.166,159.167c0,87.765-71.401,159.167-159.166,159.167
			c-27.347,0-54.125-7-77.814-20.292L68.494,387.41z M154.437,337.406l4.872,2.975c20.654,12.609,44.432,19.274,68.762,19.274
			c72.877,0,132.166-59.29,132.166-132.167S300.948,95.321,228.071,95.321S95.904,154.611,95.904,227.488
			c0,25.393,7.217,50.052,20.869,71.311l3.281,5.109l-12.855,45.658L154.437,337.406z"/>
        <path style="fill:#FFFFFF;" d="M183.359,153.407l-10.328-0.563c-3.244-0.177-6.426,0.907-8.878,3.037
			c-5.007,4.348-13.013,12.754-15.472,23.708c-3.667,16.333,2,36.333,16.667,56.333c14.667,20,42,52,90.333,65.667
			c15.575,4.404,27.827,1.435,37.28-4.612c7.487-4.789,12.648-12.476,14.508-21.166l1.649-7.702c0.524-2.448-0.719-4.932-2.993-5.98
			l-34.905-16.089c-2.266-1.044-4.953-0.384-6.477,1.591l-13.703,17.764c-1.035,1.342-2.807,1.874-4.407,1.312
			c-9.384-3.298-40.818-16.463-58.066-49.687c-0.748-1.441-0.562-3.19,0.499-4.419l13.096-15.15
			c1.338-1.547,1.676-3.722,0.872-5.602l-15.046-35.201C187.187,154.774,185.392,153.518,183.359,153.407z"/>

</symbol>



</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-8 col-sm-2 col-lg-3 text-center">
                <a href="/" class="logo"><img src="../../images/icon/logo/logo.png" alt=""></a>
            </div>
            <div class="col-4 col-sm-10 col-lg-9 d-flex justify-content-end d-sm-block">
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
                                    <a href="tel:<?= phone_link($contacts['phone']) ?>">
                                        <?= $contacts['phone']; ?>
                                    </a>
                                </li>
                                <li class="social-nav-list-item social-nav-list-item--facebook">
                                    <a href="<?= $contacts['facebook']?>">
                                        <svg width="17" height="17">
                                            <use xlink:href="#facebook-icon"></use>
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

<?php require_once __DIR__ . ('../../modules/modal.php'); ?>

<!-- Main -->
<main>