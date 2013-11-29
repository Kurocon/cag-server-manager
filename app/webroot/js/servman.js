var image1Loaded = false;
var image2Loaded = false;
var image3Loaded = false;
var image4Loaded = false;
var image5Loaded = false;
var image6Loaded = false;
var image7Loaded = false;
var image8Loaded = false;
var image9Loaded = false;
var image10Loaded = false;
var image11Loaded = false;
var image12Loaded = false;

function displayImage(id){
	$(id).css("display", "inline");
	$(id.substring(0,7)+"Cover"+id.substring(7)).css("display", "none");
	$(id.substring(0,7)+"Image"+id.substring(7)).css("display", "none");
	switch(id){
		case "#status1":
			image1Loaded = true;
			break;
		case "#status2":
			image2Loaded = true;
			break;
		case "#status3":
			image3Loaded = true;
			break;
		case "#status4":
			image4Loaded = true;
			break;
		case "#status5":
			image5Loaded = true;
			break;
		case "#status6":
			image6Loaded = true;
			break;
		case "#status7":
			image7Loaded = true;
			break;
		case "#status8":
			image8Loaded = true;
			break;
		case "#status9":
			image9Loaded = true;
			break;
		case "#status10":
			image10Loaded = true;
			break;
		case "#status11":
			image11Loaded = true;
			break;
		case "#status12":
			image12Loaded = true;
			break;
	}
}

var totalSeconds = 10;
var label1;
var label2;
var label3;
var label4;
var label5;
var label6;
var label7;
var label8;
var label9;
var label10;
var label11;
var label12;
var interval;

$(document).ready(function(){

	var timeout = setTimeout(checkImages, 10000);

	totalSeconds = 9;
	label1 = document.getElementById('statusCover1');
	label2 = document.getElementById('statusCover2');
	label3 = document.getElementById('statusCover3');
	label4 = document.getElementById('statusCover4');
	label5 = document.getElementById('statusCover5');
	label6 = document.getElementById('statusCover6');
	label7 = document.getElementById('statusCover7');
	label8 = document.getElementById('statusCover8');
	label9 = document.getElementById('statusCover9');
	label10 = document.getElementById('statusCover10');
	label11 = document.getElementById('statusCover11');
	label12 = document.getElementById('statusCover12');
    interval = setInterval(setTime, 1000);

});

function setTime()
{
    --totalSeconds;
    if(totalSeconds>=0){
    	label1.innerHTML = pad(totalSeconds);
    	label2.innerHTML = pad(totalSeconds);
    	label3.innerHTML = pad(totalSeconds);
    	label4.innerHTML = pad(totalSeconds);
    	label5.innerHTML = pad(totalSeconds);
    	label6.innerHTML = pad(totalSeconds);
    	label7.innerHTML = pad(totalSeconds);
    	label8.innerHTML = pad(totalSeconds);
    	label9.innerHTML = pad(totalSeconds);
    	label10.innerHTML = pad(totalSeconds);
    	label11.innerHTML = pad(totalSeconds);
    	label12.innerHTML = pad(totalSeconds);
	}else{
		label1.innerHTML = "";
		label2.innerHTML = "";
		label3.innerHTML = "";
		label4.innerHTML = "";
		label5.innerHTML = "";
		label6.innerHTML = "";
		label7.innerHTML = "";
		label8.innerHTML = "";
		label9.innerHTML = "";
		label10.innerHTML = "";
		label11.innerHTML = "";
		label12.innerHTML = "";
		clearInterval(interval);
	}
}

function pad(val)
{
    return val;
}

function checkImages(){
	if(!image1Loaded){
		$("#status1").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image2Loaded){
		$("#status2").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image3Loaded){
		$("#status3").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image4Loaded){
		$("#status4").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image5Loaded){
		$("#status5").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image6Loaded){
		$("#status6").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image7Loaded){
		$("#status7").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image8Loaded){
		$("#status8").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image9Loaded){
		$("#status9").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image10Loaded){
		$("#status10").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image11Loaded){
		$("#status11").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
	if(!image12Loaded){
		$("#status12").attr("src", "http://irc.ctrlaltgame.com/status-offline.png");
	}
}

function isOnline(server, server_id){
	req = new XMLHttpRequest();
	req.open("GET", server);
	req.onerror = function(){ changeStatus(server_id, "XML") };
	req.onload = function(){ changeStatus(server_id, req.status) };
	$().delay(1000);
	req.send();
}

function changeStatus(server, status){

	var filename = "status.png";

	switch(status){
		case 0:
			filename = "status-offline.png";
			break;
		case 200:
			filename = "status.png";
			break;
		default:
			filename = "status-error.png";
	}

	$("#status"+server).attr("src", "/img/"+filename);
	$("#code"+server).text(status);
}

function toggleType(){
	$('.hidden').toggle(1000);
}