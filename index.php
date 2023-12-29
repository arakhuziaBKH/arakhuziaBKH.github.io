<?php
    require('./administration/admin/functions.php');
    $baseURL = baseURL();
    $settings = get_user_data("settings");

    $posts = get_user_data("post");
    // dd( $_SERVER['DOCUMENT_ROOT']."/" ."assets/");
    $top_posts = get_post_order_by_views($posts);
    $favorite_posts = get_post_order_by_likes($posts);
    $last_posts = get_post_order_by_date($posts);
    // dd($_SESSION['user']);
?>



<!DOCTYPE html>
<html lang="Fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toward Thinking</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="<?= $baseURL?>/administration/assets/scripts/general_scripts.js"></script>
    <script src="<?= $baseURL?>/administration/assets/scripts/carousel.js"></script>
    <script src="<?= $baseURL?>/administration/assets/scripts/components/api.js"></script>
    <script src="<?= $baseURL?>/administration/assets/scripts/components/tip.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/general/reset.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/general/theming.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/general/typography.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/general/layout.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/form.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/button.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/input.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/tablet/tablet.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/section_header.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/card.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/main_header.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/main_contents.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/last_contents.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/favorite_posts.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/news_section.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/carousle.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/main_footer.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/post_categories.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/components/random_tip.css">
    <link rel="stylesheet" href="<?= $baseURL?>/administration/assets/styles/mobile/mobile.css">

