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

	<h4>Server Name:</h4>
	<p>{$server_name}</p>
	<h4>Server Type:</h4>
	<p>{$server_type}</p>
	<h4>Server Hostname:</h4>
	<p>{$server_host}</p>
	<h4>Internal IP:</h4>
	<p>{$server_intr}</p>
	<h4>External Address:</h4>
	<p>{$server_extr}</p>
	<h4>Services:</h4>
	<p>{$server_serv}</p>

EOF;

	return $html;
}

?>

<div id="title">
	<h2>Server Details: <?php echo $server['Server']['name']; ?></h2>
</div>
<div id="menu">
	<?php echo getPageMenu($server); ?>
</div>
<div id="pageContent">
	<?php echo getServerDetails($server); ?>
</div>
