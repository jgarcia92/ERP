<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles4.css"><!--Link to CSS file-->
<meta name="viewport" content="initial-scale=1.0, user-scalable=yes">
<meta charset="utf-8">
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script><!--Script for the google map-->
<script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 20,
    center: new google.maps.LatLng(18.519211, 73.815004)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="content"><!--div tag for content-->
<div id="content_cen"><!--div tag to keep the content centered-->
<div id="content_sup"><!--div tag which contains the actual content-->
<h1>Always ready to listen.</h1>
<table>
<tr><td><h2>Address:</h2><td><h2>MIT COLLEGE, IT DEPARTMENT, KOTHRUD, PUNE</h2></tr>
<tr><td><h2>Contact:</h2><td><h2>ess@ess.com</h2></tr>
</table>
<div id="map-canvas"></div><!--Include map in the html document-->
</div>
</div>
</div>
<?php include('includes/footer.php');?><!--php file in folder includes-->
</body>
</html>
