<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header_nav">
            <div class="header_logo">
                <a href="https://daichaaan.github.io/MySite/index">
                    <img src="<?php echo get_template_directory_uri() ?>/img/logo.jpeg" alt="潮崎会・神奈川県">
                </a>
                <div class="header_name">
                    <h2>神奈川県バドミントンチーム</h2>
                    <h1>潮崎会</h1>
                </div>
            </div>
            <!-- right 側 -->
            <div class="header_right">
                <div class="header_search">
                    <form method="get" action="#" class="search_container">
                        <input type="text" name="s" size="24" placeholder="検索">
                    </form>
                    <div class="btn_area">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <div>
                    <ul class="header_link">
                        <li><a href="#">アクセス</a></li>
                        <li><a href="#">リンク集</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </div>
            </div>
    </header>