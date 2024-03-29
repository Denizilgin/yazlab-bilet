<!-- index.html -->
<?php
$sehir1 = $_GET['i'];
$sehir2 = $_GET['j'];
$tarih = $_GET['date'];
$saat = $_GET['kalkis_saati'];
$plaka = $_GET['plaka'];
$koltuk_sayisi = $_GET['koltuk_sayisi'];
$seferID = $_GET['seferID'];






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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG6WqwDRZlw1Sn248f3yqKiHe339F6oTU&libraries=places"
    async defer></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url('assets/bus/style.css'); ?>">

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

<body onload="initMap()">
  <div>
    <label for="source">Kalkış Yeri:</label>
    <select id="source">
      <option type="hidden" value="<?php echo $sehir1; ?>">
        <?php echo $sehir1; ?>
      </option>
      <!-- Diğer başlangıç noktalarını buraya ekleyebilirsiniz -->
    </select>
  </div>

  <div>
    <label for="dest">Varış:</label>
    <select id="dest" onchange="calcRoute()">
      <option type="hidden" value="<?php echo $sehir2; ?>">
        <?php echo $sehir2; ?>
      </option>
    </select>
  </div>
  <?php echo $saat; ?>
  <br><br>



  <script>
    let map, directionsService, directionsRenderer
    let sourceAutocomplete, desAutocomplete
    // Harita başlatma fonksiyonunu tanımlayın
    function initMap() {
      // Harita nesnesini oluşturun
      map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: 40.853, lng: 29.881 }, // Kocaeli'nin koordinatları

        zoom: 10
      })
      google.maps.event.addListener(map, "click", function (event) {
        this.setOptions({ scrollwheel: true })
      })
      directionsService = new google.maps.DirectionsService()
      directionsRenderer = new google.maps.DirectionsRenderer()
      directionsRenderer.setMap(map)

      if (sourceAutocomplete && desAutocomplete) {
        sourceAutocomplete = new google.maps.places.Autocomplete(document.getElementById('source'));
        desAutocomplete = new google.maps.places.Autocomplete(document.getElementById('dest'));
      }
    }
    function calcRoute() {
      var source = document.getElementById('source').value;
      var dest = document.getElementById('dest').value;

      var request =
      {
        origin: source,
        destination: dest,
        travelMode: "DRIVING",
      }
      directionsService.route(request, function (result, status) {
        if (status == "OK") {
          directionsRenderer.setDirections(result)
        }
      })
    }

    function pnrKodu() {
      var pnrSehir = <?php echo json_encode($sehir1); ?>;
      var pnrPlaka = <?php echo json_encode($plaka); ?>;
      var pnrPlakakodu;
      if (pnrSehir == "Kocaeli, Turkey") {
        pnrPlakakodu = 41;
      }
      else if (pnrSehir == "Ankara, Turkey") {
        pnrPlakakodu = 06;
      }
      else if (pnrSehir == "İzmir, Turkey") {
        pnrPlakakodu = 35;
      }
      else if (pnrSehir == "İstanbul, Turkey") {
        pnrPlakakodu = 34;
      }


      var currentDate = new Date();
      var day = currentDate.getDate();
      var month = currentDate.getMonth() + 1;
      var year = currentDate.getFullYear();
      var hours = currentDate.getHours();
      var minutes = currentDate.getMinutes();
      var seconds = currentDate.getSeconds();
      var _pnr;
      // Formatı ayarla: GünAyYılSaatDakikaSaniye
      var formattedDateTime = day.toString().padStart(2, '0') + '' + month.toString().padStart(2, '0') + '' + year + '' +
        hours.toString().padStart(2, '0') + '' + minutes.toString().padStart(2, '0') + '' + seconds.toString().padStart(2, '0');

      _pnr = pnrPlakakodu + formattedDateTime + "Z" + pnrPlaka;
      return _pnr;
    }


  </script>

  <div class="row mb-3 text-center">
    <div class="col-md-8 themed-grid-col">
      <div class="pb-3">

        <h2> Koltuk Seçiniz</h2>
        <div id="holder" style="margin-left: 350px;">
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
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 themed-grid-col">
          <div>
            <form action="<?= base_url('controller/seferdetay/azalt') ?>" method="post">
              <input type="hidden" name="seferID" value="<?= $seferID ?>">
              <label for="person_count">Kişi Sayısı:</label>
              <select id="person_count" name="person_count" onchange="showForms(this.value)" required>
                <option value="">Seçiniz</option>
                <option value="1">1 Kişi</option>
                <option value="2">2 Kişi</option>
                <option value="3">3 Kişi</option>
                <option value="4">4 Kişi</option>
                <option value="5">5 Kişi</option>
                <option value="6">6 Kişi</option>
                <!-- İhtiyaca göre artırılabilir -->
              </select>

              <div id="person_forms">
                <!-- Burada kişi sayısına göre form alanları dinamik olarak gösterilecek -->
              </div>

              <input type="submit" value="Bilgileri Kaydet">
            </form>

            <script>
              var defaultPricePerPerson = 100;


              function showForms(personCount) {
                var personForms = document.getElementById("person_forms");
                personForms.innerHTML = ""; // Temizle

                for (var i = 0; i < personCount; i++) {
                  var personForm = `
        <div>
          <h2>Kişisel Bilgiler (${i + 1}. Kişi)</h2>
          <label for="name${i}">Ad:</label>
          <input type="text" id="name${i}" name="name${i}" required>

          <label for="surname${i}">Soyad:</label>
          <input type="text" id="surname${i}" name="surname${i}" required>

          <label for="email${i}">E-posta:</label>
          <input type="email" id="email${i}" name="email${i}" required>

          <label for="date${i}">Doğum Tarihi</label>
          <input type="date" id="date${i}" name="date${i}" required>

          <label for="tc${i}">TC Kimlik</label>
          <input type="text" id="tc${i}" name="tc${i}" required>

          <label for="tel${i}">Telefon</label>
          <input type="text" id="tc${i}" name="tel${i}" required>

          <label for="gender${i}">Cinsiyet</label>
          <select id="gender${i}" name="gender${i}" required>
            <option value="kadin">Kadın</option>
            <option value="erkek">Erkek</option>
          </select>

          <label for="durum${i}">Özel Durum</label>
          <select id="durum${i}" name="durum${i}" required>
          <option value="yok">Yok</option>
            <option value="ogrenci">Öğrenci</option>
            <option value="yasli">Yaşlı</option>
            <option value="guvenlik">Güvenlik Güçleri</option>
            <option value="memur">Memur</option>
            <option value="cocuk">Çocuk</option>
          </select>
        </div>
      `;
                  personForms.innerHTML += personForm;
                }
              }

              document.querySelector('form').addEventListener('submit', function (e) {
                e.preventDefault();
                pnrKodu();
                var formData = new FormData(this);
                var data = {};
                for (var [key, value] of formData.entries()) {
                  data[key] = value;
                }

                var personCount = parseInt(data['person_count']);
                // İndirimleri uygula
                var totalPrice = defaultPricePerPerson * personCount * (1 - totalDiscount);
                // Bilgileri konsol ekranında göster
                console.log("Kişi Bilgileri:");
                for (var key in data) {
                  console.log(`${key}: ${data[key]}`);
                }
                console.log(`Toplam Fiyat: ${totalPrice.toFixed(2)} TL`);
              });
              function calculateTotalPrice(data) {
                var discounts = {
                  "ogrenci": 0.15,
                  "yasli": 0.15,
                  "memur": 0.15,
                  "guvenlik": 1, // Ücretsiz
                  "cocuk": 1 // Ücretsiz
                };



                var personCount = parseInt(data['person_count']);
                var totalPrice = 0;

                for (var i = 0; i < personCount; i++) {
                  var basePrice = defaultPricePerPerson;
                  var selectedStatus = data['durum' + i];
                  var discount = discounts[selectedStatus] || 0;

                  var discountedPrice = basePrice * (1 - discount);
                  totalPrice += discountedPrice;
                }

                return totalPrice;
              }

              // Form submit olduğunda
              document.querySelector('form').addEventListener('submit', function (e) {
                e.preventDefault(); // Formun varsayılan davranışını engelle  

                // Form verilerini al
                var formData = new FormData(this);
                var persons = [];
                var data = {};
                for (var [key, value] of formData.entries()) {
                  data[key] = value;
                }

                var personCount = parseInt(formData.get('person_count'));
                for (var i = 0; i < personCount; i++) {
                  var person = {};
                  person.name = formData.get('name' + i);
                  person.email = formData.get('email' + i);
                  person.date = formData.get('date' + i);
                  person.tc = formData.get('tc' + i);
                  person.gender = formData.get('gender' + i);
                  persons.push(person);
                }

                var str = [],
                  item;
                $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
                  item = $(this).attr('title');
                  str.push(item);
                });

                var jsonData = JSON.stringify(persons);
                var queryString = [];

                // FormData'dan anahtar-değer çiftlerini al ve URL sorgusu için uygun hale getir
                for (var [key, value] of formData.entries()) {
                  queryString.push(encodeURIComponent(key) + '=' + encodeURIComponent(value));
                }
                queryString.push('selected_seats=' + encodeURIComponent(str.join(',')));

                var totalPrice = calculateTotalPrice(data);
                var url = './odeme?' + 'kalkis=' + <?php echo json_encode($sehir1) ?> + '&varis=' + <?php echo json_encode($sehir2) ?> + '&saat=' + <?php echo json_encode($saat) ?> + '&' + 'SeferID=' + <?php echo json_encode($seferID) ?> + '&' + 'pnr=' + pnrKodu() + '&ucret=' + calculateTotalPrice(data) + '&' + queryString.join('&');


                console.log("Kişi Bilgileri:");
                for (var key in data) {
                  console.log(`${key}: ${data[key]}`);
                }

                console.log(`Toplam Fiyat: ${totalPrice.toFixed(2)} TL`); // İki ondalık hane için
                window.location.href = url;
              });
            </script>
          </div>
        </div>
        <div class="col-md-6 themed-grid-col">.col-md-6</div>
      </div>
    </div>
    <div class="col-md-4 themed-grid-col">
      <div id="map" style="height: 600px; width: 600px;"> </div>
      <button class="btn btn-primary" onclick="calcRoute()"> Rotayı Gör </button>
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

    var init = function (reservedSeat) {
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
    var bookedSeats = <?php echo json_encode($koltukNumaralari); ?>;
    console.log(bookedSeats);
    init(bookedSeats);

    $('.' + settings.seatCss).click(function () {
      if ($(this).hasClass(settings.selectedSeatCss)) {
        alert('This seat is already reserved');
      } else {
        $(this).toggleClass(settings.selectingSeatCss);
      }
    });

    $('#btnShow').click(function () {
      var str = [];
      $.each($('#place li.' + settings.selectedSeatCss + ' a, #place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        str.push($(this).attr('title'));
      });
      alert(str.join(','));
    })

    $('#btnShowNew').click(function () {
      var str = [],
        item;
      $.each($('#place li.' + settings.selectingSeatCss + ' a'), function (index, value) {
        item = $(this).attr('title');
        str.push(item);
      });
      alert(str.join(','));
    })

  </script>


  <!-- Koltuk Sayısını DÜşürme -->

</body>

</html>