<?php get_header(); ?>

<section class="top-fv">
    <div class="fv-container">
        <div class="fv-item image-small">
            <img src="<?php bloginfo('template_url');?>/img/top-fv__small.png" alt="FVイメージ１">
        </div>
        <div class="fv-item text-block">
            <h2>家も、暮らしもつくり変える。<br>注文住宅品質のリノベーション</h2>
            <p>家族の未来を見据え、<br>新築を超えるほどの価値を創造します。</p>
        </div>
        <div class="fv-item image-large">
            <picture>
                <source media="(max-width: 768px)"
                    srcset="<?php bloginfo('template_url'); ?>/img/top-fv__large__sp.png">
                <source media="(min-width: 769px)" srcset="<?php bloginfo('template_url'); ?>/img/top-fv__large.png">
                <img src="<?php bloginfo('template_url'); ?>/img/top-fv__large.png" alt="FVイメージ２">
            </picture>
        </div>
    </div>
</section>
<section class="top-news">
    <div class="l-container">
        <div class="top-news__inner">
            <h3>NEWS</h3>
            <div class="top-news__item">
                <span>2025.02.25</span>
                <a href="">【新規分譲地】陽だまりの街　販売開始しました！</a>
            </div>
        </div>
    </div>
</section>
<section class="top-concept">
    <div class="l-container">
        <div class="top-concept__head">
            <div class="top-concept__title">
                <h2 class="top-concept__en">CONCEPT</h2>
                <div class="top-concept__desc"><span>「やってよかった」の声をいただくために。</span><span>私たちが、お客様から選ばれる理由。</span></div>
            </div>
        </div>
        <div class="top-concept__list">
            <div class="top-concept__item">
                <div class="top-concept__img">
                    <img src="<?php bloginfo('template_url');?>/img/top-concept1.jpg" alt="注文住宅を手掛ける職人による、圧倒的な技術力イメージ">
                </div>
                <div class="top-concept__content">
                    <span class="top-concept__number">01</span>
                    <h3 class="top-concept__title">注文住宅を手掛ける職人による、<br>圧倒的な技術力</h3>
                    <p class="top-concept__text">
                        私たちのリフォームは、新築の注文住宅を手掛ける職人たちが担当します。見えない部分の構造計算から、現場でのミリ単位の造作まで。他社ではできないような難しいご要望にも、長年培った技術力で「できる」方法を考え抜きます。
                    </p>
                </div>
            </div>

            <div class="top-concept__item">
                <div class="top-concept__img">
                    <img src="<?php bloginfo('template_url');?>/img/top-concept2.jpg"
                        alt="メリットも、デメリットも。正直にお伝えする誠実さイメージ">
                </div>
                <div class="top-concept__content">
                    <span class="top-concept__number">02</span>
                    <h3 class="top-concept__title">メリットも、デメリットも。<br>正直にお伝えする誠実さ</h3>
                    <p class="top-concept__text">
                        私たちはお客様にとって、目先のメリットだけでなく、10年後、20年後のデメリットになる可能性も正直にお伝えします。不安や疑問がなくなるまで、とことん話し合う。その誠実な姿勢こそが、私たちの何よりの財産です。
                    </p>
                </div>
            </div>

            <div class="top-concept__item">
                <div class="top-concept__img">
                    <img src="<?php bloginfo('template_url');?>/img/top-concept3.jpg" alt="この町とともに。地域を知り尽くした提案力イメージ">
                </div>
                <div class="top-concept__content">
                    <span class="top-concept__number">03</span>
                    <h3 class="top-concept__title">この町とともに。<br>地域を知り尽くした提案力</h3>
                    <p class="top-concept__text">
                        創業以来、寄居町・深谷市を中心に多くの住まいづくりに携わってきました。この地域の気候風土や特性を熟知しているからこそできる、最適な素材選びやプランニングがあります。何かあればすぐに駆けつけられる、地域の工務店ならではの安心感をお約束します。
                    </p>
                </div>
            </div>

        </div>

        <div class="top-concept__btn">
            <a href="<?php bloginfo('url'); ?>/news/" class="c-btn">選ばれる理由
                <div class="c-btn--circle">
                    <span class="c-btn--circle-arrow"></span>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="top-service">
    <div class="l-container">
        <div class="c-title">
            <h2 class="c-title--en">SERVICE</h2>
            <div class="c-title--jp">リフォームサービス</div>
        </div>
        <h3 class="top-service__semiTitle"><span class="line"></span>増改築リフォーム</h3>
        <ul class="top-service__list">
            <li class="top-service__item">
                <figure class="top-service__figure">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-img1.jpg" alt="和室から洋室にリフォームされた部屋"
                        class="top-service__img">
                </figure>
                <div class="top-service__content">
                    <h3 class="top-service__title">和室を洋室に</h3>
                    <p class="top-service__text">
                        畳の和室をフローリングの洋室へ変更します。リビングと繋げて広くしたり、クローゼットを新設したり、今の暮らしに合う価値ある一部屋をご提案します。
                    </p>
                </div>
            </li>
            <li class="top-service__item">
                <figure class="top-service__figure">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-img2.jpg" alt="壁を取り払い開放的になったリビング"
                        class="top-service__img">
                </figure>
                <div class="top-service__content">
                    <h3 class="top-service__title">間取り変更</h3>
                    <p class="top-service__text">
                        部屋の壁を取り払って開放的なリビングへ。家事動線なども見直し、家族みんなが快適に過ごせる、暮らしの中心となる間取りを実現します。
                    </p>
                </div>
            </li>
            <li class="top-service__item">
                <figure class="top-service__figure">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-img3.jpg" alt="対面キッチンにリフォームされたモダンなLDK"
                        class="top-service__img">
                </figure>
                <div class="top-service__content">
                    <h3 class="top-service__title">LDKリフォーム</h3>
                    <p class="top-service__text">
                        家族が一番長く過ごすLDKを、もっと心地よく楽しい空間に。対面キッチンへの変更など、家族の会話と笑顔が生まれるリフォームをご提案します。
                    </p>
                </div>
            </li>
            <li class="top-service__item">
                <figure class="top-service__figure">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-img4.jpg" alt="大規模リノベーションで一新されたリビング"
                        class="top-service__img">
                </figure>
                <div class="top-service__content">
                    <h3 class="top-service__title">大規模リノベ</h3>
                    <p class="top-service__text">
                        デザイン・間取り・性能のすべてを一新。思い出が詰まった家の骨格は活かし、新築同様の快適さと感動をご提供。住まいの可能性を引き出します。
                    </p>
                </div>
            </li>
            <li class="top-service__item">
                <figure class="top-service__figure">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-img5.jpg" alt="断熱リフォームで快適になったリビング"
                        class="top-service__img">
                </figure>
                <div class="top-service__content">
                    <h3 class="top-service__title">断熱リフォーム</h3>
                    <p class="top-service__text">
                        壁や窓の断熱性を高め「夏は涼しく、冬は暖かい」快適な暮らしへ。光熱費を削減し、一年を通して健康的で経済的な住環境を整えます。
                    </p>
                </div>
            </li>
            <li class="top-service__item">
                <figure class="top-service__figure">
                    <img src="<?php bloginfo('template_url');?>/img/top-service-img6.jpg" alt="スロープが設置されバリアフリー化された玄関"
                        class="top-service__img">
                </figure>
                <div class="top-service__content">
                    <h3 class="top-service__title">バリアフリー</h3>
                    <p class="top-service__text">
                        玄関のスロープや手すりの設置、気になる段差の解消など、ご家族の誰もが安全に暮らせる住まいへ。将来を見据えた優しい家づくりです。
                    </p>
                </div>
            </li>
        </ul>

        <div class="top-service__reform">
            <h3 class="top-service__semiTitle"><span class="line"></span>水回りリフォーム</h3>
            <div class="top-service__reform-container">
                <div class="top-service__reform-content">
                    <figure class="top-service__reform-figure">
                        <img src="<?php bloginfo('template_url');?>/img/top-service-img7.jpg" alt="モダンな門柱と緑豊かな植栽"
                            class="top-service__reform-img">
                    </figure>
                    <div class="top-service__reform-text-area">
                        <h3 class="top-service__reform-title">キッチン・お風呂・トイレ・洗面台</h3>
                        <p class="top-service__reform-text">
                            毎日の暮らしに欠かせない水回り空間だからこそ、もっと快適に、もっと楽しく。私たちは、ただ設備を新しくするだけでなく、家事動線や収納計画まで考え抜いた、"暮らしが豊かになる"水回りリフォームをご提案します。小さな工事から、ぜひお気軽にご相談ください。
                        </p>
                    </div>
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
                        <span class="c-btn--circle-arrow"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="top-staff">

    <div class="l-container">
        <div class="top-staff__head">
            <div class="c-title">
                <h2 class="c-title--en">STAFF</h2>
                <div class="c-title--jp">
                    スタッフ紹介
                </div>
            </div>
            <p class="top-staff__desc">
                デザイン・間取り・性能のすべてを一新。思い出が詰まった家の骨格は活かし、<br />
                新築同様の快適さと感動をご提供。住まいの可能性を引き出します。
            </p>
        </div>
        <div class="top-staff__wrapper">
            <ul class="top-staff__list">
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img1.png" alt="スタッフ画像１">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">佐藤 花子</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img2.png" alt="スタッフ画像２">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">鈴木 太郎</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img3.png" alt="スタッフ画像３">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">高橋 美咲</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img4.png" alt="スタッフ画像４">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">中村 健</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img5.png" alt="スタッフ画像５">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">山田 裕子</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img6.png" alt="スタッフ画像６">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">伊藤 翔</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img4.png" alt="スタッフ画像４">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">中村 健</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img5.png" alt="スタッフ画像５">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">山田 裕子</span>
                        </div>
                    </a>
                </li>
                <li class="top-staff__card">
                    <a href="/">
                        <figure class="top-staff__card--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-staff-img6.png" alt="スタッフ画像６">
                        </figure>
                        <div class="top-staff__card--body">
                            <span class="top-staff__card--title">伊藤 翔</span>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="top-staff__slick">
                <button class="c-slick__arrows--prev slick-prev"><span class="c-slick__arrows--icon"></span></button>
                <button class="c-slick__arrows--next slick-next"><span class="c-slick__arrows--icon"></span></button>
            </div>
        </div>
    </div>

    <div class="top-staff__btn">
        <a href="<?php bloginfo('url'); ?>/news/" class="c-btn">もっとみる
            <div class="c-btn--circle">
                <span class="c-btn--circle-arrow"></span>
            </div>
        </a>
    </div>
