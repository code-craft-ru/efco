<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>
    <div class="page page-index">
        <div class="page-inner">
            <?php include 'base/header.php';?>

            <div class="wrapper">
                <div class="page-body page-body--white">
                        <div class="contain">
                            <img src="../images/baner-history.jpg" alt="" class="baner">
                            <img src="../images/sticker2.png" alt="" class="sticker2 sticker2--bottom">
                        </div>
                        
                        <div class="text-block">
                            <p class='par'>Люди, которые стараются выбирать для себя и своих близких полезные продукты для правильного питания, не оставят без внимания молоко А2. Ведь благодаря содержанию в нем правильного белка А2, оно лучше усваивается в организме и позволяет насладиться вкусом и пользой настоящего молока  даже тем, кто раньше не ладил с этим продуктом.</p>
                            <p class='par'>Жители Австралии, Новой Зеландии, США и других стран уже открыли для себя молоко А2. Большинство из них отметило, что с молоком А2 они перестали испытывать дискомфорт в животе. И теперь их выбор – А2. Многочисленные положительные отзывы людей из других стран свидетельствуют о том, что молоко А2 их любимый продукт для всей семьи. И теперь молоко А2 появилось и в России. А это значит, что что счастливых людей, которые смогут наслаждаться вкусным, питательным и полностью натуральным коровьим молоком А2, станет еще больше.</p>
                        </div>

                        <div class="title--fill h-mrg-b-10">
                            Истории молока А2
                        </div>

                        <div class="reviews">
                            <div class="reviews__items">
                                <div class="reviews-item">
                                    <div class="reviews-item__img">
                                        <img src="../images/userfiles/face.png" alt="">
                                    </div>
                                    <div class="reviews-item__content">
                                        <p class="reviews-item__title">История Лизы</p>
                                        <div class="reviews-item__desc">
                                            Я очень требовательно отношусь к выбору продуктов для своей семьи, особенно для моего ребенка. Услышала про молоко А2, стало интересно. Почитала подробнее в интернете, проконсультировалась с нашим семейным доктором. Оказалось, что белок, который содержитсяв этом молоке такой же, как в материнском, а значит для ребенка А2 подойдетбольше, чем обычное коровье молоко. Теперь покупаем только А2.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="reviews__nav">
                                <li><a href="" class='active'></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </div>
                        <img src="../images/baner10.jpg" alt="">

                        <div class="text-block3">
                            <div class="text-block3__text">
                                <h2>Если вы регулярно пьете  обычное молоко и чувствуете нежелательное раздражение,</h2>
                                <p>то попробуйте молоко А2 и Вы почувствуете разницу, как и тысячи других людей.</p>
                            </div>
                            <div class="text-block3__items">
                                <div class="text-block3__item">
                                    <img src="../images/userfiles/a2.png" alt="">
                                    <p>Комфортно усваивается</p>
                                </div>
                                <div class="text-block3__item">
                                    <img src="../images/userfiles/uoy.png" alt="">
                                    <p>Гипоаллергенно</p>
                                </div>
                                <div class="text-block3__item">
                                    <img src="../images/userfiles/heart.png" alt="">
                                    <p>Белок как в грудном молоке</p>
                                </div>
                            </div>
                        </div>

                        <div class="maps">
                            <div id="map" style="width: 100%; height: 340px"></div>
                                
                                <script>
                                    ymaps.ready(init);
                                    var myMap,placemark;

                                    function init(){   
                                        myMap = new ymaps.Map("map", {
                                            center: [55.68337656905879,37.57411199999998],
                                            zoom: 16,
                                            controls:[]
                                        });

                                        myMap.behaviors.disable(['scrollZoom', 'rightMouseButtonMagnifier']);

                                        placemark = new ymaps.Placemark([55.68337656905879,37.57411199999998] , {
                                            hintContent: 'Platron'
                                        });
                                        myMap.geoObjects.add(placemark);
                                    }
                                </script>

                        </div>
                        
                </div><!-- /page-body -->

            </div>

            <?php include 'base/footer.php';?>
        </div><!-- /page-inner -->

        <!-- popups -->

    </div><!-- /page -->

    <?php include 'base/scripts.php'; ?>
</body>
</html>
