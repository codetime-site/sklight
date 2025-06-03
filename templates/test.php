<!-- Шаблон для header и для Footer -->
<script type="text/x-handlebars-template" id="tempHeader">
  <?php require("header.hbs"); ?>
</script>

<!-- Шаблон для секции "О нас" -->
<script type="text/x-handlebars-template" id="tempAbout">
  <?php require("about.hbs"); ?>
</script>

<!-- Шаблон для новостей -->
<script type="text/x-handlebars-template" id="tempNews">
  <?php require("news.hbs"); ?>
</script>

<!-- tempFooterSubMenulist -->
<script type="text/x-handlebars-template" id="tempFooterSubMenulist">
    <?php require("footer_sub_menu.hbs"); ?>
</script>

<!-- tempFooterMenulist -->
<script type="text/x-handlebars-template" id="tempFooterMenulist">
    <?php require("footer_menu.hbs"); ?>
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Универсальная функция рендеринга
    function renderTemplate(templateId, outputId, data) {
        const source = document.getElementById(templateId).innerHTML;
        const template = Handlebars.compile(source);
        const output = document.getElementById(outputId);

        if (output) {
        output.innerHTML = template(data);
        } else {
        console.error(`Элемент с id='${outputId}' не найден`);
        }
    }
    // Загрузка данных из data.json
    let allData;
    try {
        allData = <?php
        $json = file_get_contents('../templates/data.json');
        echo json_encode(json_decode($json, true));
        ?>;
    } catch (error) {
        console.error('Ошибка загрузки JSON:', error);
        allData = {
        items: [],
        newsItem: [],
        header_list: []
        }; // Резервные данные
    }

  // Рендеринг шаблонов
  renderTemplate('tempAbout', 'aboutOutput', { items: allData.items || [] });
  renderTemplate('tempNews', 'newsOutput', { newsItem: allData.newsItem || [] });
  renderTemplate('tempHeader', 'headerOutput', { header_list: allData.header_list || [] });
  renderTemplate('tempFooterSubMenulist', 'footerSunMenuOutput', { footerSunMenulist: allData.footerSunMenulist || [] });
  renderTemplate('tempFooterMenulist', 'footerMunuListOutput', { footerMenulist: allData.footerMenulist || [] });
  renderTemplate('tempHeader', 'footerContactOutput', { header_list: allData.header_list || [] });
});
</script>