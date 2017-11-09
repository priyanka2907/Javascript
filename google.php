<html>

<!--Today we have learn how to add google map with marker option: -->
<!--we required google map cdn file and lat long  20.5937,78.9629 -->

<!-- Add Info window on marker -->
<script src = "https://maps.googleapis.com/maps/api/js"></script>
<script>

function MapLaod()
{
	
	
	//alert("Inside Map Load Function");
	
	// now we define map
	var mapvariable={
		
		center: new google.maps.LatLng(20.5937,78.9629),
		zoom:6
	}
	var map= new google.maps.Map(document.getElementById('MapDiv'),mapvariable);
	
	// now define marker
	
	var marker= new google.maps.Marker({ // marker function
		
		position: new google.maps.LatLng(20.5937,78.9629), // add marker position
		map:map,  // map variable 
		
	});
	
	// here alredy one marker is define now add info window
	
	var message="Welcome! Inside infowindow Testing ";
	
	var infowindow= new google.maps.InfoWindow({
		
		content:message
		
		
	});
	marker.addListener('click', function(){
		
		infowindow.open(map,marker); // here open infowindow pass two para like map & marker
		
		
	});
		
}

</script>
<body onload="MapLaod();">


<h1>
Google Map Example
</h1>
<!-- div with userdefine height width-->
<div id="MapDiv" style="width:2000px;height:900px">


</div>
</body>

</html>