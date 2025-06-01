<?php require_once("../header.php");?>
<div class="fulldiv overhid bg_fa"><div class="maindiv dqwz"><a href="/">Главная</a><i></i><a href="/news.html">Новости</a></div></div>
<div class="blank20"></div>
<div class="maindiv overhid">
	<div class="maintit">Новости</div>
    <div class="newslist" id="newsOutput">

        <script type="text/x-handlebars-template" id="newshandl">
            <?php require("handlebars/news.hbs");?>
        </script>

      
    </div>
        <div class="blank20"></div>
        <div class="pager">
        <div class="jogger"><span class="disabled">&lt;&lt;</span> <span class="disabled">
            &lt;</span> <span class="current">1</span> 
        <a href="/news-p2.html">2</a> <a href="/news-p2.html">&gt;</a> 
        <a href="/news-p2.html">&gt;&gt;</a> </div>
        </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded",newsRun());
    function newsRun(){
        const news = document.getElementById("newshandl").innerHTML;
        const newsTemplate = Handlebars.compile(news); 
        
        const newsDate = <?php 
            $newsJson = file_get_contents('handlebarsDate/about_date.json');
            echo json_encode(json_decode($newsJson, true)); ?>

        const newsOutput = document.getElementById('newsOutput');
       
        if (newsOutput) {
            newsOutput.innerHTML = newsTemplate(newsDate);
        } 
        else {
            console.error("Элемент с id='output' не найден");
        }
    }
</script>
<?php require_once("../footer.php");?>