</head>
<body class="light-mode">
    <div class="wrapper">
        <?php require_once('parts/header.php'); ?>
        <main class="main_contents">
            <section class="slogan">
                <article>
                    <div class="slogan">
                        <h1>
                          آگاهی قدرت است !
                        </h1>
                        <h2>
                        علم و دانش ارزشمندترین سرمایه ی بشر است . زیرا آنچه که می دانیم ما را به اینجایی که هستیم رسانده است و آنچه که در آینده خواهیم بود به آنچه خواهیم آموخت بستگی دارد. 
                        </h2>
                    </div>
                    <picture>
                        <source srcset="administration/assets/images/article_images/slogen_banner.svg">
                        <img src="administration/assets/images/article_images/slogen_banner.svg">
                    </picture>
                </article>
            </section>

            <section class="news_section">
                <div class="section_header">
                    <span class="bullet"></span>
                    <h1>موضوعات</h1>
                    <a href="" class="more">
                        <span>مشاهده مطالب بیشتر </span>
                        <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>
                <article class="column information_technology">
                    <div class="section_header">
                        <span class="bullet"></span>
                        <h1> برنامه نویسی</h1>
                    </div>
                    <section class="top_row">
                        <?php $posts_by_category = get_post_order_by_category($posts, "برنامه نویسی"); ?>
                        <?php $count = 0; foreach($posts_by_category as $postBG):  ?>
                        <figure>
                            <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            <figcaption>
                                <a href="administration/landing.php?parameter=category&request=<?= $postBG['id']?>"><?= $postBG['category']?></a>
                            </figcaption>
                        </figure>
                        <div class="title">
                            <h2>
                                <a href="administration/landing.php?parameter=post&request=<?= $postBG['id']?>"><?= $postBG['title']?></a>
                            </h2>
                        </div>
                        <div class="gist_text">
                            <p><?= get_excerpt($postBG['content'], 200)?></p>
                        </div>

                        <?php if($count == 0){break;}?><?php endforeach ?>
                    </section>


                    <section class="button_row">
                        <?php $posts_by_category = get_post_order_by_category($posts, "برنامه نویسی"); ?>
                        <?php $count = 1; foreach($posts_by_category as $postBG):  ?>
                        <div class="item">
                            <figure>
                            <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="administration/landing.php?parameter=post&request=<?= $postBG['id']?>"><?= $postBG['title']?></a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span><?= $postBG['author']?></span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <?= strtotime("now")?></span>
                                </div>
                            </div>
                        </div>
                        <?php if($count == 4){break;}?><?php endforeach ?>
                        <!-- <div class="item">
                            <figure>
                                <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href=""><?= $postBG['title']?></a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span><?= $postBG['author']?></span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <?= strtotime("now")?></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="http://via.placeholder.com/640x360" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="">تعیین سطح زبان چرا مهم است و چطور متوجه سطح خود شویم؟</a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span>نویسنده</span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <script>document.write(date)</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="http://via.placeholder.com/640x360" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="">تعیین سطح زبان چرا مهم است و چطور متوجه سطح خود شویم؟</a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span>نویسنده</span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <script>document.write(date)</script></span>
                                </div>
                            </div>
                        </div> -->
                    </section>
                </article>
                <article class="column history">
                    <div class="section_header">
                        <span class="bullet"></span>
                        <h1>شبکه</h1>
                    </div>
                    <section class="top_row">
                        <?php $posts_by_category = get_post_order_by_category($posts, "شبکه"); ?>
                        <?php $count = 1; foreach($posts_by_category as $postBG):  ?>
                        <figure>
                            <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            <figcaption>
                            <a href="administration/landing.php?parameter=category&request=<?= $postBG['id']?>"><?= $postBG['category']?></a>
                            </figcaption>
                        </figure>
                        <div class="title">
                            <h2>
                            <a href="administration/landing.php?parameter=post&request=<?= $postBG['id']?>"><?= $postBG['title']?></a>
                            </h2>
                        </div>
                        <div class="gist_text">
                            <p><?= get_excerpt($postBG['content'], 200)?></p>
                        </div>

                        <?php if($count == 1){break;}?><?php endforeach ?>
                    </section>


                    <section class="button_row">
                        <?php $posts_by_category = get_post_order_by_category($posts, "شبکه"); ?>
                        <?php $count = 2; foreach($posts_by_category as $postBG):  ?>
                        <div class="item">
                            <figure>
                            <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                <a href="administration/landing.php?parameter=post&request=<?= $postBG['id']?>"><?= $postBG['title']?></a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span><?= $postBG['author']?></span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <?= strtotime("now")?></span>
                                </div>
                            </div>
                        </div>
                        <?php if($count == 6){break;}?><?php endforeach ?>
                        <!-- <div class="item">
                            <figure>
                                <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href=""><?= $postBG['title']?></a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span><?= $postBG['author']?></span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <?= strtotime("now")?></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="http://via.placeholder.com/640x360" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="">تعیین سطح زبان چرا مهم است و چطور متوجه سطح خود شویم؟</a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span>نویسنده</span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <script>document.write(date)</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="http://via.placeholder.com/640x360" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="">تعیین سطح زبان چرا مهم است و چطور متوجه سطح خود شویم؟</a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span>نویسنده</span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <script>document.write(date)</script></span>
                                </div>
                            </div>
                        </div> -->
                    </section>
                </article>
                <article class="column cultural">
                    <div class="section_header">
                        <span class="bullet"></span>
                        <h1>تاریخ</h1>
                    </div>
                    <section class="top_row">
                        <?php $posts_by_category = get_post_order_by_category($posts, "تاریخ"); ?>
                        <?php $count = 1; foreach($posts_by_category as $postBG):  ?>
                        <figure>
                            <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            <figcaption>
                                <a href="administration/landing.php?parameter=category&request=<?= $postBG['id']?>"><?= $postBG['category']?></a>
                            </figcaption>
                        </figure>
                        <div class="title">
                            <h2>
                                <a href="administration/landing.php?parameter=post&request=<?= $postBG['id']?>"><?= $postBG['title']?></a>
                            </h2>
                        </div>
                        <div class="gist_text">
                            <p><?= get_excerpt($postBG['content'], 200)?></p>
                        </div>

                        <?php if($count == 1){break;}?><?php endforeach ?>
                    </section>


                    <section class="button_row">
                        <?php $posts_by_category = get_post_order_by_category($posts, "تاریخ"); ?>
                        <?php $count = 2; foreach($posts_by_category as $postBG):  ?>
                        <div class="item">
                            <figure>
                            <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="administration/landing.php?parameter=post&request=<?= $postBG['id']?>"><?= $postBG['title']?></a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span><?= $postBG['author']?></span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <?= strtotime("now")?></span>
                                </div>
                            </div>
                        </div>
                        <?php if($count == 6){break;}?><?php endforeach ?>
                        <!-- <div class="item">
                            <figure>
                                <img src="administration/admin/assets/images/article_images/<?= $postBG['images'][rand(0,2)] ?>" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href=""><?= $postBG['title']?></a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span><?= $postBG['author']?></span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <?= strtotime("now")?></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="http://via.placeholder.com/640x360" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="">تعیین سطح زبان چرا مهم است و چطور متوجه سطح خود شویم؟</a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span>نویسنده</span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <script>document.write(date)</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="http://via.placeholder.com/640x360" alt="">
                            </figure>
                            <div class="title">
                                <h3>
                                    <a href="">تعیین سطح زبان چرا مهم است و چطور متوجه سطح خود شویم؟</a>
                                </h3>
                            </div>
                            <div class="detail">
                                <div class="author">
                                    <span class="material-symbols-sharp">draw</span>
                                    <span>نویسنده</span>
                                </div>

                                <div class="date">
                                    <span class="material-symbols-sharp">schedule</span>
                                    <span>تاریخ : <script>document.write(date)</script></span>
                                </div>
                            </div>
                        </div> -->
                    </section>
                </article>
            </section>

            <section class="random_tip">
                <div class="tip">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                    </figure>
                    <h3 class="title">
                        <a href="" class="title_contents"></a>
                    </h3>
                </div>


                <div class="navigations">
                    <div class="next">
                        <a href="">
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </a>
                    </div>
                    <div class="previous">
                        <a href="">
                            <span class="material-symbols-outlined">arrow_back_ios</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="historical_events">
                <main class="carousle_container">
                    <header class="carousle_header">
                        <div class="section_header">
                            <span class="bullet"></span>
                            <h1>رخدادهای امروز</h1>
                        </div>
                    </header>

                    <article class="carousle_items">
                        <div class="item">
                            <figure>
                                <img src="https://static.digiato.com/digiato/2023/12/connessione-internet-super-veloce-fibra-ottica-20-gb-google-e-wifi-7-910x600.jpg" alt="">
                                <figcaption>
                                    <a href="" class="figure_caption">information technology </a>
                                    <a href="" class="figure_caption"> programming</a>
                                </figcaption>
                            </figure>
                            <a class ="title" href="">
                                <h3>گوگل سرویس جدید اینترنت 20 گیگابیتی با هزینه ماهانه 250 دلار را معرفی کرد</h3>
                            </a>
                            <p class="text_gist">
                                گوگل در کنار بسته‌های اینترنت 5 و 8 گیگابیت بر ثانیه، اکنون به برخی افراد امکان می‌دهد تا برای دسترسی زودهنگام به سرویس جدید 20 گیگابیت بر ثانیه نیز ثبت‌نام کنند...
                            </p>
                            <div class="detail">
                                <a href="" class="more btn">
                                    <span>بیشتر </span>
                                    <span class="material-symbols-outlined">arrow_back</span>
                                </a>
                                <div class="date">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><script>document.write(date);</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="https://static.digiato.com/digiato/2023/12/236883_Epic_Vs_Google_D_CVirginia-910x600.jpg" alt="">
                                <figcaption>
                                    <a href="" class="figure_caption">information technology </a>
                                    <a href="" class="figure_caption"> programming</a>
                                </figcaption>
                            </figure>
                            <a class ="title" href="">
                                <h3>پیروزی بزرگ اپیک گیمز؛ </h3>
                            </a>
                            <p class="text_gist">
                            هیئت منصفه در دادگاه اپیک گیمز اعلام کرد که گوگل از طریق پلی استور دست به اجرای سیاست‌های انحصارطلبانه و ضدرقابتی زده است...
                            </p>
                            <div class="detail">
                                <a href="" class="more btn">
                                    <span>بیشتر </span>
                                    <span class="material-symbols-outlined">arrow_back</span>
                                </a>
                                <div class="date">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><script>document.write(date);</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="https://static.digiato.com/digiato/2023/12/Galaxy-A25-5G_Yellow_Front-scaled-1-910x600.webp" alt="">
                                <figcaption>
                                    <a href="" class="figure_caption">information technology </a>
                                    <a href="" class="figure_caption"> programming</a>
                                </figcaption>
                            </figure>
                            <a class ="title" href="">
                                <h3>سامسونگ از گلکسی A15 و A25 با دوربین اصلی سه‌گانه رونمایی کرد</h3>
                            </a>
                            <p class="text_gist">
                            سامسونگ به‌طور ناگهانی از جدیدترین گوشی‌های سری گلکسی A رونمایی کرد. این گوشی‌های هوشمند که گلکسی A15 و A25 نام دارند، از نمایشگر امولد بهره می‌برند...
                            </p>
                            <div class="detail">
                                <a href="" class="more btn">
                                    <span>بیشتر </span>
                                    <span class="material-symbols-outlined">arrow_back</span>
                                </a>
                                <div class="date">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><script>document.write(date);</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="https://static.digiato.com/digiato/2023/12/iOS-17.2-hero-910x600.jpg" alt="">
                                <figcaption>
                                    <a href="" class="figure_caption">information technology </a>
                                    <a href="" class="figure_caption"> programming</a>
                                </figcaption>
                            </figure>
                            <a class ="title" href="">
                                <h3>به‌روزرسانی iOS 17.2 با اپلیکیشن جدید Journal منتشر شد</h3>
                            </a>
                            <p class="text_gist">
                            اپل به‌روزرسانی iOS 17.2 را برای آیفون‌ها منتشر کرده است. این به‌روزرسانی شامل نسخه جدید اپلیکیشن Journal می‌شود که اولین‌بار در WWDC 2023 معرفی شد...
                            </p>
                            <div class="detail">
                                <a href="" class="more btn">
                                    <span>بیشتر </span>
                                    <span class="material-symbols-outlined">arrow_back</span>
                                </a>
                                <div class="date">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><script>document.write(date);</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="https://static.digiato.com/digiato/2023/12/TCL_CSOT_Global_Display_Tech_ecosystem_Conference_2023-728x485-1-910x600.jpg" alt="">
                                <figcaption>
                                    <a href="" class="figure_caption">information technology </a>
                                    <a href="" class="figure_caption"> programming</a>
                                </figcaption>
                            </figure>
                            <a class ="title" href="">
                                <h3>شرکت TCL از نسل جدید نمایشگرهای خود با حداکثر رزولوشن 8K رونمایی کرد</h3>
                            </a>
                            <p class="text_gist">
                            با حضور فناوری‌های مدرن و هوش مصنوعی ادغام‌شده، می‌توان نمایشگرهای نسل بعد TCL را از پیشگامان این صنعت در آینده دانست...
                            </p>
                            <div class="detail">
                                <a href="" class="more btn">
                                    <span>بیشتر </span>
                                    <span class="material-symbols-outlined">arrow_back</span>
                                </a>
                                <div class="date">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><script>document.write(date);</script></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <figure>
                                <img src="https://rooziato.com/wp-content/uploads/2023/12/7ovlesyys8t71-1024x575.jpg" alt="">
                                <figcaption>
                                    <a href="" class="figure_caption">information technology </a>
                                    <a href="" class="figure_caption"> programming</a>
                                </figcaption>
                            </figure>
                            <a class ="title" href="">
                                <h3>بلک هورنت؛ نانوهلیکوپترهای جاسوس با وزن ۳۲ گرم و سرعت ۳۵ کیلومتر + ویدیو</h3>
                            </a>
                            <p class="text_gist">
                            گروه هایی از هلیکوپترهای کوچک بدون سرنشین موسوم به زنبور سیاه یا بلک هورنت (Black Hornet) به لطف دور جدیدی از کمک های دفاعی آمریکا برای کی یف در طول تابستان و تعهد نروژ برای ارسال...
                            </p>
                            <div class="detail">
                                <a href="" class="more btn">
                                    <span>بیشتر </span>
                                    <span class="material-symbols-outlined">arrow_back</span>
                                </a>
                                <div class="date">
                                    <span class="material-symbols-outlined">schedule</span>
                                    <span><script>document.write(date);</script></span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <nav class="carousle_navigation">
                        <a href="javascript:void(0)" class="next">
                            <span class="material-symbols-outlined">arrow_forward_ios</span>
                        </a>
                        <a href="javascript:void(0)" class="pause">
                            <span class="material-symbols-outlined">equal</span>
                        </a>
                        <a href="javascript:void(0)" class="prev">
                            <span class="material-symbols-outlined">arrow_back_ios</span>
                        </a>
                    </nav>
                </main>
            </section>

            <section class="post_categories">
                <div class="section_header">
                    <span class="bullet"></span>
                    <h1>دسته بندی ها</h1>
                </div>
                <ul class="items">
                    <li class="item">
                        <figure>
                            <img src="https://th.bing.com/th/id/OIP.a_9s016QOMRunuHy_fkGhAHaFj?rs=1&pid=ImgDetMain" alt="">
                        </figure>
                        <h2 class="title"><a href="">برنامه نویسی</a></h2>
                    </li>
                    <li class="item">
                        <figure>
                            <img src="https://www.nct.ac.in/assets/img/history/slider/3.jpg" alt="">
                        </figure>
                        <h2 class="title"><a href="">تاریخ</a></h2>
                    </li>
                    <li class="item">
                        <figure>
                            <img src="https://cdn.wccftech.com/wp-content/uploads/2021/01/Dynamic-2021-DevOps-Certification-Training-Bundle.jpg" alt="">
                        </figure>
                        <h2 class="title"><a href="">طراحی وب</a></h2>
                    </li>
                    <li class="item">
                        <figure>
                            <img src="https://cdn.dribbble.com/users/1864713/screenshots/4225698/psychological_assessment.jpg?compress=1&resize=400x300" alt="">
                        </figure>
                        <h2 class="title"><a href="">آموزشی</a></h2>
                    </li>
                    <li class="item">
                        <figure>
                            <img src="https://kchanews.com/wp-content/uploads/2014/09/bigstock-Breaking-News-Screen-36237841.jpg" alt="">
                        </figure>
                        <h2 class="title"><a href="">اخبار</a></h2>
                    </li>
                </ul>
            </section>

            <section class="last_contents">
                <div class="section_header">
                    <span class="bullet"></span>
                    <h1>آخرین مطالب</h1>
                    <a href="" class="more">
                        <span>مشاهده مطالب بیشتر </span>
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </div>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>

                <article class="card">
                    <figure>
                        <img src="http://via.placeholder.com/640x360" alt="">
                        <figcaption>
                            <a href="">وب</a>
                            <a href="">اچ تی ام ال</a>
                        </figcaption>
                    </figure>
                    <h2 class="card_title">
                        <a href="">عنوان مقاله</a>
                    </h2>
                    <p class="card_text">خلاصه متن قاله</p>
                    <div class="author">
                        <div class="writer">
                            <span class="material-symbols-sharp">stylus_note</span>
                            <a href="">نویسنده</a>
                        </div>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>تاریخ : <script>document.write(date)</script> انشار</span>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="views">
                            <span class="material-symbols-sharp">visibility</span>
                            <span>بازدیدها</span>
                        </div>
                        <div class="likes">
                        <span class="material-symbols-sharp">thumb_up</span>
                            <span>پسندها</span>
                        </div>
                    </div>
                </article>
            </section>

            <section class="favorite_posts">
                <div class="section_header">
                    <span class="bullet"></span>
                    <h1>محبوب ترین مطالب</h1>
                    <a href="" class="more">
                        <span>مشاهده مطالب بیشتر </span>
                        <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </div>
                <div class="column1">
                    <article class="">
                        <figure>
                            <img src="./administration/assets/images/article_images/Application programming interface-rafiki.svg">
                        </figure>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>۱۴ آذر ۱۴۰۲</span>
                        </div>
                        <div class="title"><a href="">تفاوت برنامه نویسی و کد نویسی چیست؟</a></div>
                        <div class="article_gist">دو مفهوم مهمی که در زمینه علوم مرتبط به کامپیوتر بسیار شنیده‌ایم، برنامه ...</div>
                        <div class="article_category"><span>برنامه نویسی</span></div>
                    </article>

                    <article class="">
                        <figure>
                            <img src="./administration/assets/images/article_images/Artificial intelligence-amico.svg">
                        </figure>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>۱۶ آذر ۱۴۰۲</span>
                        </div>
                        <div class="title"><a href="">همه چیز درباره هوش مصنوعی کاربردها و  آن </a></div>
                        <div class="article_gist"><p>هوش مصنوعی یا Artificial Intelligence همانطور که احتمالا می‌دانید شاخه‌ای از...</p></div>
                        <div class="article_category"><span>تکنولوژی</span></div>
                    </article>
                </div>

                <div class="column2">
                    <article>
                        <figure>
                                <img src="./administration/assets/images/article_images/Clutter-amico.svg">
                        </figure>
                        <div class="time">
                            <span class="material-symbols-sharp">schedule</span>
                            <span>۱۶ آذر ۱۴۰۲</span>
                        </div>
                        <div class="title"><a href="">همه چیز درباره هوش مصنوعی کاربردها و آن</a></div>
                        <div class="article_gist"><p>حوزه های زیادی در دنیای برنامه نویسی وجود دارند که یکی از شیرین و جذاب ترین حوزه های آن، برنامه نویسی موبایل می باشد. در چند سال اخیر، این حوزه رشد بسیار زیادی داشته...</p></div>
                        <div class="article_category"><span>تکنولوژی</span></div>
                    </article>
                </div>
            </section>

        </main>
        <?php require_once('parts/footer.php'); ?>
    </div>
</body>
</html>