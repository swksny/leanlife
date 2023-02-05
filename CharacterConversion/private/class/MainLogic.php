<?php
	class MainLogic {
		protected $url;
		protected $id;

		function __construct($url,$id){
			$this->url = $url;
			$this->id = $id;
		}

		public function parsingPost($replaceWords,$sentence){
			$Class = new ConstClass();
	
			try{
				if(isset($sentence) && $sentence != ''){
					//改行「\n」を「'|'」に変換
					$sentenceVar = mb_convert_kana($sentence, "rn");
					$sentenceVar = strtoupper($sentenceVar) ;
					$sentenceVar = str_replace(array("\r\n","n\r","\n"),'|',$sentenceVar);
					foreach($replaceWords as $replaceWord){
						if($replaceWord['checked']){
							$sentenceVar = str_replace($replaceWord['before'],$replaceWord['after'],$sentenceVar);
						}
					}
				}
			
				//API
					$query = [
						"id"=> "1-1"
						,"jsonrpc"=>"2.0"
						,"method"=>"jlp.maservice.parse"
						,"params"=> [
							"q" => $sentenceVar
							]
					];
			
					$headers = array(
						"HTTP/1.0",
						"Content-Type: application/json",
						"User-Agent: Yahoo AppID:{$this->id}"
					);
			
					//cURLセッションを初期化する
					$ch = curl_init();
			
					//URLを指定する
					curl_setopt($ch, CURLOPT_URL, $this->url);
			
					//URLとオプションを指定する
					curl_setopt($ch, CURLOPT_URL, $this->url);
					curl_setopt($ch, CURLOPT_POST, true);
					curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //レスポンスのボディが出力を無しにする
					curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); //ヘッダー追加オプション
			
					//URLの情報を取得する
					$res =  json_decode(curl_exec($ch));
			
					$displayVar = '';
					if(isset($res) && $res ==! ''){
						foreach($res->result->tokens as $var){
							$displayVar .= (str_replace('|',"\n",$var[1]));
						}
						//ひらがなをカタカナに変換
						$displayVar = mb_convert_kana($displayVar, "CKs");
						
					}else{
						$displayVar = '';
					}					
					//セッションを終了する
					curl_close($ch);
					return $displayVar;

				} catch ( Exception $ex ) {
					error_log("\n{$ex}",3,$Class::LOG_PASS);
					return FALSE;
				} 
		}
	}
?>