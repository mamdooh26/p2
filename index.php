<!DOCTYPE HTML>
<html>
	<head>
	<title>P2</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<h1> Mamdouh Alharbi</h1>
		<img src="images/Mamdouh.jpg" alt="Mamdouh Photo" width = 200 height = 300 />
		<br/>
		<h1> About Me</h1>
		<p>
			My name is Mamdouh Alharbi, from Saudi Arabia. I work as a software testing lead. I've over 5 years of experince in software testing. I hold a mster degree form The University of Queensland.
		</p>
		<h1> Random Quote </h1>
		<?php
			$quotes[] = 'Life is about making an impact, not making an income. --Kevin Kruse';
			$quotes[] = 'Whatever the mind of man can conceive and believe, it can achieve. –Napoleon Hill';
			$quotes[] = 'Strive not to be a success, but rather to be of value. –Albert Einstein';
			$random_number = rand(0,2);
			?><p><?php echo ($quotes[$random_number]);?></p><?
		?>
	</body>
</html>
