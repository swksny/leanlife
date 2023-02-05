<?php
	class ChangeCombination{
		const tableSize = 8;
		function tableCreate($words){
			$tables = array_chunk( $words, self::tableSize ,true);
			$fillArrayCount = self::tableSize - count($tables[array_key_last($tables)]);
			if($fillArrayCount > 0 && isset($fillArrayCount)){
				for($fillArrayCount; $fillArrayCount>0; $fillArrayCount--){
					$tables[array_key_last($tables)][] = '';
				}
			}
			return $tables;
		}
	}

?>