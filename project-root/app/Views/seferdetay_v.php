<!-- index.html -->
<?php
$sehir1 = $_GET['i'];
$sehir2 = $_GET['j'];
$saat = $_GET['time'];

$selectedSeats = isset($_POST['selectedSeats']) ? $_POST['selectedSeats'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$date = isset($_POST['date']) ? $_POST['date'] : '';
$tc = isset($_POST['tc']) ? $_POST['tc'] : '';
$cinsiyet = isset($_POST['gender']) ? $_POST['gender'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plane Seating</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG6WqwDRZlw1Sn248f3yqKiHe339F6oTU&libraries=places" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel = "stylesheet" href = "<?php echo base_url('assets/bus/style.css');?>">

</head>
<style>
  #holder {
	height: 150px;
	width: 550px;
	background-color: #F5F5F5;
	border: 1px solid #A4A4A4;
	margin-left: 10px;
  }
  
  #place {
	position: relative;
	margin: 7px;
  }
  
  #place a {
	font-size: 0.6em;
  }
  
  #place li {
	list-style: none outside none;
	position: absolute;
  }
  
  #place li:hover {
	background-color: yellow;
  }
  
  #place .seat {
	background: url("images/available_seat_img.gif") no-repeat scroll 0 0 transparent;
	height: 33px;
	width: 33px;
	display: block;
  }
  
  #place .selectedSeat {
	background-color: rgb(196, 0, 0);
  }
  
  #place .selectingSeat {
	background-color: green;
  }
  
  #place .row-3,
  #place .row-2 {
	margin-top: 10px;
  }


  
  #seatDescription li {
	verticle-align: middle;
	list-style: none outside none;
	padding-left: 35px;
	height: 35px;
	float: left;
  }
  

  label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    select {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
    }

    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 4px;
    }

    button:hover {
      background-color: #0056b3;
    }

    #holder {
      float: left;
      margin-right: 20px;
    }

    #map {
      height: 600px;
      width: 600px;
      float: left;
    }
  
  </style>
<body onload = "initMap()">
<div>
      <label for="source">Kalkış Yeri:</label>
      <select id="source">
      <option type="hidden" value="<?php echo $sehir1; ?>"><?php echo $sehir1; ?></option>
        <!-- Diğer başlangıç noktalarını buraya ekleyebilirsiniz -->
      </select>
    </div>

    <div>
      <label for="dest">Varış:</label>
      <select id="dest" onchange="calcRoute()">
      <option type="hidden" value="<?php echo $sehir2; ?>"><?php echo $sehir2; ?></option>
      </select>
    </div>
    <?php echo $saat; ?>
<br><br>



    <script>
      let map,directionsService,directionsRenderer
      let sourceAutocomplete,desAutocomplete
        // Harita başlatma fonksiyonunu tanımlayın
        function initMap() {
            // Harita nesnesini oluşturun
              map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 40.853, lng: 29.881}, // Kocaeli'nin koordinatları

                zoom: 10
            })
            google.maps.event.addListener(map,"click",function(event)
            {
              this.setOptions({scrollwheel:true})
        })
        directionsService = new google.maps.DirectionsService()
        directionsRenderer = new google.maps.DirectionsRenderer()
        directionsRenderer.setMap(map)

        if (sourceAutocomplete && desAutocomplete) {
  sourceAutocomplete = new google.maps.places.Autocomplete(document.getElementById('source'));
  desAutocomplete = new google.maps.places.Autocomplete(document.getElementById('dest'));
}
      }
      function calcRoute()
      {
        var source = document.getElementById('source').value;
        var dest = document.getElementById('dest').value;

        var request = 
        {
          origin: source,
          destination: dest,
          travelMode: "DRIVING",
        }
        directionsService.route(request,function(result,status)
        {
          if(status == "OK")
          {
            directionsRenderer.setDirections(result)
          }
        })
      }
    </script>

<div class="row mb-3 text-center">
      <div class="col-md-8 themed-grid-col">
        <div class="pb-3">
          
        <h2 > Koltuk Seçiniz</h2>
