var scrollAnimationElm = document.querySelectorAll('.sa');
var scrollAnimationFunc = function() {
for(var i = 0; i < scrollAnimationElm.length; i++) {
	scrollAnimationElm[i].classList.add('show');
}
}
window.addEventListener('load', scrollAnimationFunc);