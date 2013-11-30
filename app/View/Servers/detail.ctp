<?php

print_r($server);

function getPageMenu($server){
	$editURI = "<a href='/servers/edit/".$server['Server']['id']."'>EDIT</a>";
	$deleteURI = "<a href='/servers/delete/".$server['Server']['id']."'>DELETE</a>";

	$html = <<<EOF

<ul class="pageMenu">
	<li class="pageMenuItem">{$editURI}</li>
	<li class="pageMenuItem">{$deleteURI}</li>
</ul>

EOF;

	return $html;
}

function getServerDetails($server){
	
	$server_name = $server['Server']['name'];
	$server_type = $server['Server']['type'];
	$server_host = $server['Server']['hostname'];
	$server_intr = $server['Server']['internal'];
	$server_extr = $server['Server']['external'];
	$server_serv = "Unknown";

	$html = <<<EOF

	<h3>Server Name:</h3>
	<p>{$server_name}</p>
	<h3>Server Type:</h3>
	<p>{$server_type}</p>
	<h3>Server Hostname:</h3>
	<p>{$server_host}</p>
	<h3>Internal IP:</h3>
	<p>{$server_intr}</p>
	<h3>External Address:</h3>
	<p>{$server_extr}</p>
	<h3>Services:</h3>
	<p>{$server_serv}</p>

EOF;

	return $html;
}

?>

<div id="title">
	<h2>Server Details: <?php echo $server['Server']['name']; ?></h2>
</div>
<div id="menu">
	<?php echo getPageMenu(); ?>
</div>
<div id="pageContent">
	<?php echo getServerDetails($server); ?>
</div>
