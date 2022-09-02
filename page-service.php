
<?php get_header();?>

<main>
    <section class="service">
        <div class="wrapper">
            <div class="page__title">
                <h1 class="page__title--en"><?php echo strtoupper($post->post_name);?></h1>
                <p class="page__title--ja"><?php the_title();?></p>
            </div>
            <?php the_content();?>
</main>
<?php get_header();?>