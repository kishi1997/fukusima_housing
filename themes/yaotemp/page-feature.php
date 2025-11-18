<?php get_header(); ?>

<div class="page-feature">
    <div class="c-pagehead-set">
        <div class="c-pagehead-text">
            <p>The feature</p>
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
                    <h2 class="c-parts-sec__title">技術だけ、価格だけじゃない。<br>私たちが大切にしていること</h2>
                    <p class="c-parts-sec__lead">
                    リフォームは“直すこと”だけが目的ではありません。<br>
                    私たちは、お客様の想いや暮らしに寄り添い、安心して長く住み続けられる住まいづくりを大切にしています。<br>
                    技術力や価格の魅力はもちろん、信頼できる対応と心のこもったサービスで、満足を超える価値をご提供します。
                    </p>
                </div>
            </div>
        </section>

        <section class="c-2col feature-choose">
            <div class="c-2col__head">
                <div class="c-title">
                    <span class="c-title--en">WHY CHOOSE US</span>
                    <h2 class="c-title--jp">私たちが選ばれる理由</h2>
                </div>
            </div>

            <div class="l-container">
                <div class="c-2col__item">
                    <div class="c-2col__img">
                        <img src="<?php bloginfo('template_url');?>/img/feature-choose-img1.jpg" alt="明るく開放的なリビングダイニングと木目調のインテリア">
                    </div>
                    <div class="c-2col__content">
                        <h3 class="c-2col__content--title">
                            注文住宅も手掛ける職人による、<br>圧倒的な技術力
                        </h3>
                        <p class="c-2col__content--text">
                            福島ハウジングには、注文住宅を数多く手掛けてきた熟練の職人が在籍しています。豊富な経験に基づいた確かな施工技術で、美しさと耐久性を兼ね備えた仕上がりを実現します。リフォームだからこそ、難しい部分も妥協せず、一つひとつ丁寧に対応します。細部までこだわる確かな技術力が、多くのお客様に選ばれている理由です。
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-staff" id="feature-staff">
            <div class="l-container">
                <div class="feature-staff__head">
                    <div class="c-title">
                        <h2 class="c-title--en">STAFF</h2>
                        <div class="c-title--jp">
                            スタッフ紹介
                        </div>
                    </div>
                    <p class="feature-staff__desc">
                        デザイン・間取り・性能のすべてを一新。思い出が詰まった家の骨格は活かし、<br />
                        新築同様の快適さと感動をご提供。住まいの可能性を引き出します。
                    </p>
                </div>

                <div class="feature-staff__wrapper">
                    <ul class="feature-staff__list">
                        <li class="feature-staff__card">
                            <figure class="feature-staff__card--img">
                                <img src="<?php bloginfo('template_url');?>/img/feature-staff-img1.jpg" alt="吉田光孝">
                            </figure>
                            <div class="feature-staff__card--body">
                                <span class="feature-staff__card--position">リフォームアドバイザー</span>
                                <span class="feature-staff__card--title">吉田光孝</span>
                                <p>入社して16年の経験とノウハウを活かし、お客様のご要望に親切、丁寧に対応します。<br><br>
                                【趣味】釣り</p>
                            </div>
                        </li>
                        <li class="feature-staff__card">
                            <figure class="feature-staff__card--img">
                                <img src="<?php bloginfo('template_url');?>/img/feature-staff-img2.jpg" alt="スタッフ画像２">
                            </figure>
                            <div class="feature-staff__card--body">
                                <span class="feature-staff__card--position">工務</span>
                                <span class="feature-staff__card--title">原田幸雄</span>
                                <p>老舗建設会社での長年の現場監督の経験を活かし、リフォーム工事がスムーズかつ万全に進むよう見守ります。<br><br>
                                【趣味】スポーツ観戦</p>
                            </div>
                        </li>
                        <li class="feature-staff__card">
                            <figure class="feature-staff__card--img">
                                <img src="<?php bloginfo('template_url');?>/img/feature-staff-img3.jpg" alt="スタッフ画像3">
                            </figure>
                            <div class="feature-staff__card--body">
                                <span class="feature-staff__card--position">職人</span>
                                <span class="feature-staff__card--title">スタッフ名</span>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </li>
                        <li class="feature-staff__card">
                            <figure class="feature-staff__card--img">
                                <img src="<?php bloginfo('template_url');?>/img/feature-staff-img3.jpg" alt="スタッフ画像3">
                            </figure>
                            <div class="feature-staff__card--body">
                                <span class="feature-staff__card--position">職人</span>
                                <span class="feature-staff__card--title">スタッフ名</span>
                                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                            </div>
                        </li>
                    </ul>
                    <div class="feature-staff__slick">
                        <button class="c-slick__arrows--prev slick-prev"><span class="c-slick__arrows--icon"></span></button>
                        <button class="c-slick__arrows--next slick-next"><span class="c-slick__arrows--icon"></span></button>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-voice c-2col">
            <div class="l-container">
                <div class="c-2col__item">
                    <div class="c-2col__img">
                        <img src="<?php bloginfo('template_url');?>/img/feature-voice-img1.jpg" alt="白を基調とした洗練された雰囲気のダイニング">
                    </div>
                    <div class="c-2col__content">
                        <h3 class="c-2col__content--title">
                            メリットも、デメリットも。<br>嘘のない誠実な家づくり
                        </h3>
                        <p class="c-2col__content--text">
                            私たちは、いいことだけを並べるようなご提案はいたしません。工事のメリットはもちろん、想定されるデメリットや注意点も正直にお伝えします。リフォームは大きな決断だからこそ、お客様にしっかりご理解いただき、納得のうえで進めることが大切です。誠実で透明性のある対応を心がけ、信頼できるパートナーとして末永くお付き合いできる家づくりを目指しています。
                        </p>
                    </div>
                </div>
                <div class="c-column__head">
                    <div class="c-title">
                        <span class="c-title--en">VOICE</span>
                        <h2 class="c-title--jp">お客様の声</h2>
                    </div>
                </div>
                <div class="c-column__list">
                    <div class="c-column__item">
                        <figure><img src="<?php bloginfo('template_url');?>/img/feature-voice-img2.jpg" alt="明るく開放的なリビングダイニングと木目調のインテリア"></figure>
                        <div class="c-column__body">
                            <h4>予算オーバー？正直な見積もりのおかげで、最高のキッチンになりました</h4>
                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="c-column__item">
                        <figure><img src="<?php bloginfo('template_url');?>/img/feature-voice-img3.jpg" alt="明るく開放的なリビングダイニングと木目調のインテリア"></figure>
                        <div class="c-column__body">
                            <h4>「この壁は壊せません」その正直な一言が、信頼の始まりでした</h4>
                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div> 
                    </div>
                </div>
                <div class="feature-voice__btn">
                    <a href="<?php bloginfo('url'); ?>/voice/" class="c-btn">お客様の声をもっと見る
                        <div class="c-btn--circle">
                            <span class="c-btn--circle-arrow">
                                <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <section class="feature-interview c-2col">
            <div class="l-container">
                <div class="c-2col__item">
                    <div class="c-2col__content">
                        <h3 class="c-2col__content--title">
                            この町とともに。<br>何かあればすぐに駆けつける安心感
                        </h3>
                        <p class="c-2col__content--text">
                            福島ハウジングは地域に根ざした住まいのパートナーです。困ったときや急なトラブルにも、すぐに駆けつけられる距離にいるからこそ、安心してお任せいただけます。長年暮らす町で、これからも変わらぬサポートを続け、お客様の住まいと暮らしをしっかり守り続けます。
                        </p>
                    </div>
                    <div class="c-2col__img">
                        <img src="<?php bloginfo('template_url');?>/img/feature-interview-img1.jpg" alt="明るく開放的なリビングダイニングと木目調のインテリア">
                    </div>
                </div>
                <div class="c-column__head">
                    <div class="c-title">
                        <span class="c-title--en">INTERVIEW</span>
                        <h2 class="c-title--jp">OB様インタビュー</h2>
                    </div>
                </div>
                <div class="c-column__list">
                    <div class="c-column__item">
                        <figure><img src="<?php bloginfo('template_url');?>/img/feature-interview-img2.jpg" alt="明るく開放的なリビングダイニングと木目調のインテリア"></figure>
                        <div class="c-column__body">
                            <h4>完成から5年。今も続く安心感と、暮らしに馴染む家</h4>
                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </div>
                    <div class="c-column__item">
                        <figure><img src="<?php bloginfo('template_url');?>/img/feature-interview-img3.jpg" alt="明るく開放的なリビングダイニングと木目調のインテリア"></figure>
                        <div class="c-column__body">
                            <h4>「ちょっと調子が…」電話一本ですぐ来てくれる、まるで家族のような存在です</h4>
                            <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div> 
                    </div>
                </div>
            </div>
        </section>

        <section class="top-message feature-message">
            <div class="l-container">
                <div class="top-message__content">
                    <div class="c-title u-sp">
                        <h2 class="c-title--en">MESSAAGE</h2>
                        <div class="c-title--jp">
                            代表挨拶
                        </div>
                    </div>
                    <div class="top-message__content__item">
                        <div class="top-message__left">
                            <div class="c-title u-pc">
                                <h2 class="c-title--en">MESSAAGE</h2>
                                <div class="c-title--jp">
                                    代表挨拶
                                </div>
                            </div>
                            <p>令和5年7月、念願のリフォーム事業部を立ち上げました。創業以来、不動産・賃貸・注文住宅を通じて地域の皆さまと歩み、これまで約300件の新築住宅に携わってまいりました。<br>
                            リフォームを始めた理由は、お客様と永くつながり続けたいという思い、社員が長く活躍できる場をつくりたいという願い、そして地域に専門会社が少なく困っている方を支えたいという使命感です。<br>
                            「福島ハウジングに頼んで良かった」と思っていただけるよう、これからも誠実に取り組んでまいります。
                            </p>
                            <h5 class="u-mt40">代表取締役 福島 秀夫</h5>
                            <div class="top-message__btn">
                                <a href="<?php bloginfo('url'); ?>/company/" class="c-btn">会社概要
                                    <div class="c-btn--circle">
                                        <span class="c-btn--circle-arrow">
                                            <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="top-message__right">
                            <img src="<?php bloginfo('template_url');?>/img/top-incho-img.jpg" alt="福島 秀夫代表取締役">
                            <div class="top-message__text-wrapper">
                                <p class="top-message__text">リフォーム事業への思い</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature-service">
            <div class="l-container">
                <div class="c-title">
                    <h2 class="c-title--en">SERVICE</h2>
                    <div class="c-title--jp">リフォームサービス</div>
                </div>
                <h3 class="feature-service__semiTitle"><span class="line"></span>増改築リフォーム</h3>
                <ul class="feature-service__list feature-service__list">
                    <li class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/stylechange/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img1.jpg" alt="和室から洋室にリフォームされた部屋"
                                class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">和室を洋室に</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/planchange/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img2.jpg" alt="壁を取り払い開放的になったリビング"
                                    class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">間取り変更</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/ldk/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img3.jpg" alt="対面キッチンにリフォームされたモダンなLDK"
                                    class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">LDKリフォーム</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/renovation/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img4.jpg" alt="大規模リノベーションで一新されたリビング"
                                    class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">大規模リノベ</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/insulation/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img5.jpg" alt="断熱リフォームで快適になったリビング"
                                    class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">断熱リフォーム</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/barrierfree/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img6.jpg" alt="スロープが設置されバリアフリー化された玄関"
                                    class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">バリアフリー</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <h3 class="feature-service__semiTitle"><span class="line"></span>水回りリフォーム</h3>
                <div class="feature-service__list feature-service__list">
                    <div class="feature-service__item">
                        <a href="<?php bloginfo('url'); ?>/reform/waterarea/" class="c-btn">
                            <figure class="feature-service__figure">
                                <img src="<?php bloginfo('template_url');?>/img/top-service-img7.jpg" alt="モダンな門柱と緑豊かな植栽"
                                class="feature-service__img">
                            </figure>
                            <div class="feature-service__content">
                                <h3 class="feature-service__title">キッチン・お風呂・トイレ・洗面台</h3>
                                <div class="c-btn--circle">
                                    <span class="c-btn--circle-arrow">
                                        <img src="<?php bloginfo('template_url');?>/img/ico-right-arrow.svg" alt="">
                                    </span>
                                </div>
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