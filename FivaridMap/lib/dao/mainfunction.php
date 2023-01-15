<?php

class mainDaoClass {
	function getAllDate($pdo,$TabelName) {

		$sql =
			"select * ".
			"from " . $TabelName
			.";";

			$stmt = $pdo->prepare($sql);
			//SQLを実行
			$stmt->execute();
	
			//データベースの値を取得
			return $stmt->fetchAll();
	}

	function getMapAllDate($pdo) {

		$sql =
			"select ".
				"marker_main.* ".
				",marker_detail.memo ".
			"from ".
				"marker_main ".
				"left join marker_detail on marker_detail.marker_main_sk = marker_main.marker_main_sk ".
			";";

			$stmt = $pdo->prepare($sql);
			//SQLを実行
			$stmt->execute();
	
			//データベースの値を取得
			return $stmt->fetchAll();
	}
	
	function getTagetDate($pdo,$param_arr) {
	    try{
			//実行したいSQLを準備する
			$sql =
				"select ".
					"crBase.careerid ".
					",crBase.fullname ".
					",mjob.withjobname ".
					",mpref.prefname ".
					",msex.sexname ".
				"from ".
					"trncareer crBase ".
					"left join mstsex msex on msex.sexid = crBase.sexid ".
					"left join mstjob mjob on mjob.withjobid = crBase.jobid ".
					"left join mstpref mpref on mpref.prefid = crBase.prefid ".
				"where ".
					"crBase.prefid <> 27 ";
				//HTMLには「NULL」の概念がないから、想定しなくても良い
				if($param_arr['sex'] != ''){
					$sql .= "and crBase.sexid = ? ";
				}

				if($param_arr['pref'] != ''){
					$sql .= "and crBase.prefid = ? ";
				}

				$sql .= "order by ".
						"1 ".
				";";
			$stmt = $pdo->prepare($sql);
			
			$i = 0;
			foreach($param_arr as $param){
				if($param != ''){
				$i++;
				$stmt->bindValue(1,$param);
				}
			}
			
			//SQLを実行
			$stmt->execute();
	
			//データベースの値を取得
			return $stmt->fetchAll();

		}catch(Exception $e){
			return $e->getMessage();
			
		}
	}

	function getTemplateDate($pdo,$count=''){
	//実行したいSQLを準備する
	$param = '';
	$sql =
		"select ".
		"template.templateid テンプレートID ".
		",mstsex.sexname 性別 ".
		",mstpref.prefname 住所 ".
		",mstjob.withjobname 希望する働き方 ".
		",template.insert_date 登録日 ".
		",template.update_date 更新日 ".
	"from ".
		"trntemplate template ".
		"left join mstsex on mstsex.sexid = template.sexid ".
		"left join mstjob on mstjob.withjobid = template.jobid ".
		"left join mstpref on mstpref.prefid = template.prefid ".
	"order BY ".
		"template.templateid desc ";
	
	// print_r($count);exit;
	if(!empty($count)){
		$sql .= "limit ? ";
		$param = $count;
	}

	$sql .= ";";

	$stmt = $pdo->prepare($sql);

	if(!empty($count)){
		$stmt->bindValue(1,$param);
	}

	//SQLを実行
	$stmt->execute();

	//データベースの値を取得
	return $stmt->fetchAll();
	}



	function createTemplate($pdo){
		try{
		$sql = "insert into trntemplate ".
			"(sexid,prefid,jobid,insert_date,update_date) ".
			"values (?,?,?,now(),now()) ".
			";";
		$stmt = $pdo->prepare($sql);

		$param_arr = array(
			isset($_SESSION['sex']) && $_SESSION['sex'] !='' ? $_SESSION['sex'] : '',
			isset($_SESSION['pref']) && $_SESSION['pref'] !='' ? $_SESSION['pref'] : '',
			isset($_SESSION['with_job']) && $_SESSION['with_job'] !='' ? $_SESSION['with_job'] : '',
		);
			// print_r($param_arr);exit;
		if($param_arr != ''){
			$i = 0;
			foreach($param_arr as $param){
				$i++;
				$stmt->bindValue($i,$param,PDO::PARAM_NULL);	
			}
		}
		//SQLを実行
		$stmt->execute();

		//データベースの値を取得
		return count($stmt->fetchAll());
		}catch(Exception $e){
		return $e->getMessage();
		exit;
		
		}
	}




}


?>