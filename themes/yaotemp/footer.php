<section class="c-contact">
    <div class="l-container">
        <div class="c-contact__box">
            <div class="c-contact__header">
                <div class="c-title">
                    <h2 class="c-title--en">CONTACT</h2>
                    <div class="c-title--jp">お問い合わせ</div>
                </div>
                <p class="c-contact__description">理想の空間づくりをお手伝い。<br>無料お見積りなどお気軽にご相談ください。</p>
            </div>
            <ul class="c-contact__list">
                <li class="c-contact__item">
                    <a href="tel:048-580-4118" class="c-contact__link c-contact__phone">
                        <div class="c-contact__icon-wrapper">
                            <img src="<?php bloginfo('template_url');?>/img/ico-tel.svg" alt="電話アイコン">
                        </div>
                        <div class="c-contact__text-wrapper">
                            <span class="c-contact__link-title">お電話でのお問い合わせ</span>
                            <span class="c-contact__phone-details">
                                <span class="c-contact__phone-number">048-580-4118</span>
                                <span class="c-contact__phone-hours">受付時間9:00〜18:00（定休日 : 火・水）</span>
                            </span>
                        </div>
                        <div class="c-contact__arrow"></div>
                    </a>
                </li>
                <li class="c-contact__item">
                    <a href="#" class="c-contact__link">
                        <div class="c-contact__icon-wrapper">
                            <img src="<?php bloginfo('template_url');?>/img/ico-mail.svg" alt="メールアイコン">
                        </div>
                        <div class="c-contact__text-wrapper">
                            <span class="c-contact__link-title">メールでお問い合わせ</span>
                        </div>
                        <div class="c-contact__arrow"></div>
                    </a>
                </li>
                <li class="c-contact__item">
                    <a href="#" class="c-contact__link">
                        <div class="c-contact__icon-wrapper">
                            <img src="<?php bloginfo('template_url');?>/img/ico-form.svg" alt="資料請求アイコン">
                        </div>
                        <div class="c-contact__text-wrapper">
                            <span class="c-contact__link-title">資料請求</span>
                        </div>
                        <div class="c-contact__arrow"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>

<!--l-footer-->
<footer class="l-footer">
    <div class="l-footer__inner">
        <div class="l-footer__company">
            <div class="l-footer__logo">
                <a href="<?php echo home_url() ?>">
                    <img src="<?php bloginfo('template_url');?>/img/footer-logo.svg" alt="<?php wp_title(); ?>">
                </a>
            </div>
            <address class="l-footer__info">
                〒369-1203<br />
                埼玉県大里郡寄居町大字寄居 611-2<br /><br />
                TEL: 048-580-4188<br />
                FAX: 048-580-4178
            </address>
        </div>
        <div class="l-footer__nav">
            <ul class="l-footer__list">
                <div>
                    <li><a class="l-footer__list__top" href="<?php echo home_url() ?>">トップページ</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/beginner/">はじめての方へ</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/feature/">選ばれる理由</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/question/">よくある質問</a></li>
                </div>
                <div>
                    <li><a href="<?php bloginfo('url'); ?>//">リフォームサービス</a></li>
                    <li>
                        <p>増改築リフォーム</p>
                        <ul class="l-footer__childMenu">
                            <li><a href="<?php bloginfo('url'); ?>/reform/stylechange/">和室を洋室に</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/reform/planchange/">間取り変更</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/reform/ldk/">LDKリフォーム</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/reform/renovation/">大規模リノベ</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/reform/insulation/">断熱リフォーム</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/reform/barrierfree/">バリアフリー</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php bloginfo('url'); ?>/reform/waterarea/">水回りリフォーム</a></li>
                </div>
                <div>
                    <li><a href="<?php bloginfo('url'); ?>/">施工実績＆お客様の声</a></li>
                    <li><a href="<?php bloginfo('url'); ?>//">お役立ちコラム</a></li>
                    <li>
                        <p>ブログ</p>
                        <ul class="l-footer__childMenu">
                            <li><a href="<?php bloginfo('url'); ?>/category/topics/">お知らせ</a></li>
                            <li><a href="<?php bloginfo('url'); ?>/category/topics/">スタッフブログ</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php bloginfo('url'); ?>/">会社概要</a></li>
                    <li><a href="<?php bloginfo('url'); ?>/">スタッフ紹介</a></li>
                </div>
            </ul>
        </div>
    </div>
    <div class="l-footer__copy">
        <small>Copyrighits©Fukushima Housing ALL Righits Reserved</small>
        <a href="">プライバシーポリシー</a>
    </div>
</footer>
<!-- /l-footer -->

<?php wp_footer(); ?>
</body>

</html>