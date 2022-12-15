$(function($){
	$('#top').on('click',function(){
		const welcome = $('#welcome').offset().top;
		$("html").animate({scrollTop: welcome});
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
			backgroundColor: 'rgba(246, 228, 231,0.7)',
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
			borderColor: 'rgba(170, 255, 255)',
			borderWidth: 2,
			backgroundColor: 'rgba(170, 255, 255,0.7)',
			pointBackgroundColor:'rgba(170, 255, 255)',
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
			borderColor: 'rgba(138, 199, 90)',
			borderWidth: 2,
			backgroundColor: 'rgba(138, 199, 90,0.7)',
			pointBackgroundColor:'rgba(138, 199, 90)',
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
