<?php get_header(); ?>

<div class="page-washitsu">
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
                        使われなくなった和室を、<br>家族が集まるお気に入りの空間へ
                    </h2>
                    <p class="c-parts-sec__lead">
                        昔ながらの和室も、ライフスタイルに合わせてリフォームすれば新たな居心地の良い場所に生まれ変わります。<br>
                        活用されず物置になっていた空間も、工夫次第で家族の集う快適なリビングや趣味のスペースへと変身します。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ 和室ならではの ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>畳や障子の手入れが大変…</p></li>
                    <li><p>重い家具を置くと畳がへこんでしまう</p></li>
                    <li><p>部屋の使い道がなく、物置状態になっている</p></li>
                    <li><p>LDKとつなげて、もっと開放的な空間にしたい</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">JAPANESE STYLE RENOVATION</span>
                    <h2 class="c-title--jp">和室リフォームで、暮らしはこう変わる</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/washitsu-feature-img1.jpg" alt="木の温もりと障子が調和した和モダンなリビング">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">掃除やメンテナンスが楽な<br>フローリング空間</h3>
                            <p class="c-number-feature__content--text">
                            畳からフローリングに変えることで、日々のお掃除やお手入れがぐっと簡単になります。掃除機やモップを使えばサッときれいになり、畳のようにダニやカビの心配も少なく衛生的。傷や汚れにも強い素材を選べば、長く美しさを保つことができます。忙しい毎日の中でお手入れにかかる手間を減らし、快適で清潔な住環境を維持できるのがフローリングの大きな魅力です。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/washitsu-feature-img2.jpg" alt="間接照明が柔らかく灯る木の書斎スペース">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">ライフスタイルに合わせた<br>多目的な活用</h3>
                            <p class="c-number-feature__content--text">
                            和室をリフォームすることで、これまで使いづらかった空間がライフスタイルに合わせて柔軟に活用できるようになります。客間としてだけでなく、子どもの遊び場やリモートワーク用の書斎、趣味のスペースなど多目的に利用可能です。ライフステージの変化にも対応でき、家族全員にとって使いやすく心地よい空間へと生まれ変わります。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/washitsu-feature-img3.jpg" alt="吹き抜けリビングで家族が過ごす明るい木の家の内観">
                        </div>
                        <div class="c-number-feature__content">
                            <h3 class="c-number-feature__content--title">LDKと一体化する開放的な間取り</h3>
                            <p class="c-number-feature__content--text">
                            和室とリビングをつなげて一体化させることで、広々とした開放感のある住空間を実現できます。仕切りをなくすことで光や風が通りやすくなり、部屋全体が明るく快適に。家族の会話や動線も自然とつながり、暮らしの中心がより豊かになります。LDK全体が一つの大きな空間となり、家族の絆を深める住まいへと変わります。
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
                    <h2 class="c-title--en">JAPANESE STYLE <br class="u-sp">RENOVATION <br>CASE STUDIES</h2>
                    <div class="c-title--jp">和室リフォームの施工事例</div>
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
                            <td data-label="内容" class="c-construction__text">畳からフローリングへの変更</td>
                            <td data-label="価格" class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">壁・天井のクロス張替え</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">押し入れをクローゼットに変更</td>
                            <td data-label="価格"class="c-construction__price">¥000,000</td>
                        </tr>
                        <tr>
                            <td data-label="内容" class="c-construction__text">障子・ふすまをドアや引き戸に変更</td>
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