<?php get_header(); ?>

<div class="page-beginner">
    <div class="c-pagehead-set">
        <div class="c-pagehead-text">
            <p>For beginner</p>
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
                    <h2 class="c-parts-sec__title">あなたの想いをカタチに。<br>理想の暮らしはここから。</h2>
                    <p class="c-parts-sec__lead">
                        暮らし方は人それぞれ。だからこそ、住まいもあなたらしく。<br>
                        福島ハウジングは、リフォームを通じて“理想の空間づくり”をサポートします。<br>
                        機能性とデザインを両立させたご提案で、毎日の生活がもっと心地よく変わります。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-parts-check">
            <div class="l-container">
                <h3 class="c-parts-check__title"><span>＼ はじめてのリフォーム ／</span>こんなお悩みありませんか？</h3>
                <ul class="c-parts-check__list">
                    <li><p>リフォーム費用って、結局いくらかかるの？</p></li>
                    <li><p>イメージ通りになるか不安…</p></li>
                    <li><p>悪質な業者に騙されたくない</p></li>
                    <li><p>工事中の生活はどうなるんだろう？</p></li>
                </ul>
            </div>
        </section>

        <section class="c-number-feature">
            <div class="c-number-feature__head">
                <div class="c-title">
                    <span class="c-title--en">OUR THREE PROMISES</span>
                    <h2 class="c-title--jp">福島ハウジングの3つのお約束</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-number-feature__list">
                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/beginner-feature-img1.jpg" alt="「ご予算内で最高の満足を」イメージ画像">
                        </div>
                        <div class="c-number-feature__content">
                            <span class="bg-number">01</span>
                            <h3 class="c-number-feature__content--title">ご予算内で最高の満足を</h3>
                            <p class="c-number-feature__content--text">
                            お客様のご要望をしっかりとお伺いし、ご予算に沿った最適なプランをご提案します。無理のない価格設定で、理想の暮らしを実現するために全力でサポート。限られた予算の中でも、納得と満足を感じていただける高品質なリフォームをお約束いたします。<br><br>
                            「お願いしてよかった」と思っていただけるよう、常に誠実な対応と確かな技術で最高の価値をご提供することをお約束いたします。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/beginner-feature-img2.jpg" alt="「主役であるお客様との対話を大切に」イメージ画像">
                        </div>
                        <div class="c-number-feature__content">
                            <span class="bg-number">02</span>
                            <h3 class="c-number-feature__content--title">主役であるお客様との対話を大切に</h3>
                            <p class="c-number-feature__content--text">
                            リフォームは私たちが一方的に進めるのではなく、お客様と一緒に創り上げるプロセスだと考えています。だからこそ、初回の打ち合わせから完成まで、常に寄り添ったご説明と丁寧なヒアリングを欠かしません。お客様の不安や疑問を解消しながら、ご希望を最大限に反映したプランを一緒に描いていきます。<br><br>
                            心して任せていただけるよう、透明性のある対応と誠実なコミュニケーションを徹底します。住まいづくりの主役であるお客様を中心に据えた姿勢で、心からご満足いただけるリフォームを実現します。
                            </p>
                        </div>
                    </div>

                    <div class="c-number-feature__item">
                        <div class="c-number-feature__img">
                            <img src="<?php bloginfo('template_url');?>/img/beginner-feature-img3.jpg" alt="「工事中から完成後まで、ずっと寄り添う安心感」イメージ画像">
                        </div>
                        <div class="c-number-feature__content">
                            <span class="bg-number">03</span>
                            <h3 class="c-number-feature__content--title">工事中から完成後まで、<br class="u-pc">ずっと寄り添う安心感</h3>
                            <p class="c-number-feature__content--text">
                            リフォームは工事が終わってからが本当のスタートだと私たちは考えています。工事中は近隣への配慮や現場の清掃にも力を入れ、安心してお任せいただける環境を整えます。そして、完成後もアフターフォローを継続し、小さな不具合やご相談にも迅速に対応します。<br><br>
                            お引き渡しから数年経っても快適に暮らしていただけるよう、長期的にサポートいたします。お客様の住まいを守るパートナーとして、工事中からその先の暮らしまで、変わらぬ安心感をお届けします。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="c-flow-slim">
            <div class="l-container">
                <div class="c-flow-slim__head">
                    <div class="c-title">
                        <span class="c-title--en">FLOW</span>
                        <h2 class="c-title--jp">リフォームの流れ</h2>
                    </div>
                </div>

                <div class="c-flow-slim__list">
                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>01</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">ご相談・お問い合わせ</h3>
                            <p class="c-flow-slim__desc">まずはお電話やメールでお気軽にご相談ください。住まいに関するお困りごとやリフォームのご要望をお聞かせいただき、専門スタッフが丁寧に対応いたします。</p>
                        </div>
                    </div>

                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>02</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">ヒアリング</h3>
                            <p class="c-flow-slim__desc">お客様のご希望や生活スタイルを詳しくお伺いし、リフォームの目的や優先順位を整理します。理想の住まいをイメージできるよう、分かりやすくご説明いたします。</p>
                        </div>
                    </div>

                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>03</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">現地調査</h3>
                            <p class="c-flow-slim__desc">実際の住まいを拝見し、建物の状況や寸法、構造を確認します。細部まで調査した上で、無理のない施工が可能かどうかを確認し、最適なプラン作成に活かします。</p>
                        </div>
                    </div>

                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>04</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">プラン・お見積り提出</h3>
                            <p class="c-flow-slim__desc">ヒアリングで伺ったご要望と現地調査の結果を踏まえ、最適なリフォームプランをご提案します。ご予算や生活スタイルに合わせて複数の案をご提示し、それぞれのメリット・デメリットを丁寧にご説明。お見積りは工事内容を細かく明示し、追加費用が発生しないよう明確で分かりやすい形でご提示いたします。</p>
                        </div>
                    </div>

                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>05</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">ご契約</h3>
                            <p class="c-flow-slim__desc">プランやお見積りにご納得いただけましたら、ご契約となります。工事内容やスケジュールを改めて確認し、お客様に安心してお任せいただけるようにいたします。</p>
                        </div>
                    </div>

                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>06</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">着工・施工</h3>
                            <p class="c-flow-slim__desc">工事が始まると、私たちは現場管理を徹底し、安全かつ丁寧な施工を心がけます。近隣の方への配慮や現場の清掃を欠かさず、工事中も快適に過ごしていただけるよう努めます。また、進捗状況を定期的にご報告し、途中で気になる点があれば随時ご相談いただける体制を整えています。</p>
                        </div>
                    </div>

                    <div class="c-flow-slim__item">
                        <div class="c-flow-slim__step">STEP<br><span>07</span></div>
                        <div class="c-flow-slim__content">
                            <h3 class="c-flow-slim__heading">お引渡し・アフターフォロー</h3>
                            <p class="c-flow-slim__desc">工事完了後はお客様と一緒に仕上がりを確認し、お引き渡しいたします。その後もアフターフォローを行い、快適な暮らしを長く支え続けます。</p>
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
                    <h2 class="c-title--en">CASE STUDIES<br class="u-sp" /> & <br class="u-sp" />TESTIMONIALS</h2>
                    <div class="c-title--jp">施工事例・お客様の声</div>
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

    </div>
    </main>
    <!-- /l-main -->
</div>

<?php get_footer(); ?>