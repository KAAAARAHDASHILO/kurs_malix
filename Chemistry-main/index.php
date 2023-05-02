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
        <div class="slider">
            <div class="owl-carousel owl-theme" id="owl">
                <div class="item">
                    <div class="item-wrapper">
                        <img src="./img/slider-back.png" class="iw-image">
                        <div class="iw-info">
                            <div class="iw-text">
                                <p class="iwt-title">оборудование <br> для вашего дома <br> оптом и в розницу</p>
                                <p class="iwt-subtitle">Самое высокое качество!</p>
                                <a href="./catalog.php">Перейти в каталог</a>
                            </div>
                            <div class="iw-img">
                                <img src="./img/главная.png" width="450px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-wrapper">
                        <img src="./img/slider-back.png" class="iw-image">
                        <div class="iw-info">
                            <div class="iw-text">
                                <p class="iwt-title">здесь можно  <br> найти все что <br> вам надо</p>
                                <p class="iwt-subtitle">Не выходя из дома!</p>
                                <a href="./catalog.php">Перейти в каталог</a>
                            </div>
                            <div class="iw-img">
                                <img src="./img/like.png" width="450px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category">
            <div class="category-wrapper">
                <p class="cw-title">категории товаров</p>
                <div class="cw-carts">
                    <?php
                        $select_categ = mysqli_query($link, "SELECT * FROM `category` ORDER BY `id` DESC LIMIT 6");
                        $select_categ = mysqli_fetch_all($select_categ);

                        foreach($select_categ as $sc) { ?>
                            <div class="cwc-cart">
                                <div class="cwcc-wrapper">
                                    <div class="cwcc-img">
                                        <img src="<?php print("./" . $sc[2]); ?>">
                                    </div>
                                    <div class="cwcc-info">
                                        <p><?php echo $sc[1]; ?></p>
                                        <a href="./product.php?id=<?php echo $sc[0]; ?>">В каталог <img src="./img/svg/arrow-right.svg"></a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="advantages">
            <div class="advantages-wrapper">
                <img src="./img/svg/bg-setka.svg" class="aw-setka">
                <div class="aw-grid">
                    <div class="awg-left">
                        <p>наши преимущества</p>
                        <img src="./img/svg/gpu.svg">
                    </div>
                    <div class="awg-right">
                        <div class="awgr-wpapper">
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Более 5 лет успешной работы</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Сотни положительных отзывов</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Работаем по всей России</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Сотрудничество с производителем</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Гарантия на оборудование</p>
                                </div>
                            </div>
                            <div class="awgrw-point">
                                <div class="awgrwp-wr">
                                    <div class="awgrwpwr-check">
                                        <img src="./img/svg/check.svg">
                                    </div>
                                    <p>Собственный склад в Москве</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="./img/svg/gpu.svg" class="aw-gpu">
            </div>
        </div>
        <div class="bestsellers">
            <div class="bestsellers-wrapper">
                <p class="bw-title">новые товары</p>
                <div class="owl-carousel owl-theme owl-2" id="owl-2">
                    <?php
                        $select_product = mysqli_query($link, "SELECT * FROM `product` ORDER BY `id` DESC LIMIT 10");
                        $select_product = mysqli_fetch_all($select_product);

                        foreach($select_product as $sp) { ?>
                            <div class="bw-item">
                                <div class="bwi-wrapper">
                                    <div class="bwiw-img">
                                        <img src="<?php print("./" . $sp[5]); ?>">
                                    </div>
                                    <div class="bwiw-info">
                                        <p class="bwiwi-title"><?php echo $sp[2]; ?></p>
                                        <p class="bwiwi-price"><?php echo $sp[4]; ?> ₽</p>
                                        <a href="./cart-product.php?id=<?php echo $sp[0]; ?>" class="bwiwi-link">Купить в 1 клик</a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
        <div class="about">
            <div class="about-wrapper">
                <div class="aw-top">
                    <div class="awt-left">
                        <p class="aw-title">о компании</p>
                        <p class="aw-descr">С 2017 года Main-miner поставляет технику для майнинга на российский рынок оптом. За пять лет мы смогли укрепить свои позиции на рынке оборудования, вырастили персонал, прекрасно разбирающийся в каждом типе асиков и комплектующих. <br><br> Если вы хотите купить асики оптом, то с нами можете быть уверены как в качестве техники, так и в надёжности сотрудничества. Лучше всего о нас говорит репутация!</p>
                    </div>
                    <div class="awt-rigth">
                      
                    </div>
                </div>
                <div class="aw-bottom">
                    <div class="awb-wrapper">
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/calandary.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Работаем без выходных – 7 дней в неделю</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/group.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Прямое сотрудничество с поставщиками</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/plane.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Быстрая авиадоставка от 14 дней</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/diagram.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Предоплата за предзаказ от 30%</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/tablet.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Официальный договор, полная защита средств</p>
                            </div>
                        </div>
                        <div class="awbw-item">
                            <div class="awbwi-icon">
                                <img src="./img/svg/camera.svg">
                            </div>
                            <div class="awbwi-info">
                                <p>Видеопроверка для удаленных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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