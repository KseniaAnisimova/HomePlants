<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>HomePlants</title>
</head>

<body>
    <?php include 'catalog.php'?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="" class="navbar-brand"><img src="./img/img/logo 1.svg"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent"
                    aria-contrlos="navContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navContent" class="collapse navbar-nav navbar-collapse justify-content-end">
                    <a href="#about" class="nav-link">О нас</a>
                    <a href="#catalog" class="nav-link">Каталог</a>
                    <a href="#blog" class="nav-link">Блог</a>
                    <a href="#contacts" class="nav-link">Контакты</a>
                    <a href="#FAQ" class="nav-link">FAQ</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="description">
                <h1>Джунгли у вас дома</h1>
                <p>У нас растения за которыми легко ухаживать</p>
                <a href="#catalog" class="btn btn-outline-dark">Подобрать растения</a>
            </div>
        </div>
    </header>
    <section id="about">
        <div class="container">
            <div class="row justify-content-between align-items-center about">
                <div class="col-lg-5 col-md-5 col-sm-10">
                    <img src="./img/img/about.png" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10 desc">
                    <h2>О нас</h2>
                    <p>Наша команда из опытных специалистов выращивает здоровые растения, которые будут радовать вас долгие
                        года. Сопровождаем каждого клиента по вопросам ухода, а при покупке даем памятку по растению.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="catalog">
        <div class="container">
            <div class="catalog">
                <div class="catalog-header">
                    <div id= "catalog">
                        <h2>Наши растения</h2>
                    </div>
                    <p>Выберите растение себе по душе</p>
                </div>

                <div class="row">
                    <?php foreach($data as $product): ?>
                    <div class="col-lg-4 col-md-4 col-sm-10">
                        <div class="card">
                            <img src="./img/img/<?=$product['img']?>" class="card-img-top" alt="Монстера">
                            <div class="card-body">
                                <div class="card-desc d-flex justify-content-between">
                                    <p class="card-title"><?=$product['title']?></p>
                                    <p class="card-text"><?=$product['min_price']?>₽ - <?=$product['max_price']?>₽</p>
                                </div>
                                <a href="#checkaut" class="btn btn-outline-dark">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>


    </section>
    <div class="CTA d-flex align-items-center">
        <div class="container">
            <div class="col-lg-9 col-md-9 col-sm-12 CTA-header">
                <h3>Получите гайд по любому растению бесплатно</h3>
            </div>
            <form method="POST" action="form.php">
                <div class="row CTA-form">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Имя">
                    </div>
                <div class="col-md-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                </div>
            </div>
            <button type="submit" name="submit" class="btn btn-outline-dark mt-4">Получить гайд</button>
        </div>
    </div>
    <section id="blog">
        <div class="container">
            <div class="blog">
                <div class="blog-header">
                    <h2>Блог</h2>
                    <p>Узнайте больше полезной информации об уходе за растениями</p>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-5 col-sm-10">
                        <div class="card">
                            <img src="./img/img/news_card.png" class="card-img-top" alt="Как выбрать растение">
                            <div class="card-body">
                                <div class="card-desc">
                                    <a href="#" class="card-title">Как выбрать растение домой</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-10">
                        <div class="card">
                            <img src="./img/img/news_card.png" class="card-img-top" alt="Как выбрать растение">
                            <div class="card-body">
                                <div class="card-desc">
                                    <a href="#" class="card-title">Как выбрать растение домой</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-6 col-md-5 col-sm-10">
                        <div class="card">
                            <img src="./img/img/news_card.png" class="card-img-top" alt="Как выбрать растение">
                            <div class="card-body">
                                <div class="card-desc">
                                    <a href="#" class="card-title">Как выбрать растение домой</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-sm-10">
                        <div class="card">
                            <img src="./img/img/news_card.png" class="card-img-top" alt="Как выбрать растение">
                            <div class="card-body">
                                <div class="card-desc">
                                <a href="#" class="card-title">Как выбрать растение домой</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="FAQ">
        <div class="container">
            <div class="accordion accordion-flush" id="accordionFlushFAQ">
                <h2 class="title">FAQ</h2>
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <h4><strong>Как часто нужно поливать растение?</strong></h4>
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                <p>
                                    Чтобы понять, как правильно и насколько часто необходимо увлажнять почву в горшке,
                                    ориентируйтесь
                                    на средние показатели полива. Весной периодичность составляет примерно 3−7 дней. Зимой и
                                    осенью
                                    данный период меняется. В холодное время года растения можно поливать раз в две недели
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion accordion-flush" id="accordionFlushFAQ">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <h4><strong>Как часто нужно пересаживать растения?</strong></h4>
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                <p>
                                    Комнатные растения следует пересаживать каждые два-три года. В качестве альтернативы для
                                    крупного
                                    растения часто бывает достаточно удалить верхний слой почвы и заменить его новым из
                                    богатой
                                    питательными веществами почвенной смеси
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="accordion accordion-flush" id="accordionFlushFAQ">
                <div class="accordion-item">
                    <h3 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            <h4><strong>Где разместить комнатное растение?</strong></h4>
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushFAQ">
                            <div class="accordion-body">
                                <p>
                                    Большинство представителей флоры светолюбиво, но тенелюбивым растениям свет тоже
                                    необходим, иначе
                                    они будут чувствовать себя некомфортно. Чем больше света требуется растению, тем ближе к
                                    южной
                                    стороне вашей квартиры оно должно быть расположено
                                </p>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


        <div class="CTA d-flex align-items-center">
            <div class="container CTA-content">
                <div class="col-lg-9 col-md-9 col-sm-12 CTA-header">
                    <div id="checkaut">
                        <h3>Здесь вы можете оформить заказ</h3>
                    </div>
                </div>
                    <form method="POST" action="forma.php">
                        <div class="row CTA-form">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <input type="text" name="name" class="form-control" placeholder="Имя" aria-label="Name">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <input type="email" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <input type="text" name="plants" class="form-control" placeholder="Вид растения" aria-label="Plant species">
                            </div>
                        </div>
                        <button type="submit" name= "submit" class="btn btn-outline-dark mt-4">Оформить заказ</button>
            </div>
                    </form>
        </div>
        


    <section id="contacts">
        <div class="contacts d-flex align-items-center">
            <div class="container">
                <div class="contacts-header offset-md-6">
                    <h3>Оставайтесь с нами на связи</h3>
                </div>
                <div class="contacts-desc offset-md-6 mt-4">
                    <p>+7 999 123-45-67</p>
                    <p>Телеграм</p>
                    <p>Вконтакте</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="d-flex flex-column align-items-center mt-5">
        <a href="" class="navbar-brand"><img src="./img/img/logo 1.svg"></a>
        <p>HomePlants</p>
        <p>2022</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>