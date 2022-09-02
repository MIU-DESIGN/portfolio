<?php get_header();?>

<main>
    <div class="wrapper">
        <div class="page__title">
            <h1 class="page__title--en"><?php echo strtoupper($post->post_name);?></h1>
            <p class="page__title--ja"><?php the_title();?></p>
        </div>
        <div class="about-items">
            <div class="about-items__icon">
                <img src="<?php echo esc_url(get_theme_file_uri('img/about-icon.png'));?>" alt="about-icon">
            </div>
            <div class="about-items__text">
                <p class="about-items__text--intro">
                    YUUMI / フリーランスWebデザイナー兼Webコーダー<br>
                    <br>
                    コスメと愛犬をこよなく愛するアラサー女子。<br>
                    関西在住で仲の良い家族、愛犬２匹と暮らしています。<br>
                    <br>
                    早起きとアウトドアは苦手<br>
                    表情筋が硬くてクールに見られることも多いけど<br>
                    実は好奇心旺盛で人を喜ばせることが大好きな<br>
                    勉強したがりの明るいポジティブ人間。<br>
                    <br>
                    『人と人が繋がるきっかけをつくる』<br>
                    というWeb制作の魅力に引き込まれ、猛勉強の日々です。<br>
                    <br>
                    お仕事のご依頼、ご相談等ございましたら<br>
                    ぜひお気軽にご連絡ください。
                </p>
                <a class="btn" href="<?php echo esc_url(home_url('contact'));?>">お問い合わせページへ</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>