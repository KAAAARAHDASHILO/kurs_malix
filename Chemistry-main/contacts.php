<?php
require_once("./db/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/61b86703fe.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/media.css">

    <link rel="stylesheet" href="./style/owl.carousel.min.css">
    <link rel="stylesheet" href="./style/owl.theme.default.min.css">

    <script src="./js/jquery.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <title>Главная</title>
</head>
<body>
    <?php
    require_once("./models/header.php");
    ?>
    <main>
        <div class="contact">
            <div class="contact-wrapper">
                <div class="cw-left">
                    <p class="cwl-title">контакты</p>
                    <div class="cwl-info">
                        <p><i class="fa-solid fa-location-dot"></i><span>г. Москва, ул. Покровка, 47А</span></p>
                        <p><img src="./img/svg/metro.svg"><span>м. Курская</span></p>
                        <a href="mailto: clean@house.com"><i class="fa-solid fa-envelope"></i><span>clean@house.com</span></a>
                        <a href="tel: +7 (999) 999-99-99"><i class="fa-solid fa-phone"></i><span>+7 (999) 999-99-99</span></a>
                        <p class="cwli-timework"><i class="fa-solid fa-clock"></i><span>График работы: <br> ежедневно с 9:00 до 20:00</span></p>
                    </div>
                    <div class="cwl-icon">
                        <a href="#!" class="hcwr-left"><img src="./img/svg/tg.svg"></a>
                        <a href="#!"><img src="./img/svg/wp.svg"></a>
                    </div>
                </div>
                <div class="cw-right">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/971/taganrog/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Таганрог</a><a href="https://yandex.ru/maps/213/moscow/house/ulitsa_pokrovka_47a/Z04YcAJjS0MFQFtvfXt3cn9gZQ==/?ll=37.653263%2C55.763331&utm_medium=mapframe&utm_source=maps&z=17.2" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Покровка, 47А — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.653263%2C55.763331&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgg1NjcyMzQ2MRI90KDQvtGB0YHQuNGPLCDQnNC-0YHQutCy0LAsINGD0LvQuNGG0LAg0J_QvtC60YDQvtCy0LrQsCwgNDfQkCIKDfGcFkIVpw1fQg%2C%2C&z=17.2" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
                </div>
            </div>
        </div>
    </main>
    <?php
    require_once("./models/footer.php");
    require_once("./models/mobile.php");
    ?>
    <script src="./js/hamburger.js"></script>
    <script src="./js/owl.js"></script>
</body>
</html>