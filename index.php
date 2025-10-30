<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Tiny House - Sustainable Living</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/css/lightgallery-bundle.min.css"> -->
    <!-- PhotoSwipe CSS -->
    <link rel="stylesheet" href="https://unpkg.com/photoswipe@5/dist/photoswipe.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero__background-holder">
                <img src="images/img-hero.webp" alt="Klick Hero Background">
            </div>
            <div class="wrapper">
                <div class="hero__content">
                    <div class="hero__note">
                        <div class="white-bubble">
                            <p class="title-30">450+</p>
                        </div>
                        <p class="title-30 title-30--white"><?php echo __('BOLDOG TINY HÁZ TULAJDONOS','landing-klick') ?></p>
                    </div>
                    <div class="title-holder">
                        <h1 class="main-title"><?php echo __('KLICK TINY HÁZ') ?></h1>
                        <h2 class="title-30 title-30--white">
                            <div class="sliding-text__container">
                                <div class="sliding-text active">
                                    <span><?php echo __('A te tiny házad') ?></span>
                                </div>
                                <div class="sliding-text">
                                    <span><?php echo __('Hétvégi ház') ?></span>
                                </div>
                                <div class="sliding-text">
                                    <span><?php echo __('Klick ház') ?></span>
                                </div>
                            </div>
                            <span class="sliding-text__fix"><?php echo __('egy kattintásra') ?></span>
                        </h2>
                    </div>
                    <div class="button__holder">
                        <a class="button"><?php echo __('Mutasd a házat')?></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Miért pont section -->
        <section class="why-a-tiny-house">
            <div class="wrapper">
                <div class="section__content">
                    <div class="content__left">
                        <h2 class="section__title"><?php echo __('Miért pont') ?><br><?php echo __('egy tiny ház') ?></h2>
                        <p class="text">
                            <?php echo __('Képzelj el egy életet, ahol kevesebb a teher és több a szabadság. Ahol az otthonod nem korlát, hanem lehetőség. Ahol a természet tényleg karnyújtásnyira és mindez megfizethető áron.') ?>
                        </p>
                        <div class="icon-grid">
                            <div class="icon-grid__item">
                                <div class="icon-item__holder">
                                    <img src="icons/mobilis.svg" alt="Klick Icon Movable">
                                </div>
                                <p class="text text--dark pt-20"><?php echo __('Mobilis') ?></p>
                            </div>
                            <div class="icon-grid__item">
                                <div class="icon-item__holder">
                                    <img src="icons/engedely.svg" alt="Klick Icon No Permit Needed">
                                </div>
                                <p class="text text--dark pt-20"><?php echo __('Nem szükséges építési engedély') ?></p>
                            </div>
                            <div class="icon-grid__item">
                                <div class="icon-item__holder">
                                    <img src="icons/alapozas.svg" alt="Klick Icon No Foundation">
                                </div>
                                <p class="text text--dark pt-20"><?php echo __('Nem kell alapozás') ?></p>
                            </div>
                            <div class="icon-grid__item">
                                <div class="icon-item__holder">
                                    <img src="icons/plug&play.svg" alt="Klick Icon Plug & Play">
                                </div>
                                <p class="text text--dark pt-20"><?php echo __('Plug & Play működik') ?></p>
                            </div>
                            <div class="icon-grid__item">
                                <div class="icon-item__holder">
                                    <img src="icons/garancia.svg" alt="Klick Icon Warranty">
                                </div>
                                <p class="text text--dark pt-20"><?php echo __('5 év garancia') ?></p>
                            </div>
                            <div class="icon-grid__item">
                                <div class="icon-item__holder">
                                    <img src="icons/helyzet.svg" alt="Klick Icon Place It Anywhere">
                                </div>
                                <p class="text text--dark pt-20"><?php echo __('Tényleg oda rakod ahova akarod') ?></p>
                            </div>
                        </div>
                    </div>
                     <div class="content__right">
                        <div class="swiper lg-slider">
                            <div class="swiper-wrapper" id="slider__gallery">
                                <a href="images/img-miert-slide1.webp" data-pswp-width="600" data-pswp-height="800" class="swiper-slide">
                                    <img class="img-responsive" src="images/img-miert-slide1.webp" />
                                </a>
                                <a href="images/img-miert-slide2.webp" data-pswp-width="600" data-pswp-height="800" class="swiper-slide">
                                    <img class="img-responsive" src="images/img-miert-slide2.webp" />
                                </a>
                                <a href="images/img-miert-slide3.webp" data-pswp-width="600" data-pswp-height="800" class="swiper-slide">
                                    <img class="img-responsive" src="images/img-miert-slide3.webp" />
                                </a>
                                <a href="images/img-miert-slide4.webp" data-pswp-width="600" data-pswp-height="800" class="swiper-slide">
                                    <img class="img-responsive" src="images/img-miert-slide4.webp" />
                                </a>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            <!-- Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                     </div>
                </div>
            </div>
         </section>

         <!-- Műszaki adatok -->
        <section class="technical-details bg-dark-green">
            <div class="wrapper">
                <h2 class="section__title section__title--white center"><?php echo __('Műszaki adatok') ?></h2>
                <div class="center">
                    <img class="technical__image" src="images/muszaki_adatok.svg" alt="Technical Details">
                </div>
                <div class="technical-details__content">
                    <div class="technical-details__item">
                        <span class="text text--light-green text--small"><?php echo __('Alapterület') ?></span>
                        <p class="data"><?php echo __('15 m²') ?></p>
                        <p class="data__note"><?php echo __('+ Galéria') ?></p>
                    </div>
                    <div class="technical-details__item">
                        <span class="text text--light-green text--small"><?php echo __('(W) Szélesség') ?></span>
                        <p class="data"><?php echo __('2,55 m') ?></p>
                    </div>
                    <div class="technical-details__item">
                        <span class="text text--light-green text--small"><?php echo __('(L) Hosszúság') ?></span>
                        <p class="data"><?php echo __('6,00 m') ?></p>
                    </div>
                    <div class="technical-details__item">
                        <span class="text text--light-green text--small"><?php echo __('(H) Magasság') ?></span>
                        <p class="data"><?php echo __('3,4 m') ?></p>
                    </div>
                    <div class="technical-details__item">
                        <span class="text text--light-green text--small"><?php echo __('Súly') ?></span>
                        <p class="data"><?php echo __('< 3.5 t') ?></p>
                    </div>
                </div>
                <div class="section__gallery">
                    <h2 class="section__title section__title--white center"><?php echo __('Azok az apró részletek') ?></h2>
                    <div class="gallery__holder">
                        <div class="gallery__item gallery__item--first">
                            <div class="parallax__image gallery__image gallery__image--first"></div>
                            <p class="caption"><?php echo __('Utánfutóra építve, könnyen szállítható') ?></p>
                        </div>
                        <div class="gallery__item gallery__item--second">
                            <div class="parallax__image gallery__image gallery__image--second"></div>
                            <p class="caption"><?php echo __('Tartós, fából készült szerkezet és burkolat') ?></p>
                        </div>
                        <div class="gallery__item gallery__item--third">
                            <div class="parallax__image gallery__image gallery__image--third"></div>
                            <p class="caption"><?php echo __('Négyévszakos hőszigetelés') ?></p>
                        </div>
                        <div class="gallery__item gallery__item--fourth">
                            <div class="parallax__image gallery__image gallery__image--fourth"></div>
                            <p class="caption"><?php echo __('Fűtött padló és logkondicionáló') ?></p>
                        </div>
                        <div class="gallery__item gallery__item--fifth">
                            <div class="parallax__image gallery__image gallery__image--fifth"></div>
                            <p class="caption"><?php echo __('Beépített fürdőszoba és konyha') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Ismerd meg -->
        <section class="get-to-know">
            <div class="parallax__holder">
                <div class="parallax__image"></div>
                <div class="title__holder center">
                    <h2 class="section__title section__title--white">
                        <?php echo __('Ismerd meg a Tiny Házad') ?>
                    </h2>
                    <h3 class="giant-title"><?php echo __('KLICK') ?></h3>
                    <p class="text text--white text--med"><?php echo __('Minden ami tiny házhoz kell.') ?></p>
                </div>
            </div>
            <div class="wrapper">
                <div class="section__content" id="order__cta">
                    <div class="price__holder">
                        <div>
                            <p class="text text--dark"><?php echo __('Alap ár') ?></p>
                            <p class="price section__title section__title--light-green"><?php echo __('35.000 € + ÁFA') ?></p>
                            <div class="button__holder button__holder--mobile">
                                <a class="button"><?php echo __('Megrendelem') ?></a>
                            </div>
                            <p class="text text--18">
                                <?php echo __('A megrendelés után csak az összeg egy részét kell kifizetned. Az összeg az anyagköltségek fedezésére szolgál, hogy elindíthassuk a gyártást. A fennmaradó összeget több lépésben, előre egyeztetett ütemezés szerint kell finanszírozni, az utolsó részletet pedig csak akkor, amikor a ház teljesen elkészült és szállításra kész.') ?>
                            </p>
                        </div>
                        <div class="button__holder right">
                            <a class="button"><?php echo __('Megrendelem') ?></a>
                        </div>
                    </div>
                    <div class="vertical-accordion">
                        <div class="vertical-accordion__item selected">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Alapszerkezet') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Alapszerkezet') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Tömör gerendák (100x160 mm), stabilitást és hosszú élettartamot biztosítanak, akár hosszabb szállítás közben is') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Víz- és légzáró tömítések (butyl szalag, szilikon) a beázás és páralecsapódás elkerülésére') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Nedvesség- és tűzálló MGO lapok, melyek biztonságosabbak, mint a hagyományos beltéri burkolatok') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Emelőláb rendszer, ami megkönnyíti a szintezést különböző terepviszonyok mellett is') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Tartós padlószerkezet (Tego lap, ragasztás, szegezés)') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Vázszerkezet és galéria') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Vázszerkezet és galéria') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('40x100 mm-es fa szerkezet a falakhoz és galériához') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Masszív fapadló a galérián (19x145 mm)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Egyszerű falétra a galériához') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Belső burkolatok') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Belső burkolatok') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Rétegelt lemez belső falburkolat') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Fürdő padló: Industrio Anthrazit kerámia csempe') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Többi helyiség: Quick Step laminált padló') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Zuhanyfal burkolat: fekete Kronospan Rocko') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Fürdő vízszigetelés: Forch Easy Seal') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Külső burkolat és tető') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Külső burkolat és tető') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Külső falburkolat: hőkezelt fa (Luna Panel System)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Fa lécezés 2x4 cm') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Tető: antracitszürke vagy fekete bevonat') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Szigetelés') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Szigetelés') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('10 cm kőzetgyapot hőszigetelés') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('10 cm polisztirol az aljzatban (HIRSCH EPS 70)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Párazáró és páraáteresztő fóliák (Lindab belül, Tyvek kívül)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Ragasztószalaggal zárt illesztések (Rothoblaas)') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Nyílászárók') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Nyílászárók') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Ajtók és ablakok: antracitszürke vagy fekete kivitel') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Opcionálisan: szúnyoghálók és árnyékolók') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Vízrendszer') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Vízrendszer') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('PPR csővezeték rendszer') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Ariston 30L vízmelegítő') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Arezzo fürdőszobai szerelvények (mosdó, csaptelep, WC, zuhanyrendszer)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('90x200 cm összecsukható zuhanyajtó, fekete fémkerettel') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Arezzo zuhanyszifon (70 cm)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Fekete konyhai mosogató és csaptelep (Arezzo)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Vízbemenet fűtőkábellel') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Villanyszerelés') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Villanyszerelés') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Fekete Panasonic kapcsolók, dugaljak és keretek') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('LED világítás GU10 izzókkal, mennyezeti spotokkal és lámpákkal') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Kültéri fali lámpa: fekete alumínium') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Quantum HR100 hővisszanyerős szellőztető rendszer') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Airroxy 100 mm fekete fürdő szellőztető') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Fűtés') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Fűtés') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Fürdőszobai padlófűtés (fűtőszőnyeg)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Nappali–konyha padlófűtés (fűtőfólia)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Fagyvédelem: 8 m fűtőkábel') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Bútorzat') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Bútorzat') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Egyedi natúr rétegelt lemez alsó konyhaszekrény') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('IKEA felső konyhaszekrény, fekete') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Rocko fekete munkalap és hátfal') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('RAL 7021 színű kültéri lépcső') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Gépek') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Gépek') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('15 literes TYLLSNÄS hűtőszekrény') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('2 zónás Electrolux indukciós főzőlap') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('DAEWOO klíma (12 000 BTU)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Opcionálisan: Samsung mosógép, Whirlpool mosogatógép, Electrolux sütő') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Extrák') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Extrák') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('Fekete IKEA SKOGSVIKEN törölközőtartó, WC papírtartó') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Egyszerű tükör fekete kerettel vagy LED-es Arezzo tükör (fekete alumínium keret, 40x90 cm)') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('IKEA HÅLLBAR szemetes, 20L, szürke') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                        <div class="vertical-accordion__item">
                            <h4 class="vertical-accordion__title title-30">
                                <?php echo __('Trailer') ?>
                            </h4>
                            <div class="vertical-accordion__content">
                                <h4 class="title-30">
                                    <?php echo __('Trailer') ?>
                                </h4>
                                <ul>
                                    <li class="text text--dark">
                                        <?php echo __('6 méteres 2 tengelyes 3800 km teherbírású HEBO utánfutó') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('4 darab szintező láb') ?>
                                    </li>
                                    <li class="text text--dark">
                                        <?php echo __('Rögzítő csavarok') ?>
                                    </li>
                                </ul>
                                <div class="swiper accordion__slider">
                                    <div class="swiper-wrapper" id="slider__gallery">
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                        <a class="swiper-slide" data-src="images/img-alapszerkezet.webp" href="images/img-alapszerkezet.webp" data-pswp-width="1360" data-pswp-height="900">
                                            <img class="img-responsive" src="images/img-alapszerkezet.webp" />
                                        </a>
                                    </div>
                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <!-- Pagination -->
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partnereink -->
        <section class="partners">
            <div class="wrapper">
                <div class="w-50">
                    <h1 class="section__title"><?php echo __('Partnereink') ?></h1>
                    <p class="text"><?php echo __('Curabitur etiam adipiscing placerat quam nam. Volutpat ultricies neque auctor nulla purus mauris et. Viverra in diam elementum eget sit suscipit egestas molestie pellentesque. Tellus massa feugiat egestas integer et mattis donec.') ?></p>
                </div>
                <div class="partners__grid">
                    <div class="partners__item">
                        <img src="logos/logo-1-hirsch.png" alt="Hirsch Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-2-lindab.png" alt="Lindab Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-3-tyvek.png" alt="Tyvek Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-4-rothoblaas.png" alt="Rothoblaas Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-5-forch.png" alt="Forch Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-6-kronospan.png" alt="Kronospan Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-7-arezzo.png" alt="Arezzo Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-8-arison.png" alt="Arison Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-9-panasonic.png" alt="Panasonic Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-10-aerauliqa.png" alt="Aerauliqua Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-11-airroxy.png" alt="Airroxy Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-12-quickstep.png" alt="Quickstep Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-13-ikea.png" alt="Ikea Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-14-ral.png" alt="Ral Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-15-tyllsnas.png" alt="Tyllsnas Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-16-electrolux.png" alt="Electrolux Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-17-daewoo.png" alt="Daewoo Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-18-samsung.png" alt="Samsung Logo">
                    </div>
                    <div class="partners__item">
                        <img src="logos/logo-19-whirpool.png" alt="Whirlpool Logo">
                    </div>
                </div>
            </div>
        </section>

        <!-- Hogyan működik az előrendelés -->
        <section class="pre-ordering bg-light-green">
            <div class="wrapper">
                <h1 class="section__title section__title--white">
                    <?php echo __('Hogyan működik?') ?>
                    <br>
                    <?php echo __('az előrendelés?') ?>
                </h1>
                <div class="swiper text-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide card">
                            <h4 class="carousel__title">01</h4>
                            <div class="text-slider__content">
                                <h5 class="title-30"> <?php echo __('Megrendeled a házat') ?></h5>
                                <p class="text text--dark pt-20">
                                    <?php echo __('Kitöltöd a megrendelő űrlapot – ez még semmilyen kötelezettséggel nem jár, csak elindítja a folyamatot.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <h4 class="carousel__title">02</h4>
                            <div class="text-slider__content">
                                <h5 class="title-30"> <?php echo __('Beszélünk veled, hogy tényleg neked való legyen') ?></h5>
                                <p class="text text--dark pt-20">
                                    <?php echo __('Tapasztalt kollégánk felveszi veled a kapcsolatot, hogy pontosítsuk az igényeidet, megnézzük, milyen felszereltség lenne számodra ideális, és megbeszéljük a részleteket. A finanszírozás is') ?>
                                    <strong><?php echo __('személyre szabott') ?></strong>
                                    <?php echo __(', igazodik a gyártási ütemhez és a te lehetőségeidhez is.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <h4 class="carousel__title">03</h4>
                            <div class="text-slider__content">
                                <h5 class="title-30"> <?php echo __('Szerződünk – tisztán, átláthatóan') ?></h5>
                                <p class="text text--dark pt-20">
                                    <?php echo __('Ha minden kérdésedre választ kaptál, megkötjük a szerződést, benne a gyártási határidőkkel, a műszaki tartalommal és a részletekben történő fizetési ütemezéssel.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <h4 class="carousel__title">04</h4>
                            <div class="text-slider__content">
                                <h5 class="title-30"> <?php echo __('Megrendeled a házat') ?></h5>
                                <p class="text text--dark pt-20">
                                    <?php echo __('Kitöltöd a megrendelő űrlapot – ez még semmilyen kötelezettséggel nem jár, csak elindítja a folyamatot.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <h4 class="carousel__title">05</h4>
                            <div class="text-slider__content">
                                <h5 class="title-30"> <?php echo __('Beszélünk veled, hogy tényleg neked való legyen') ?></h5>
                                <p class="text text--dark pt-20">
                                    <?php echo __('Tapasztalt kollégánk felveszi veled a kapcsolatot, hogy pontosítsuk az igényeidet, megnézzük, milyen felszereltség lenne számodra ideális, és megbeszéljük a részleteket. A finanszírozás is') ?>
                                    <strong><?php echo __('személyre szabott') ?></strong>
                                    <?php echo __(', igazodik a gyártási ütemhez és a te lehetőségeidhez is.') ?>
                                </p>
                            </div>
                        </div>
                        <div class="swiper-slide card">
                            <h4 class="carousel__title">06</h4>
                            <div class="text-slider__content">
                                <h5 class="title-30"> <?php echo __('Szerződünk – tisztán, átláthatóan') ?></h5>
                                <p class="text text--dark pt-20">
                                    <?php echo __('Ha minden kérdésedre választ kaptál, megkötjük a szerződést, benne a gyártási határidőkkel, a műszaki tartalommal és a részletekben történő fizetési ütemezéssel.') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                <div class="button__holder center">
                    <a class="button button--white" href="#order__cta"><?php echo __('Vissza a házhoz')?></a>
                </div>
            </div>
        </section>

         <!-- Tudtad? -->
        <section class="did-you-know">
            <div class="wrapper">
                <div class="section__content">
                    <div class="content__left">
                        <h2 class="section__title">
                            <?php echo __('Tudtad?') ?>
                        </h2>
                        <div class="data__grid">
                            <div class="data__item">
                                <div class="data__stats">
                                    <p class="data data--light-green">5</p>
                                    <p class="data__subject"> <?php echo __('ÉV') ?></p>
                                </div>
                                <p class="text text--dark">
                                    <?php echo __('Házainkra 5 év garanciát vállalunk.') ?>
                                </p>
                            </div>
                            <div class="data__item">
                                <div class="data__stats">
                                    <p class="data data--light-green">3</p>
                                    <p class="data__subject"> <?php echo __('nap') ?></p>
                                </div>
                                <p class="text text--dark">
                                    <?php echo __('Szervíz csapatunk elérhető egész európában. Plusz valamilyen konkrét vállalás. Bejelentéstől számítot 3 napon belül ott termünk.') ?>
                                </p>
                            </div>
                            <div class="data__item">
                                <div class="data__stats">
                                    <p class="data data--light-green">2017</p>
                                </div>
                                <p class="text text--dark">
                                    <?php echo __('Az első mobil házat 2017-ben építettük, és még ma is szeretik és használják.') ?>
                                </p>
                            </div>
                            <div class="data__item">
                                <div class="data__stats">
                                    <p class="data data--light-green">45</p>
                                    <p class="data__subject"> <?php echo __('ország') ?></p>
                                </div>
                                <p class="text text--dark">
                                    <?php echo __('45 országban vannak házaink Görögországtól Észak skóciáig.') ?>
                                </p>
                            </div>
                            <div class="data__item">
                                <div class="data__stats">
                                    <p class="data data--light-green">450+</p>
                                </div>
                                <p class="text text--dark">
                                    <?php echo __('Mára már több mint 450 felépített házzal büszkélkedhetünk.') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content__right">
                        <div class="parallax__image"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form -->
        <section class="form-section">
            <div class="wrapper">
                <div class="section__content">
                    <div class="content__left">
                        <h2 class="section__title section__title--white">
                            <?php echo __('Puding próbája az evés') ?>
                        </h2>
                        <p class="text text--white">
                            <?php echo __('Mielőtt egy ilyen fontos döntést meghozol érthető ha előbb szeretnéd a házat saját szemeddel látni, sétálni benne, megnézni milyen a valóságban. Ezt felismerve két lehetőséget is biztosítunk, hogy a Klick házat személyesen megtekinthesd, egyet Budapesten és egyet Poznan.') ?>
                        </p>
                        <div class="locations__holder">
                            <div class="locations__item">
                                <h4 class="title-30 title-30--white"><?php echo __('Budapest') ?></h4>
                                <p class="text text--white pt-20">
                                    <?php echo __('Desi Huber utca 7, 1098') ?>
                                </p>
                                <a class="locations__tel" href="tel:1 280 5327">(1) 280 5327</a>
                                <a class="route-to__link" href="#"><?php echo __('Útvonaltervezés') ?></a>
                            </div>
                            <div class="locations__item">
                                <h4 class="title-30 title-30--white"><?php echo __('POZNA') ?></h4>
                                <p class="text text--white pt-20">
                                    <?php echo __('28 Czerwca 1956 323') ?>
                                </p>
                                <a class="locations__tel" href="tel:606 354 779">606 354 779</a>
                                <a class="route-to__link" href="#"><?php echo __('Útvonaltervezés') ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="content__right">
                        <div class="form__holder"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured -->
        <section class="featured">
            <div class="wrapper">
                <h2 class="section__title">
                    <?php echo __('Kiemelt cikkek') ?>
                </h2>
                <div class="swiper featured-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="image__holder">
                                <img src="/images/img-magazine.webp" alt="">
                            </div>
                            <div class="slider__text">
                                <div>
                                    <p class="text text--green">
                                        <?php echo __('Elle Eecoration') ?>
                                    </p>
                                    <p class="text text--green">2025</p>
                                </div>
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image__holder">
                                <img src="/images/img-magazine.webp" alt="">
                            </div>
                            <div class="slider__text">
                                <div>
                                    <p class="text text--green">
                                        <?php echo __('Elle Eecoration') ?>
                                    </p>
                                    <p class="text text--green">2025</p>
                                </div>
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image__holder">
                                <img src="/images/img-magazine.webp" alt="">
                            </div>
                            <div class="slider__text">
                                <div>
                                    <p class="text text--green">
                                        <?php echo __('Elle Eecoration') ?>
                                    </p>
                                    <p class="text text--green">2025</p>
                                </div>
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image__holder">
                                <img src="/images/img-magazine.webp" alt="">
                            </div>
                            <div class="slider__text">
                                <div>
                                    <p class="text text--green">
                                        <?php echo __('Elle Eecoration') ?>
                                    </p>
                                    <p class="text text--green">2025</p>
                                </div>
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image__holder">
                                <img src="/images/img-magazine.webp" alt="">
                            </div>
                            <div class="slider__text">
                                <div>
                                    <p class="text text--green">
                                        <?php echo __('Elle Eecoration') ?>
                                    </p>
                                    <p class="text text--green">2025</p>
                                </div>
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="image__holder">
                                <img src="/images/img-magazine.webp" alt="">
                            </div>
                            <div class="slider__text">
                                <div>
                                    <p class="text text--green">
                                        <?php echo __('Elle Eecoration') ?>
                                    </p>
                                    <p class="text text--green">2025</p>
                                </div>
                                <a href="#" class="link">link</a>
                            </div>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

         <!-- Hogyan működik az előrendelés -->
        <section class="faq bg-extra-light-gray">
            <div class="wrapper wrapper--small">
                <h2 class="section__title center"><?php echo __('FAQ') ?></h2>
                <div class="faq__list">
                    <div class="faq__item">
                        <a class="faq__question">
                            Will I receive my tiny as they can be seen on the pictures and photos on the website?
                            <span class="faq__icon"></span>
                        </a>
                        <div class="faq__answer">
                            <p class="text text--dark">Lorem ipsum dolor sit amet consectetur. Arcu enim sed turpis auctor cursus mattis. A cras mauris volutpat viverra. Vitae eget urna feugiat diam vulputate dictumst id. Iaculis amet ac eleifend tristique et nunc aliquam. Tincidunt quis pharetra vitae ut dui scelerisque.</p>
                        </div>
                    </div>
                    <div class="faq__item">
                        <a class="faq__question">
                            Where I can see the Klick model live?
                            <span class="faq__icon"></span>
                        </a>
                        <div class="faq__answer">
                            <p class="text text--dark">Lorem ipsum dolor sit amet consectetur. Arcu enim sed turpis auctor cursus mattis. A cras mauris volutpat viverra. Vitae eget urna feugiat diam vulputate dictumst id. Iaculis amet ac eleifend tristique et nunc aliquam. Tincidunt quis pharetra vitae ut dui scelerisque.</p>
                        </div>
                    </div>
                    <div class="faq__item">
                        <a class="faq__question">
                            Can I customize my Klick House?
                            <span class="faq__icon"></span>
                        </a>
                        <div class="faq__answer">
                            <p class="text text--dark">Lorem ipsum dolor sit amet consectetur. Arcu enim sed turpis auctor cursus mattis. A cras mauris volutpat viverra. Vitae eget urna feugiat diam vulputate dictumst id. Iaculis amet ac eleifend tristique et nunc aliquam. Tincidunt quis pharetra vitae ut dui scelerisque.</p>
                        </div>
                    </div>
                    <div class="faq__item">
                        <a class="faq__question">
                            Question number 4?
                            <span class="faq__icon"></span>
                        </a>
                        <div class="faq__answer">
                            <p class="text text--dark">Lorem ipsum dolor sit amet consectetur. Arcu enim sed turpis auctor cursus mattis. A cras mauris volutpat viverra. Vitae eget urna feugiat diam vulputate dictumst id. Iaculis amet ac eleifend tristique et nunc aliquam. Tincidunt quis pharetra vitae ut dui scelerisque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Swiper core -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script type="module" src="./main.js"></script>
</body>
</html>

<?php
// Simple translation function
function __($text, $domain = '') {
    // For now, just return the text as-is
    // You could add translation logic here later
    return $text;
}
?>
