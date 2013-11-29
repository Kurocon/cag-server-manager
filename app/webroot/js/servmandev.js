var server1Loaded = false;
var server2Loaded = false;
var server3Loaded = false;
var server4Loaded = false;

var pc1Loaded = false;
var pc2Loaded = false;
var pc3Loaded = false;
var pc4Loaded = false;

var camera1Loaded = false;
var camera2Loaded = false;

var other1Loaded = false;
var other2Loaded = false;




function displayImage(type, id){
	console.log("Displaying type="+type+" and id="+id);
	$("#"+type+"Status"+id).css("display", "inline");
	$("#"+type+"StatusCover"+id).css("display", "none");
	$("#"+type+"StatusImage"+id).css("display", "none");
	switch(type){
		case "server":
			switch(id){
				case 1:
					server1Loaded = true;
					break;
				case 2:
					server2Loaded = true;
					break;
				case 3:
					server3Loaded = true;
					break;
				case 4:
					server4Loaded = true;
					break;
			}
			break;
		case "pc":
			switch(id){
				case 1:
					pc1Loaded = true;
					break;
				case 2:
					pc2Loaded = true;
					break;
				case 3:
					pc3Loaded = true;
					break;
				case 4:
					pc4Loaded = true;
					break;
			}
			break;
		case "camera":
			switch(id){
				case 1:
					camera1Loaded = true;
					break;
				case 2:
					camera2Loaded = true;
					break;
			}
			break;
		case "other":
			switch(id){
				case 1:
					other1Loaded = true;
					break;
				case 2:
					other2Loaded = true;
					break;
			}
			break;
	}
}

var totalSeconds = 10;
var interval;

var labelServer1;
var labelServer2;
var labelServer3;
var labelServer4;

var labelPC1;
var labelPC2;
var labelPC3;
var labelPC4;

var labelCamera1;
var labelCamera2;

var labelOther1;
var labelOther2;

$(document).ready(function(){

	var timeout = setTimeout(checkImages, 10000);

	totalSeconds 	= 9;
	interval 		= setInterval(setTime, 1000);
	labelServer1 	= document.getElementById('serverStatusCover1');
	labelServer2 	= document.getElementById('serverStatusCover2');
	labelServer3 	= document.getElementById('serverStatusCover3');
	labelServer4 	= document.getElementById('serverStatusCover4');
	labelPC1 		= document.getElementById('pcStatusCover1');
	labelPC2 		= document.getElementById('pcStatusCover2');
	labelPC3 		= document.getElementById('pcStatusCover3');
	labelPC4 		= document.getElementById('pcStatusCover4');
	labelCamera1 	= document.getElementById('cameraStatusCover1');
	labelCamera2 	= document.getElementById('cameraStatusCover2');
	labelOther1 	= document.getElementById('otherStatusCover1');
	labelOther2 	= document.getElementById('otherStatusCover2');

});

function setTime()
{
    --totalSeconds;
    if(totalSeconds>=0){
    	labelServer1.innerHTML = totalSeconds;
    	labelServer2.innerHTML = totalSeconds;
    	labelServer3.innerHTML = totalSeconds;
    	labelServer4.innerHTML = totalSeconds;

    	labelPC1.innerHTML = totalSeconds;
    	labelPC2.innerHTML = totalSeconds;
    	labelPC3.innerHTML = totalSeconds;
    	labelPC4.innerHTML = totalSeconds;

    	labelCamera1.innerHTML = totalSeconds;
    	labelCamera2.innerHTML = totalSeconds;

    	labelOther1.innerHTML = totalSeconds;
    	labelOther2.innerHTML = totalSeconds;
	}else{
		clearInterval(interval);

		labelServer1.innerHTML = "";
		labelServer2.innerHTML = "";
		labelServer3.innerHTML = "";
		labelServer4.innerHTML = "";

		labelPC1.innerHTML = "";
		labelPC2.innerHTML = "";
		labelPC3.innerHTML = "";
		labelPC4.innerHTML = "";

		labelCamera1.innerHTML = "";
		labelCamera2.innerHTML = "";

		labelOther1.innerHTML = "";
		labelOther2.innerHTML = "";
	}
}

function checkImages(){
	if(!server1Loaded){
		$("#serverStatus1").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!server2Loaded){
		$("#serverStatus2").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!server3Loaded){
		$("#serverStatus3").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!server4Loaded){
		$("#serverStatus4").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}

	if(!pc1Loaded){
		$("#pcStatus1").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!pc2Loaded){
		$("#pcStatus2").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!pc3Loaded){
		$("#pcStatus3").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!pc4Loaded){
		$("#pcStatus4").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}

	if(!camera1Loaded){
		$("#cameraStatus1").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!camera2Loaded){
		$("#cameraStatus2").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}

	if(!other1Loaded){
		$("#otherStatus1").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!other2Loaded){
		$("#otherStatus2").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
}

function toggleType(){
	$('.hidden').toggle(1000);
}