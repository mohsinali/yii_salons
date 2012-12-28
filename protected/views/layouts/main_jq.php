<!DOCTYPE html> 
<html> 
<head> 
	<title>My Page</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.mobile-1.2.0.min.css" />	
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobile-1.2.0.min.js"></script>	
</head> 
<body class="ui-mobile-viewport"> 

  <?php echo $content; ?>
</body>
</html>
