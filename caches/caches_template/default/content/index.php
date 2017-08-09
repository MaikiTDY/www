<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>

<?php include template("content","header"); ?>

<div class="base mt10">
<div class="left">
<h2><span><a href="/html/about/jianjie/">更多 +</a></span>关于我们 <em>ABOUT US</em></h2>
<?php echo show_ad(1, 13);?>
</div>
<div class="middle">
<h2><span><a href="xinwen/">更多 +</a></span>新闻资讯 <em>NEW INFORMATIONS</em></h2>
<ul>


                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=47d362aaacde3c4b70338da97af2003a&action=lists&catid=6&num=7&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'6','order'=>'id DESC','limit'=>'7',));}?>

         
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
				
				<li><span><?php echo date('Y-m-d',$v[updatetime]);?></span><a href="<?php echo $v['url'];?>" target="_blank" ><?php echo str_cut($v['title'],30);?></a></li>
				
                <?php $n++;}unset($n); ?>
    
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>


</ul>
</div>
<div class="right">
<?php echo show_ad(1, 12);?>
</div>
</div>
<div class="clear"></div>
<div class="base mt10 productshow">
<h2><span><a href="chanpin/">更多 +</a></span>产品展示 <em>PRODUCTS SHOW</em></h2>
<div class="scrollcontainer clearfix">
                                    <ul>


          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bdc8d0c132972c31ad4b157b95c0997a&action=lists&catid=7&posid=12&thumb=1&order=updatetime+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'7','posid'=>'12','thumb'=>'1','order'=>'updatetime DESC','limit'=>'10',));}?>
       
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			 
			   <li>
               <div><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb]);?>" title="<?php echo $r['title'];?>" width="174px" height="196px"/></a><h5><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a></h5></div>                                          
               </li>
									  
									  
		
                <?php $n++;}unset($n); ?>
    
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>



                                    </ul>
                                   </div>
                                  <a class="abtn aleft" href="#left"></a>
                                  <a class="abtn aright" href="#right"></a>
                          </div>
</div>



<?php include template("content","footer"); ?>


<script type="text/javascript" src="/muban/Scripts/Xslider.js"></script>
<script src="/muban/Scripts/BannerChange.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$(".productshow").Xslider({
		unitdisplayed:1,
		numtoMove:1,
		loop:"cycle",
		autoscroll:2000 
	});
	
})
 </script>
 <div id="service" class="servicebox"></div> 
<script type="text/javascript" src="/muban/Scripts/Xslider.js"></script>
<script src="/muban/Scripts/BannerChange.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$(".productshow").Xslider({
		unitdisplayed:1,
		numtoMove:1,
		loop:"cycle",
		autoscroll:2000 
	});
	
})
$("a").attr('href',function(i,ov){return ov+'#here';});
 </script>
</body>
</html>
