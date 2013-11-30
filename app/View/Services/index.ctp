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

	foreach ($services as $id => $service) {

		$service['Service']['url1'] = "<a href='http://".$service['Service']['url1']."/'>".$service['Service']['url1']."</a>";
		$service['Service']['url2'] = "<a href='//".$service['Service']['url2']."/'>".$service['Service']['url2']."</a>";

		$editURI = "<a href='/services/edit/".$service['Service']['id']."'>EDIT</a>";
		$deleteURI = "<a href='/services/delete/".$service['Service']['id']."'>DELETE</a>";

		$html .= <<<EOF

	<tr>
		<td>{$service['Service']['id']}</td>
		<td>{$service['Service']['server_id']}</td>
		<td>{$service['Service']['name']}</td>
		<td>{$service['Service']['internalport']}</td>
		<td>{$service['Service']['externalport']}</td>
		<td>{$service['Service']['description']}</td>
		<td>{$service['Service']['url1']}</td>
		<td>{$service['Service']['url2']}</td>
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
