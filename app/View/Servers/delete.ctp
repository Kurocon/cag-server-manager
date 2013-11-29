<p>Are you sure you want to delete this server?</p>

<?php

$name = $server['Server']['name'];
$host = $server['Server']['hostname'];
$type = $server['Server']['type'];
$intr = $server['Server']['internal'];
$extr = $server['Server']['external'];

$html = <<<EOF

<table>
	<tr>
		<td><strong>Name</strong></td>
		<td>{$name}</td>
	</tr>
	<tr>
		<td><strong>Hostname</strong></td>
		<td>{$host}</td>
	</tr>
	<tr>
		<td><strong>Type</strong></td>
		<td>{$type}</td>
	</tr>
	<tr>
		<td><strong>Internal IP</strong></td>
		<td>{$intr}</td>
	</tr>
	<tr>
		<td><strong>External Address</strong></td>
		<td>{$extr}</td>
	</tr>
</table>

EOF;

echo $html;

echo $this->Form->create('Server', array('type' => 'post'));
echo $this->Form->input('you_sure', array('type' => 'checkbox', 'label' => 'Yes, I am sure and I know this will DELETE my server.'));
echo $this->Form->hidden('id');
echo $this->Form->end("Delete");

?>