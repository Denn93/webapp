<?php

  $goods = new goods();
  
?>
<<<<<<< HEAD
<<<<<<< HEAD
<script>
  var data = <?php echo $goods->getContainerLocationData(); ?>;
  var heatmapData = new Array();
  var map;

  function initialize() {
    var map_canvas = document.getElementById('map_canvas');
    var map_options = {
      center: new google.maps.LatLng(51.955454, 4.037449),
      zoom: 11,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      streetViewControl: false
    }
    map = new google.maps.Map(map_canvas, map_options)
=======
=======
>>>>>>> origin/tim

// <script>
//   var data = <?php echo $goods->getLocationData(); ?>;
//   var heatmapData = new Array();
//   var map;

//   function initialize() {
//     var map_canvas = document.getElementById('map_canvas');
//     var map_options = {
//       center: new google.maps.LatLng(51.955454, 4.037449),
//       zoom: 11,
//       mapTypeId: google.maps.MapTypeId.ROADMAP,
//       streetViewControl: false
//     }
//     map = new google.maps.Map(map_canvas, map_options)
<<<<<<< HEAD
>>>>>>> origin/tim
=======
>>>>>>> origin/tim
  
//     var marker = new google.maps.Marker({
//       position: new google.maps.LatLng(51.955454, 4.037449),
//       map: map,
//       title: 'Hello World!'
//     });
  
<<<<<<< HEAD
<<<<<<< HEAD
    for (var i = 0; i < data.length; i++) {
      var obj = data[i];
      console.log(obj);
      heatmapData.push({location: new google.maps.LatLng(obj.latitude,obj.longitude), weight: Math.random() * 100});
    }
=======
=======
>>>>>>> origin/tim
//     for (var i = 0; i < data.length; i++) {
//       var obj = data[i];
//       heatmapData.push({location: new google.maps.LatLng(obj.Latitude,obj.Longitude), weight: Math.random() * 100});
//     }
<<<<<<< HEAD
>>>>>>> origin/tim
  
//     var pointArray = new google.maps.MVCArray(heatmapData);
    
<<<<<<< HEAD
    var pointArray = new google.maps.visualization.HeatmapLayer({
      data: heatmapData,
      map: map
    });
    
  }
=======
=======
  
//     var pointArray = new google.maps.MVCArray(heatmapData);
    
>>>>>>> origin/tim
//     var pointArray = new google.maps.visualization.HeatmapLayer({
//       data: heatmapData,
//       map: map
//     });
  
//     //heatmap.setMap(map);
  
//   }
<<<<<<< HEAD

//   function moveViewport(lat, lng){
//     var center = new google.maps.LatLng(lat, lng);
//     map.panTo(center);
//     // map.setZoom(15);
//   }

//   google.maps.event.addDomListener(window, 'load', initialize);
//   </script>
>>>>>>> origin/tim


<<<<<<< HEAD
  google.maps.event.addDomListener(window, 'load', initialize);
  
  
  </script>
=======
>>>>>>> origin/tim
=======

//   function moveViewport(lat, lng){
//     var center = new google.maps.LatLng(lat, lng);
//     map.panTo(center);
//     // map.setZoom(15);
//   }

//   google.maps.event.addDomListener(window, 'load', initialize);
//   </script>


>>>>>>> origin/tim

  <!-- intro -->
  <div class="intro">
    <div id="banner">
      <img src="/res/images/banner_01.png" />
    </div>
  </div><!-- /intro -->

  <!-- content -->
  <div class="holder_content">
    <section class="group1_sidebar">
      <h3><a href="#" onclick="MoveToBookmark(1);return false;">Maasvlakte 1</a></h3>
      <h3><a href="#" onclick="MoveToBookmark(2);return false;">Maasvlakte 2</a></h3>
      <h3><a href="#" onclick="MoveToBookmark(3);return false;">Dintelhaven</a></h3>
      <h3><a href="#" onclick="MoveToBookmark(4);return false;">Seinehaven</a></h3>
    </section>

    <section class="group2_map">
      <div id="map"></div>
    </section>
  </div>

<script>

var data = <?php echo $goods->getLocationData(); ?>;
var heatmapData = new Array();

var map = L.map('map').setView([51.95823052624468, 4.051809310913086], 13);
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a>',
    maxZoom: 18,
    minZoom: 12
}).addTo(map);

mapHmData(data);

var heat = L.heatLayer(heatmapData,{
    radius: 20,
    blur: 15, 
    maxZoom: 17,
}).addTo(map);


map.on('click', function(e) {
    console.log("Lat, Lon : " + e.latlng.lat + ", " + e.latlng.lng)
});

function mapHmData (input){
    for (var i = 0; i < input.length; i++) {
      var obj = input[i];
      heatmapData.push(new L.LatLng(obj.Latitude,obj.Longitude,Math.random() * 5));
    }
    console.log(input[2].Latitude);
    for (var x = 0; x < heatmapData.length; x++) {

      minLat = 51.95093084411432;
      maxLat = 51.95669663370022;
      minLng = 4.033999443054199;
      maxLng = 4.072709083557129;

      heatmapData[x].lat = getRandomInRange(minLat, maxLat, 3);
      heatmapData[x].lng = getRandomInRange(minLng, maxLng, 3);
    }
  }

  function getRandomInRange(from, to, fixed) {
    return (Math.random() * (to - from) + from).toFixed(fixed) * 1;
    // .toFixed() returns string, so ' * 1' is a trick to convert to number 
  }

function MoveToBookmark(loc) {
  switch (loc) {
    case 1: 
      //maasvlakte 1
      map.panTo(new L.LatLng(51.95823052624468, 4.051809310913086));
      break;
    case 2:
      //maasvlakte 2
      map.panTo(new L.LatLng(51.94944960416181, 3.992757797241211));
      break;
    case 3:
      //dintelhaven
      map.panTo(new L.LatLng(51.95093084411432, 4.115195274353027));
      break;
    case 4:
      //Seinehaven
      map.panTo(new L.LatLng(51.879352249020855, 4.245293140411377));
      break;   
  }
}

<<<<<<< HEAD
</script>
=======
</script>
>>>>>>> origin/tim
