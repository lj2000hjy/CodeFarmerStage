<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>编程驿站 - 码农们的聚集地,编程无国界,经验才是王道！</title>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="编程驿站-码农们的聚集地,编程无国界,经验才是王道,提供编程经验,记录编程技巧" />
	<meta name="keywords" content="编程驿站,编程经验总结,编程技巧分享" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/jquery.countdown.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
</head>
<body>
	<div class="content">
		<div class="content1">
			<img src="images/work.png" alt="under-construction">
		</div>
		<div class="header">
		<h1>网站正在建设中,即将正式对外开放，敬请期待...</h1>
	</div>
		<div class="content2">
			<div class="timer_wrap">
				<div id="counter"> </div>
			</div>
		</div>
	</div>
	<div id="bottom">版权所有 © <?php echo date('Y')?> - <?php echo date('Y') + 1?> <a href="https://www.jacklau2018.com/" title="码农们的聚集地,编程无国界,经验才是王道！">编程译站</a>  联系我: <a href="mailto:admin@jacklau2018.com">admin@jacklau2018.com</a> <a href="https://www.miitbeian.gov.cn/" target="_blank">沪ICP备11016120号</a>  | <a href="https://m.kuaidi100.com/" target="_blank">快递查询</a></div>
<script type="text/javascript">
	<?php
	$left_day = abs(strtotime('2019-09-01 23:59:59') - strtotime(date('Y-m-d H:i:s')));
	defined('DAYS') or define('DAYS',$left_day);
	?>
	$(function(){
		var d = "<?php echo DAYS ?>";
		$('#counter').countdown({
			timestamp : (new Date()).getTime() + d*1000
		});
	});
</script>
</body>
</html>