<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Project Site: CADHAC</title>
	<link rel="stylesheet" type="text/css" href="css/basics.css" />
</head>
<body>
	
	<div class="container">
		<header>
			<a href="#" class="logo"><img src="img/cadhaclogo.svg" alt="CADHAC"></a>
		</header>
		<article>
			<table>
				<thead><tr>
					<th width="85%">Plantilla</th>
					<th width="15%" align="center">HTML</th>
				</tr></thead>
				<tbody>
					<?php
						$exclude = ['index.php', 'footer.php', 'header.php', 'sidebar.php', 'includes.php', 'menu.php', ];
						$files = scandir('./');
						foreach ($files as $phpfile):
							if((strpos($phpfile, '.html')|| strpos($phpfile, '.php')) && !in_array($phpfile, $exclude)):
					?>
					<tr>
						<td><a href="<?= $phpfile ?>" target="_blank"><?= $phpfile ?></a></td>
						<td><a href="<?= $phpfile ?>" target="_blank" class="glyphicon glyphicon-ok-circle"></a></td>
					</tr>
					<?php endif; endforeach; ?>
				</tbody>
			</table>

		</article>
	</div>

</body>
</html>
