<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>
<body>
<div class="container">
    <div class="btn-wrapper">
        <button class="btn">Кликни</button>
    </div>
</div>
<div class="popup__wrapper">
    <div class="popup">
        <div class="to-order__wrap">
            <img src="assets/img/crosshair.png" alt="Закрыть" class="close__btn">
            <h1 class="to-order__title">Получите набор файлов
                для руководителя:</h1>
            <form autocomplete="off" method="POST" class="order" id="order">
                <div class="form__wrap">
                    <div class="img__wrap">
                        <h1 class="to-order__title-min">Получите набор файлов
                            для руководителя:</h1>
                        <img src="assets/img/files.png" alt="Файлы" class="img__doc">
                        <img src="assets/img/book.png" alt="Документы" class="img__book">
                    </div>
                    <div class="input__wrap">
                        <label for="email">
                            Введите Email для получения файлов:
                            <input class="data_field" id="email" placeholder="E-mail" type="email" name="email">
                        </label>
                        <label for="tel" class="data__tel">
                            Введите телефон для подтверждения доступа:
                            <input class="data_field" id="tel" placeholder="+7 (000) 000-00-00" type="tel" name="phone"
                                   pattern="\+?[0-9\s\-\(\)]+" required="required">
                        </label>

                        <button type="submit" class="to-order__btn"><span class="btn__text">Скачать файлы</span>
                        </button>
                        <p class="size"><span class="pdf">PDF 4,7 MB</span> <span class="doc">DOC 0,8 MB</span><span
                                    class="xls">XLS 1,2 MB</span></p>
                    </div>

                </div>

            </form>
        </div>
    </div>
</div>

<script src="js/main.js"></script>

</body>
</html>
