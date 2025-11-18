<?php get_header(); ?>

<div class="page-insulation">
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
                        一年中快適、身体にも家計にも優しい
                    </h2>
                    <p class="c-parts-sec__lead">
                        高断熱・高気密の住まいは、夏は涼しく冬は暖かく、部屋ごとの温度差が少ない快適な室内環境を実現します。<br>
                        体への負担を減らし、ヒートショックのリスクを抑えることでご家族の健康も守ります。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ 家の「暑さ・寒さ」で ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>冬、暖房をつけても足元がスースー寒い…</p></li>
                    <li><p>夏の二階が蒸し風呂状態で、エアコンが効かない</p></li>
                    <li><p>窓の結露がひどく、カビが心配</p></li>
                    <li><p>毎月の光熱費が高い</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">INSULATION RENOVATION</span>
                    <h2 class="c-title--jp">断熱リフォームで、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/insulation-feature-img1.jpg" alt="落ち着いた照明のある快適な部屋">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">部屋ごとの温度差が少ない<br>快適な室内環境</h3>
                            <p class="c-number-feature__content--text">
                            断熱性能を高めることで、家全体の温度差を抑え、どの部屋にいても快適に過ごせる環境が整います。冬の冷え込みや夏の蒸し暑さを和らげ、身体への負担を軽減します。ヒートショックのリスクも減らせるため、ご家族の健康を守る住まいにつながります。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/insulation-feature-img2.jpg" alt="吹き抜けリビングと高窓のある開放的な空間">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">光熱費の削減による、<br>家計への貢献</h3>
                            <p class="c-number-feature__content--text">
                            冷暖房の効率が上がることで無駄なエネルギー消費を抑え、毎月の光熱費を削減できます。快適な住まいを保ちながらも省エネを実現することで、長期的に家計への負担を軽くします。環境にも優しい暮らし方を叶えるリフォームです。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/insulation-feature-img3.jpg" alt="木とガルバリウムのモダンな住宅の外観">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">結露抑制による、<br>家の長寿命化</h3>
                            <p class="c-number-feature__content--text">
                            断熱性と気密性を高めることで結露の発生を防ぎ、壁や窓まわりのカビや劣化を抑えます。建材の傷みを防ぐことは、住まい全体の寿命を延ばすことにつながります。健康的で長持ちする家を実現し、将来のメンテナンスコストも抑えられます。
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
                    <h2 class="c-title--jp">断熱リフォームの施工事例</h2>
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
                            <td data-label="内容" class="c-construction__text">内窓（二重窓）の設置</td>
                            <td data-label="価格" class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">高断熱サッシへの交換</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">壁・床・天井への断熱材充填</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">外壁の断熱塗装</td>
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