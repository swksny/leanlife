window.onload = () => {
	const loader = document.getElementById('loading');
	loader.classList.add('loaded');
};

//scroll
$(function($){
	$('.scroll-top').on('click',function(){
		const welcome = $('#welcome').offset().top;
		$("html").animate({scrollTop: welcome});
	});
});

$(function($){
	$('.scroll-profile').on('click',function(){
		const profile = $('#profile').offset().top;
		$("html").animate({scrollTop: profile});
	});
});

$(function($){
	$('.scroll-portfolio').on('click',function(){
		const portfolio = $('#portfolio').offset().top;
		$("html").animate({scrollTop: portfolio});
	});
});

$(function($){
	$('.scroll-contact').on('click',function(){
		const contact = $('#contact').offset().top;
		$("html").animate({scrollTop: contact});
	});
});

$(function($){
	$('.scroll-children').on('click',function(){
		const children = $('#my-children').offset().top;
		$("html").animate({scrollTop: children});
	});
});

//jQuery
$(function($){
	'<?php foreach ($array as $key => $val): ?>';
var ctxFront = document.getElementById('skillFrontChart');
var myChart1 = new Chart(ctxFront, {
	type: 'radar',
	data: {
		labels: ['HTML', 'CSS', 'JavaScript', 'jQuery', 'Smarty'],
		datasets: [{
			label: 'フロントエンド',
			data: [2, 2, 2, 1, 2],
			// データライン
			borderColor: 'rgba(238, 151, 164)',
			borderWidth: 2,
			backgroundColor: 'rgba(238, 151, 164,0.3)',
			pointBackgroundColor:'rgba(238, 151, 164)',
		}],
	},
	options:{
		scale: {
			ticks: {
				suggestedMin: 0,
				suggestedMax: 5,
				stepSize: 1,
			},
			pointLabels: {
				fontSize: 15
			},
		},
	}
});

var ctxBack = document.getElementById('skillBackChart');
var myChart2 = new Chart(ctxBack, {
	type: 'radar',
	data: {
		labels: ['PHP', 'Python', 'Selenium', 'PostgreSQL', 'AWS'],
		datasets: [{
			label: 'バックエンド',
			data: [2, 1, 1, 3, 1],
			// データライン
			borderColor: 'rgba(121, 198, 182)',
			borderWidth: 2,
			backgroundColor: 'rgba(121, 198, 182, 0.3)',
			pointBackgroundColor:'rgba(121, 198, 182)',
		}],
	},
	options:{
		scale: {
			ticks: {
				suggestedMin: 0,
				suggestedMax: 5,
				stepSize: 1,
			},
			pointLabels: {
				fontSize: 15
			},
		},
	}
});

var ctxOther = document.getElementById('otherSkill');
var myChart3 = new Chart(ctxOther, {
	type: 'radar',
	data: {
		labels: ['VScode', 'Eclipse', 'Git/GitHub', 'Linux', 'VBA'],
		datasets: [{
			label: 'その他スキル',
			data: [2, 2, 2, 2, 2],
			// データライン
			borderColor: 'rgba(248, 195, 92)',
			borderWidth: 2,
			backgroundColor: 'rgba(248, 195, 92, 0.3)',
			pointBackgroundColor:'rgba(248, 195, 92)',
		}],
	},
	options:{
		scale: {
			ticks: {
				suggestedMin: 0,
				suggestedMax: 5,
				stepSize: 1,
			},
			pointLabels: {
				fontSize: 15
			},
		},
	}
});
});

//modal
const modalOpenTriggers = document.getElementsByClassName('modal-open');
for(const elem of modalOpenTriggers){
	elem.addEventListener('click', modalOpen);
}
function modalOpen(e) {
	let eIdName = e.target.id.replace('-open','');
	let openModal = document.getElementById(eIdName);
	openModal.style.display = 'flex';
}

const modalCloseTriggers = document.getElementsByClassName('modal-close');
for(const elem of modalCloseTriggers){
	elem.addEventListener('click', modalClose);
}
function modalClose(e) {
	let eIdName = e.target.id.replace('-close','');
	let closeModal = document.getElementById(eIdName);
	closeModal.style.display = 'none';
}

addEventListener('click', modalOutsideClose);
function modalOutsideClose(e) {
	if (e.target.className.match(/modal-outside-close/)){
		let closeElement = document.getElementById(e.target.id);
		closeElement.style.display = 'none';
	}
}

// buttonClose.addEventListener('click', modalClose);
// function modalClose() {
// 	modalCc.style.display = 'none';
// }

// const buttonOpen = document.getElementById('modal-open-1');
// const modalCc = document.getElementById('modal-1');
// const buttonClose = document.getElementsByClassName('modalClose')[0];

// buttonOpen.addEventListener('click', modalOpen);
// function modalOpen() {
// 	modalCc.style.display = 'flex';
// }

// バツ印がクリックされた時
// buttonClose.addEventListener('click', modalClose);
// function modalClose() {
// 	modalCc.style.display = 'none';
// }

// モーダルコンテンツ以外がクリックされた時
// addEventListener('click', outsideClose);
// function outsideClose(e) {
// 	if (e.target == modalCc) {
// 	modalCc.style.display = 'none';
// 	}
// }