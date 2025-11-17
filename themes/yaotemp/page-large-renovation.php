<?php get_header(); ?>

<div class="page-large-renovation">
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
                        想い出はそのままに、暮らしを刷新。
                    </h2>
                    <p class="c-parts-sec__lead">
                        大切にしてきた住まいには、家族の歴史や思い出がたくさん詰まっています。<br>
                        私たちはその想いを大切にしながら、今の暮らしに合った快適さや機能性をプラスするリフォームをご提案します。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ 住まい全体で ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>家全体が古く、耐震性や断熱性が心配…</p></li>
                    <li><p>中古住宅を購入して自分たちの理想の家にしたい</p></li>
                    <li><p>今の間取りが、ライフスタイルに合っていない</p></li>
                    <li><p>建て替えかリノベーションか迷っている</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">LARGE-SCALE RENOVATION</span>
                    <h2 class="c-title--jp">大規模リノベーションで、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/large-renovation-feature-img1.jpg" alt="玄関からシューズクロークへつながる広々としたエントランス">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">デザイン性と機能性を両立した<br>理想の住まい</h3>
                            <p class="c-number-feature__content--text">
                            リフォームによって叶えられるのは、見た目の美しさだけではありません。お客様のライフスタイルに合わせた快適な動線設計や収納計画など、機能性も兼ね備えた住まいを実現します。デザインと暮らしやすさを両立させることで、日々の生活に心地よさと満足感が広がります。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/large-renovation-feature-img2.jpg" alt="家族がウッドデッキでくつろぐ家の外観">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">現代基準の<br>耐震・断熱性能への向上</h3>
                            <p class="c-number-feature__content--text">
                            長く安心して暮らすためには、見た目のリフォームだけでなく住宅性能の向上も欠かせません。最新の耐震補強や断熱材の導入により、災害に強く、省エネ効果の高い快適な住まいへと生まれ変わります。安心と安全を備えた空間が、ご家族の暮らしをしっかり支えます。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/large-renovation-feature-img3.jpg" alt="吹き抜けのあるリビングで快適に過ごせる住宅">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">建て替えよりも<br>コストを抑えた全面改修</h3>
                            <p class="c-number-feature__content--text">
                            住まいを一新したいけれど建て替えは費用や時間の負担が大きい——そんなお悩みに応えるのが全面改修です。既存の構造を活かしつつ間取りや設備を一新することで、建て替えに比べコストを抑えながら理想の暮らしを実現可能です。想い出の残る家を大切にしながら、新築同様の快適さを手に入れることができます。
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
                    <h2 class="c-title--en">LARGE-SCALE <br class="u-sp">RENOVATION<br>CASE STUDIES</h2>
                    <div class="c-title--jp">大規模リノベの施工事例</div>
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
                            <td data-label="内容" class="c-construction__text">スケルトンリフォーム（骨組み以外すべて解体・再構築）</td>
                            <td data-label="価格" class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">外壁・屋根の全面改修</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">断熱材の入れ替え、サッシ交換</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">内装・住宅設備の全面交換</td>
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