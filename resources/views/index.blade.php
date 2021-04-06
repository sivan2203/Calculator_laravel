<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Байки из склепа</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script   src="/js/jquery.min.js"></script>
        <script src="/js/ajax.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
    <div id="header"><h1>Калькулятор Демона</h1></div>
    <div id="sidebar">
        <p><a href="b_all.html">Калькулятор</a></p>
        <p><a href="b_author.html">Галерея</a></p>
    </div>
    <div id="content">
{{--        <form method="post" id="form-data" data-route="{{route('postData')}}">--}}
{{--            @csrf--}}
{{--            <input type="text" name="num1" placeholder="Значение 1"><br>--}}
{{--            <input type="text" name="sign" placeholder="Действие"><br>--}}
{{--            <input type="text" name="num2" placeholder="Значение 2"><br>--}}
{{--            <input type="submit" id="btn" value="Расчитать">--}}
{{--        </form>--}}
{{--        <div id="result_form"></div>--}}
        <div id="calc">
            <div class="grid">
                <input @keyup.enter="calc()" type="text" v-model="result" placeholder="0">
                <button @click="input(num)" class="cell num" v-for="num in numbers">@{{num}}</button>
                <button @click="input(op)" class="cell op" v-for="op in operations">@{{op}}</button>
                <button @click="reset()" class="cell op">R</button>
                <button @click="calc()" class="cell op">=</button>
            </div>
        </div>

    </div>
    <div class="container" id="divGallery">
        <a data-fancybox="gallery" href="/images/tech1big.jpeg"><img src="/images/tech1small.jpeg"></a>
        <a data-fancybox="gallery" href="/images/tech2big.jpeg"><img src="/images/tech2small.jpeg"></a>
        <a data-fancybox="gallery" href="/images/tech3big.jpeg"><img src="/images/tech3small.jpeg"></a>
    </div>
    <div id="footer">&copy; Иван Сысоев</div>
    <script src="/js/fancyboxConfig.js"></script>
    <script src="/js/app.js"></script>
    <script src="/js/calc.js"></script>
    </body>
</html>
