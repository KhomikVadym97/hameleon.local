<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>Цегельня Колорит</title>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="offset-lg-1 col-lg-2">
                    <div class="wrap__logo">
                        <img src="/img/logo.png" alt="">
                    </div>
                </div>
                <div class="offset-sm-1 col-sm-10 offset-lg-0 col-lg-7">
                    <div class="row">

                        <div class="invoice-wrap">
                            <div class="invoice">
                                <img class="invoice__img-top" src="/img/1.jpg" alt="">
                                <div class="invoice__body">
                                    <div class="invoice__title">
                                        01 Ruby red
                                    </div>
                                </div>
                                <div class="invoice__interest">33<sup>%</sup></div>
                            </div>
                        </div>


                        <div class="invoice-wrap">
                            <div class="invoice">
                                <img class="invoice__img-top" src="/img/5.png" alt="">
                                <div class="invoice__body">
                                    <div class="invoice__title"></div>
                                </div>
                                <div class="invoice__interest invoice__interest-light">0%</div>
                            </div>
                        </div>


                        <div class="invoice-wrap">
                            <div class="invoice">
                                <img class="invoice__img-top" src="/img/4.jpg" alt="">
                                <div class="invoice__body">
                                    <div class="invoice__title">09 Sunny shore</div>
                                </div>
                                <div class="invoice__interest">41<sup>%</sup></div>
                            </div>
                        </div>

                        <div class="invoice-wrap">
                            <div class="invoice">
                                <img class="invoice__img-top" src="/img/4.jpg" alt="">
                                <div class="invoice__body">
                                    <div class="invoice__title">09 Sunny shore</div>
                                </div>
                                <div class="invoice__interest">41<sup>%</sup></div>
                            </div>
                        </div>

                        <div class="invoice-wrap">
                            <div class="invoice">
                                <img class="invoice__img-top" src="/img/74.jpg" alt="">
                                <div class="invoice__body">
                                    <div class="invoice__title"></div>
                                </div>
                                <div class="invoice__interest">74<sup>%</sup></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__button-wrap offset-sm-1 col-sm-10 offset-lg-0 col-lg-2">
                    <button type="button" class="btn header__button">
                        <span class="btn__text">Змішати</span>
                    </button>
                    <button type="button" class="btn header__button">
                        <span class="btn__text">Зберегти</span>
                    </button>
                </div>
            </div>
        </div><!-- /.container -->
    </header>

    <main class="main">
        <section class="section">
            <div class="container">
                <div class="color-palette-wrap">
                    <div class="palette">
                        <div class="row">
                            <div class="col-12 offset-lg-1 col-lg-11">
                                <div class="palette__top">
                                    <div class="palette__top-item">
                                        <span>Колір стику:</span>
                                    </div>
                                    @foreach(range(1,20) as $value)
                                    <div class="palette__top-item">
                                        <div class="color-palette">
                                            <img src="/img/color-palette/{{$value}}.jpg" alt="">
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="palette__main">

                        <img src="/img/bg_01.jpg" alt="">

                    </div>
                    <div class="palette__description">
                        <div class="col-lg-10 offset-lg-1">
                            <span>Колекції доступні у двох форматах, які неможливо змішати. Колекції Dream House та Free
                                Art доступні у форматі РФ, колекції Old Castle у форматі NF. Тож коли ви виберете один
                                формат, інший більше не буде активним.</span>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="section pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 offset-lg-1">
                        <div class="dream-hause">
                            <div class="dream-hause__title">
                                <span>Будинок мрії</span>
                            </div>
                            <div class="dream-hause__body  ">
                                @foreach(range(1,27) as $value)
                                <div class="  dream-hause__item-wrap">
                                    <div class="dream-hause__item">
                                        <div class="dream-hause__item-logo">
                                            <img class="dream-hause__item-logo-image" src="/img/{{($value%4)+1}}.jpg"
                                                alt="">
                                        </div>

                                        <div class="invoice__body">
                                            <div class="invoice__title">
                                                <span>{{$value}} Ruby red</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-lg-1 col-lg-10">
                        <div class="dream-hause__line">
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-0 col-md-4 offset-lg-1 col-lg-3">
                    <div class="copyright">
                        <span>2020 © Млинівський завод будівельних матеріалів</span>
                    </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="contacts">
                        <span>Рівненська обл., смт. Млинів, вул. Поліщука, 61<br>
                            +38 (099) 087 75 73 (МТС),<br>
                            +38 (068) 057 53 47 (Київстар),<br>
                            +38 (050) 378 11 14 (МТС) (з 8.00 до 21.00)
                        </span>
                    </div>
                </div>
                <div class="col-12 offset-md-1 col-md-2 offset-lg-1 col-lg-2">
                    <div class="counter">
                        <img src="{{ asset('img/m1.jpg') }}" alt="">
                        <img src="{{ asset('img/m2.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="{{mix('/js/app.js')}}"></script>
</body>

</html>