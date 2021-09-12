<html>
<head>
	<title>VoteUrMusic</title>
	<style>
		#map {
		  height: 100%; width:75%
		}

		#myDIV{
			background-color: white;
			position: absolute;
			  top: 8px;
			  right: 12px;
			  font-size: 11px;
		}
		#myDI{
			background-color: black;
			color: white;
			position: absolute;
			  top: 8px;
			  right: 12px;
			  font-size: 11px;
			display: none;
		}
		#di{
			color: white;
			font-size: x-large;
			font-weight: bolder;
			font-family: "Times New Roman";
		}
		#didi{
			font-size: xx-large;
			font-weight: bolder;
			font-family: "Times New Roman";
		}
	</style>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body style="background-color:black;">
	
	<center><div id='di' style='font-family:"Times New Roman"; font-size:xx-large'>
		<img src="music_icon2.png" style="width:50px;height:50px;">VoteUrMusic
	</div></center>
	<div id='myDIV'>
        <div>
			
		
            <lable for="username">ID:</lable> 
            <input type="text" name="username">
            <lable for="password">PW:</lable> 
            <input type="password" name="password">
			<button onclick="muFunction()">
				Submit
			</button>
		</div>

        </div>
	<div id='myDI'>
		<h5>
			Hello user1!!
		</h5>
	</div>
	
	<script>
		function muFunction(){
			var x = document.getElementById("myDIV");
			var y = document.getElementById("myDI");
			if (x.style.display==="none"){
				x.style.display = "block";
				y.style.display = "none";
			} else {
				x.style.display = "none";
				y.style.display = "block";
			}
		}
		function initMap() {
			var LocationsForMap = [

        	["Wisconsin", 44.500000, -89.500000, 1],
			["West Virginia", 39.000000, -80.500000, 2],
			["Vermont", 44.000000, -72.699997, 3],
			["Texas", 31.000000, -100.000000, 4],
			["South Dakota", 44.500000 ,-100.000000, 5],
			["Rhode Island", 41.700001 ,-71.500000, 6],
			["Oregon", 44.000000 ,-120.500000, 7],
			["New York", 43.000000 ,-75.000000, 8],
			["New Hampshire", 44.000000 ,-71.500000, 9],
			["Nebraska", 41.500000, -100.000000, 10],
			["Kansas", 38.500000, -98.000000, 11],
			["Mississippi", 33.000000, -90.000000, 12],
			["Illinois", 40.000000, -89.000000, 13],
			["Delaware", 39.000000, -75.500000, 14],
			["Connecticut", 41.599998, -72.699997, 15],
			["Arkansas", 34.799999, -92.199997, 16],
			["Indiana", 40.273502, -86.126976, 17],
			["Missouri", 38.573936, -92.603760, 18],
			["Florida", 27.994402, -81.760254, 19],
			["Nevada", 39.876019, -117.224121, 20],
			["Maine", 45.367584, -68.972168, 21],
			["Michigan", 44.182205, -84.506836, 22],
			["Georgia", 33.247875, -83.441162, 23],
			["Hawaii", 19.741755, -155.844437, 24],
			["Alaska", 66.160507, -153.369141, 25],
			["Tennessee", 35.860119, -86.660156, 26],
			["Virginia", 37.926868, -78.024902, 27],
			["New Jersey", 39.833851, -74.871826, 28],
			["Kentucky", 37.839333, -84.270020, 29],
			["North Dakota", 47.650589, -100.437012, 30],
			["Minnesota", 46.392410, -94.636230, 31],
			["Oklahoma", 36.084621, -96.921387, 32],
			["Montana", 46.965260, -109.533691, 33],
			["Washington", 47.751076, -120.740135, 34],
			["Utah", 39.419220, -111.950684, 35],
			["Colorado", 39.113014, -105.358887, 36],
			["Ohio", 40.367474, -82.996216, 37],
			["Alabama", 32.318230, -86.902298, 38],
			["Iowa", 42.032974, -93.581543, 39],
			["New Mexico", 34.307144, -106.018066, 40],
			["South Carolina", 33.836082, -81.163727, 41],
			["Pennsylvania", 41.203323, -77.194527, 42],
			["Arizona", 34.048927, -111.093735, 43],
			["Maryland", 39.045753, -76.641273, 44],
			["Massachusetts", 42.407211, -71.382439, 45],
			["California", 36.778259, -119.417931, 46],
			["Idaho", 44.068203, -114.742043, 47],
			["Wyoming", 43.075970, -107.290283, 48],
			["North Carolina", 35.782169, -80.793457, 49],
			["Louisiana", 30.391830, -92.329102, 50],

			];
			const uluru = { lat: -25.363, lng: 131.044 };
			const centerofUSA = { lat: 39.5, lng: -98.35 };
		  const map = new google.maps.Map(document.getElementById("map"), {
			zoom: 5.0,
			center: centerofUSA,
			styles: 
			[
			  {
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#212121"
				  }
				]
			  },
			  {
				"elementType": "labels.icon",
				"stylers": [
				  {
					"visibility": "off"
				  }
				]
			  },
			  {
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#757575"
				  }
				]
			  },
			  {
				"elementType": "labels.text.stroke",
				"stylers": [
				  {
					"color": "#212121"
				  }
				]
			  },
			  {
				"featureType": "administrative",
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#757575"
				  }
				]
			  },
			  {
				"featureType": "administrative.country",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#9e9e9e"
				  }
				]
			  },
			  {
				"featureType": "administrative.land_parcel",
				"stylers": [
				  {
					"visibility": "off"
				  }
				]
			  },
			  {
				"featureType": "administrative.locality",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#bdbdbd"
				  }
				]
			  },
			  {
				"featureType": "poi",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#757575"
				  }
				]
			  },
			  {
				"featureType": "poi.business",
				"stylers": [
				  {
					"visibility": "off"
				  }
				]
			  },
			  {
				"featureType": "poi.park",
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#181818"
				  }
				]
			  },
			  {
				"featureType": "poi.park",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#616161"
				  }
				]
			  },
			  {
				"featureType": "poi.park",
				"elementType": "labels.text.stroke",
				"stylers": [
				  {
					"color": "#1b1b1b"
				  }
				]
			  },
			  {
				"featureType": "road",
				"stylers": [
				  {
					"visibility": "off"
				  }
				]
			  },
			  {
				"featureType": "road",
				"elementType": "geometry.fill",
				"stylers": [
				  {
					"color": "#2c2c2c"
				  }
				]
			  },
			  {
				"featureType": "road",
				"elementType": "labels.icon",
				"stylers": [
				  {
					"visibility": "off"
				  }
				]
			  },
			  {
				"featureType": "road",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#8a8a8a"
				  }
				]
			  },
			  {
				"featureType": "road.arterial",
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#373737"
				  }
				]
			  },
			  {
				"featureType": "road.highway",
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#3c3c3c"
				  }
				]
			  },
			  {
				"featureType": "road.highway.controlled_access",
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#4e4e4e"
				  }
				]
			  },
			  {
				"featureType": "road.local",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#616161"
				  }
				]
			  },
			  {
				"featureType": "transit",
				"stylers": [
				  {
					"visibility": "off"
				  }
				]
			  },
			  {
				"featureType": "transit",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#757575"
				  }
				]
			  },
			  {
				"featureType": "water",
				"elementType": "geometry",
				"stylers": [
				  {
					"color": "#000000"
				  }
				]
			  },
			  {
				"featureType": "water",
				"elementType": "labels.text.fill",
				"stylers": [
				  {
					"color": "#3d3d3d"
				  }
				]
			  }
			]
			  
		  });
		  const contentString =
			'<div id="content">' +
			'<div id="siteNotice">' +
			"</div>" +
			'<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
			'<div id="bodyContent">' +
			"<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
			"sandstone rock formation in the southern part of the " +
			"Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
			"south west of the nearest large town, Alice Springs; 450&#160;km " +
			"(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
			"features of the Uluru - Kata Tjuta National Park. Uluru is " +
			"sacred to the Pitjantjatjara and Yankunytjatjara, the " +
			"Aboriginal people of the area. It has many springs, waterholes, " +
			"rock caves and ancient paintings. Uluru is listed as a World " +
			"Heritage Site.</p>" +
			'<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
			"https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
			"(last visited June 22, 2009).</p>" +
			"</div>" +
			"</div>";
		  const infowindow = new google.maps.InfoWindow({
			content: contentString,
		  });
			// const marker = new google.maps.Marker({
			// position: uluru,
			// map,
			// title: "Uluru (Ayers Rock)",
			// });

			// marker.addListener("click", () => {
			// infowindow.open({
			//   anchor: marker,
			//   map,
			//   shouldFocus: false,
			// });
			// });
		var icon = {
			url: "music_icon2.png", // url
			scaledSize: new google.maps.Size(40, 40), // scaled size
			origin: new google.maps.Point(0,0), // origin
			anchor: new google.maps.Point(0, 0), // anchor
			color: "white"
		};

		 for (i = 0; i < LocationsForMap.length; i++) {  
		  
		 
		  marker = new google.maps.Marker({
			position: new google.maps.LatLng(LocationsForMap[i][1], LocationsForMap[i][2]),
			map: map,
			icon: icon
		  });
			 if ( LocationsForMap[i][0]=='New York'){
				 contentStr = '<?php $conn = mysqli_connect("localhost", "root", "123456", "musicdb");
			 				
		   						$sql = "SELECT * FROM york ORDER BY count DESC LIMIT 3";
								$result = mysqli_query($conn, $sql);

							    echo "<ol>";
		   						$j = 0;
								while($row = mysqli_fetch_array($result)) {
								  if($j==0){
									  echo $tablename;
									echo "<b><img src=\"{$row['url']}\" style=\"width:80px; height:80px;\"></b>";
								  echo "<li style=font-size:large;font-family:\"Times New Roman\";>{$row['title']} - {$row['artist']} </li>";}
									else{
										echo "<li>{$row['title']} - {$row['artist']}  </li>";
									}
									$j = $j + 1;
								}
								echo "</ol>"
								?>';	
				 
				 google.maps.event.addListener(marker, 'click', (function(marker, contentStr ,i) {
			return function() {
			  infowindow.setContent(contentStr);
			  infowindow.open(map, marker);
			}
		  })(marker,contentStr, i));
				 
				 
				 
				 
				 
				 
			 } else if (LocationsForMap[i][0]=='Colorado') {
				 contentStr = '<?php $conn = mysqli_connect("localhost", "root", "123456", "musicdb");
			 				
		   						$sql = "SELECT * FROM colorado ORDER BY count DESC LIMIT 3";
								$result = mysqli_query($conn, $sql);

							    echo "<ol>";
		   						$j = 0;
								while($row = mysqli_fetch_array($result)) {
								  if($j==0){
									  echo $tablename;
									echo "<b><img src=\"{$row['url']}\" style=\"width:80px; height:80px;\"></b>";
								  echo "<li style=font-size:large;font-family:\"Times New Roman\";>{$row['title']} - {$row['artist']} </li>";}
									else{
										echo "<li>{$row['title']} - {$row['artist']}  </li>";
									}
									$j = $j + 1;
								}
								echo "</ol>"
								?>';		
				 
				 google.maps.event.addListener(marker, 'click', (function(marker, contentStr ,i) {
			return function() {
			  infowindow.setContent(contentStr);
			  infowindow.open(map, marker);
			}
		  })(marker,contentStr, i));
			 }else {
		       contentStr = '<?php $conn = mysqli_connect("localhost", "root", "123456", "musicdb");
			 				
		   						$sql = "SELECT * FROM testtable ORDER BY count DESC LIMIT 3";
								$result = mysqli_query($conn, $sql);

							  echo "<ol>";
		   						$j = 0;
								while($row = mysqli_fetch_array($result)) {
								  if($j==0){
									  echo $tablename;
									echo "<b><img src=\"{$row['url']}\" style=\"width:80px; height:80px;\"></b>";
								  echo "<li style=font-size:large;font-family:\"Times New Roman\";>{$row['title']} - {$row['artist']} </li>";}
									else{
										echo "<li>{$row['title']} - {$row['artist']}  </li>";
									}
									$j = $j + 1;
								}
								echo "</ol>"
								?>';	
				 google.maps.event.addListener(marker, 'click', (function(marker, contentStr ,i) {
			return function() {
			  infowindow.setContent(contentStr);
			  infowindow.open(map, marker);
			}
		  })(marker,contentStr, i));
			 }
		  
		}
		}
	</script>
	<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeR2UfY8ZIBfdvco60uzA5dC3Q4bJKuw8&language=en&callback=initMap&libraries=&v=weekly"
      async
    ></script>
	<div style="display: flex; height: 100%;">     
		<div id="map" style="width: 75%;"></div>
		<div>
        <form action="">
            <input type="hidden" id='hidden_token'>
            <div class="col-sm-6 form-group row mt-4 px-0" style="margin-left: 5px;">
				<label for="Genre" id='di'><h3>Genre:</h3></label>
                <select name="" id="select_genre" class="form-control form-control-sm col-sm-10">
                    <option>Select...</option>                    
                </select>
            </div>
            <div class="col-sm-6 form-group row px-0" style="margin-left: 5px;">
                <label for="Genre" id='di'><h3>Playlists:</h3></label>
                <select name="" id="select_playlist" class="form-control form-control-sm col-sm-10">
                    <option>Select...</option>                    
                </select>
            </div>                  
            <div class="col-sm-6 row form-group px-0">
                <button type="submit" id="btn_submit" class="btn btn-success col-sm-12" style="margin-left: 20px;">Search</button>
            </div>          
        </form>      
		
        <div class="row">
            <div class="col-sm-6 px-0">
                <div class="list-group song-list" style="margin-left: 20px;">
                </div>                                             
            </div>
            <div class="offset-md-1 col-sm-4" id="song-detail">                
            </div>
        </div> 
			
			</div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js" type="text/javascript"></script>
</body>
</html>