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

        <form class="contact-form" action="#" method="post">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </form>
    </div>
</main>
<?php get_footer();?>