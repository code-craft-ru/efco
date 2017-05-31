<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>
    <div class="page page-index">
        <div class="page-inner">
            <?php 
                $menuTheme = 'header__menu--theme-shadow-bottom';
                include 'base/header.php';
            ?>

            <div class="wrapper">
                <div class="page-body page-body--white">
                        <div class="title--fill h-mrg-t-65">
                            КОНТАКТЫ
                        </div>

                        <div class="box-shadow box-shadow--pad2 h-mrg-t-35">
                            <p class='h-mrg-l-35 h-mrg-b-10'>контакты дистрибьюторов</p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td><p class='h-uppc'>Территория</p></td>
                                        <td><p class='h-uppc'>Название</p></td>
                                        <td><p class='h-uppc'>Фактический адресс</p></td>
                                        <td><p class='h-uppc'>Телефон</p></td>
                                        <td><p class='h-uppc'>Електронная почта</p></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p>Брянская обл.</p></td>
                                        <td><p>ООО "Вектор Групп"</p></td>
                                        <td><p>241035, г. Брянск, ул. Сталелитейная, д. 1</p></td>
                                        <td><p>(4832) 30-35-02</p></td>
                                        <td><p>secretary@bfvector.ru</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Воронежская обл.</p></td>
                                        <td><p>ООО Альта</p></td>
                                        <td><p>394038, г. Воронеж, ул. Космонавтов, д. 1 «а», оф. 1</p></td>
                                        <td><p>7(473)2605370</p></td>
                                        <td><p>Personal@altavrn.com</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Липецкая обл.</p></td>
                                        <td><p>ООО  Перспектива</p></td>
                                        <td><p>398005, г. Липецк, Осенний проезд, д.1 к</p></td>
                                        <td><p>8-960-141-49-22</p></td>
                                        <td><p>o.perspectiva2012@yandex.ru</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Курская обл.</p></td>
                                        <td><p>ООО ТЛК Флагман</p></td>
                                        <td><p>г. Курск, ул. 50 лет Октября, 179</p></td>
                                        <td><p>8-(4712)-735-537</p></td>
                                        <td><p>shikov_mi@shikov.org</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Орловская обл.</p></td>
                                        <td><p>ООО А-трейд</p></td>
                                        <td><p>г. Орёл, ул. Автовокзальная, 43 а</p></td>
                                        <td><p>(462) 44-25-40, 44-25-41</p></td>
                                        <td><p>msi@akva-orel.ru</p></td>
                                    </tr>
                                    <tr>
                                        <td><p> </p></td>
                                        <td><p> </p></td>
                                        <td><p> </p></td>
                                        <td><p> </p></td>
                                        <td><p> </p></td>
                                    </tr>
                                    <tr>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                    </tr>
                                    <tr>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                    </tr>
                                    <tr>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                        <td><p></p></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="box-shadow h-mrg-t-15 h-mrg-b-60">
                            <div class="form-feedback__row form-feedback__row--no-m">
                                <div class="box-shadow__line h-mrg-b-5"></div>
                                <div class="cols">
                                    <div class="col--70">
                                        <p class='box-shadow__p h-mrg-t-5'>КОНТАКТЫ   ОБРАТНАЯ СВЯЗЬ</p>
                                        <p class='box-shadow__p h-mrg-t-5'>ГОРЯЧАЯ ЛИНИЯ 8-800-200-70-80 (бесплатный звонок по России)</p>
                                    </div>
                                    <div class="col--30 h-alg-r">
                                        <button 
                                            type='submit' 
                                            data-mfp-src="#popup-mailing" 
                                            class='btn btn--feedback-submit btn--feedback-submit--min js-link-popup'
                                        >
                                            <span class="icon icon--mail-white"></span>
                                            Подписаться
                                        </button>
                                    </div>
                                </div>
                            </div>
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
