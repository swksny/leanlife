<?php

class appClass {

	function __construct(){
		$_SESSION['pref'] = $_POST['pref'] != '' ? (int)$_POST['pref'] : $_POST['pref'];
		$_SESSION['sex'] = $_POST['sex'] != '' ? (int)$_POST['sex'] : $_POST['sex'];
		$_SESSION['with_job'] = $_POST['with_job'] != '' ? (int)$_POST['with_job'] : $_POST['with_job'];
	}

	function getValue(){
		;
	}

}

?>