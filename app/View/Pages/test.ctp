<?php
	echo $this->Html->css("servmandev");
	echo $this->Html->script("http://code.jquery.com/jquery-1.10.2.min.js");
	echo $this->Html->script("servmandev");

	function tableHeader(){
		echo '<th class="mediumColumn">Server name</th>
		<th class="mediumColumn">Type / ID</th>
		<th class="smallColumn">Overall Status</th>';
	}
?>

<h2>Ctrl-Alt-GAME Server Network!</h2>
<table>
	<tr>
		<h5>Servers</h5>
		<?php tableHeader(); ?>
	</tr>
	<?php
		renderServers($servers, "server");
	?>
</table>
<br />
<table>
	<tr>
		<h5>PCs / Laptops / Portable</h5>
		<?php tableHeader(); ?>
	</tr>
	<?php
		renderServers($pcs, "pc");
	?>
</table>
<br />
<table>
	<tr>
		<h5>Cameras</h5>
		<?php tableHeader(); ?>
	</tr>
	<?php
		renderServers($cameras, "camera");
	?>
</table>
<br />
<table>
	<tr>
		<h5>Other stuff</h5>
		<?php tableHeader(); ?>
	</tr>
	<?php
		renderServers($others, "other");
	?>
</table>

<?php

function renderServers($servers, $type){
	$html = "";

	foreach ($servers as $server) {
		$html .= "<tr>
	<td class='mediumColumn'>".$server['name']."</td>
	<td class='mediumColumn'>".$server['type']."</td>
	<td class='smallColumn'>".serverStatus($server, $type)."</td>
</tr>		";
	}
	echo $html;
}

function serverStatus($server, $type){

	if(!empty($server['services']['www'])){
		return "
	<img id ='".$type."Status".$server['id']."' src='".$server['services']['www']."/status.png' onLoad='displayImage(\"".$type."\",".$server['id'].")'/>
	<div id='".$type."StatusImage".$server['id']."'><img src='http://irc.ctrlaltgame.com/status-pending.png' /></div>
	<div id='".$type."StatusCover".$server['id']."'>9</div>
";
	}else{
		return "<img id='".$type."Status".$server['id']."' src='http://irc.ctrlaltgame.com/status-error.png' onLoad='displayImage(\"".$type."\",".$server['id'].")' />
		<div id='".$type."StatusImage".$server['id']."'><img src='http://irc.ctrlaltgame.com/status-pending.png' /></div>
		<div id='".$type."StatusCover".$server['id']."'>9</div>";
	}
}

?>