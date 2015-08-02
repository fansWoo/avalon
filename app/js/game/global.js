
function game_init(arg_Arr)
{
	var arg_Arr;
	$('.header_bar_mobile > h2').text(arg_Arr.ui_title_Str);

	$('.footer_bar > .nav_li').removeClass('hover');
	$('.footer_bar > .nav_li[data-nav_name=' + arg_Arr.ui_nav_name + ']').addClass('hover');
}