</section>
<section class="top-message">
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
                    <p>家に携わってきた中で感じていることは、見た目よりもやはり中身が大事だと考えています。お客様に対しサービスがあっても良いかもしれません。価格を重視するのも大切かもしれません。<br>
                        でも、本当に大事なことは、しっかりとした施工を行う事ではないでしょうか。<br>
                        当社は今まで長く経験してきた担当者と、注文住宅を手掛ける職人がお客様からの依頼に応え施工してまいります。<br>
                        今までも、そしてこれからも「お客様の暮らしの向上のお手伝い」をモットーに仕事を行ってまいります。
                    </p>
                    <h5 class="u-mt40">代表取締役 福島 秀夫</h5>
                    <div class="top-message__btn">
                        <a href="<?php bloginfo('url'); ?>/company/" class="c-btn">会社概要
                            <div class="c-btn--circle">
                                <span class="c-btn--circle-arrow"></span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="top-message__right">
                    <img src="<?php bloginfo('template_url');?>/img/top-incho-img.jpg" alt="福島 秀夫代表取締役">
                    <div class="top-message__text-wrapper">
                        <p class="top-message__text">お客様の暮らしの</p>
                        <p class="top-message__text">向上をお手伝い</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="top-information">
    <div class="l-container">
        <div class="top-information__news">
            <div class="c-title top-information__news--title">
                <h2 class=" c-title--en">NEWS</h2>
                <div class="c-title--jp">
                    お知らせ
                </div>
            </div>
            <ul class="top-information__news--list">
                <li class="top-information__news--item">
                    <a href="<?php bloginfo('url'); ?>/news/">
                        <div class="top-information__news--body">
                            <span class="top-information__news--date">2025.10.20</span>
                            <h4>令和4年9月24日(土)感謝祭開催のお知らせ</h4>
                        </div>
                    </a>
                </li>

                <li class="top-information__news--item">
                    <a href="<?php bloginfo('url'); ?>/news/">
                        <div class="top-information__news--body">
                            <span class="top-information__news--date">2025.10.20</span>
                            <h4>令和4年9月24日(土)感謝祭開催のお知らせ</h4>
                        </div>
                    </a>
                </li>

                <li class="top-information__news--item">
                    <a href="<?php bloginfo('url'); ?>/news/">
                        <div class="top-information__news--body">
                            <span class="top-information__news--date">2025.10.20</span>
                            <h4>令和4年9月24日(土)感謝祭開催のお知らせ</h4>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="top-information__news--btn">
                <a href="<?php bloginfo('url'); ?>/news/" class="c-btn">もっと見る
                    <div class="c-btn--circle">
                        <span class="c-btn--circle-arrow"></span>
                    </div>
                </a>
            </div>
        </div>

        <div class="top-information__column">
            <div class="c-title top-information__column--title">
                <h2 class=" c-title--en">COLUMN</h2>
                <div class="c-title--jp">
                    コラム
                </div>
            </div>
            <ul class="top-information__column--list">
                <li class="top-information__column--item">
                    <a href="<?php bloginfo('url'); ?>/column/">
                        <div class="top-information__column--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-column-img1.jpg"
                                alt="緑豊かな都筑区に建つ、Ｋ様のお宅。素敵なガーデニングを楽しんでおられます。">
                        </div>
                        <div class="top-information__column--body">
                            <span class="top-information__column--date">2025.10.20</span>
                            <h4>令和4年9月24日(土)感謝祭開催のお知らせ</h4>
                        </div>
                    </a>
                </li>

                <li class="top-information__column--item">
                    <a href="<?php bloginfo('url'); ?>/column/">
                        <div class="top-information__column--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-column-img2.jpg"
                                alt="緑豊かな都筑区に建つ、Ｋ様のお宅。素敵なガーデニングを楽しんでおられます。">
                        </div>
                        <div class="top-information__column--body">
                            <span class="top-information__column--date">2025.10.20</span>
                            <h4>令和4年9月24日(土)感謝祭開催のお知らせ</h4>
                        </div>
                    </a>
                </li>

                <li class="top-information__column--item">
                    <a href="<?php bloginfo('url'); ?>/column/">
                        <div class="top-information__column--img">
                            <img src="<?php bloginfo('template_url');?>/img/top-column-img3.jpg"
                                alt="緑豊かな都筑区に建つ、Ｋ様のお宅。素敵なガーデニングを楽しんでおられます。">
                        </div>
                        <div class="top-information__column--body">
                            <span class="top-information__column--date">2025.10.20</span>
                            <h4>令和4年9月24日(土)感謝祭開催のお知らせ</h4>
                        </div>
                    </a>
                </li>
            </ul>

            <div class="top-information__column--btn">
                <a href="<?php bloginfo('url'); ?>/column/" class="c-btn">もっと見る
                    <div class="c-btn--circle">
                        <span class="c-btn--circle-arrow"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="top-faq">
    <div class="l-container">
        <div class="c-title">
            <h2 class="c-title--en">FAQ</h2>
            <div class="c-title--jp">よくあるご質問</div>
        </div>
        <div class="top-faq__inner">
            <dl class="top-faq__list">
                <div class="top-faq__item">
                    <dt class="top-faq__question">
                        <span>施工エリアはどこまで対応していますか？</span>
                    </dt>
                    <dd class="top-faq__answer">
                        <p>ここに回答が入ります。サンプルテキストです。</p>
                    </dd>
                </div>
                <div class="top-faq__item">
                    <dt class="top-faq__question">
                        <span>まだ土地が決まっていなくても、相談できますか？</span>
                    </dt>
                    <dd class="top-faq__answer">
                        <p>はい、土地探しから喜んでサポートします。購入前の土地に無料でラフ図を提案する、弊社独自のサービスもぜひご活用ください。</p>
                    </dd>
                </div>

                <div class="top-faq__item">
                    <dt class="top-faq__question">
                        <span>施工エリアはどこまで対応していますか？</span>
                    </dt>
                    <dd class="top-faq__answer">
                        <p>ここに回答が入ります。サンプルテキストです。</p>
                    </dd>
                </div>
            </dl>
        </div>
        <div class="top-faq__btn">
            <a href="<?php bloginfo('url'); ?>/news/" class="c-btn">もっとみる
                <div class="c-btn--circle">
                    <span class="c-btn--circle-arrow"></span>
                </div>
            </a>
        </div>
    </div>
