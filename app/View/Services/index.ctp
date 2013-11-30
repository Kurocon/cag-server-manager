<?php


function getServiceTable($services){

	$html = <<<EOF
<table>
	<tr>
		<th>Service ID</th>
		<th>Server ID</th>
		<th>Name</th>
		<th>Internal Port</th>
		<th>External Port</th>
		<th>Description</th>
		<th>URL 1</th>
		<th>URL 2</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
EOF;

	foreach ($servers as $id => $server) {

		$server['Service']['url1'] = "<a href='http://".$server['Service']['url1']."/'>".$server['Service']['url1']."</a>";
		$server['Service']['url2'] = "<a href='//".$server['Service']['url2']."/'>".$server['Service']['url2']."</a>";

		$editURI = "<a href='/services/edit/".$server['Service']['id']."'>EDIT</a>";
		$deleteURI = "<a href='/services/delete/".$server['Service']['id']."'>DELETE</a>";

		$html .= <<<EOF

	<tr>
		<td>{$server['Service']['id']}</td>
		<td>{$server['Service']['server_id']}</td>
		<td>{$server['Service']['name']}</td>
		<td>{$server['Service']['internalport']}</td>
		<td>{$server['Service']['externalport']}</td>
		<td>{$server['Service']['description']}</td>
		<td>{$server['Service']['url1']}</td>
		<td>{$server['Service']['url2']}</td>
		<td>{$editURI}</td>
		<td>{$deleteURI}</td>
	</tr>

EOF;

	}

	$html .= "</table>";
	return $html;

}

function getPageMenu(){
	$addURI = "<a href='/services/add/'>Add Service</a>";

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
	<?php echo getServiceTable($services); ?>
</div>
