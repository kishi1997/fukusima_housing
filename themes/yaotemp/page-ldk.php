<?php get_header(); ?>

<div class="page-ldk">
    <div class="c-pagehead-set">
        <div class="c-pagehead-text">
            <p><?php echo $slug = get_post(get_the_ID())->post_name; ?></p>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main<?php if ( get_option('fit_theme_pageLayout') == 'value2' ):?> l-main-single
        <?php if ( get_option('fit_theme_singleWidth') == 'value2' ):?> l-main-w740<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value3' ):?> l-main-w900<?php endif; ?>
        <?php if ( get_option('fit_theme_singleWidth') == 'value4' ):?> l-main-w100<?php endif; ?>
        <?php endif; ?>">


        <section class="c-parts-sec">
            <div class="l-container">            
                <div class="c-parts-sec__item">
                    <h2 class="c-parts-sec__title">
                        家族の「ただいま！」が聞こえる、<br class="u-pc">笑顔が集まるLDK
                    </h2>
                    <p class="c-parts-sec__lead">
                        広々としたLDKは、家族が自然と集まる暮らしの中心になります。<br>
                        料理をしながら会話ができたり、勉強や仕事をしながら気配を感じられたりと、日常のふれあいが増えるのが大きな魅力です。<br>
                        リビングに「ただいま！」の声が響けば、そこには安心感と笑顔が広がります。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ LDKの ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>壁付けキッチンで、料理中に孤立してしまう…</p></li>
                    <li><p>リビングが手狭で、家族がゆったり過ごせない</p></li>
                    <li><p>収納が少なく、もので溢れて片付かない</p></li>
                    <li><p>ダイニングとリビングの空間を分けたい</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">LDK RENOVATION</span>
                    <h2 class="c-title--jp">LDKリフォームで、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/ldk-feature-img1.jpg" alt="木の温もりと障子が調和した和モダンなリビング">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">家族の顔が見える、<br>会話が弾む対面キッチン</h3>
                            <p class="c-number-feature__content--text">
                            対面式のキッチンは、料理をしながら家族の顔が見え、自然と会話が生まれる空間になります。小さなお子さまの様子を見守りながら調理ができる安心感や、食事の準備と片付けを一緒に楽しめる利便性も魅力。日常の「おいしいね」「ありがとう」が交わされる場所として、家族の絆を深めてくれます。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/ldk-feature-img2.jpg" alt="間接照明が柔らかく灯る木の書斎スペース">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">一体感のある、<br>広々とした開放的な空間</h3>
                            <p class="c-number-feature__content--text">
                            リビングとダイニング、キッチンを一体化させることで、光と風が行き渡る明るく開放的な空間が生まれます。広がりのある空間は視線も通りやすく、家族がどこにいてもつながりを感じられるのが魅力。家族の会話が自然に広がり、のびのびと暮らせる住まいを実現します。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/ldk-feature-img3.jpg" alt="吹き抜けリビングで家族が過ごす明るい木の家の内観">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">「見せる収納」「隠す収納」で<br>スッキリ片付く</h3>
                            <p class="c-number-feature__content--text">
                            リビングやキッチンを快適に使うためには、収納の工夫が欠かせません。お気に入りの食器や雑貨は「見せる収納」でインテリアの一部に、生活感のあるものは「隠す収納」でスッキリします。使いやすさとデザイン性を両立させることで、片付けがしやすく整った暮らしを続けられます。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="top-case">
            <div class="top-case__upper">
                <div class="top-case__bg">
                    <picture>
                        <source media="(max-width: 480px)" srcset="<?php bloginfo('template_url');?>/img/top-case-bgSp.png">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-bg.png" alt="施工事例・お客様の声背景画像">
                    </picture>
                </div>
                <div class="c-title">
                    <h2 class="c-title--en">LDK RENOVATION<br>CASE STUDIES</h2>
                    <div class="c-title--jp">LDKリフォームの施工事例</div>
                </div>
                <div class="top-case__contentImg">
                    <picture>
                        <source media="(max-width: 480px)"
                            srcset="<?php bloginfo('template_url');?>/img/top-case-contentSp.png">
                        <img src="<?php bloginfo('template_url');?>/img/top-case-content.png" alt="施工事例・お客様の声コンテンツ画像">
                    </picture>
                </div>
            </div>
            <div class="top-case__bottom">
                <div class="l-container">
                    <div class="top-case__list">
                        <div class="top-case__item">
                            <div class="top-case__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/top-case-img1.jpg" alt="機能性も重視した外構デザイン">
                                <span class="top-case__item--tag">リフォーム</span>
                            </div>
                            <div class="top-case__item--meta">
                                <span class="top-case__item--place">千葉県A様</span>
                            </div>
                            <h3 class="top-case__item--title">住まいの見学と暮らしの方法</h3>
                            <p class="top-case__item--text">
                                家族が安心して過ごせる場所、喜びや笑顔があふれる場所、そして未来へと受け継がれる特別な場所を目指して。
                            </p>
                        </div>
                        <div class="top-case__item">
                            <div class="top-case__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/top-case-img2.jpg" alt="高低差のある玄関への出入りをデザイン">
                                <span class="top-case__item--tag">リフォーム</span>
                            </div>
                            <div class="top-case__item--meta">
                                <span class="top-case__item--place">埼玉県A様</span>
                            </div>
                            <h3 class="top-case__item--title">住まいの見学と暮らしの方法</h3>
                            <p class="top-case__item--text">
                                家族が安心して過ごせる場所、喜びや笑顔があふれる場所、そして未来へと受け継がれる特別な場所を目指して。
                            </p>
                        </div>
                        <div class="top-case__item">
                            <div class="top-case__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/top-case-img3.jpg" alt="植物を楽しめるリノベーションガーデン">
                                <span class="top-case__item--tag">リフォーム</span>
                            </div>
                            <div class="top-case__item--meta">
                                <span class="top-case__item--place">東京都A様</span>
                            </div>
                            <h3 class="top-case__item--title">住まいの見学と暮らしの方法</h3>
                            <p class="top-case__item--text">
                                家族が安心して過ごせる場所、喜びや笑顔があふれる場所、そして未来へと受け継がれる特別な場所を目指して。
                            </p>
                        </div>
                    </div>
                    <div class="top-case__btn">
                        <a href="<?php bloginfo('url'); ?>/news/" class="c-btn">もっとみる
                            <div class="c-btn--circle">
                                <span class="c-btn--circle-arrow">
                                    <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-construction">
            <div class="c-construction__head">
                <div class="c-title">
                    <span class="c-title--en">WORK EXAMPLES</span>
                    <h2 class="c-title--jp">工事内容例</h2>
                </div>
            </div>

            <div class="l-container">
                <table class="c-construction__table">
                    <thead>
                        <tr>
                            <th scope="c-construction__col">工事内容</th>
                            <th scope="c-construction__col">価格</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="内容" class="c-construction__text">システムキッチン交換</td>
                            <td data-label="価格" class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">間仕切り壁の撤去</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">床暖房の設置</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">内装（床・壁・天井）工事一式</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                    </tbody>
                </table>
                <p class="c-construction__text">※価格は一例です。現地調査の上、正確なお見積りを提出します</p>
            </div>
        </section>

    </div>
    </main>
    <!-- /l-main -->
</div>

<?php get_footer(); ?>