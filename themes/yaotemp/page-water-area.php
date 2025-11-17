<?php get_header(); ?>

<div class="page-water-area">
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
                        毎日使う場所だから、もっと快適に、もっとキレイに。
                    </h2>
                    <p class="c-parts-sec__lead">
                        キッチンや浴室、洗面所など、毎日欠かさず使う場所こそ快適さと清潔さが大切です。<br>
                        新設備の導入や収納の工夫により、使いやすさと美しさを兼ね備えた空間へとリフォーム。<br>
                        お手入れのしやすさも向上するため、家事の負担を軽減しながら長くキレイを保てます。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ 毎日の水回り ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>キッチンの収納が少なく、作業スペースが狭い</p></li>
                    <li><p>お風呂のタイルが冷たく、掃除も大変</p></li>
                    <li><p>トイレの汚れが落ちにくく、ニオイも気になる</p></li>
                    <li><p>水道代やガス代を節約したい</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">WATER-AREA RENOVATION</span>
                    <h2 class="c-title--jp">水回りリフォームで、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/water-area-feature-img1.jpg" alt="アイランドキッチンを備えたモダンな水回り">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">最新設備で、<br>家事の負担を軽減</h3>
                            <p class="c-number-feature__content--text">
                            キッチンや浴室、洗面台などの最新設備は、使いやすさと効率性を追求して設計されています。調理や洗い物、洗濯など、毎日の家事をスムーズにこなせる工夫が満載。作業の時間を短縮できることで、家族との時間や自分の時間にゆとりが生まれ、暮らしに余裕をもたらします。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/water-area-feature-img2.jpg" alt="収納力のある木製カウンターとシステムキッチン">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">掃除がしやすく、<br>清潔感を保てる空間</h3>
                            <p class="c-number-feature__content--text">
                            汚れにくい素材やお手入れのしやすい設計を取り入れることで、掃除の手間をぐっと減らせます。水回りのカビやぬめり、キッチンの油汚れなども簡単に落とせ、常に清潔感のある空間をキープ。日常の負担を減らしながら、快適で美しい住まいを保てます。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/water-area-feature-img3.jpg" alt="モザイクタイルが映える洗面台の水回り">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">節水・節湯による、<br>水道光熱費の削減</h3>
                            <p class="c-number-feature__content--text">
                            最新の水回り設備は、省エネ性能にも優れています。節水型のトイレやシャワー、効率的なお湯の使い方ができる給湯システムなどを導入することで、水道光熱費を大幅に削減可能。環境にも家計にも優しい住まいを実現し、毎月の暮らしをより安心で持続的なものにします。
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
                    <h2 class="c-title--en">WATER-AREA <br class="u-sp">RENOVATION<br>CASE STUDIES</h2>
                    <div class="c-title--jp">水回りリフォームの施工事例</div>
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
                            <td data-label="内容" class="c-construction__text">ユニットバス交換</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">洗面化粧台交換</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">トイレ交換<br>（タンクレストイレ、節水トイレなど）</td>
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