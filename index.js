function addMarkers(locations) {
  // Create your markers, and add each one to the `markers` array
  for (i = 0; i < locations.length; i++) { 
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
      icon: "https://dummyimage.com/240x20/fff/000&text={Angkot: " + locations[i][0] + "}"
    });
    markers.push(marker)
  }
}

function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

function clearMarkers() {
  setMapOnAll(null);
}

function showMarkers() {
  setMapOnAll(map);
}

function deleteMarkers() {
  clearMarkers();
  markers = [];
}

// Initialize Firebase
var config = {
  apiKey: "AIzaSyDnv_-WnxO-TJsc2uYcBTHuHTGQ0YUnadM",
  authDomain: "hypertrackexample-a9b3a.firebaseapp.com",
  databaseURL: "https://hypertrackexample-a9b3a.firebaseio.com",
  projectId: "hypertrackexample-a9b3a",
  storageBucket: "hypertrackexample-a9b3a.appspot.com",
  messagingSenderId: "825068417134"
};
firebase.initializeApp(config);
var angkotsRef = firebase.database();

// map
var map = new google.maps.Map(document.getElementById('map'), {
  zoom: 4,
  center: new google.maps.LatLng(-0.789275, 120.92132700000002),
  mapTypeId: google.maps.MapTypeId.ROADMAP
});

var markers = [];

angkotsRef.ref('angkot/').on('value', function(snapshot){
  if (snapshot.exists()) {
    var content = '';
    var locations = []

    snapshot.forEach(function(data){
      var val = data.val();
      var sample = [];
      
      var jml;
      if(val.penumpangs === undefined) {
        jml = 0;
      }
      else {
        jml = Object.keys(val.penumpangs).length;
      }
      content +='<tr>';
      content += '<td>' + val.id + '</td>';
      content += '<td>' + val.lat + '</td>';
      content += '<td>' + val.lon + '</td>';
      content += '<td>' + jml + '</td>';
      content += '</tr>';
      sample.push(val.id)
      sample.push(parseInt(val.lat))
      sample.push(parseInt(val.lon))
      locations.push(sample)
     
    });

    deleteMarkers()
    addMarkers(locations)
    showMarkers()
    
    $('#content-table').empty();
    $('#content-table').append(content);
  }
});