<?php
require_once('classes/Helper.php');

if (isset($_POST['date'])) {
	$date = Helper::slash2HyphenDate($_POST['date']);
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>jQuery UI Date Picker</title>
	<meta name="description" content="jQuery UI Date Picker" />
	<meta name="keywords" content="jQuery UI Date Picker" />
	<link href="/css/core.css" rel="stylesheet" type="text/css" />
	<link href="/js/jquery-ui/ui-lightness/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<section id="wrapper">
	<?php echo isset($date) ? '<p>SQL format: '.$date.'</p>' : null; ?>
	<form action="" method="post">
		<input type="text" name="date" id="date" 
			value="<?php echo isset($_POST['date']) ? $_POST['date'] : null; ?>" class="datepicker" />
		<input type="submit" class="button" value="Submit" />
	</form>

</section>

<script src="/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/js/jquery-ui/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="/js/core.js" type="text/javascript"></script>
</body>
</html>