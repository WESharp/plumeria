<?php
	require_once '../include.inc.php';
	
	$handler_type = isset($_GET['type']) ? $_GET['type'] : null;
	
	switch($handler_type) {
		case "read":
			getDemoDatas();
			break;
		default: 
			die('parameters error');
	}
	die();
	//ตวยผั้ึค
	function getDemoDatas(){
		$demo_reader = new Demo();
		$demos=$demo_reader->find_all();
		echo json_encode($demos);
	}
	
?>