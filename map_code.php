<?php
session_start();
require('connection.php');
$sql = "SELECT * from user WHERE userID = ".$_SESSION['studentID'];
$result =  $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()){
	  $location = $row['location'];
  }
}

$sql = "SELECT * from building WHERE buildingID > 0";
$result =  $conn->query($sql);
if ($result->num_rows > 0) {
  $buildings = array();
  $n = 0;
  while ($row = $result->fetch_assoc()){
    $id = $row['buildingID'];
    $name = $row['name'];
    $info = $row['info'];
    $latitude = floatval($row['latitude']);
    $longitude = floatval($row['longitude']);
    $buildings[$n] = array($id, $name, $info, $latitude, $longitude);
    $n++;
  }

} else {
  echo $sql." ".$conn->error;
}
$sql = "SELECT * from user WHERE userID = ".$_SESSION['studentID'];
$result =  $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()){
    $currentPoints = $row['points'];
  }
}
?>
<!-- Author: Steven Reynolds & Keith Harrison & Anneliese Travis
Last updated: 25/02 15:12
Added changes from html to php pages
-->
<html>
  <head>

    <meta charset="UTF-8">
		<title>Map</title>
    <link href="style_sheet.css" rel="stylesheet" type="text/css">
	  <link rel="shortcut icon" type="image/png" href="images/findExeterLogo.png"/>
    
  </head>
 
  <script>

    var loc = <?php echo $location; ?>;
	console.log(loc);
alert("Goto the new marker and scan the QR code!");
    var buildings = {}
    // pass PHP array to JavaScript array
    var prep = <?php echo json_encode($buildings); ?>;
    var n = <?php echo $n; ?>;
    var len = 0;
    for (i = 0; i < n; i++) {
    buildings[i] = {id: prep[i][0], name: prep[i][1], info:prep[i][2],  lat:prep[i][3], lng:prep[i][4]};
    len++;
	  console.log(buildings[i]);
  }
    
    //To access the name of (e.g) the second building in the cycle, use buildings[2].name
    </script>
		   <?php
  include('header.php');
  ?>
  <body class="body" id="body">
  

    <!--The div element for the map -->

    <div id="fullMapDisplay" class="container"></div>
	<p class="score"><?php echo $_SESSION['username']; ?>'s current score: <span id="points"><span> Points </p>
    <script>
    //Initialize and add the map
    function initMap() {

      var center = { lat: 50.735801, lng:  -3.533297};
      var innovation = { lat: 50.738045, lng:  -3.530514};

      // The map, centered at the Library
      var map = new google.maps.Map(
          document.getElementById('fullMapDisplay'), {zoom: 16.5,
        center: center,
        mapTypeId: 'hybrid'
        //gestureHandling: 'none', 
        //zoomControl:true
        });
    
      var customStyled = [{
        featureType: "all",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
      }];
      map.set('styles',customStyled);

      // The markers, positioned at Library
      
      for(var i = 0;i<loc;i++){
        var location = {lat: buildings[i].lat,lng: buildings[i].lng};
        var name = buildings[i].name;
        var info = buildings[i].info;
        addMarker(location,map,name,info);
        console.log(buildings[i].name);
      console.log("location");
      }
      
    }

    function addMarker(location,map,label,information){
      var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading">'+label+'</h1>'+
        '<div id="bodyContent">'+
        '<p>'+information+'</p>'+
        '</div>'+
        '</div>';

      var infowindow = new google.maps.InfoWindow({
        content: contentString
      });
      var marker = new google.maps.Marker({position: location,map: map,title: label});
      marker.addListener('click', function() {
        
        infowindow.open(map, marker);
      });

      closeInfoWindow = function() {
        infoWindow.close();
      };

      google.maps.event.addListener(map, 'click', closeInfoWindow);
    }
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCav_BvOFlJ0fMtElRHjkI3xAFPLbe6IY4&callback=initMap">
    </script>

		  
	  <script>
var currentPoi = <?php echo $currentPoints; ?>;
document.getElementById('points').innerHTML = currentPoi;
</script>
  </body>
</html>

