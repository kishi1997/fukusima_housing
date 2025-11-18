<?php get_header(); ?>

<div class="page-barrierfree">
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
                        この先も、ずっと安心して暮らせる我が家へ。
                    </h2>
                    <p class="c-parts-sec__lead">
                        大切な住まいは、家族の思い出を育みながらこれからも暮らしを支える存在であり続けます。<br>
                        福島ハウジングでは、老朽化への不安や住みにくさを解消し、長く安心して住み続けられる家づくりをご提案します。<br>
                        住み慣れた我が家をさらに心地よく、未来へつなぐ住まいに整えます。

                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ 家の中の「段差や移動」で ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>わずかな段差でつまずくことが増えた…</p></li>
                    <li><p>廊下やトイレに手すりがなく、移動が不安</p></li>
                    <li><p>冬場のヒートショックが心配</p></li>
                    <li><p>将来のために、車椅子でも生活できる家にしたい</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">barrierfree RENOVATION</span>
                    <h2 class="c-title--jp">バリアフリーリフォームで、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/barrierfree-feature-img1.jpg" alt="リビングと和室をつなぐ段差のないバリアフリーの部屋">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">家の中での転倒事故を防ぐ、<br>安全な動線</h3>
                            <p class="c-number-feature__content--text">
                            段差をなくしたフラットな床や手すりの設置、明るい照明計画などで、家の中の転倒事故を未然に防ぎます。特に高齢の方や小さなお子さまにとって、安心して歩ける動線は暮らしの質を大きく向上させます。安全性を高める工夫で、家族みんなが快適に過ごせる住まいを実現します。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/barrierfree-feature-img2.jpg" alt="使いやすい引き戸と部屋がつながるバリアフリー仕様の和室">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">誰にとっても使いやすい、<br>ユニバーサルデザイン</h3>
                            <p class="c-number-feature__content--text">
                            年齢や体格、体の状態にかかわらず、誰もが安心して使える住まいづくりを目指します。ドア幅の拡張や引き戸への変更、使いやすい高さの収納やスイッチ配置など、小さな工夫が日々の暮らしを快適に。ご家族全員に優しいユニバーサルデザインが、これからの住まいの新しい基準です。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/barrierfree-feature-img3.jpg" alt="段差をなくした洗面脱衣所とゆったりとしたドア幅の浴室入口">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">自立した生活を支える、<br>精神的な安心感</h3>
                            <p class="c-number-feature__content--text">
                            「自分でできる」環境が整うことは、日々の生活の自信や心のゆとりにつながります。安全性や利便性を高めるリフォームによって、誰もが自立した暮らしを続けられることをサポート。ご家族に負担をかけすぎることなく、安心して暮らせる環境を整えることが、精神的な安心感へとつながります。
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
                    <h2 class="c-title--jp">バリアフリーリフォームの施工事例</h2>
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
                            <td data-label="内容" class="c-construction__text">手すりの設置</td>
                            <td data-label="価格" class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">床の段差解消</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">引き戸への扉交換</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">浴室・トイレの改修（暖房、滑りにくい床など）</td>
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