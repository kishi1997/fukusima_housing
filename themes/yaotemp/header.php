<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp();?>
</head>

<?php if (is_home()) : ?>

<body class="top">
    <?php else : ?>
    <!--　body Start-->
    <body<?php fit_body_class();?>>
        <?php endif; ?>
        <header class="header">
            <div class="header-wrapper">
                <?php if (is_home()) : ?>
                <h1 class="header-logo">
                    <img src="<?php bloginfo('template_url');?>/img/logo.svg" alt="<?php wp_title(); ?>">
                </h1>
                <?php else : ?>
                <div class="header-logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url');?>/img/logo.svg" alt="<?php wp_title(); ?>">
                    </a>
                </div>
                <?php endif; ?>

                <nav class="header-nav">
                    <ul class="header-nav__list">
                        <li>
                            <a href="<?php bloginfo('url'); ?>/concept/">選ばれる理由</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/performance/">リフォームサービス</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/performance/">施工事例</a>
                        </li>
                        <li>
                            <a href="<?php bloginfo('url'); ?>/company/">会社概要</a>
                        </li>
                    </ul>
                    <li class="header-nav__contact">
                        <a class="c-btn" href="<?php bloginfo('url'); ?>/contact/">お問い合わせ</a>
                        <a class="c-btn" href="<?php bloginfo('url'); ?>//">展示予約</a>
                    </li>
                </nav>
            </div>
            <div class="header-button js-button" id="menu-button">
                <span class="header-button__line"></span>
                <span class="header-button__line"></span>
                <span class="header-button__line"></span>
            </div>

            <div class="header-open__menu js-open-menu">
                <div class="header-open__container">
                    <div class="header-open__left">
                        <img src="<?php bloginfo('template_url');?>/img/logo.svg" alt="<?php wp_title(); ?>">
                    </div>
                    <div class="header-open__right">
                        <div class="header-open__right__container">
                            <nav class="header-open__nav">
                                <ul class="header-open__list">
                                    <li><a href="<?php echo home_url() ?>">トップページ</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/professional/">はじめての方へ</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/concept/">選ばれる理由</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>//">よくある質問</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>//">リフォームサービス</a></li>
                                    <li>
                                        <p>増改築リフォーム</p>
                                        <ul class="header-child__menu">
                                            <li><a
                                                    href="<?php bloginfo('url'); ?>/reform/convert-japanese-to-western/">和室を洋室に</a>
                                            </li>
                                            <li><a href="<?php bloginfo('url'); ?>/reform/layout-change/">間取り変更</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/reform/ldk/">LDKリフォーム</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/reform/large-renovation/">大規模リノベ</a>
                                            </li>
                                            <li><a href="<?php bloginfo('url'); ?>/reform/insulation/">断熱リフォーム</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/reform/barrier-free/">バリアフリー</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php bloginfo('url'); ?>/">水回りリフォーム</a></li>
                                </ul>
                                <ul class="header-open__list">
                                    <li><a href="<?php bloginfo('url'); ?>/">施工事例＆お客様の声</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/column/">お役立ちコラム</a></li>
                                    <li>
                                        <p>ブログ</p>
                                        <ul class="header-child__menu">
                                            <li><a href="<?php bloginfo('url'); ?>/news/">お知らせ</a></li>
                                            <li><a href="<?php bloginfo('url'); ?>/">スタッフブログ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php bloginfo('url'); ?>/faq/">会社概要</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/">スタッフ紹介</a></li>
                                </ul>
                            </nav>
                            <div class="header-open__contact">
                                <div class="header-open__contact--item header-open__contact--phone">
                                    <p class="header-open__contact--title">お電話でのお問い合わせ</p>
                                    <p>
                                        <img src="<?php bloginfo('template_url');?>/img/ico-tel.svg" alt="電話アイコン">
                                        <a href="tel:048-580-4188">048-580-4188</a>
                                    </p>
                                    <p class="header-open__contact--time">営業時間/9:00-18:00 定休日/火曜・水曜</p>
                                </div>
                                <div class="header-open__contact--item header-open__contact--mail">
                                    <a href="<?php bloginfo('url'); ?>/contact/">
                                        <p class="header-open__contact--title">
                                            <span><img src="<?php bloginfo('template_url');?>/img/ico-mail.svg"
                                                    alt="メールアイコン"></span>メールでのお問い合わせ
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--/l-header-->