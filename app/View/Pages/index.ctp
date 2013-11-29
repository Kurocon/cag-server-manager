<?php
	echo $this->Html->css("servman");
	echo $this->Html->script("http://code.jquery.com/jquery-1.10.2.min.js");
	echo $this->Html->script("servman");

	$applejackServers = array(
		'www' => 'http://applejack.ctrlaltgame.com',
		'ftp' => 'ftp://irc.ctrlaltgame.com',
		'ssh' => 'irc.ctrlaltgame.com:22',
		'znc' => 'http://znc.ctrlaltgame.com',
		'rac' => 'http://rac1.ctrlaltgame.com',
		'om' => 'http://om1.ctrlaltgame.com'
	);

	$twilightServers = array(
		'www' => 'http://twilight.ctrlaltgame.com',
		'ftp' => 'ftp://irc.ctrlaltgame.com:32021',
		'ssh' => 'irc.ctrlaltgame.com:32022',
		'SABnzbd' => 'http://sabnzbd.ctrlaltgame.com',
		'CouchPotato' => 'http://couchpotato.ctrlaltgame.com',
		'SickBeard' => 'http://sickbeard.ctrlaltgame.com',
		'rac' => 'http://rac2.ctrlaltgame.com',
		'om' => 'http://om2.ctrlaltgame.com'
	);

	$rbdServers = array(
		'www' => 'http://rainbowdash.ctrlaltgame.com',
		'rac' => 'http://rac3.ctrlaltgame.com',
		'om' => 'http://om3.ctrlaltgame.com'
	);

	$fluttershyServers = array(
		'www' => 'http://fluttershy.ctrlaltgame.com',
		'rac' => 'http://rac4.ctrlaltgame.com',
		'om' => 'http://om4.ctrlaltgame.com'
	);

	$celestiaServers = array(
		'www' => 'http://celestia.ctrlaltgame.com',
		'ftp' => 'ftp://irc.ctrlaltgame.com:30021',
		'ssh' => 'irc.ctrlaltgame.com:30022',
		'PLEX' => 'http://plex.ctrlaltgame.com'
	);

	$lunaServers = array(
		'www' => 'http://luna.ctrlaltgame.com'
	);

	$tabletServers = array(
		'www' => 'http://octavia.ctrlaltgame.com'
	);

	$phoneServers = array(
		'www' => 'http://vinylscratch.ctrlaltgame.com'
	);

	$piServers = array(
		'www' => 'http://pinkiepi.ctrlaltgame.com',
		'ftp' => 'irc.ctrlaltgame.com:39021',
		'ssh' => 'irc.ctrlaltgame.com:39022'
	);

	$wifiServers = array(
		'www' => 'http://derpy.ctrlaltgame.com',
		'ssh' => 'irc.ctrlaltgame.com:40022'
	);

	$sensationServers = array(
		'www' => 'http://discord.ctrlaltgame.com',
		'cam' => 'http://cam.ctrlaltgame.com',
		'sftp' => 'irc.ctrlaltgame.com:41021',
		'ssh' => 'irc.ctrlaltgame.com:41022',
		'vnc' => 'irc.ctrlaltgame.com:41590'
	);
	
	$wildfireServers = array(
		'www' => 'http://chrysalis.ctrlaltgame.com',
		'cam' => 'http://cam2.ctrlaltgame.com',
		'sftp' => 'irc.ctrlaltgame.com:42021',
		'ssh' => 'irc.ctrlaltgame.com:42022',
		'vnc' => 'irc.ctrlaltgame.com:42590'
	);

?>

<h2>Ctrl-Alt-GAME Server Network!</h2>
<h3>Server List</h3>
<table>
	<tr>
		<th class="mediumColumn"><a onClick='$(".hidden").toggle(1000)' href='#'>Server name</a></th>
		<th class="mediumColumn hidden" style="display:none;">Type / ID</th>
		<th>Running</th>
		<th class="smallColumn">Status</th>
	</tr>

<?php
	
	$count = 12;
	//$name = "CAG-Serv-";
	$name = array(
		0 => "Applejack",
		1 => "Twilight",
		2 => "RainbowDash",
		3 => "Fluttershy",
		4 => "Celestia",
		5 => "Luna",
		6 => "Octavia",
		7 => "VinylScratch",
		8 => "PinkiePi",
		9 => "Derpy",
		10 => "Discord",
		11 => "Chrysalis"
		);
	$type = array(
		0 => "Server-1",
		1 => "Server-2",
		2 => "Server-3",
		3 => "Server-4",
		4 => "PC",
		5 => "Laptop",
		6 => "Tablet",
		7 => "Phone",
		8 => "RaspberryPi",
		9 => "Wifi",
		10 => "Camera-1",
		11 => "Camera-2"
		);
	$shortname = "cag";
	$rac = "rac";
	$url = ".ctrlaltgame.com";

	for ($i=0; $i < $count; $i++) { 
		$j=$i;

		switch($i){
			case 0:
				$varname = "applejackServers";
				break;
			case 1:
				$varname = "twilightServers";
				break;
			case 2:
				$varname = "rbdServers";
				break;
			case 3:
				$varname = "fluttershyServers";
				break;
			case 4:
				$varname = "celestiaServers";
				break;
			case 5:
				$varname = "lunaServers";
				break;
			case 6:
				$varname = "tabletServers";
				break;
			case 7:
				$varname = "phoneServers";
				break;
			case 8:
				$varname = "piServers";
				break;
			case 9:
				$varname = "wifiServers";
				break;
			case 10:
				$varname = "sensationServers";
				break;
			case 11:
				$varname = "wildfireServers";
				break;
		}

		$array = $$varname;

		$services = "";
		foreach ($array as $service => $url) {
			$services .= "<a href='$url' target='_BLANK'>$service</a>  ";
		}
		$image = "<img id ='status".($i+1)."' src='http://".strtolower($name[$i]).".ctrlaltgame.com/status.png' onLoad='displayImage(\"#status".($i+1)."\")'/>";
		$status = "<span class='statusCode' id='code".$i."'>000</span>";

		echo "
	<tr class='row'>
		<td class='mediumColumn'>".$name[$i]."</td>
		<td class='mediumColumn hidden' style='display:none;'>".$type[$i]."</td>
		<td>".$services."</td>
		<td class='smallColumn'>
			".$image."
			<div id='statusImage".($i+1)."'><img src='http://irc.ctrlaltgame.com/status-pending.png' /></div>
			<div id='statusCover".($i+1)."'>9</div>
		</td>
	</tr>";
	}

?>

</table>