<?php
class ConstClass {
	CONST LOG_PASS = '/tmp/debug.log';
	CONST REPLACE_WORDS = array(
		'1課' => 'イッカ'
		,'第1' => 'ダイイチ'
		,'&'=>'アンド'
		,'別役'=>'ベッチャク'
		,'遼介'=>'リョウスケ'
		,'翔太郎'=>'ショウタロウ'
		);
}

function h($val){
	return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}
?>