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
                        <div class="feedback-contain1">
                            <div class="title--fill title--fill--min">
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
                                    <textarea name="feedback[message]" id="" cols="30" rows="4" class="textarea" placeholder="Соообщение"></textarea>
                                </div>
                                <div class="form-feedback__footer">
                                    <div class="term-agree-checkbox">
                                        <div class="checkbox">
                                            <input id="agree" type="checkbox">
                                            <label for="agree"></label>
                                        </div>
                                        <p>Отправляя заявку, я принимаю <a href="#!" class="link link--blue">Пользовательское соглашение</a></p>
                                    </div>
                                    <button type='submit' class='btn btn--feedback-submit'>Отправить</button>
                                </div>
                                <div class="js-form__all-msg"></div>
                            </form>
                        </div>

                        <div class="feedback-contain2 box-shadow box-shadow--pad3">
                            <div class="form-feedback__row form-feedback__row--no-m">
                                <div class="cols">
                                    <div class="col--70">
                                        <p class='box-shadow__p'>КОНТАКТЫ   ОБРАТНАЯ СВЯЗЬ</p>
                                        <p class='box-shadow__p'>ГОРЯЧАЯ ЛИНИЯ 8-800-200-70-80 (бесплатный звонок по России)</p>
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
