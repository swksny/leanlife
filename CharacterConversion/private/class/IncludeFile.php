<?php
class IncludeFile {
	protected $fileName;
	protected $notReadLine;

	function __construct($fileName,$notReadLine){
		$this->fileName = $fileName;
		$this->notReadLine = $notReadLine;
	}

	function execute(){
		return self::includeFile($this->fileName);

	}

	function includeFile($fileName){
		$lines = file($fileName,FILE_IGNORE_NEW_LINES);

		$tmpArray = array();
		
		$i = 0;
		foreach($lines as $line){
			if($this->notReadLine <= $i){
				$lineArray = explode(' ',$line);
				$tmpArray[] = array(
					'before' => $lineArray[0],
					'after' => $lineArray[1],
					'checked' => 1,
				);
			}
			$i ++;
		}
		return $tmpArray;

	}

}

?>