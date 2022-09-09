<?php get_header(); ?>

<main>
    <section class="work">
        <div class="wrapper">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="page__title">
                        <h1 class="page__title--en">WORKS</h1>
                        <p class="page__title--ja">作業実績</p>
                    </div>
                    <p class="work__breadcrumbs">
                        TOP > WORKS > <?php the_title();?>
                    </p>
                    <div class="pickup-slider">
                        <div class="pickup-slider__item"><img src="<?php the_post_thumbnail_url('full');?>" alt=""></div>
                        <div class="pickup-slider__item"><img src="<?php echo CFS() -> get('slider-img1');?>" alt=""></div>
                        <div class="pickup-slider__item"><img src="<?php echo CFS() -> get('slider-img2');?>" alt=""></div>
                    </div>
                    <div class="inner-wrapper">
                        

                        <dl class="site-summery">
                            <dt>サイト概要</dt>
                            <dd><?php echo CFS() -> get('summery');?></dd>
                            <dt>制作期間</dt>
                            <dd><?php echo CFS() -> get('creation-time');?></dd>
                            <dt>使用したスキル</dt>
                            <dd><?php echo CFS() -> get('skill');?></dd>
                            <dt>制作カテゴリー</dt>
                            <dd><?php echo CFS() -> get('creation-category');?></dd>
                        </dl>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="single-page__navigation">
                <div class="prev">
                    <?php previous_post_link('%link', '<<前のページへ', false ); ?>
                </div>
                <div class="next">
                    <?php next_post_link('%link', '次のページへ>>', false ); ?>
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
        <a class="btn" href="<a class="btn" href="<?php echo esc_url(home_url('/contact/'));?>">お問い合わせ</a>
    </section>
</main>

<?php get_footer(); ?>