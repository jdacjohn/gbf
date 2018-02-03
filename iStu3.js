/* ================================================================ 
Copyright (c) 2011 Stu Nicholls - iStu.co.uk. All rights reserved.
This script and the associated html may be modified in any 
way to fit your requirements.
=================================================================== */

$(document).ready(function () {
/* delay in miliiseconds */
showTime=6500;

current = 0;

pictures=$('.iStu3 li:has(a)').length;

$.each($('.iStu3 li:has(a)'), function() {
$('.iStu3 li.bt').append("<b></b>");
});

$('.iStu3 li a img').eq(current).fadeIn(750);
$('.iStu3 li.bt b').eq(current).css('background','#fff');

timer = setTimeout ("autoPlay()", showTime);

$(".nx").click(function() {
$('.iStu3 li a img').eq(current).fadeOut(750);
$('.iStu3 li.bt b').eq(current).css('background','#666');
		current++
	if (current == (pictures) ) {current = 0}
$('.iStu3 li a img').eq(current).fadeIn(750);
$('.iStu3 li.bt b').eq(current).css('background','#fff');
});

$(".pv").click(function() {
$('.iStu3 li a img').eq(current).fadeOut(750);
$('.iStu3 li.bt b').eq(current).css('background','#666');
		current--
	if (current == -1 ) {current = pictures-1}
$('.iStu3 li a img').eq(current).fadeIn(750);
$('.iStu3 li.bt b').eq(current).css('background','#fff');
});

$(".iStu3").mouseover(function() {
$('.iStu3 li.pv').fadeIn(250);
$('.iStu3 li.nx').fadeIn(250);
clearTimeout(timer);});

$(".iStu3").mouseleave(function() {
$('.iStu3 li.pv').fadeOut(250);
$('.iStu3 li.nx').fadeOut(250);
timer = setTimeout ("autoPlay()", showTime);});
});

function autoPlay () {
$('.iStu3 li a img').eq(current).fadeOut(750);
$('.iStu3 li.bt b').eq(current).css('background','#666');
	button = current;
	current++
	if (current == (pictures) ) {current = 0}
$('.iStu3 li a img').eq(current).fadeIn(750);
$('.iStu3 li.bt b').eq(current).css('background','#fff');

timer = setTimeout ("autoPlay()", showTime);
}
