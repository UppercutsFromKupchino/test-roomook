<link rel="stylesheet" href="/main/style.css" />
<script src="/main/script.js"></script>
<main>
    <div class="banner-container">
        <div class="banner-container-text">
            <h1>Беcпроблемная доставка купленных вещей из США, Европы и Азии в Россию</h1>
            <div>Сэкономьте на покупках и наслаждайтесь мировыми брендами — наш сервис позволяет вам легко и удобно заказывать товары со всего мира и получать их в России</div>
        </div>
        <div class="banner">
            <img src="/img/banner.png" />
        </div>
    </div>
    <div class="calculator" id="calculator">
        <div class="calculator-text">
            <div class="title">Калькулятор доставки</div>
            <div class="description">Посчитайте, сколько будет стоить перевозка покупки из-за рубежа</div>
        </div>
        <div class="calculator-fields">
            <input class="header field" type="text" placeholder="Имя" name="name" />
            <div>
                <input class="field" type="text" placeholder="Почта" name="email"/>
                <input class="field" type="text" placeholder="Телефон" name="phone" />
            </div>
            <div>
                <input class="field" type="text" placeholder="Общая площадь, м²" name="square" />
                <input class="field" type="text" placeholder="Вес, кг" name="weight" />
            </div>
            <div>
                <input class="field" type="text" placeholder="Страна покупки" name="country" />
                <input class="field" type="text" placeholder="Город покупки" name="city-buy" />
            </div>
            <div>
                <input class="field" type="text" placeholder="Область доставки" name="region" />
                <input class="field" type="text" placeholder="Город доставки" name="city-deliver" />
            </div>
        </div>
        <button class="calculator-button">
            <div class="active">Заказать расчёт</div>
            <img src="/img/loader.svg" />
        </button>
        <div class="response"></div>
    </div>
</main>