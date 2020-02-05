<?php 

$arrayData = array(
	array(
		'fav'=>'assets/img/fav1.png',
		'url'=>'google.com.vn',
	),
	array(
		'fav'=>'assets/img/fav2.png',
		'url'=>'google.com.vn',
	),
	array(
		'fav'=>'assets/img/fav3.png',
		'url'=>'batdongsan.com.vn',
	),
	array(
		'fav'=>'assets/img/fav4.png',
		'url'=>'youtube.vn',
	),
	array(
		'fav'=>'assets/img/fav5.png',
		'url'=>'w3school.com',
	),
	array(
		'fav'=>'assets/img/fav6.png',
		'url'=>'facebook.com',
	),
	array(
		'fav'=>'assets/img/fav7.png',
		'url'=>'news.zing.vn',
	),
	array(
		'fav'=>'assets/img/fav8.png',
		'url'=>'msn.com',
	),
	array(
		'fav'=>'assets/img/fav9.png',
		'url'=>'nina.vn',
	),
	array(
		'fav'=>'assets/img/fav10.png',
		'url'=>'vnlist.vn',
	),
	array(
		'fav'=>'assets/img/fav11.png',
		'url'=>'j-list.com',
	),
	array(
		'fav'=>'assets/img/fav12.png',
		'url'=>'nettruyen.com',
	),
	array(
		'fav'=>'assets/img/fav13.png',
		'url'=>'truyentranh869.com',
	),
	array(
		'fav'=>'assets/img/fav14.png',
		'url'=>'stackoverflow.com',
	),
	array(
		'fav'=>'assets/img/fav15.png',
		'url'=>'pngimage.net',
	),

	array(
		'fav'=>'assets/img/fav16.png',
		'url'=>'getbootstrap.com',
	),
	array(
		'fav'=>'assets/img/fav17.png',
		'url'=>'vi.lipsum.com',
	),

	array(
		'fav'=>'assets/img/fav18.png',
		'url'=>'nencss.blogspot.com',
	),
	array(
		'fav'=>'assets/img/fav18.png',
		'url'=>'lesscss.org',
	),
	array(
		'fav'=>'assets/img/fav19.png',
		'url'=>'vnexpress.net',
	),
	array(
		'fav'=>'assets/img/fav20.png',
		'url'=>'www.apple.com',
	),
	array(
		'fav'=>'assets/img/fav21.png',
		'url'=>'thegioididong.com',
	),
	array(
		'fav'=>'assets/img/fav22.png',
		'url'=>'fptshop.com.vn',
	),
	array(
		'fav'=>'assets/img/fav23.png',
		'url'=>'pay.zing.vn',
	),
	array(
		'fav'=>'assets/img/fav24.png',
		'url'=>'zing.vn',
	),
	array(
		'fav'=>'assets/img/fav25.png',
		'url'=>'me.zing.vn',
	),
	array(
		'fav'=>'assets/img/fav26.png',
		'url'=>'zalo.me',
	),
	array(
		'fav'=>'assets/img/fav27.png',
		'url'=>'fakeimg.pl',
	)
);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rảnh rỗi sinh nông nỗi</title>
	<link rel="icon" href="assets/img/fav2.png" type="image/png" sizes="512x512">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet/less" type="text/css" href="assets/css/style.less" />
	<script src="https://use.fontawesome.com/01fee8de01.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
	<script>
		less = {
			env: "development",
			poll: 1000,
		};
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
	<script>less.watch();</script>
</head>
<body>
	<header id="header">
		<div class="container">
			<img src="https://fakeimg.pl/1100x200/?text=Header" alt="">
		</div>
		<div class="block-menu">
			<div class="container">
				<nav class="nav primary-menu">
					<ul class="clearfix">
						<li><a href="#">Home</a></li>
						<li><a href="#">Domain</a></li>
						<li><a href="#">Hosting</a></li>
						<li><a href="#">Mail server</a></li>
						<li><a href="#">SEO services</a></li>
						<li><a href="#">Coding</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<div id="body">
		<div class="content-index">
			<div class="container">
				<div class="grid">
					<?php $n2 = 4; for($j=0 ; $j < $n2; $j++) { ?>
						<div class="col-item-3">
							<?php $n = 15; for($i=0 ; $i < $n; $i++) { 
								$offset = rand(5,27);
								$length = rand(5,27);
								shuffle($arrayData);
								$data = array_slice($arrayData, $offset, $length);
								?>
								<div class="home-item">
									<div class="panel">
										<div class="panel-heading panel-heading-item-1">
											<h2>Đoạn Lorem Ipsum chuẩn</h2>
										</div>
										<div class="panel-body">
											<ul class="list-item">
												<?php foreach($data as $key => $value) { ?>
													<li class="item clearfix">
														<span class="fav">
															<img src="<?php echo $value['fav'] ?>" alt="Fav">
														</span>
														<span class="site_url">
															<a href="#" target="_blank"><?php echo $value['url'] ?></a>
														</span>
														<span class="view_detail">
															<a href="#">
																<i class="fa fa-eye" aria-hidden="true"></i>
															</a>
														</span>
													</li>
												<?php } ?>
											</ul>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<footer id="footer">
		<div class="container">
			<img src="https://fakeimg.pl/1100x200/?text=Footer" alt="">
		</div>
	</footer>
	<div id="dom" style="position: fixed;left: 0;top: 50%;background: #fff;padding: 5px 10px;color: #f00;box-shadow: 0 0 3px 0 rgba(0,0,0,.5);z-index: 1000">
		<script>
			$(function(){
				less.pageLoadFinished.then(function(){
					function dom(){
						var dom = document.getElementsByTagName('*').length; 
						$('#dom').text(dom);
					}
					dom();
					setInterval(dom,3000);
					$(document).ajaxComplete(function(event, xhr, settings) {
						dom();
					});
				});
			});
		</script>
	</div>
</body>
</html>