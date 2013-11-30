<p>Are you sure you want to delete this service?</p>

<?php

$name = $service['Service']['name'];
$intr = $service['Service']['internalport'];
$extr = $service['Service']['externalport'];
$desc = $service['Service']['description'];
$url1 = $service['Service']['url1'];
$url2 = $service['Service']['url2'];

$html = <<<EOF

<table>
	<tr>
		<td><strong>Name</strong></td>
		<td>{$name}</td>
	</tr>
	<tr>
		<td><strong>Internal Port</strong></td>
		<td>{$intr}</td>
	</tr>
	<tr>
		<td><strong>External Port</strong></td>
		<td>{$extr}</td>
	</tr>
	<tr>
		<td><strong>Description</strong></td>
		<td>{$descr}</td>
	</tr>
	<tr>
		<td><strong>URL 1</strong></td
		<td>{$url1}</td>
	</tr>
	<tr>
		<td><strong>URL 2</strong></td>
		<td>{$url2}</td>
	</tr>
</table>

EOF;
?>

<p>On this server?</p>

<?php

$sName = $server['Server']['name'];
$sExtr = $server['Server']['external'];

$html .= <<<EOF

<table>
	<tr>
		<td><strong>Server Name</strong></td
		<td>{$sName}</td>
	</tr>
	<tr>
		<td><strong>Server External URL</strong></td>
		<td>{$sExtr}</td>
	</tr>
</table>

EOF;

echo $html;

echo $this->Form->create('Service', array('type' => 'post'));
echo $this->Form->input('you_sure', array('type' => 'checkbox', 'label' => 'Yes, I am sure and I know this will DELETE my service.'));
echo $this->Form->hidden('id');
echo $this->Form->end("Delete");

?>