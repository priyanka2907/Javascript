<!DOCTYPE html>
<html>
   
   <head>
      <script src = "https://maps.googleapis.com/maps/api/js"></script>
      
      <script>
         function loadMap() {
			
            var mapOptions = {
               center:new google.maps.LatLng(19.373341, 78.662109),
               zoom:5
            }
				
            var map = new google.maps.Map(document.getElementById("sample"),mapOptions);
            
             var marker = new google.maps.Marker({
               position: new google.maps.LatLng(17.088291, 78.442383),
               map: map,
            }); 
         }
      </script>
      
   </head>
   
   <body onload = "loadMap()">
      <div id = "sample" style = "width:1880px; height:900px;"></div>
   </body>
   
</html>