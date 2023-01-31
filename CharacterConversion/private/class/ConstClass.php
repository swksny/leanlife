<?php
class ConstClass {
	CONST LOG_PASS = '/tmp/debug.log';
	CONST REPLACE_WORDS = array(
		'1課' => 'いっか'
		,'第1' => 'だいいち'
		,'WEB'=>'ウェブ'
		,'A'=>'エー'
		,'B'=>'ビー'
		,'C'=>'シー'
		,'D'=>'ディー'
		,'E'=>'イー'
		,'F'=>'エフ'
		,'G'=>'ジー'
		,'H'=>'エイチ'
		,'I'=>'アイ'
		,'J'=>'ジェイ'
		,'K'=>'ケー'
		,'L'=>'エル'
		,'M'=>'エム'
		,'N'=>'エヌ'
		,'O'=>'オー'
		,'P'=>'ピー'
		,'Q'=>'キュー'
		,'R'=>'アール'
		,'S'=>'エス'
		,'T'=>'ティー'
		,'U'=>'ユー'
		,'V'=>'ヴィー'
		,'W'=>'ダブリュー'
		,'X'=>'エックス'
		,'Y'=>'ワイ'
		,'Z'=>'ゼッド'
		,'&'=>'アンド'
		);
}

function h($val){
	return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}
?>