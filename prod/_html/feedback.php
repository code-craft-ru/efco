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
                            ОБРАТНАЯ СВЯЗЬ
                        </div>

                        <form action="/" class="form-feedback h-mrg-t-35 js-form">
                            <div class="form-feedback__row">
                                <input type="text" name='feedback[name]' class="input" placeholder="Ваша фамилия и имя" >
                            </div>
                            <div class="form-feedback__row">
                                <input type="email" name='feedback[email]' class="input" placeholder="Эл. почта" >
                            </div>
                            <div class="form-feedback__row">
                                <input type="tel" name='feedback[phone]' class="input" placeholder="Контактный телефон*" required>
                            </div>
                            <div class="form-feedback__row">
                                <input type="text" name='feedback[location]' class="input" placeholder="Местонахождение*" required>
                            </div>
                            <div class="form-feedback__row">
                                <input type="text" name='feedback[mail_address]' class="input" placeholder="Почтовый адрес" >
                            </div>
                            <div class="form-feedback__row">
                                <input type="text" name='feedback[subject]' class="input" placeholder="Тема письма" >
                            </div>
                            <div class="form-feedback__row">
                                <textarea name="feedback[message]" id="" cols="30" rows="5" class="textarea" placeholder="Соообщение"></textarea>
                            </div>
                            <div class="form-feedback__row h-alg-r">
                                <button type='submit' class='btn btn--feedback-submit'>Отправить</button>
                            </div>
                            <div class="h-mrg-t-10">
                              <div class="js-form__all-msg"></div>
                            </div>
                        </form>

                        <div class="box-shadow h-mrg-t-15 h-mrg-b-60">
                            <div class="form-feedback__row form-feedback__row--no-m">
                                <div class="box-shadow__line h-mrg-b-5"></div>
                                <div class="cols">
                                    <div class="col--70">
                                        <p class='box-shadow__p h-mrg-t-5'>КОНТАКТЫ   ОБРАТНАЯ СВЯЗЬ</p>
                                        <p class='box-shadow__p h-mrg-t-5'>ГОРЯЧАЯ ЛИНИЯ 8-800-200-70-80 (бесплатный звонок по России)</p>
                                    </div>
                                    <div class="col--30 h-alg-r">
                                        <button data-mfp-src='#popup-mailing' type='submit' class='btn btn--feedback-submit btn--feedback-submit--min js-link-popup'>
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
