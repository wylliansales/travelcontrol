$(document).ready(function(){
	checkURL();

	$('.link').click(function (){	
		checkURL(this.hash);
	});

	setInterval("checkURL()", 250);
});

var lasturl="";

function checkURL(hash)
{

	if(!hash) hash = window.location.hash;

	if(hash != lasturl) {

		lasturl = hash;
		loadPage(hash);
	}
}

function loadPage(url) 
{
	url = url.replace('#/','');
	url = url.split("/");	
	$.ajax({
		type: "POST",
		url: "../app.php",
		data: 'modulo='+ url[0] +'&acao=' + url[1],
		dataType: "html",
		success: function(data) {			
			if(parseInt(data) != 0) {				
				$('.content-page').html(data);				
			}
		}
	})

}