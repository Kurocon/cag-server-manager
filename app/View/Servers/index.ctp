<?php


function getServerTable($servers){

	$html = <<<EOF
<table>
	<tr>
		<th>Server ID</th>
		<th>Name</th>
		<th>Hostname</th>
		<th>Type</th>
		<th>Internal IP</th>
		<th>External Address</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
EOF;

	foreach ($servers as $id => $server) {

		$server['Server']['name'] = "<a href='/servers/detail/".$server['Server']['id']."'>".$server['Server']['name']."</a>";
		$server['Server']['internal'] = "<a href='http://".$server['Server']['internal']."/'>".$server['Server']['internal']."</a>";
		$server['Server']['external'] = "<a href='http://".$server['Server']['external']."/'>".$server['Server']['external']."</a>";
		$server['Server']['hostname'] = "<a href='//".$server['Server']['hostname']."/'>".$server['Server']['hostname']."</a>";

		$editURI = "<a href='/servers/edit/".$server['Server']['id']."'>EDIT</a>";
		$deleteURI = "<a href='/servers/delete/".$server['Server']['id']."'>DELETE</a>";

		$html .= <<<EOF

	<tr>
		<td>{$server['Server']['id']}</td>
		<td>{$server['Server']['name']}</td>
		<td>{$server['Server']['hostname']}</td>
		<td>{$server['Server']['type']}</td>
		<td>{$server['Server']['internal']}</td>
		<td>{$server['Server']['external']}</td>
		<td>{$editURI}</td>
		<td>{$deleteURI}</td>
	</tr>

EOF;

	}

	$html .= "</table>";
	return $html;

}

function getPageMenu(){
	$addURI = "<a href='/servers/add/'>Add Server</a>";

	$html = <<<EOF

<ul class="pageMenu">
	<li class="pageMenuItem">{$addURI}</li>
</ul>

EOF;

	return $html;

}
?>
<div id="title">
	<h3>Server List</h3>
</div>
<div id="menu">
	<?php echo getPageMenu(); ?>
</div>
<div id="pageContent">
	<?php echo getServerTable($servers); ?>
</div>
