//https://akinov.hatenablog.com/entry/2018/04/24/002032


// $(function(){

let copy_text = document.querySelector('#result').textContent;
let copy_btn = document.querySelector('#copy-btn');
let output = document.querySelector('#output');
//let body = document.getElementsByTagName("body");

//  改行をうまくコピーできないのでコメントアウト 2022/10/16
//var textarea = document.createElement("textarea");
//textarea.style.position = 'fixed';
//textarea.style.opacity = 0;
//textarea.value = copy_text;

//document.body.appendChild(textarea);

//textareaを選択させexecCommandを使いコピーさせる
//textarea.select();
//document.querySelector('#textarea');


copy_btn.addEventListener(`click`, () => {
	navigator.clipboard.writeText(copy_text).then(() => {
			output.textContent = 'Copied it to the clipboard.';
		}, () => {
			output.textContent = 'Could not copy.';
		});
	
});

// });