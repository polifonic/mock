<?php
$wikis = array(
	'a' => '',
	'b' => '',
	'c' => 'custom.domain.dev',
);

$host = $_SERVER['HTTP_HOST'];

foreach ($wikis as $domain => $custom_host) {
	if ($host == $custom_host) {
		$wiki = $domain;
		break;
	} else if ($host == $domain.'.polifonic.dev') {
		$wiki = $domain;
		break;
	}
}

if (!isset($wiki)) {
	header('Location: http://www.polifonic.dev');
	die();
}
?>

<html>
<body>
<h1>app: polifonic/wiki</h1>
<h2>wiki: <?php echo $wiki; ?></h2>
</body>
</html>
