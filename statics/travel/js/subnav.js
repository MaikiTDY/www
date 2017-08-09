$(function(){
	$g_subnav_hover=0;
	$('.nav_product a').hover(function(){
		$('.g_subnav').fadeIn('fast');
	})
	$('.g_subnav').hover(function(){
		$('.nav_product a').addClass('current')
	})
	$('.nav_product').siblings().hover(function(){
		$('.g_subnav').fadeOut('fast');
		$('.nav_product a').removeClass('current')
	})
	$('.banner_box,.g_bd').hover(function(){
		$('.g_subnav').fadeOut('fast');
		$('.nav_product a').removeClass('current')
	})
	$('.ft_feedback_link').click(function(){
			$('.g_md_mask').height($(document).height())
		$('.g_md_mask').fadeIn('fast');
		$('.g_md_feedback').css({'top':Number(($(window).height()-$('.g_md_feedback').height())/2)+Number($(window).scrollTop())})
		$('.g_md_feedback').fadeIn('fast');
	})
	$('.g_md_mask').click(function(){
		$('.g_md_mask').fadeOut('fast');
		$('.g_md_feedback').fadeOut('fast');
	})
	$('.other_company').hover(function(){
		$(this).addClass('other_company_hover')
	},function(){
		$(this).removeClass('other_company_hover')
	})

	$('.other_company .company_drop').click(function(){
		$('.mod_company_drop').toggle()
	})
			
})