<div class="blank50"></div>
</main>
<footer>
    <div class="fulldiv overhid bg_hei">
        <div class="maindiv footpd overhid">
            <div class="foot_logo"><img  title="this is img some" src="assets/images/logo.png" alt="sklight.ru" /></div>
            <div class="foot_nav fhid">
                <h2>Продукты</h2>
                <ul id="footerSunMenuOutput">
                    <?php require("templates/test.php");?>
                </ul>
            </div>
            <div class="foot_nav fhid">
                <h2>ИНФОРМАЦИЯ</h2>
                <ul id="footerMunuListOutput">
                    <?php require("templates/test.php");?>
                </ul>
            </div>
            <div class="foot_share">
                <h2>ИНФОРМАЦИЯ</h2>
                <ul id="footerContactOutput">
                    <?php require("templates/test.php");?>
                </ul>
            </div>
        </div>
    </div>
<!--weixin-->
    <div id="wx_div" class="wx_div">
        <b class="tc_close js-popup-close">&nbsp;</b>
        <div class="wx_form">
            <h2>Обратный звонок</h2>
            <h3>Укажите ваше имя и контактный телефон. В самое ближайшее время наш оператор вам перезвонит.</h3>
            <form class="feedback_tel" method="post" action="/tomail.html?act=gettel" onSubmit="return checkfeed2(this);">
                <div class="line">Ваше имя *<br><input name="cname" type="text" maxlength="50"></div>
                <div class="line">Контактный телефон *<br><input name="tel" type="text" maxlength="50"></div>
                <input class="btn" type="submit" value="ОТПРАВИТЬ">
            </form>
        </div>
    </div>
    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script type="text/javascript" src="assets/js/jquery.popup.min.js"></script>
    <script type="text/javascript" src="assets/js/foot.js"></script>
    <script src="//code.jivo.ru/widget/6Fdo0F8y1x" async></script>
</footer>
</body>
</html>
   