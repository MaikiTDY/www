// JavaScript Document
var sliderTimer = sliderN = 0, sliderCount=5, className = "";
function Slider() {
	sliderCount= $(".banner li").size();
	$(".banner li:not(:first-child)").hide();
	$(".banner_box .next").click(function(){
		sliderN++;
		$current_li=$(".banner li").filter(":visible");
		if (sliderN >= sliderCount){
			sliderN=0;
			$current_li.fadeOut(300,function(){
			$(".banner :first-child").fadeIn(800)});
			$li_index=0;
		}
		else{
			$current_li.fadeOut(300);
			$current_li.next().fadeIn(800);
			$li_index=$current_li.next().index();
		}
		$('.banner_count').children().removeClass('current');
		$('.banner_count').children().eq($li_index).addClass('current');
	});
	$(".banner_box .prev").click(function() {
		sliderN--;
		$current_li=$(".banner_box li").filter(":visible");
		if (sliderN < 0){
			sliderN = sliderCount-1;
			$current_li.fadeOut(300,function(){$(".banner_box :last-child").fadeIn(800);});
			$li_index=sliderN;
		}
		else{
			$current_li.fadeOut(300);
			$current_li.prev().fadeIn(800);
			$li_index=$current_li.prev().index();
		}
		$('.banner_count').children().removeClass('current');
		$('.banner_count').children().eq($li_index).addClass('current');
	});	

	sliderTimer = setInterval("SliderAuto()", 5000);
	
	$(".banner_box .prev,.banner_box .next").click(function(){
		clearInterval(sliderTimer)
		sliderTimer = setInterval("SliderAuto()", 5000);
	}, function(){
		clearInterval(sliderTimer)
		sliderTimer = setInterval("SliderAuto()", 5000);
	});
}
function SliderAuto() {
	$(".banner_box .next").trigger("click");
}
$(document).ready(function(){ Slider();})