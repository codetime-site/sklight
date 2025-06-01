document.addEventListener("DOMContentLoaded",newsRun());

function newsRun(){
    const news = document.getElementById("newshandl").innerHTML;
    const newsTemplate = Handlebars.compile(news); 
    
    const newsDate = <?php 
        $newsJson = file_get_contents('handlebarsDate/about_date.json');
        echo json_encode(json_decode($newsJson, true)); ?>

    const newsOutput = document.getElementById('newsOutput');
        if (newsOutput) {newsOutput.innerHTML = newsTemplate(newsDate);} 
        else {console.error("Элемент с id='output' не найден");}
}