<div id="holder" style = "margin-left: 350px;" >
  <ul id="place">
  </ul>
</div>
        
<div style="float:left;">
  <ul id="seatDescription">

  </ul>
</div>
<div style="clear:both;width:100%">
<li style="color: red"> Dolu Koltuk</li>
    <li style="color: green"> Seçilen Koltuk</li>
  <input type="button" id="btnShowNew" value="Show Selected Seats" />
  <input type="button" id="btnShow" value="Show All" />
</div>
        </div>
        
        <div class="row">
          <div class="col-md-6 themed-grid-col"><div>
    <h2>Kişisel Bilgiler</h2>
    <form action="" method="post">
      <label for="name">Ad Soyad:</label>
      <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>

      <label for="email">E-posta:</label>
      <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

      <label for="date">Doğum Tarihi</label>
      <input type="date" id="date" name="date" value="<?php echo $date; ?>" required>

      <label for="tc">TC Kimlik</label>
      <input type="text" id="tc" name="tc" value="<?php echo $tc; ?>" required>

      <label for="gender">Cinsiyet</label>
<select id="gender" name="gender" required>
    <option value="kadin" <?php echo ($cinsiyet === 'kadin') ? 'selected' : ''; ?>>Kadın</option>
    <option value="erkek" <?php echo ($cinsiyet === 'erkek') ? 'selected' : ''; ?>>Erkek</option>
</select>


      <input type="hidden" id="selectedSeats" name="selectedSeats" value="">
      <input type="submit" value="Bilgileri Kaydet">
    </form>
  </div></div>
          <div class="col-md-6 themed-grid-col">.col-md-6</div>
        </div>
      </div>
      <div class="col-md-4 themed-grid-col"><div id="map" style="height: 600px; width: 600px;"> </div>
      <button class = "btn btn-primary" onclick = "calcRoute()"> Rotayı Gör </button>
</div>
    </div>





<script src="<?php echo base_url('assets/js/jquery-3.7.1.js'); ?>"></script>
<script>
  
    var settings = {
  rows: 4,
  cols: 15,
  rowCssPrefix: 'row-',
  colCssPrefix: 'col-',
  seatWidth: 35,
  seatHeight: 35,
  seatCss: 'seat',
  selectedSeatCss: 'selectedSeat',
  selectingSeatCss: 'selectingSeat'
};

var init = function(reservedSeat) {
  var str = [],
    seatNo, className;
  for (i = 0; i < settings.rows; i++) {
    for (j = 0; j < settings.cols; j++) {
      seatNo = (i + j * settings.rows + 1);
      className = settings.seatCss + ' ' + settings.rowCssPrefix + i.toString() + ' ' + settings.colCssPrefix + j.toString();
      if ($.isArray(reservedSeat) && $.inArray(seatNo, reservedSeat) != -1) {
        className += ' ' + settings.selectedSeatCss;
      }
      str.push('<li class="' + className + '"' +
        'style="top:' + (i * settings.seatHeight).toString() + 'px;left:' + (j * settings.seatWidth).toString() + 'px">' +
        '<a title="' + seatNo + '">' + seatNo + '</a>' +
        '</li>');
    }
  }
  $('#place').html(str.join(''));
};
//case I: Show from starting
//init();

//Case II: If already booked
var bookedSeats = [5, 10, 25];
init(bookedSeats);

$('.' + settings.seatCss).click(function() {
  if ($(this).hasClass(settings.selectedSeatCss)) {
    alert('This seat is already reserved');
  } else {
    $(this).toggleClass(settings.selectingSeatCss);
  }
});

$('#btnShow').click(function() {
  var str = [];
  $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.' + settings.selectingSeatCss + ' a'), function(index, value) {
    str.push($(this).attr('title'));
  });
  alert(str.join(','));
})

$('#btnShowNew').click(function() {
  var str = [],
    item;
  $.each($('#place li.' + settings.selectingSeatCss + ' a'), function(index, value) {
    item = $(this).attr('title');
    str.push(item);
  });
  alert(str.join(','));
})
</script>
</body>

</html>
