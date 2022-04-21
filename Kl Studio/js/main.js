function toChange(x) {
	x.classList.toggle('change');
}



$('.header__hamburger').click(function () {
	$('.menu').toggleClass('menu__hover');
})
$('.menu').click(function () {
	$('.menu').toggleClass('menu__hover');
})