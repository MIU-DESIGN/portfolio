<?php get_header();?>

<main>
    <section class="mainvisual">
        <div class="mainvisual__wrapper">
            <div class="site__title">
                <h2 class="site__title--main"><?php bloginfo('name');?></h2>
                <p class="site__title--sub">Webデザイナー兼WebコーダーMIUの<br>
                    ポートフォリオサイト</p>
                </div>
            </div>
    </section>
    <section class="about-section">
        <div class="section__title">
            <h2 class="section__title--en">ABOUT</h2>
            <p class="section__title--ja">わたしについて</p>
        </div>
        <p class="about-section__text">コスメと愛犬をこよなく愛し、<br>
        『人と人をつなぐきっかけをつくる』<br>
        というWeb制作の魅力に引き込まれた<br>
        人を喜ばせることが大好きなポジティブ人間です。</p>
        <a class="btn" href="<?php echo esc_url(home_url('about'));?>">View More</a>
    </section>
    <section class="service-section">
        <div class="section__title">
            <h2 class="section__title--en">SERVICE</h2>
            <p class="section__title--ja">お手伝いできること</p>
        </div>
        <div class="wrapper">
            <div class="service__cards">
                <div class="service__cards--direction">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/direction-icon.png'));?>" alt="ディレクション">
                    <div class="service__title">
                        <h3 class="service__title--ja">ディレクション</h3>
                        <p class="service__title--en">Direction</p>
                    </div>
                    <p class="service__text">
                        お客様のご要望や現状の課題について丁寧にヒアリング行い、効果的なプランをご提案いたします。
                    </p>
                </div>
                <div class="service__cards--design">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/design-icon.png'));?>" alt="デザイン">
                    <div class="service__title">
                        <h3 class="service__title--ja">デザイン</h3>
                        <p class="service__title--en">Design</p>
                    </div>
                    <p class="service__text">
                        ヒアリングをもとに、想いが伝わる素敵なデザインを見る人目線で作成いたします。
                    </p>
                </div>
                <div class="service__cards--coding">
                    <img src="<?php echo esc_url(get_theme_file_uri('img/coding-icon.png'));?>" alt="コーディング">
                    <div class="service__title">
                        <h3 class="service__title--ja">コーディング</h3>
                        <p class="service__title--en">Coding</p>
                    </div>
                    <p class="service__text">
                        作成したデザインをもとにコーディングを行います。画面幅によって表示を変えるレスポンシブ対応も可能です。
                    </p>
                </div>
            </div>
        </div>
        <a class="btn" href="<?php echo esc_url(home_url('service'));?>">View More</a>
    </section>
    <section class="works-section">
        <div class="section__title">
            <h2 class="section__title--en">WORKS</h2>
            <p class="section__title--ja">作業実績</p>
        </div>
        <p class="works-section__text">過去の制作実績です。公開可能なもののみ掲載しております。</p>
        <div class="works-contents wrapper">
            <div class="works-contents__figure">
                <img src="<?php echo esc_url(get_theme_file_uri('img/furniture-1.png'));?>" alt="インテリアサイト">
            </div>
            <div class="works-contents__figure">
                <img src="<?php echo esc_url(get_theme_file_uri('img/Sneaker-1.png'));?>" alt="メディアサイト">
            </div>
            <div class="works-contents__figure">
                <img src="<?php echo esc_url(get_theme_file_uri('img/TravelBlog-1.png'));?>" alt="ブログサイト">
            </div>
        </div>
        <a class="btn" href="<?php echo esc_url(home_url('/category/works/'));?>">View More</a>
    </section>
    <section class="contact-section">
        <div class="section_title">
            <h2 class="section__title--en">CONTACT</h2>
            <p class="section__title--ja">お問い合わせ</p>
        </div>
        <p class="contact-section__text">お仕事のご依頼やご相談等、お気軽にお問い合わせください。</p>
        <a class="btn" href="<?php echo esc_url(home_url('contact'));?>">お問い合わせ</a>
    </section>
</main>

<?php get_footer();?>