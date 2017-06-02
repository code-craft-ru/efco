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
                            <a href="belok-itog.php">
                                <img src="../images/sticker2.png" alt="" class="sticker2 sticker2--bottom">
                            </a>
                        </div>
                        
                        <div class="text-block">
                            <p class='par'>Люди, которые стараются выбирать для себя и своих близких полезные продукты для правильного питания, не оставят без внимания молоко А2. Ведь благодаря содержанию в нем правильного белка А2, оно лучше усваивается в организме и позволяет насладиться вкусом и пользой настоящего молока  даже тем, кто раньше не ладил с этим продуктом.</p>
                            <p class='par'>Жители Австралии, Новой Зеландии, США и других стран уже открыли для себя молоко А2. Большинство из них отметило, что с молоком А2 они перестали испытывать дискомфорт в животе. И теперь их выбор – А2. Многочисленные положительные отзывы людей из других стран свидетельствуют о том, что молоко А2 их любимый продукт для всей семьи. И теперь молоко А2 появилось и в России. А это значит, что что счастливых людей, которые смогут наслаждаться вкусным, питательным и полностью натуральным коровьим молоком А2, станет еще больше.</p>
                        </div>

                        <div class="title--fill h-mrg-b-10 h-mrg-t-50">
                            Истории молока А2
                        </div>

                        <div class="reviews">
                            <div class="reviews__items js-slider-fade">
                                <div class="reviews-item__slide-wr">
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
                                <div class="reviews-item__slide-wr">
                                    <div class="reviews-item">
                                        <div class="reviews-item__img">
                                            <img src="../images/userfiles/face.png" alt="">
                                        </div>
                                        <div class="reviews-item__content">
                                            <p class="reviews-item__title">История Лизы2</p>
                                            <div class="reviews-item__desc">
                                                Я очень требовательно отношусь к выбору продуктов для своей семьи, особенно для моего ребенка. Услышала про молоко А2, стало интересно. Почитала подробнее в интернете, проконсультировалась с нашим семейным доктором. Оказалось, что белок, который содержитсяв этом молоке такой же, как в материнском, а значит для ребенка А2 подойдетбольше, чем обычное коровье молоко. Теперь покупаем только А2.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                        
                        <div class="news-more">
                            <div class="news-more__items">
                                <div class="news-more__item">
                                    <a href="#!">
                                        <div class="news-more__img">
                                            <img src="../images/newsitem1.jpg" alt="">
                                        </div>
                                        <div class="news-more__title">
                                            Is a2 Milk natural?
                                        </div>
                                    </a>
                                </div>
                                <div class="news-more__item">
                                    <a href="#!">
                                        <div class="news-more__img">
                                            <img src="../images/newsitem2.jpg" alt="">
                                        </div>
                                        <div class="news-more__title">
                                            Will the a2 Milk Company <br> reduce payments to farmers?
                                        </div>
                                    </a>
                                </div>
                                <div class="news-more__item">
                                    <a href="#!">
                                        <div class="news-more__img">
                                            <img src="../images/newsitem3.jpg" alt="">
                                        </div>
                                        <div class="news-more__title">
                                            Will a2 Milk improve my <br>digestive wellbeing?
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

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
                            <div id="map" style="width: 100%; height: 310px"></div>
                                
                                <script>
                                    ymaps.ready(init);
                                    var myMap,placemark;

                                    function init(){   
                                        myMap = new ymaps.Map("map", {
                                            center: [55.82340833062003,37.806082532798754],
                                            zoom: 9,
                                            controls:[]
                                        });

                                        myMap.behaviors.disable(['scrollZoom', 'rightMouseButtonMagnifier']);


                                        var clusterer = new ymaps.Clusterer({
                                            /**
                                             * Через кластеризатор можно указать только стили кластеров,
                                             * стили для меток нужно назначать каждой метке отдельно.
                                             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/option.presetStorage.xml
                                             */
                                            preset: 'islands#invertedNightClusterIcons',
                                            /**
                                             * Ставим true, если хотим кластеризовать только точки с одинаковыми координатами.
                                             */
                                            groupByCoordinates: false,
                                            /**
                                             * Опции кластеров указываем в кластеризаторе с префиксом "cluster".
                                             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ClusterPlacemark.xml
                                             */
                                            clusterDisableClickZoom: true,
                                            clusterHideIconOnBalloonOpen: false,
                                            geoObjectHideIconOnBalloonOpen: false
                                        });

                                        var points = [
                                            [55.75399399999374,37.62209300000001],
                                            [55.729777762083266,37.479239271080004],
                                            [55.64599324555758,37.66875343123625],
                                            [55.70261993275194,37.663260267173754],
                                            [55.761512502702885,37.806082532798754],
                                            [55.82340833062003,37.806082532798754],
                                            [55.89600976900491,37.71819190779874],
                                            [55.945362606739586,37.40508155623625],
                                            [55.89909617026925,37.20732764998624],
                                            [55.54255527820888,36.970706801237405],
                                            [55.51136844592372,37.215200876387726]
                                        ];

                                        var geoOpjects = [];

                                        for( var i=0; i<points.length ;i++){
                                            geoOpjects[i] = new ymaps.Placemark(points[i] , {
                                                hintContent: 'Sloboda'
                                            },{
                                                preset: 'islands#nightIcon'
                                            });                                            
                                        }

                                        clusterer.add(geoOpjects);
                                        myMap.geoObjects.add(clusterer);
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
