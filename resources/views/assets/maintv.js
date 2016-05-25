$(document).ready(function(){

	var $container = $('#container');
	$("body").transition({opacity : 100, delay:300},1000);
	$("#pixie").transition({opacity : 100, delay:500},1000);
	var mix = $('#scoreboard').mixItUp({
		controls: {
			enable: false
		}
	});
	fetch();
	$('#scoreboard').mixItUp('sort','rank:asc');
	
	function fetch(){
	 		$.ajax({
					url: "scoreajax.php",
					type: "GET",
					dataType: "json"
				}).done(function(data){
					for(var i = 1; i<=10; i++){
						$("#flavor"+i).attr('data-rank',data['flavor'+i+'rank']);
						$("#flavor"+i+"rank").html(data['flavor'+i+'rank']);
						$("#flavor"+i+"score").html(data['flavor'+i+'score']);
					}
					scoresort();
				});
	}
	function scoresort(){
		$('#scoreboard').mixItUp('sort','rank:asc');
	}
	var inter = setInterval(fetch,1000);
	setTimeout(startvid,170000);
	function startvid(){
		clearTimeout(inter);
		$("#video").fadeIn(1000);
		$("#vid1").get(0).play();
		$("#vid1").get(0).onended = function(e){
			document.location = "tv.php";
		}
		$("#song").animate({volume: 0}, 1000, function () {
                muted = true;
            });
		
	}
	
	
	function showclock(){
		var Digital=new Date()
		var hours=Digital.getHours()
		var minutes=Digital.getMinutes()
		var seconds=Digital.getSeconds()
		var dn="AM" 
		if (hours>=12)
		dn="PM"
		if (hours>12)
		hours=hours-12
		if (hours==0)
		hours=12
		if (minutes<=9)
		minutes="0"+minutes
		if (seconds<=9)
		seconds="0"+seconds
		document.getElementById("clockshow").innerHTML = hours+":"+minutes+":"
		+seconds+" "+dn;
		setTimeout(showclock,1000);
	}
	showclock();
	
});
