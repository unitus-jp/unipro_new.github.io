<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset='utf-8'>
	<title>W-FST</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollify.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="wrap" class="container">
		<header>
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<a href="#" class="navbar-brand"><img height="30" src="<?php echo get_template_directory_uri(); ?>/images/TUS_logo.png"></a>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_top">
						<span class="sr-only">メニュー</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="nav_top" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a id="nav_link_top" class="navbar-link" href="<?php echo home_url(); ?>#p_top">トップ</a></li>
						<li><a id="nav_link_activity" class="navbar-link" href="<?php echo home_url(); ?>#p_activity">活動</a></li>
						<li><a id="nav_link_research" class="navbar-link" href="<?php echo home_url(); ?>#p_research">研究テーマ</a></li>
						<li><a id="nav_link_finding" class="navbar-link" href="<?php echo home_url(); ?>#p_finding">研究成果</a></li>
						<li><a id="nav_link_member" class="navbar-link" href="<?php echo home_url(); ?>#p_member">メンバー</a></li>
						<li><a id="nav_link_link" class="navbar-link" href="<?php echo home_url(); ?>#p_link">リンク</a></li>
					</ul>
				</div>
			</nav>
		</header>
		<div id="main_content">
			<div id="back_top"><div class="back_img"></div></div>
			<div id="back"><div class="back_img"></div></div>
			<div id="back_bottom"><div class="back_img"></div></div>
			<div id="inner">
				<div id="single_box" class="row">
					<?php if(have_posts()): while(have_posts()):the_post(); ?>
						<div id="single_date" class="post_date col-xs-12 col-sm-2 row">
							<div class="col-xs-2 col-sm-12"><p class="post_year"><?php echo get_the_date('Y'); ?></p></div>
							<div class="col-xs-2 col-sm-12"><p class="post_md"><?php echo get_the_date('m.d'); ?></p></div>
							<div class="col-xs-12"><p class="post_category">EVENT</p></div>
						</div>
						<div class="post_content col-xs-12 col-sm-10">
							<h2><?php the_title(); ?></h2>
							<div><?php the_content(); ?></div>
						</div>
					<?php endwhile; endif; ?>
					<!--<?php previous_post_link('%link','古い記事へ'); ?>
					<?php next_post_link('%link','新しい記事へ'); ?>-->
				</div>
			</div>
		</div>
		<footer id="footer">
			Copyright © 2017 W-FST All Rights Reserved.
		</footer>
	</div>
	<script>
	</script>
</body>
</html>