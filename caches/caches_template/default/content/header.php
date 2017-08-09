<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">
<link href="/muban/style/css.css" rel="stylesheet" type="text/css" />
<!--

-->
<script src="/muban/Scripts/jquery.js" type="text/javascript"></script>

<link href="/statics/travel/css/global.css" rel="stylesheet" type="text/css" media="screen">
<link href="/statics/travel/css/indexs.css" rel="stylesheet" type="text/css" media="screen">
<link href="/statics/travel/css/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript" src="/statics/travel/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/statics/travel/js/subnav.js"></script>
<script type="text/javascript" src="/statics/travel/js/index.js"></script>

<style>
.logos{height:91px;background:url(../statics/travel/image/logo.jpg);}

</style>



</head>
<body>
<!--[if IE 6]>
<script type="text/javascript" src="/muban/Scripts/TheFuckingIE6_PNG.js"></script>
<script type="text/javascript">
 DD_belatedPNG.fix('.customer');
</script>
<![endif]-->




	 
	 
	 
<div class="base top">
<p><a href='#' onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo siteurl($siteid);?>');">设为首页</a>|<a href="javascript:window.external.addFavorite('<?php echo siteurl($siteid);?>','<?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?>');">加入收藏</a>
</p>
<div class="logos"></div>
</div>
<div class="nav">
<ul>


    	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c8248b6e14f55ae7ab7445fed168915d&action=category&catid=0&num=7&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'7',));}?>
      
			<li><a href="<?php echo siteurl($siteid);?>">首页</a></li>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
			<?php $n++;}unset($n); ?>

        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

</ul>
</div>


<div class="g_hd_menu"></div>
	<div class="banner_box">
		<ul class="banner">
			<li class="banner1 current" style="background-image:url(/statics/travel/image/banner1.jpg)"></li>
			<li class="banner1 current" style="background-image:url(/statics/travel/image/banner2.jpg)"></li>
            <li class="banner1 current" style="background-image:url(/statics/travel/image/banner3.jpg)"></li>
		</ul>
		<div class="wrap">
			<a href="###" class="prev" title="">上一个</a>
			<a href="###" class="next" title="">下一个</a>
			<p class="banner_count">
				<a class="current" href="###" title="">1</a>
				<a href="###" title="">2</a>
                <a href="###" title="">3</a>
			</p>
		</div>
	</div>
</div>

