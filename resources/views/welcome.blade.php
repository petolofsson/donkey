<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donkey Project</title>
    <meta name="description" content="An assignment for with/without">
    <meta name="author" content="Peter Olofsson">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>

<body>

    <!-- Grid "web-grid" in the stylesheet is divided into 12 fractions of total width / Uncomment to see grid -->
    <!--
    <div class="web-grid">
        <div class="inner">
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
            <div class="column"></div>
        </div>
    </div>
-->

    <!-- hamburger -->
    <input type="checkbox" id="navi-toggle" class="ham_checkbox" />
    <label for="navi-toggle" class="ham_button">
        <span class="ham_icon">&nbsp;</span>
    </label>
    <div class="ham_background">&nbsp;</div>

    <nav class="ham_nav">
        <ul class="ham_list">
        <li class="ham_nav__menu-item"><img class="nav__logo" src=" {{ asset('images/logo.svg') }} " alt="Kliv in i Donkeys magiska värld!"></li>
            <li class="ham_nav__menu-item"><a href="#">Våra kläder</a></li>
            <li class="ham_nav__menu-item"><a href="#">Outlet</a></li>
            <li class="ham_nav__menu-item"><a href="#">Butiker</a></li>
            <li class="ham_nav__menu-item"><a href="#">Kundservice</a></li>
            <li class="ham_nav__menu-item"><a href="#">Om oss</a></li>
        </ul>
    </nav>
    <!-- Actual homepage -->
    <div class="container nav">
        <a href="#"><img class="nav__logo" src=" {{ asset('images/logo.svg') }} " alt="Kliv in i Donkeys magiska värld!"></a>
        <ul class="nav__menu">
            <li class="nav__menu-item"><a href="#">Våra kläder</a></li>
            <li class="nav__menu-item"><a href="#">Outlet</a></li>
            <li class="nav__menu-item"><a href="#">Butiker</a></li>
            <li class="nav__menu-item"><a href="#">Kundservice</a></li>
            <li class="nav__menu-item"><a href="#">Om oss</a></li>
        </ul>
        <a class="btn nav__button" href="#">Get in touch</a>
    </div>

    <div class="container top">
        <div class="top__inner">
            <div class="top__content">
                <h1 class="top__title">Så kliv in i Donkeys magiska värld – där barn alltid är barn.</h1>
                <p class="top__text">Donkey har kläder till barn, från nyfödd och baby, till barn i förskole- och skolåldern. Barnkläder och bebiskläder som underlättar vardagen och som fungerar lika bra för fartfyllda utomhusaktiviteter som till fest.</p>
                <a class="btn top__button" href="#">Våra kläder</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="post">
            <div class="post__content">
                <p class="post__category">Höstkläder</p>
                <h2 class="post__title">Härliga höstnyheter</h2>
                <p class="post__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at sem arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <a class="btn post__button" href="#">Shoppa nu</a>
            </div>
            <div class="post__image-column">
                <img class="post__image" src="/images/child1.jpg">
            </div>
        </div>

        <div class="post">
            <div class="post__image-column--flipped">
                <img class="post__image" src="/images/child2.jpg">
            </div>
            <div class="post__content--flipped">
                <p class="post__category">Vårt sortiment</p>
                <h2 class="post__title">Hållbara plagg</h2>
                <p class="post__text">Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen.</p>
                <a href="#" class="btn post__button">Lås mer</a>
            </div>
        </div>

        <div class="form">
            <div class="form__content">
                <p class="form__category">Ställ en fråga</p>
                <h2 class="form__title">Har du något du funderar över?</p>
                    <p class="form__text">Med 100 % hållbarhetsmärkt bommull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen.</p>
            </div>

            <form method="post">
                <!-- Form Text Input -->
                <div class="form__input">
                    <label class="form__label">Namn</label>
                    <input class="form__input-text" type="text" placeholder="Skriv ditt namn">
                </div>
                <div class="form__input">
                    <label class="form__label">Email</label>
                    <input class="form__input-text" type="text" placeholder="Fyll i din mailadress">
                </div>

                <!-- Form Radio buttons -->
                <div class="form__input">
                    <p class="form__text">Välj underkategori</p>
                    <div class="form__radio-options">
                        <label class="form__radio">
                            <input type="radio" name="category" value="a" checked>
                            <span class="form__radio-inner">Kategori 1</span>
                        </label>
                        <label class="form__radio">
                            <input type="radio" name="category" value="b">
                            <span class="form__radio-inner">Kategori 2</span>
                        </label>
                        <label class="form__radio">
                            <input type="radio" name="category" value="c">
                            <span class="form__radio-inner">Kategori 3</span>
                        </label>
                        <label class="form__radio">
                            <input type="radio" name="category" value="d">
                            <span class="form__radio-inner">Kategori 4</span>
                        </label>
                    </div>
                </div>
                <div class="form__actions">
                    <button class="form__actions__button--transparent">Rensa alternativ</button>
                    <button class="form__actions__button">Skicka</button>
                </div>
            </form>
        </div>

    </div>
    <!-- Bottom Content "Förändringen börjar nu" -->
    <div class="bottom container">
        <div class="bottom__overlay">
            <div class="bottom__inner">
                <div class="bottom__content">
                    <h1 class="bottom__title">Förändringen börjar nu!</h1>
                    <p class="bottom__text">Vi kommer alltid att utgå ifrån barnens bästa och vår hållbarhetsvision är att göra barnklädesmarknaden mer hållbar – för jorden går i arv, och det ska våra kläder också göra.</p>
                    <a class="btn bottom__button" href="#">Vårt hållbarhetslöfte</a>
                </div>
            </div>
        </div>
    </div>


    <div class="footer container">
        <div class="footer__content">
            <div class="footer__logo-content">
                <img class="footer__logo" src=" {{ asset('images/logo_blue.svg') }} " alt="Kliv in i Donkeys magiska värld!">
                <div class="footer__logo-text">
                    <p class="footer__text">Donkey har kläder till barn, från nyfödd och baby, till barn i förskole- och skolåldern. Barnkläder och bebiskläder som underlättar vardagen och som fungerar lika bra för fartfyllda utomhusaktiviteter som till fest. Med 100 % hållbarhetsmärkt bomull i hela vår kollektion gör vi kläder till baby och barn, men också kläder till den nyfödda familjemedlemmen. Helt enkelt kläder som låter barn vara barn.</p>
                    <div class="footer__title">Donkey Clothing</div>
                </div>
            </div>
            <div class="footer__contact">
                <p class="footer__contact-address">
                    Donkey Clothing <br>
                    194 61 Stockholm <br>
                    Sweden
                </p>
                <a href="tel:+46000000000" class="footer__contact-phone">
                    +46 0 000 000 00
                </a>
                <div class="footer__contact-adress-border"></div>
                <a href="mailto:nfo@donkey.com" class="footer__contact-email">
                    info@donkey.com
                    </p>
            </div>
        </div>
        <ul class="footer__links">
            <li class="footer__link-item"><a href="#">Om Donkey</a></li>
            <li class="footer__link-item"><a href="#">Hitta våra butiker</a></li>
            <li class="footer__link-item"><a href="#">Jobba hos oss</a></li>
            <li class="footer__link-item"><a href="#">Press</a></li>
            <li class="footer__link-item"><a href="#">Privacy Policy</a></li>
            <li class="footer__link-item"><a href="#">Cookie Policy</a></li>
        </ul>
    </div>


</body>

</html>