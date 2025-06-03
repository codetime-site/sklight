<?php require_once("../header.php");?>
<main>
    <div class="fulldiv overhid bg_fa"><div class="maindiv dqwz"><a href="/">Главная</a><i></i><a href="/news.html">Новости</a></div></div>
    <div class="blank20"></div>
    <div class="maindiv overhid">
        <div class="maintit">Новости</div>
        <div class="newslist" id="newsOutput">
            <?php require("../templates/test.php");?>
        </div>
            <div class="blank20"></div>
            <div class="pager">
            <div class="jogger"><span class="disabled">&lt;&lt;</span> <span class="disabled">
                &lt;</span> <span class="current">1</span> 
            <a href="/news-p2.html">2</a> <a href="/news-p2.html">&gt;</a> 
            <a href="/news-p2.html">&gt;&gt;</a> </div>
        </div>
    </div>
</main>
<?php require_once("../footer.php");?>