<?php get_header(); ?>

<main>
    <section class="works">
        <div class="wrapper">
            <div class="page__title">
                <!-- <h1 class="page__title--en">WORKS</h1> -->
                <h1 class="page__title--en">WORKS</h1>
                <p class="page__title--ja">作業実績</p>
            </div>
            <p class="works__message">
                過去の制作実績です。公開可能なもののみ掲載しております。
            </p>
            <div class="works-wrap">
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): the_post(); ?>
                        <div class="works__card">
                            <a href="<?php the_permalink();?>">
                                <div class="works__card--pic">
                                    <img src="<?php the_post_thumbnail_url('full');?>" alt="インテリアサイト">
                                </div>
                                <p class="works__card--text"><?php the_title();?></p>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
      if (function_exists("pagination")) {
        pagination($wp_query->max_num_pages);
      }
    ?>
    <section class="contact-section">
        <div class="section__title">
            <h2 class="section__title--en">CONTACT</h2>
            <p class="section__title--ja">お問い合わせ</p>
        </div>
        <p class="contact-section__text">お仕事のご依頼やご相談等、お気軽にお問い合わせください。</p>
        <a class="btn" href="<a class="btn" href="<?php echo esc_url(home_url('/contact/'));?>">お問い合わせ</a>
    </section>
</main>

<?php get_footer(); ?>