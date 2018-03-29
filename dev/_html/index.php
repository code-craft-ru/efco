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
                            <img src="../images/baner1.jpg" alt="" class="baner">
                            <div class="stick">
                               <a href="#popup-webcamera" class='js-link-popup'>
                                   <p>WEB <br>Камера</p>
                                   <img src="../images/camera.png" alt="">
                               </a>
                            </div>
                        </div>
                        <div class="contain">
                            <img src="../images/baner2-2.jpg" alt="" class="baner">
                            <a href="milk.php">
                                <img src="../images/milkimg.png" alt="" class="milkimg">
                            </a>
                            <a href="belok-itog.php">
                                 <img src="../images/sticker2.png" alt="" class="sticker2">
                            </a>
                        </div>
                        <div class="contain">
                            <a href="live-food.php">
                                 <img src="../images/baner3.jpg" alt="" class="baner">
                            </a>
                        </div>

                        <?php include'components/block-news.php';?>

                </div><!-- /page-body -->

            </div>

            <?php include 'base/footer.php';?>
        </div><!-- /page-inner -->

        <!-- popups -->

    </div><!-- /page -->

    <?php include 'base/scripts.php'; ?>
</body>
</html>
