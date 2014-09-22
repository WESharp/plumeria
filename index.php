<?php require_once 'include.inc.php';?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Plumeria</title>
		<link href="<?php echo HOSTURL?>static/css/base.css" type="text/css" rel="stylesheet">
		<script src="<?php echo HOSTURL?>static/js/demo.js"></script>
	</head>
	<body>
		<h1>Plumeria</h1>
		<ul>
		<?php 
			$demo_reader = new Demo();
			$demos=$demo_reader->find_all();
			foreach ($demos as $key=>$value){
				echo '<li>' . $value['id'] . ':' . $value['name'] . '</li>';
			}
		?>
		</ul>
		
		<button onclick="ajaxRequest();">ajax-request</button/>
		<div id="divResult"></div>
	</body>
</html>
