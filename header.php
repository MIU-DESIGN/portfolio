<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/emn5fxc.css">
    <title><?php echo bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head();?>
</head>
<body>
<header class="header">
    <div class="header__container wrapper">
        <h1 class="header__logo">
            <a href="<?php echo esc_url(home_url());?>">
                <img src="<?php echo esc_url(get_theme_file_uri('img/logo.png'));?>" alt="ヘッダーアイコン">
            </a>
        </h1>
        <nav class="header-nav">
            <ul class="header-nav__list">
                <li><a href="<?php echo esc_url(home_url());?>">TOP</a></li>
                <li><a href="<?php echo esc_url(home_url('about'));?>">ABOUT</a></li>
                <li><a href="<?php echo esc_url(home_url('service'));?>">SERVICE</a></li>
                <li><a href="<?php echo esc_url(home_url('works'));?>">WORKS</a></li>
                <li><a class="btn" href="<?php echo esc_url(home_url('contact'));?>">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>