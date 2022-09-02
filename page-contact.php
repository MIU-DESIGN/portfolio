<?php get_header();?>

<main>
    <div class="wrapper">
        <div class="page__title">
            <h1 class="page__title--en"><?php echo strtoupper($post->post_name);?></h1>
            <p class="page__title--ja"><?php the_title();?></p>
        </div>
        <div class="contact__pic">
            <div>
                <img src="<?php echo esc_url(get_theme_file_uri('img/contact-icon.png'));?>" alt="コンタクトアイコン">
            </div>
        </div>
        <p class="contact__message">まずはお気軽にお問い合わせください。</p>
        <form action="#" method="post">
            <dl class="contact-form">
                <dt>お名前<span>*</span></dt>
                <dd><input type="text" name="yourname"></dd>
                <dt>メールアドレス<span>*</span></dt>
                <dd><input type="text" name="email"></dd>
                <dt>お問い合わせ内容<span>*</span></dt>
                <dd><textarea name="message" rows="4"></textarea></dd>
            </dl>
        </form>
        <div class="btn-wrap">
            <input class="btn" type="submit" name="button1" value="送信">
        </div>
    </div>
</main>
<?php get_footer();?>