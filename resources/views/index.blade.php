<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Байки из склепа</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script   src="/js/jquery.min.js"></script>
        <script src="/js/ajax.js"></script>
        <script src="/js/fancybox.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <script type="text/javascript" src="/fancybox/jquery.easing-1.4.pack.js"></script>
        <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    </head>
    <body>
    <div id="header"><h1>Байки из склепа</h1></div>
    <div class="container"></div>
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
    </body>
</html>
