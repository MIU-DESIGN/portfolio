
<?php get_header();?>

<main>
    <section class="service">
        <div class="wrapper">
            <div class="page__title">
                <h1 class="page__title--en"><?php echo strtoupper($post->post_name);?></h1>
                <p class="page__title--ja"><?php the_title();?></p>
            </div>
            <div class="service-wrap">
                <div class="service-card">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('img/service-direction.png'));?>" alt="ディレクションアイコン">
                    </div>
                    <div class="service-card__text">
                        <h2 class="service-card__text--heading">
                            ディレクション
                        </h2>
                        <p class="service-card__text--detail">
                            お客様のご要望や現状の課題について丁寧にヒアリングを行い、目的に合った効果的なプランを提案いたします。<br>
                            ヒアリングの際に感じられた疑問や不安も、気軽にご相談ください。
                        </p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('img/service-design.png'));?>" alt="デザインアイコン">
                    </div>
                    <div class="service-card__text">
                        <h2 class="service-card__text--heading">
                            デザイン
                        </h2>
                        <p class="service-card__text--detail">
                            ヒアリングしたイメージをもとに、デザインを作成いたします。<br>
                            見る人が最短で欲しい情報に辿り着けるような分かりやすく、デザイン性の高いUI設計を心がけています。
                        </p>
                        <h3 class="skill">SKILL</h3>
                        <div class="skill__icons">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/figma.png'));?>" alt="figmaアイコン">
                        </div>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-card__icon">
                        <img src="<?php echo esc_url(get_theme_file_uri('img/service-coding.png'));?>" alt="コーディング">
                    </div>
                    <div class="service-card__text">
                        <h2 class="service-card__text--heading">
                            コーディング
                        </h2>
                        <p class="service-card__text--detail">
                            作成したデザインをもとにコーディングを行います。<br>
                            JavaScriptを取り入れた動きのあるサイトや、画面幅に応じて表示を変えるレスポンシブデザインにも対応しております。<br>
                            LPのコーディングや更新作業も承っておりますので、ぜひご相談ください。
                        </p>

                        <h3 class="skill">SKILL</h3>
                        <div class="skill__icons">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/html.png'));?>" alt="htmlアイコン">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/css.png'));?>" alt="cssアイコン">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/js.png'));?>" alt="jsアイコン">
                            <img src="<?php echo esc_url(get_theme_file_uri('img/wordpress.png'));?>" alt="wpアイコン">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="section__title">
            <h2 class="section__title--en">CONTACT</h2>
            <p class="section__title--ja">お問い合わせ</p>
        </div>
        <p class="contact-section__text">お仕事のご依頼やご相談等、お気軽にお問い合わせください。</p>
        <a class="btn" href="<?php echo esc_url(home_url('contact'));?>">お問い合わせ</a>
    </section>
</main>
<?php get_footer();?>