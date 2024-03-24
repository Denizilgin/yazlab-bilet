

<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plane Seating</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
  <link rel = "stylesheet" href = "<?php echo base_url('assets/css/sefer.css');?>">
 
</head>
    <body>

	
    
<div class="main">

	<main class="app">
		<div class="screen-wrap">
			<section class="screen-home">
				<div class="screen-home__form-wrap">
					<div class="screen-home__form">
						<form>
							<div id="formdetail">
								<div class="screen-home__location" style = "margin-top: 110px;">
									<div class="lable">
										<figure class="icon"><img src="https://i.ibb.co/KwnYdXN/location.png"></figure>
										<span class="text">Kalkış - Varış</span>
									</div>
									<div class="input-wrap">
    <div class="inside-wrap">
        <div class="from">
            <span class="inside-lable">Kalkış</span>
            <select class="input" name="to" id="destinationSelect">
            <option type="hidden"  value="İstanbul, Turkey">İstanbul</option>
                <option  type="hidden"value="Kocaeli, Turkey">Kocaeli</option>
                <option  type="hidden"value="İzmir, Turkey">İzmir</option>
                <option  type="hidden"value="Ankara, Turkey">Ankara</option>
                <!-- Diğer seçenekleri buraya ekleyebilirsiniz -->
            </select>
        </div>
        <div class="to">
            <span class="inside-lable">Varış</span>
            <select class="input" name="to" id="destinationSelect2">
            <option type="hidden"  value="İstanbul, Turkey">İstanbul</option>
                <option  type="hidden"value="Kocaeli, Turkey">Kocaeli</option>
                <option  type="hidden"value="İzmir, Turkey">İzmir</option>
                <option  type="hidden"value="Ankara, Turkey">Ankara</option>
                <!-- Diğer seçenekleri buraya ekleyebilirsiniz -->
            </select>
        </div>


    </div>
	     <div style = "margin-top: 30px; text-align: center">
	    <label for="date">Tarih Seçiniz</label>

       <input type="date" id="date" name="trip-start" value="xxxx-03-20" min="2024-01-01" max="2024-12-31" />
        </div>
		
</div>


						

<!-------------------------------------------------- SCRIPTLER -->
    

	
    <script>
    function updateLink() {
        // Seçili değeri al
        var selectedValue = document.getElementById("destinationSelect").value;
        var selectedValue2 = document.getElementById("destinationSelect2").value;
		var selectedDate = document.getElementById("date").value;

		document.querySelector('.screen-bus__location-col:first-child').textContent = selectedValue;
        document.querySelector('.screen-bus__location-col:last-child').textContent = selectedValue2;

        // Bağlantıyı güncelle
        var link = document.getElementById("seferLink");
        link.href = "./seferlistesi?i=" + selectedValue + "&j=" + selectedValue2 + "&date=" + selectedDate;
    }



    window.onload = function () {
        // Bağlantıyı güncelle
        updateLink();

        // Select elementinin değeri değiştiğinde çağrılacak fonksiyonu belirle
        document.getElementById("destinationSelect").addEventListener("change", updateLink);
    document.getElementById("destinationSelect2").addEventListener("change", updateLink);
    };

	const urlParams = new URLSearchParams(window.location.search);

// Retrieve the departure time
const departureTime = urlParams.get('time');

console.log(departureTime);

</script>


<!------------------------------------------------ SCRIPTLER BİTİŞ -->
<a id="seferLink" href='./seferdetay?i=' style = "text-decoration: none; color: inherit;">
<div class="screen-home__submit-wrap" id = "seferler-buton"> 
    <span class="line"></span>
    <div class="screen-home__bus-page" id="buspage">
        <div class="screen-home__inside-wave">
            
        </div>
        <figure class="screen-home__bus-arrow-wrap">
            <!-- <span class="screen-home__btn-blink"></span> -->
        </figure>
    </div>

</div>
</a>


							


<input type="checkbox" id="redirectCheckbox"> <label for="redirectCheckbox"><strong> GİDİŞ - DÖNÜŞ </strong></label>

