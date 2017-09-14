<!-- CODIGO GOOGLE MAPS -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
		var oicMark = new google.maps.LatLng(-23.57866, -46.64553);
        var map_canvas = document.getElementById('map_canvas');
		map_canvas.style.zIndex = 1;
        var map_options = {
          center: oicMark,
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
			var marker = new google.maps.Marker({
			  position: oicMark,
			  map: map,
			  title: 'OIC - Organização Internacional de Consciencioterapia'
			}
		);
		
		var legend = document.createElement('legend');
        legend.id = 'legend';
        var content = [];
        content.push('<b>OIC - São Paulo </b><br />');
		content.push('Condomínio Ibirapuera Central Park, Rua Estela, 515, conjunto 92H.<br />');
		content.push('São Paulo / SP - Brasil<br />');
        legend.innerHTML = content.join('');
        legend.index = 1;
        map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(legend);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
<!-- END CODIGO GOOGLE MAPS -->
<style>
/* DIV do mapa em si*/
#map_canvas {
	width: 790px;
	height: 300px;
	display: table;
    margin: 0 auto;
}

#centralizando_mapa{
	width:100$%;
}
	
#legend {
	background: white;
	padding: 10px;
	margin: 5px;
	font-size:14px;
	line-height:18px;
	color:#333;
	-webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 1);
	-moz-box-shadow:    0px 0px 15px 0px rgba(0, 0, 0, 1);
	box-shadow:         0px 0px 15px 0px rgba(0, 0, 0, 1);
}
</style>
<div id="centralizando_mapa">
	<div id="map_canvas">
	</div>
</div>