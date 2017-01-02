// JavaScript Document

 function initialize() {
  var myLatlng = new google.maps.LatLng(-1.233067, 36.815164);
  var myOptions = {
   zoom: 15,
   center: myLatlng

  }
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
 
  var marker = new google.maps.Marker({
   position: myLatlng, 
   map: map, 
   title:"UNEP"
  });   
  
 
  var infowindow = new google.maps.InfoWindow({
   content: "UNEP"
  });
 
  infowindow.open(map,marker);
 }
 
 
 window.onload=function(){
  initialize();
 }
