<html>
<head>
    <meta charset="utf-8"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>

    <title>
        <?php
        $doc_title = "Tytuł strony z wprowadzenia do PHP";
        echo "$doc_title";
        ?>
    </title>
</head>
<body>
<div class="container">
    <div class="row">
        <h1>SkrzatCompany</h1>
            <div class="section">
                <a href="ksiezyc.php" class="section__box">
                    <img class="image__box" src="style/image/ksiezyc/icon.jpg" alt="sekcja">
                    <h4 class="title__section">
                        Księżyc
                    </h4>
                </a>
                <a href="/" class="section__box">
                    <img class="image__box" src="style/image/ziemia/icons.jpg" alt="sekcja">
                    <h4 class="title__section">
                        Ziemia
                    </h4>
                </a>
                <a href="/" class="section__box">
                    <img  class="image__box" src="style/image/mars/icon.jpg" alt="sekcja">
                    <h4 class="title__section">
                        Mars
                    </h4>
                </a>
                <a href="admin.php" class="section__box">
                    <img class="image__box" src="style/image/admin.png" alt="sekcja">
                    <h4 class="title__section">
                        Administrator
                    </h4>
                </a>
            </div>
        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>