<?php get_header(); ?>

<div class="page-planchange">
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
                        家族の変化に合わせて、<br class="u-pc">暮らしの「最適解」を見つける
                    </h2>
                    <p class="c-parts-sec__lead">
                        暮らしは時間とともに変化していきます。<br>
                        子どもの成長や独立、在宅ワークの増加、親世代との同居など、家族の形が変われば必要とされる住まいの姿も変わります。<br>
                        今だけでなく、これから先も心地よく暮らせる「最適解」を、一緒に見つけていきましょう。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ 日常生活の中で ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>日中でもリビングが暗くて寒い…</p></li>
                    <li><p>家事動線が悪く、移動に時間がかかる</p></li>
                    <li><p>子どもが成長し、個室が必要になった</p></li>
                    <li><p>壁が多く、空間が細切れで狭く感じる</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">LAYOUT CHANGE</span>
                    <h2 class="c-title--jp">間取り変更で、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/planchange-feature-img1.jpg" alt="リビングとダイニングとキッチンが一体化した開放的な間取り">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">光と風が通る、<br>明るく開放的なLDK</h3>
                            <p class="c-number-feature__content--text">
                            仕切りを取り払い、リビング・ダイニング・キッチンを一体化させることで、光と風が家中に広がり、開放感あふれる住空間が生まれます。自然と家族が集まる心地よい場所となり、会話やふれあいが増えるのも大きな魅力です。明るく風通しの良いLDKは、暮らしをより快適で豊かなものに変えてくれます。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/planchange-feature-img2.jpg" alt="洗面室をリビングをつなぐ動線を整えた間取り">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">家事の時短を叶える<br>スムーズな生活動線</h3>
                            <p class="c-number-feature__content--text">
                            キッチンから洗面、リビングへの動線を見直すだけで、家事効率はぐっと高まります。移動の手間を減らすことで時間に余裕が生まれ、家族との時間を大切にできるのもポイントです。収納や配置を工夫することで「使いやすさ」と「時短」を両立し、毎日の家事を快適にサポートします。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/planchange-feature-img3.jpg" alt="和室の窓際に設けた読書スペースの間取り">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">家族の成長に対応する<br>柔軟な部屋づくり</h3>
                            <p class="c-number-feature__content--text">
                            子どもの成長や独立、在宅ワークや趣味のスペースなど、家族のライフスタイルは常に変化します。仕切りを追加して個室をつくったり、大きな一部屋として使ったりと、可変性のある空間は暮らしにゆとりをもたらします。将来を見据えた柔軟な間取りで、長く快適に住み続けられる家づくりを実現します。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-3col">
            <div class="c-3col__head">
                <div class="c-title">
                    <span class="c-title--en">WORK</span>
                    <h2 class="c-title--jp">間取り変更の施工事例</h2>
                </div>
            </div>
            <div class="l-container">
                <div class="c-3col__list">
                    <div class="c-3col__item">
                        <a href="<?php bloginfo('url'); ?>//">
                            <div class="c-3col__item--img">
                                <img src="<?php bloginfo('template_url');?>/img/top-case-img1.jpg" alt="機能性も重視した外構デザイン">
                                <span class="c-3col__item--tag">リフォーム</span>
                            </div>
                            <div class="c-3col__item--meta">
                                <span class="c-3col__item--place">千葉県A様</span>
                            </div>
                                <h3 class="c-3col__item--title">住まいの見学と暮らしの方法</h3>
                                <p class="c-3col__item--text">
                                    家族が安心して過ごせる場所、喜びや笑顔があふれる場所、そして未来へと受け継がれる特別な場所を目指して。
                                </p>
                            </a>
                        </div>
                        <div class="c-3col__item">
                            <a href="<?php bloginfo('url'); ?>//">
                                <div class="c-3col__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-img2.jpg" alt="高低差のある玄関への出入りをデザイン">
                                    <span class="c-3col__item--tag">リフォーム</span>
                                </div>
                                <div class="c-3col__item--meta">
                                    <span class="c-3col__item--place">埼玉県A様</span>
                                </div>
                                <h3 class="c-3col__item--title">住まいの見学と暮らしの方法</h3>
                                <p class="c-3col__item--text">
                                    家族が安心して過ごせる場所、喜びや笑顔があふれる場所、そして未来へと受け継がれる特別な場所を目指して。
                                </p>
                            </a>
                        </div>
                        <div class="c-3col__item">
                            <a href="<?php bloginfo('url'); ?>//">
                                <div class="c-3col__item--img">
                                    <img src="<?php bloginfo('template_url');?>/img/top-case-img3.jpg" alt="植物を楽しめるリノベーションガーデン">
                                    <span class="c-3col__item--tag">リフォーム</span>
                                </div>
                                <div class="c-3col__item--meta">
                                    <span class="c-3col__item--place">東京都A様</span>
                                </div>
                                <h3 class="c-3col__item--title">住まいの見学と暮らしの方法</h3>
                                <p class="c-3col__item--text">
                                    家族が安心して過ごせる場所、喜びや笑顔があふれる場所、そして未来へと受け継がれる特別な場所を目指して。
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="c-3col__btn">
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
                            <td data-label="内容" class="c-construction__text">壁の撤去・新設工事</td>
                            <td data-label="価格" class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">ドア・建具の交換、新設</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">電気配線、スイッチ、コンセントの移設</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">床・壁・天井の内装工事</td>
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