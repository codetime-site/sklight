<?php require_once("../header.php");?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.8/handlebars.min.js"></script>
<main>
<div class="fulldiv overhid bg_fa"><div class="maindiv dqwz"><a href="/">Главная</a><i></i><a href="/aboutus.html">О нас</a></div></div>
<div class="blank20"></div>
<div class="maindiv overhid">
<div class="maintit">О нас</div>
    <div class="maincons">
    	<p style="text-align:justify;">
            Наша компания <strong><em><span style="color:#00D5FF;">SK</span></em></strong> специализируется на производстве светотехнического оборудования как <strong>в России</strong>,
        так и за ее пределами.<br>
        <strong><em>Основным направлением деятельности</em></strong> является производство
        высококачественных влагозащищенных<em> голов</em>,&nbsp;<em>прожекторов и экранов</em>, которые широко
        используются в различных сферах, включая архитектурное освещение, уличное
        освещение и сценические световые системы. Так как &nbsp;продукция нашего завода пользуется высоким спросом не только в Китае, но и в других странах мира, то мы имеем&nbsp;представительства в 10 странах мира, имеющие офис и склад, а также сервисный центр: Америка, Аргентина,
        Бразилия, Египет, Индонезия, Корея, Перу, Россия, Турция, Чили, Мексика.
        </p>
        <p style="text-align:justify;">
            Благодаря
        тщательному контролю качества на всех этапах производства, продукция <strong><em><span style="color:#00D5FF;">SK</span></em></strong> соответствует самым строгим международным стандартам и требованиям
        безопасности. На нашем заводе работает более <strong><em>300&nbsp; работников</em></strong><em> и </em><strong><em>60 работников научно-исследовательского
        персонала</em></strong>. <strong><em>Площадь</em></strong> завода составляет <strong>20000</strong> квадратных метров.
        </p>
        <p style="text-align:justify;">
            В ассортименте компании представлены разнообразные
        модели светильников различной мощности и назначения, способные удовлетворить
        потребности самых взыскательных клиентов. <strong><em>Особое внимание уделяется разработке
        и производству влагостойких моделей</em></strong>, которые могут работать в экстремальных
        погодных условиях без потери эффективности. SK активно сотрудничает с
        российскими партнерами и клиентами, предлагая индивидуальные решения и гибкие
        условия сотрудничества. Компания стремится к долгосрочным отношениям и всегда
        готова предложить своим клиентам <em><strong>высокое качество продукции, конкурентные цены
        и профессиональное сервисное обслуживание.</strong></em> 
        </p>
        <p>
            <img src="../assets/uploadfiles/image/20241209/20241209205042174217.jpg" alt=""><strong></strong> 
        </p>
    </div>
    <div class="maintit">Контактная информация</div>
    
    <div class="companys" id="output">
        <!-- handle -->
        <script id="tempAbout" type="text/x-handlebars-template">
            <?php require("handlebars/about.hbs");?>
        </script>
    </div>
</div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const source = document.getElementById('tempAbout').innerHTML;
        const template = Handlebars.compile(source);

        const data = <?php
            $json = file_get_contents('handlebarsDate/about_date.json');
            echo json_encode(json_decode($json, true)); ?>;
        
        const output = document.getElementById('output');

        if (output) {output.innerHTML = template(data);} 
        else {console.error("Элемент с id='output' не найден");}
    });
</script>

<?php require_once("../footer.php");?>