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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    </head>
    <body>
    <div id="header"><h1>Байки из склепа</h1></div>
    <div class="container">
            <a data-fancybox="gallery" href="/images/tech1big.jpeg"><img src="/images/tech1small.jpeg"></a>
            <a data-fancybox="gallery" href="/images/tech2big.jpeg"><img src="/images/tech2small.jpeg"></a>
            <a data-fancybox="gallery" href="/images/tech3big.jpeg"><img src="/images/tech3small.jpeg"></a>
    </div>
    <div id="sidebar">
        <p><a href="b_all.html">Калькулятор</a></p>
        <p><a href="b_author.html">Галерея</a></p>

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
