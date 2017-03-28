<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset='utf-8'>
	<title>W-FST</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css<?php echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
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
						<li><a id="nav_link_top" class="navbar-link" href="#p_top">トップ</a></li>
						<li><a id="nav_link_activity" class="navbar-link" href="#p_activity">活動</a></li>
						<li><a id="nav_link_research" class="navbar-link" href="#p_research">研究テーマ</a></li>
						<li><a id="nav_link_finding" class="navbar-link" href="#p_finding">研究成果</a></li>
						<li><a id="nav_link_member" class="navbar-link" href="#p_member">メンバー</a></li>
						<li><a id="nav_link_link" class="navbar-link" href="#p_link">リンク</a></li>
					</ul>
				</div>
				<script type="text/javascript">
					$('a.navbar-link').on('click', function(){
						$.scrollify.move($(this).attr('href'));
					});
				</script>
			</nav>
		</header>
		<div id="main_content">
			<div id="back_top"><div class="back_img"></div></div>
			<div id="back"><div class="back_img"></div></div>
			<div id="back_bottom"><div class="back_img"></div></div>
			<section id="top" data-section-name="p_top">
				<h1 id="top_title">
					ウォーターフロンティア<wbr>サイエンス<br>＆<br>テクノロジー研究センター
				</h1>
				<div class="inner">
					<p id="top_title_ruby">Water Fronteir Science &amp; Technology Reserch Center</p>
					<p id="top_text">
						水は私たちにとって最も身近な存在であり、古くから研究がなされてきました。<br>
						しかし、最近の計測技術・シミュレーション技術により、物質表面やナノ細孔内部では自由空間の水とは全く異なる分子構造体を形成することが明らかになりました。<br>
						この新しい姿の水が材料の物性や生命現象に対してどのような役割を果たしているのかを解明するとともに、その機能の積極的な利用が望まれます。<br><br>
						本研究部門は、空間サイズに対応した水の独自計測技術を有する実験研究者と、水のシミュレーション技術を有する理論研究者が連携し、実験と理論を両輪とした研究を展開します。身近な存在である水に着目し、これを最先端科学の対象とすることに特徴があります。また、学理の探求にとどまらず、洗浄、農業応用、水環境管理や雲生成の研究を通じて、人間・社会における水の高度利用にも踏み込みます。
					</p>
				</div>
			</section>
			<section id="activity" data-section-name="p_activity">
				<div class="inner">
					<h2>活動</h2>
					<div id="activity_select" class="row post_select">
						<div id="activity_select_all" class="col-xs-4 post_selected"><p>ALL</p></div>
						<div id="activity_select_news" class="col-xs-4"><p>NEWS</p></div>
						<div id="activity_select_event" class="col-xs-4"><p>EVENT</p></div>
					</div>
					<div id="activity_box" class="post_box">
						<div id="activity_post_all">
							<?php if(have_posts()): while(have_posts()): the_post(); ?> <!-- ループ開始 -->
								<?php if ( in_category(array('活動'))): ?>
								<div class="post row">
									<div class="post_date col-xs-2">
										<p class="post_year"><?php echo get_the_date('Y'); ?></p>
										<p class="post_md"><?php echo get_the_date('m.d'); ?></p>
										<?php if ( in_category(array('NEWS')) || in_category(array('EVENT')) ): ?>
											<p class="post_category">
												<?php $cat = get_the_category(); ?>
												<?php $cat = $cat[0]; ?>
												<?php echo get_cat_name($cat->term_id); ?>
											</p>
										<?php endif; ?>
									</div>
									<div class="post_content col-xs-10">
										<p class="post_title"><?php the_title(); ?></p>
										<div class="post_text"><?php the_content(); ?></div>
									</div>
								</div>
								<?php endif; ?>
							<?php endwhile; endif; ?> <!-- ループ終了 -->
						</div>
						<div id="activity_post_news">
							<?php if(have_posts()): while(have_posts()): the_post(); ?> <!-- ループ開始 -->
								<?php if ( in_category(array('活動')) && in_category(array('NEWS')) ): ?>
								<div class="post row">
									<div class="post_date col-xs-2">
										<p class="post_year"><?php echo get_the_date('Y'); ?></p>
										<p class="post_md"><?php echo get_the_date('m.d'); ?></p>
										<p class="post_category">NEWS</p>
									</div>
									<div class="post_content col-xs-10">
										<p class="post_title"><?php the_title(); ?></p>
										<div class="post_text"><?php the_content(); ?></div>
									</div>
								</div>
								<?php endif; ?>
							<?php endwhile; endif; ?> <!-- ループ終了 -->
						</div>
						<div id="activity_post_event">
							<?php if(have_posts()): while(have_posts()): the_post(); ?> <!-- ループ開始 -->
								<?php if ( in_category(array('活動')) && in_category(array('EVENT')) ): ?>
								<div class="post row">
									<div class="post_date col-xs-2">
										<p class="post_year"><?php echo get_the_date('Y'); ?></p>
										<p class="post_md"><?php echo get_the_date('m.d'); ?></p>
										<p class="post_category">EVENT</p>
									</div>
									<div class="post_content col-xs-10">
										<p class="post_title"><?php the_title(); ?></p>
										<div class="post_text"><?php the_content(); ?></div>
									</div>
								</div>
								<?php endif; ?>
							<?php endwhile; endif; ?> <!-- ループ終了 -->
						</div>
						<script type="text/javascript">
        					$('#activity_box>div:not("#activity_post_all")').hide();
							$('#activity_select div').on('click', function(){
								$('#activity_select>div').removeClass('post_selected');
								$(this).addClass('post_selected');
        						$('#activity_box>div').hide();
        						$("#" + $(this).attr("id").replace("select", "post")).show();
    							console.log("#" + $(this).attr("id").replace("select", "post"));
							});
						</script><!--
						<script type="text/javascript">
        					$('#activity_post_news').hide();
        					$('#activity_post_event').hide();
							$('#activity_select div').on('click', function(){
								$('#activity_select_all').removeClass('post_selected');
								$('#activity_select_news').removeClass('post_selected');
								$('#activity_select_event').removeClass('post_selected');
								$(this).addClass('post_selected');
							});
							$('#activity_select div').on('click', function(){
    							var id = $(this).attr("id");
    							console.log($(this).attr("id").slice(16));
        						$('#activity_post_all').hide();
        						$('#activity_post_news').hide();
        						$('#activity_post_event').hide();
        						$("#activity_post_" + $(this).attr("id").slice(16)).show();
							});
						</script>-->
					</div>
				</div>
			</section>
			<section id="research" data-section-name="p_research">
				<div class="inner_l">
					<h2>研究テーマ</h2>
					<div id="research_box" class="row">
						<div id="research_image" class="col-xs-12 col-md-6"><img src="<?php echo get_template_directory_uri(); ?>/images/Reserch_Theme.png"></div>
						<div id="research_text" class="col-xs-12 col-md-6">
							我々の日常生活を支える人工関節等の医療材料や、産業活動を支える船舶や航空機といった輸送機材に使用される材料は、水が存在する大気中、水中、生体中などで機能し、これらの機能の発現には常に表面・界面の水が関与しています。材料表面・界面に存在する水の吸着・濡れ・流れといった挙動は、材料表面の親水・撥水性や生体適合性等の諸機能の発現を決定付けます。本学の藤嶋学長が発見した酸化チタン表面における水の光分解現象（本多－藤嶋効果）を利用した光触媒機能や、光誘起超親水化現象を利用した環境浄化・機能素材への応用はその典型例と言えます。　一方で、材料の機能発現に深く影響する材料表面・界面における水の挙動は、材料表面の凹凸形状や化学組成等により複雑に変化するため、その予測・制御が難しく、体系立てて理解・制御する学理の構築そのものが立ち遅れています。そこで、本学の叡智を結集して「材料表面・界面における水の学際研究拠点」を世界に先駆けて形成し、材料表面・界面における水の挙動を体系立てて理解できる学理の創成を目指す。得られた科学的知見に基づき材料特性の飛躍的向上と新奇機能発現を先導し、医療や省エネルギー技術の革新をもたらすことを目指します。
						</div>
					</div>
				</div>
			</section>
			<section id="finding" data-section-name="p_finding">
				<div class="inner">
					<h2>研究成果</h2>
					<div id="finding_select" class="row post_select">
						<div id="finding_select_prize" class="col-xs-4 post_selected"><p>受賞</p></div>
						<div id="finding_select_paper" class="col-xs-4"><p>学術論文</p></div>
						<div id="finding_select_lecture" class="col-xs-4"><p>招待講演</p></div>
					</div>
					<div id="finding_box" class="post_box">
						<div id="finding_post_prize">
							<?php if(have_posts()): while(have_posts()): the_post(); ?> <!-- ループ開始 -->
								<?php if ( in_category(array('受賞'))): ?>
								<div class="post row">
									<div class="post_date col-xs-2">
										<p class="post_year"><?php echo get_the_date('Y'); ?></p>
										<p class="post_md"><?php echo get_the_date('m.d'); ?></p>
										<?php if ( in_category(array('NEWS')) || in_category(array('EVENT')) ): ?>
											<p class="post_category">
												<?php $cat = get_the_category(); ?>
												<?php $cat = $cat[0]; ?>
												<?php echo get_cat_name($cat->term_id); ?>
											</p>
										<?php endif; ?>
									</div>
									<div class="post_content col-xs-10">
										<p class="post_title"><?php the_title(); ?></p>
										<div class="post_text"><?php the_content(); ?></div>
									</div>
								</div>
								<?php endif; ?>
							<?php endwhile; endif; ?> <!-- ループ終了 -->
						</div>
						<div id="finding_post_paper">
							<?php if(have_posts()): while(have_posts()): the_post(); ?> <!-- ループ開始 -->
								<?php if ( in_category(array('学術論文'))): ?>
								<div class="post row">
									<div class="post_date col-xs-2">
										<p class="post_year"><?php echo get_the_date('Y'); ?></p>
										<p class="post_md"><?php echo get_the_date('m.d'); ?></p>
										<p class="post_category">NEWS</p>
									</div>
									<div class="post_content col-xs-10">
										<p class="post_title"><?php the_title(); ?></p>
										<div class="post_text"><?php the_content(); ?></div>
									</div>
								</div>
								<?php endif; ?>
							<?php endwhile; endif; ?> <!-- ループ終了 -->
						</div>
						<div id="finding_post_lecture">
							<?php if(have_posts()): while(have_posts()): the_post(); ?> <!-- ループ開始 -->
								<?php if ( in_category(array('招待講演'))): ?>
								<div class="post row">
									<div class="post_date col-xs-2">
										<p class="post_year"><?php echo get_the_date('Y'); ?></p>
										<p class="post_md"><?php echo get_the_date('m.d'); ?></p>
										<p class="post_category">EVENT</p>
									</div>
									<div class="post_content col-xs-10">
										<p class="post_title"><?php the_title(); ?></p>
										<div class="post_text"><?php the_content(); ?></div>
									</div>
								</div>
								<?php endif; ?>
							<?php endwhile; endif; ?> <!-- ループ終了 -->
						</div>
						<script type="text/javascript">
        					$('#finding_box>div:not("#finding_post_prize")').hide();
							$('#finding_select div').on('click', function(){
								$('#finding_select>div').removeClass('post_selected');
								$(this).addClass('post_selected');
        						$('#finding_box>div').hide();
        						$("#" + $(this).attr("id").replace("select", "post")).show();
    							console.log("#" + $(this).attr("id").replace("select", "post"));
							});
						</script>
					</div>
				</div>
			</section>
			<section id="member" data-section-name="p_member">
				<div class="inner">
					<h2>メンバー</h2>
					<div id="member_select" class="row post_select">
						<div id="member_select_hannnou" class="col-xs-3 post_selected"><p>反応</p></div>
						<div id="member_select_kouzou" class="col-xs-3"><p>構造</p></div>
						<div id="member_select_nure" class="col-xs-3"><p>濡れ</p></div>
						<div id="member_select_nagare" class="col-xs-3"><p>流れ</p></div>
					</div>
					<div id="member_box" class="post_box">
						<div id="member_post_hannnou">
							<h3 class="member_position">センター長　テーマリーダー</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/hannnou/yui.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　化学科</p>
									<p class="member_name">由井　宏治</p>
									<p class="member_work">分子集合体内部・金属酸化物表面界に存在する水の構造と物性計測</p>
								</div>
							</div>
							<h3 class="member_position">研究員</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/hannnou/kawai.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　工業化学科</p>
									<p class="member_name">河合　武司</p>
									<p class="member_work">気水界面を利用した高分子ナノ粒子の中空化技術の開拓</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/hannnou/nakai.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　応用化学科</p>
									<p class="member_name">中井　泉</p>
									<p class="member_work">安全安心な水を科学する</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/hannnou/terashima.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">総合研究院　光触媒研究推進拠点</p>
									<p class="member_name">寺島　千晶</p>
									<p class="member_work">水溶液中でのプラズマを利用した植物工場への展開</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/hannnou/shirafuji.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">大阪市立大学大学院　工学研究科 電子情報系専攻</p>
									<p class="member_name">白藤　立</p>
									<p class="member_work">水溶液が関与するプラズマ反応場の診断とモデル化・シミュレーション</p>
								</div>
							</div>
							<div id="member_margin"></div>
						</div>
						<div id="member_post_kouzou">
							<h3 class="member_position">副センター長</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/kouzou/honma.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　物理学科</p>
									<p class="member_name">本間　芳和</p>
									<p class="member_work">ナノカーボン制限空間に存在する水の構造と物性の評価</p>
								</div>
							</div>
							<h3 class="member_position">テーマリーダー</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/kouzou/yamamoto.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">工学部第一部　教養学科</p>
									<p class="member_name">山本　貴博</p>
									<p class="member_work">局所ナノ空間の水の構造と物性に関する理論・シミュレーション研究</p>
								</div>
							</div>
							<h3 class="member_position">研究員</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/kouzou/tadokoro.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　化学科</p>
									<p class="member_name">田所　誠</p>
									<p class="member_work">分子性ナノ多孔質細孔に閉じ込められた巨大水クラスターの科学</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/kouzou/ito.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　応用物理学科</p>
									<p class="member_name">伊藤　哲明</p>
									<p class="member_work">核磁気共鳴法による低次元ナノ構造水のダイナミクスの解明</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/kouzou/matsui.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">東北大学大学院　理学研究科　物理学専攻</p>
									<p class="member_name">松井　広志</p>
									<p class="member_work">水分子ネットワークとプロトンの超広帯域伝導ダイナミックス</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/kouzou/daiguji.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">東京大学大学院　工学系研究科 機械工学専攻</p>
									<p class="member_name">大宮司　啓文</p>
									<p class="member_work"></p>
								</div>
							</div>
						</div>
						<div id="member_post_nure">
							<h3 class="member_position">テーマリーダー</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nure/ueno.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理工学部　機械工学科</p>
									<p class="member_name">上野　一郎</p>
									<p class="member_work">動的な濡れ現象における表面修飾の影響</p>
								</div>
							</div>
							<h3 class="member_position">研究員</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nure/sumino.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　応用物理学科</p>
									<p class="member_name">住野　豊</p>
									<p class="member_work">不均一・動的媒質中の相成長・相分離・混合過程の解析</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/hannnou/nakai.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　物理学科</p>
									<p class="member_name">三浦　和彦</p>
									<p class="member_work">都市、海洋、山岳大気における新粒子生成と雲</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nure/kotsugi.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">基礎工学部　材料工学科</p>
									<p class="member_name">小嗣　真人</p>
									<p class="member_work">高輝度放射光を用いた界面電子状態の解析</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nure/tsukahara.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理工学部　機械工学科</p>
									<p class="member_name">塚原　隆裕</p>
									<p class="member_work">大規模直接数値シミュレーションによる界面-バルク流体間相互作用の評価</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nure/yamaguchi.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">大阪大学大学院　工学研究科　機械工学専攻</p>
									<p class="member_name">山口　康隆</p>
									<p class="member_work">分子スケールの水の挙動の解析と流体力学との接続による濡れの解析</p>
								</div>
							</div>
						</div>
						<div id="member_post_nagare">
							<h3 class="member_position">テーマリーダー</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/motosuke.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">工学部第一部　機械工学科</p>
									<p class="member_name">元佑　昌廣</p>
									<p class="member_work">水中分散微粒子の高度制御</p>
								</div>
							</div>
							<h3 class="member_position">研究員</h3>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/tokunaga.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　物理学科</p>
									<p class="member_name">徳永　英司</p>
									<p class="member_work">制限空間内の水の巨大な電気光学効果</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/hashizume.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">工学部第一部　工業化学科</p>
									<p class="member_name">橋詰　峰雄</p>
									<p class="member_work">高分子膜表面でのハイブリッド形成における水の効果の解明</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/otsuka.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　応用化学科</p>
									<p class="member_name">大塚　英典</p>
									<p class="member_work">生体適合性高分子が形成する界面分子構造と水和状態の評価</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/tsukiyama.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">理学部第一部　化学科</p>
									<p class="member_name">築山 光一</p>
									<p class="member_work">赤外自由電子レーザーを利用した新しい分光計測法の開発</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/ando.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">基礎工学部　電子応用工学科</p>
									<p class="member_name">安藤　格士</p>
									<p class="member_work">生体高分子の動態と水</p>
								</div>
							</div>
							<div class="post row">
								<div class="member_image col-xs-12 col-sm-2">
									<img src="<?php echo get_template_directory_uri(); ?>/images/member/nagare/kobayashi.jpg">
								</div>
								<div class="member_content col-xs-12 col-sm-10">
									<p class="member_attachment">電気通信大学　脳科学ライフサポート研究センター</p>
									<p class="member_name">小林　孝嘉</p>
									<p class="member_work">超解像高感度顕微イメージング法の開発</p>
								</div>
							</div>
						</div>
					</div>
					<script type="text/javascript">
        				$('#member_box>div:not("#member_post_hannnou")').hide();
						$('#member_select div').on('click', function(){
							$('#member_select>div').removeClass('post_selected');
							$(this).addClass('post_selected');
        					$('#member_box>div').hide();
        					$("#" + $(this).attr("id").replace("select", "post")).show();
    						console.log("#" + $(this).attr("id").replace("select", "post"));
   						});
					</script>
				</div>
			</section>
			<section id="link" data-section-name="p_link">
				<div class="inner_l">
					<h2>リンク</h2>
					<div id="link_box" class="row">
						<div class="link_sec col-xs-12  col-sm-6 col-md-4">
							<a href="http://www.tus.ac.jp/">
								<div class="link_content">
									<p class="link_title">東京理科大学</p>
									<div class="link_image"><img src="<?php echo get_template_directory_uri(); ?>/images/link/logo_TUS.png"></div>
								</div>
							</a>
						</div>
						<div class="link_sec col-xs-12  col-sm-6 col-md-4">
							<a href="http://www.tus.ac.jp/rist/">
								<div class="link_content">
									<p class="link_title">総合研究院</p>
									<div class="link_image"><img src="<?php echo get_template_directory_uri(); ?>/images/link/logo_RIST_TUS.png"></div>
								</div>
							</a>
						</div>
						<div class="link_sec col-xs-12  col-sm-6 col-md-4">
							<a href="http://www.tus.ac.jp/ura/">
								<div class="link_content">
									<p class="link_title">研究戦略・産学連携センター</p>
									<div class="link_image"><img src="<?php echo get_template_directory_uri(); ?>/images/link/logo_URA.png"></div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer id="footer">
			Copyright © 2017 UniPro All Rights Reserved.
		</footer>
	</div>
	<script>
		$(function() {
			$.scrollify({
				section : "section",
	        	scrollSpeed: 1400,
			});
		});
		$('.glyphicon-chevron-down').click(function(){
		    if("#p_link" == location.hash) {
  				$.scrollify.move("#p_top");
		    } else {
				$.scrollify.next();
			};
		});
		$(window).on('scroll', function(event){
			console.log('window');
			console.log($.scrollify.current().attr("id"));
			console.log("#nav_" +$.scrollify.current().attr("id"));
			$('#nav_top>ul>li>a').removeClass('nav_location');
			$("#nav_link_" +$.scrollify.current().attr("id")).addClass('nav_location');

		});
	</script>
</body>
</html>