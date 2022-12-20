$(function($){
	$('#heder-top').on('click',function(){
		const welcome = $('#welcome').offset().top;
		$("html").animate({scrollTop: welcome});
	});
});

$(function($){
	$('#heder-profile').on('click',function(){
		const profile = $('#profile').offset().top;
		$("html").animate({scrollTop: profile});
	});
});

$(function($){
	$('#heder-portfolio').on('click',function(){
		const portfolio = $('#portfolio').offset().top;
		$("html").animate({scrollTop: portfolio});
	});
});

$(function($){
	$('#heder-contact').on('click',function(){
		const contact = $('#contact').offset().top;
		$("html").animate({scrollTop: contact});
	});
});

$(function($){
	$('#heder-children').on('click',function(){
		const children = $('#my-children').offset().top;
		$("html").animate({scrollTop: children});
	});
});

$(function($){
	'<?php foreach ($array as $key => $val): ?>';
var ctxFront = document.getElementById('skillFrontChart');
var myChart1 = new Chart(ctxFront, {
	type: 'radar',
	data: {
		labels: ['html', 'css', 'javascript', 'jquery', 'smarty'],
		datasets: [{
			label: 'フロントエンド',
			data: [1, 2, 3, 4, 5],
			// データライン
			borderColor: 'rgba(238, 151, 164)',
			borderWidth: 2,
			backgroundColor: 'rgba(238, 151, 164,0.3)',
			pointBackgroundColor:'rgba(238, 151, 164)',
		}],
	},
	// options:{
	// 	scales:{
	// 		pointLabels:{
	// 			font:{
	// 				fontSize:20,
	// 			}
	// 		}
	// 	}
	// }
});

var ctxBack = document.getElementById('skillBackChart');
var myChart2 = new Chart(ctxBack, {
	type: 'radar',
	data: {
		labels: ['php', 'python', 'postgresql', 'aws', '★'],
		datasets: [{
			label: 'バックエンド',
			data: [1, 2, 3, 4, 5],
			// データライン
			borderColor: 'rgba(121, 198, 182)',
			borderWidth: 2,
			backgroundColor: 'rgba(121, 198, 182, 0.3)',
			pointBackgroundColor:'rgba(121, 198, 182)',
		}],
	},
	// options:{
	// 	scales:{
	// 		pointLabels:{
	// 			font:{
	// 				fontSize:20,
	// 			}
	// 		}
	// 	}
	// }
});

var ctxOther = document.getElementById('otherSkill');
var myChart3 = new Chart(ctxOther, {
	type: 'radar',
	data: {
		labels: ['VScode', '★', '★', '★', '★'],
		datasets: [{
			label: 'その他スキル',
			data: [1, 2, 3, 4, 5],
			// データライン
			borderColor: 'rgba(248, 195, 92)',
			borderWidth: 2,
			backgroundColor: 'rgba(248, 195, 92, 0.3)',
			pointBackgroundColor:'rgba(248, 195, 92)',
		}],
	},
	// options:{
	// 	scales:{
	// 		pointLabels:{
	// 			font:{
	// 				fontSize:20,
	// 			}
	// 		}
	// 	}
	// }
});
});
