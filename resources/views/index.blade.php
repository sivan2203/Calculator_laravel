<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Байки из склепа</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
    <div id="header"><h1>Байки из склепа</h1></div>
    <div id="sidebar">
        <p><a href="b_all.html">Все байки</a></p>
        <p><a href="b_author.html">Байки по автору</a></p>
        <p><a href="b_theme.html">Байки по теме</a></p>
        <p><a href="b_popular.html">Популярные байки</a></p>
        <p><a href="b_last.html">Последние байки</a></p>
    </div>
    <div id="content">
        <h2>Калькулятор демона </h2>
        <form method="post" id="form-data" data-route="{{route('postData')}}">
            @csrf
            <input type="text" name="num1" placeholder="Значение 1"><br>
            <input type="text" name="sign" placeholder="Действие"><br>
            <input type="text" name="num2" placeholder="Значение 2"><br>
            <input type="submit" id="btn" value="Расчитать">
        </form>
        <div id="result_form"></div>
    </div>
    <div id="footer">&copy; Иван Сысоев</div>
    <script   src="/js/jquery.min.js"></script>
    <script src="/js/ajax.js"></script>
    </body>
</html>
