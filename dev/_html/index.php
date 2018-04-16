<!DOCTYPE html>
<html lang="ru">
<?php include 'base/head.php';?>
<body>
    <div class="page page-index">
        <div class="page-inner">
            <?php include 'base/header.php';?>

            <div class="wrapper">
                <div class="page-body page-body--white">
                        <div class="contain baner-container1">
                            <img src="../images/baner1.jpg" alt="" class="baner">
                            <img src="../images/baner-1-1.jpg" alt="" class="baner2">

                            <div class="stick">
                               <a href="#popup-webcamera" class='js-link-popup'>
                                   <p>WEB <br>Камера</p>
                                   <img src="../images/camera.png" alt="">
                               </a>
                            </div>
                        </div>
                        <div class="contain baner-container2">
                            <img src="../images/baner2-2.jpg" alt="" class="baner">
                            <img src="../images/baner-2-2-m.png" alt="" class="baner2">
                            <a href="milk.php">
                                <img src="../images/milkimg.png" alt="" class="milkimg">
                            </a>
                            <a href="belok-itog.php">
                                 <img src="../images/sticker2.png" alt="" class="sticker2">
                            </a>
                        </div>
                        <div class="contain baner-container3">
                            <a href="live-food.php">
                                 <img src="../images/baner3.jpg" alt="" class="baner">
                                 <img src="../images/baner-3-2.png" alt="" class="baner2">
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