<script>
	// Checkbox'un durumunu kontrol etmek için bir fonksiyon
	function checkboxChanged() {
		// Checkbox'un durumunu kontrol et
		var checkbox = document.getElementById("redirectCheckbox");
		
		// Checkbox işaretlendiğinde
		if (checkbox.checked) {
			// Yeni sayfaya yönlendir
			window.location.href = "seferler2";
		}
	}

	// Checkbox durumu değiştiğinde checkboxChanged fonksiyonunu çağır
	document.getElementById("redirectCheckbox").addEventListener("change", checkboxChanged);
</script>

						</form>
					</div>

			</section>
	

			<section class="screen-bus">
				
				<div class="screen-bus__location-filter-wrap">
					<div class="screen-bus__location-filter-row">
						<div class="screen-bus__location">
							<div class="screen-bus__location-row">
								<span class="screen-bus__location-col">...</span>
								<span class="screen-home__rs-arrow"></span>
								<span class="screen-bus__location-col">...</span>
							</div>
						</div>
						<div class="screen-bus__filter">
							<figure>
								<img src="https://i.ibb.co/ZJt9tkM/filter.png">
							</figure>
						</div>
					</div>
				</div>
				<div class="screen-bus__travels-wrap">
					<div class="screen-bus__travels-row">
						<!--  OTOBÜS BAŞLANGIÇ -->
						<div class="screen-bus__travels-col">
						<a id="seferLink" href='./seferdetay?i=' style = "text-decoration: none; color: inherit;">
							<div class="screen-bus__name-time-seat">
								<div class="screen-bus__name-wrap">
									<span class="screen-bus__name">KPN Travels</span>
									<span class="screen-bus__type" id = "plaka" >41BSM3406</span>
								</div>
								<div class="screen-bus__time-wrap">
									<div class="screen-bus__time">
										<div class="screen-bus__start" id = "kalkis">13:40</div> <!-- VERİTABANINDAN ÇEKİLEN KALKIŞ SAATİ GELİCEK-->
										<div class="screen-bus__start"></div>
										<div class="screen-bus__time-arrow-wrap">
											<span class="screen-bus__time-arrow"></span>
										</div>
										<div class="screen-bus__end">15:40</div>
									</div>
									<div class="screen-bus__hrs">
										<span>2 hrs</span>
									</div>
								</div>
								<div class="screen-bus__seat-wrap">
									<div>
										<span class="screen-bus__count" id = "seat">26</span> <!-- VERİTABANINDAN ÇEKİLEN KOLTUK SAYISI GELİCEK-->
										Seats Available
									</div>
								</div>
							</div>
							
							<div class="screen-bus__rating-price">
								<div class="screen-bus__rating-price-row">
									<div class="screen-bus__rating">
										<ul class="screen-bus__rating-row">
											<li><figure><img src="https://i.ibb.co/pxtdTrM/star.png"></figure></li>
											<li><figure><img src="https://i.ibb.co/pxtdTrM/star.png"></figure></li>
											<li><figure><img src="https://i.ibb.co/pxtdTrM/star.png"></figure></li>
											<li><figure><img src="https://i.ibb.co/pxtdTrM/star.png"></figure></li>
											<li><figure><img src="https://i.ibb.co/WPLcC1D/star-grey.png"></figure></li>
										</ul>
									</div>
									<div class="screen-bus__price">
										<span><span>₺</span> 1220</span>
									</div>
								</div>
							</div>
							</a>
						</div>
						<!--  BİTİŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞŞ -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<section class="screen-bottom">
			<div>
				<ul>
					<li>
						<figure>
							<img src="https://i.ibb.co/n1kQzHj/home.png">
						</figure>
					</li>
					<li>
						<figure>
							<img src="https://i.ibb.co/sjXwWkz/tickets.png">
						</figure>
					</li>
					<li>
						<figure>
							<img src="https://i.ibb.co/5nFHJvJ/user.png">
						</figure>
					</li>
					<li>
						<figure>
							<img src="https://i.ibb.co/qpb5dSj/support.png">
						</figure>
					</li>
					<li>
						<figure>
							<img src="https://i.ibb.co/wNkTfWb/settings.png">
						</figure>
					</li>
				</ul>
			</div>
		</section>
	</main>
</div>



<script src="<?php echo base_url('assets/js/jquery-3.7.1.js'); ?>"></script>
  <script src= "<?php echo base_url('assets/js/sefer.js');?>"></script>

</body>
</html>