</section>
<section class="top-instagram">
    <div class="l-container">
        <div class="top-instagram__header">
            <div class="c-title">
                <h2 class="c-title--en">Instagram</h2>
                <div class="c-title--jp">インスタグラム</div>
            </div>
            <a href="#" class="top-instagram__icon" aria-label="Instagramで投稿を見る"></a>
        </div>

        <ul class="top-instagram__list">
            <li class="top-instagram__item">
                <a href="#">
                    <img class="top-instagram__img" src="<?php bloginfo('template_url');?>/img/top-insta-img1.jpg"
                        alt="Instagramの投稿画像1">
                </a>
            </li>
            <li class="top-instagram__item">
                <a href="#">
                    <img class="top-instagram__img" src="<?php bloginfo('template_url');?>/img/top-insta-img2.jpg"
                        alt="Instagramの投稿画像2">
                </a>
            </li>
            <li class="top-instagram__item">
                <a href="#">
                    <img class="top-instagram__img" src="<?php bloginfo('template_url');?>/img/top-insta-img3.jpg"
                        alt="Instagramの投稿画像3">
                </a>
            </li>
            <li class="top-instagram__item">
                <a href="#">
                    <img class="top-instagram__img" src="<?php bloginfo('template_url');?>/img/top-insta-img4.jpg"
                        alt="Instagramの投稿画像4">
                </a>
            </li>
            <li class="top-instagram__item">
                <a href="#">
                    <img class="top-instagram__img" src="<?php bloginfo('template_url');?>/img/top-insta-img5.jpg"
                        alt="Instagramの投稿画像5">
                </a>
            </li>
            <li class="top-instagram__item">
                <a href="#">
                    <img class="top-instagram__img" src="<?php bloginfo('template_url');?>/img/top-insta-img6.jpg"
                        alt="Instagramの投稿画像6">
                </a>
            </li>
        </ul>
    </div>
</section>
<?php get_footer(); ?>