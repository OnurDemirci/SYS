<?php
require('veriler.php');
include("connection.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
}

?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>


<link rel="icon" href="icon.png">
<meta charset="utf-8">
<title>Şube Yönetim Sistemi</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    var availableTags = [
      "Ayhan Uyanık",
      "Basri Onay",
      "Egemen Sarıkaya",
      "Nilay Uçar",
      "Remzi Akyıldız",
      "Yasemin Bayar",
      "Şube 1",
      "Şube 2",
      "Şube 3",
      "Şube 4",
      "Şube 5",
      "Şube 6",
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
$(document).ready(function() {
    $(".show1").click(function() {
        $(".pop-up-g1").slideToggle();
        $(".pop-up-g2").css('display','none');
        $(".pop-up-g3").css('display','none');
        $(".pop-up-g4").css('display','none');
    });
        $(".show2").click(function() {
        $(".pop-up-g2").slideToggle();
        $(".pop-up-g1").css('display','none');
        $(".pop-up-g3").css('display','none');
        $(".pop-up-g4").css('display','none');
    });
        $(".show3").click(function() {
        $(".pop-up-g1").css('display','none');
        $(".pop-up-g2").css('display','none');
        $(".pop-up-g3").slideToggle();
        $(".pop-up-g4").css('display','none');
    });
    $(".show4").click(function() {
        $(".pop-up-g1").css('display','none');
        $(".pop-up-g2").css('display','none');
        $(".pop-up-g3").css('display','none');
        $(".pop-up-g4").slideToggle();
    });
    function nFormatter(num, digits) {
  var si = [
    { value: 1, symbol: "" },
    { value: 1E3, symbol: "B" },
    { value: 1E6, symbol: "M" },
    { value: 1E9, symbol: "G" },
    { value: 1E12, symbol: "T" },
    { value: 1E15, symbol: "P" },
    { value: 1E18, symbol: "E" }
  ];
  var rx = /\.0+$|(\.[0-9]*[1-9])0+$/;
  var i;
  for (i = si.length - 1; i > 0; i--) {
    if (num >= si[i].value) {
      break;
    }
  }
  return (num / si[i].value).toFixed(digits).replace(rx, "$1") + si[i].symbol;
}

 	var mil=  nFormatter(<?php echo $ciroOrtSon; ?>, 2);
 	var mil2= nFormatter(<?php echo $musteri_sayisiOrtSon
 		; ?>,0);
 	var mil3= nFormatter(<?php echo $israfOrtSon; ?>,0);
 document.getElementById("sonuc").innerHTML=mil;
 document.getElementById("sonuc2").innerHTML=mil2;
 document.getElementById("sonuc3").innerHTML=mil3;
});
  </script>
</head>
<body>
	<div style="margin:0;padding: 0;" class="contain">
		<div class="top-bar">
		
		<div class="menu-bar-2"><input id="tags" type="text" placeholder="Arama..."><a href="#" class="button"><img src="images/icons/search.png"></a>
<div class="dropdown">
  <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class="
  	user-png" src="images/user.png">&nbsp;Serhat Şanlı
  </button>
  <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item bg-dark" href="#"><img src="images/icons/profile.png">Profil</a>
    <a class="dropdown-item bg-dark" href="#"><img src="images/icons/settings.png">Ayarlar</a>
    <a class="dropdown-item bg-dark" href="logout.php"><img src="images/icons/logout.png">Çıkış</a>
  </div>
</div>
	</div>
</div>
    <nav class="menu">
      <div class="menu-bar-1"><a href="#"><img src="images/logo.png"></a></div>
      <div class="n-list">
        <p>  </p>
        <a href="subeler.php" class="n-link"><div class="n-button aktif"><img src="images/icons/graphw.png">Şube Analizleri</div></a>
        <a href="calisanlar.php" class="n-link"><div class="n-button"><img src="images/icons/graphw.png">Çalışan Analizleri </div></a>
        <a href="bolge.php" class="n-link"><div class="n-button"><img src="images/icons/region.png">Genel Bölge Analizi</div></a>
        <a href="map.php" class="n-link"><div class="n-button"><img src="images/icons/location.png">Şubeler</div></a></div>
    </nav>
<section><div class="content">
		<h1 class="baslik">Şube Analizleri</h1>
		<div class="avg">


		<a class="show1">
			<div class="avg-element"><div class="avg-text"><?php echo $tarih; ?><br> Ortalama<br><h2>Ciro</h2><div class='mill'><h1 id='sonuc'></h1></div></div></div>
		</a>
		<div class="pop-up-g1">
			<h3 class="graph-head">Aylık Ortalama Ciro</h3>
			<canvas id="myChart5"></canvas>
		</div>

		<a class="show2">
			<div class="avg-element"><div class="avg-text"><?php echo $tarih; ?><br> Ortalama<br><h2 style="font-size: 37px;margin-top: 47px;">Müşteri</h2><div class='mill2'><h1 id='sonuc2'></h1></div></div></div>
		</a>
		<div class="pop-up-g2">
			<h3 class="graph-head">Aylık Ortalama Müşteri Sayısı</h3>
			<canvas id="myChart6"></canvas>
		</div>
		<a class="show3">
			<div class="avg-element avg-element-red"><div class="avg-text"><?php echo $tarih; ?><br> Ortalama<br><h2 style="font-size: 37px;margin-top: 47px;">Şikayet</h2><div class='mill3'><h1 id='sonuc4'><?php echo $sikayetOrtSon; ?></h1></div></div></div>
		</a>
		<div class="pop-up-g3">
			<h3 class="graph-head">Aylık Ortalama Şikayet Sayısı</h3>
			<canvas id="myChart7"></canvas>
		</div>	
		<a class="show4">
			<div class="avg-element avg-element-red"><div class="avg-text"><?php echo $tarih; ?><br> Ortalama<br><h2>İade</h2><div class='mill4'><h1 id="sonuc3"></h1></div></div></div>
		</a><div class="pop-up-g4">
			<h3 class="graph-head">Aylık Ortalama İade Edilen Ürün Tutarı</h3>
			<canvas id="myChart8"></canvas>
		</div>	

		</div>
		<div class="graphs">
		<div class="grafik"><h3 class="graph-head">Ciro</h3><canvas  id="myChart"></canvas></div>
		<div class="grafik2"><h3 class="graph-head">Şikayet Sayısı</h3><canvas  id="myChart3"></canvas></div></div>
		<div class="graphs">
		<div class="grafik3"><h3 class="graph-head">Müşteri Sayısı</h3><canvas  id="myChart2"></canvas></div>
		<div class="grafik4"><h3 class="graph-head">İade Edilen Ürün Tutarı</h3><canvas  id="myChart4"></canvas></div>
		</div><div id="bs" style="height: 60px;width: 10px;"></div>
		

	</div><div id="bs" style="height: 20px;width: 10px;"></div>
</section>
	</div>
	<script type="text/javascript">
 		var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $ciro1; ?>],
            backgroundColor: 'rgba(8, 116, 224, 0.0)',
            borderColor: '#0874e0',
            borderWidth: 2,
            label:"Remzi Akyıldız"
        },{
        	data: [<?php echo $ciro2; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e21679',
            borderWidth: 2,
            label:"Ayhan Uyanık"
        },
        {
        	data: [<?php echo $ciro3; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#52e812',
            borderWidth: 2,
            label:"Nilay Uçar"
        },
        {
        	data: [<?php echo $ciro4; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e00239',
            borderWidth: 2,
            label:"Basri Onay"
        },
        {
        	data: [<?php echo $ciro5; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#133d7c',
            borderWidth: 2,
            label:"Egemen Sarıkaya"
        },
        {
        	data: [<?php echo $ciro6; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#cc8306',
            borderWidth: 2,
            label:"Yasemin Bayar"
        },]
    },
    options: {
    	title: {
            display: false,
            text: 'Ciro',
        }

    }
});
</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart2').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $musteri_sayisi1; ?>],
            backgroundColor: 'rgba(8, 116, 224, 0.0)',
            borderColor: '#0874e0',
            borderWidth: 2,
            label:"Remzi Akyıldız"
        },{
        	data: [<?php echo $musteri_sayisi2; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e21679',
            borderWidth: 2,
            label:"Ayhan Uyanık"
        },
        {
        	data: [<?php echo $musteri_sayisi3; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#52e812',
            borderWidth: 2,
            label:"Nilay Uçar"
        },
        {
        	data: [<?php echo $musteri_sayisi4; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e00239',
            borderWidth: 2,
            label:"Basri Onay"
        },
        {
        	data: [<?php echo $musteri_sayisi5; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#133d7c',
            borderWidth: 2,
            label:"Egemen Sarıkaya"
        },
        {
        	data: [<?php echo $musteri_sayisi6; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#cc8306',
            borderWidth: 2,
            label:"Yasemin Bayar"
        },]
    },
    options: {
       title: {
            display: false,
            text: 'Müşteri Sayısı',
        }
    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart3').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $sikayet1; ?>],
            backgroundColor: 'rgba(8, 116, 224, 0.0)',
            borderColor: '#0874e0',
            borderWidth: 2,
            label:"Remzi Akyıldız"
        },{
        	data: [<?php echo $sikayet2; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e21679',
            borderWidth: 2,
            label:"Ayhan Uyanık"
        },
        {
        	data: [<?php echo $sikayet3; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#52e812',
            borderWidth: 2,
            label:"Nilay Uçar"
        },
        {
        	data: [<?php echo $sikayet4; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e00239',
            borderWidth: 2,
            label:"Basri Onay"
        },
        {
        	data: [<?php echo $sikayet5; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#133d7c',
            borderWidth: 2,
            label:"Egemen Sarıkaya"
        },
        {
        	data: [<?php echo $sikayet6; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#cc8306',
            borderWidth: 2,
            label:"Yasemin Bayar"
        },]
    },
    options: {
        title: {
            display: false,
            text: 'Şikayet Sayısı',
        }
    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart4').getContext('2d');
var myChart4 = new Chart(ctx, {
    type: 'line',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $israf1; ?>],
            backgroundColor: 'rgba(8, 116, 224, 0.0)',
            borderColor: '#0874e0',
            borderWidth: 2,
            label:"Remzi Akyıldız"
        },{
        	data: [<?php echo $israf2; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e21679',
            borderWidth: 2,
            label:"Ayhan Uyanık"
        },
        {
        	data: [<?php echo $israf3; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#52e812',
            borderWidth: 2,
            label:"Nilay Uçar"
        },
        {
        	data: [<?php echo $israf4; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#e00239',
            borderWidth: 2,
            label:"Basri Onay"
        },
        {
        	data: [<?php echo $israf5; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#133d7c',
            borderWidth: 2,
            label:"Egemen Sarıkaya"
        },
        {
        	data: [<?php echo $israf6; ?>],
            backgroundColor: 'rgba(226, 22, 121, 0.0)',
            borderColor: '#cc8306',
            borderWidth: 2,
            label:"Yasemin Bayar"
        },]
    },
    options: {
        title: {
            display: false,
            text: 'Çöpe Giden Ürün Tutarı',
        }
    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart5').getContext('2d');
var myChart5 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $ciroOrt; ?>],
            backgroundColor: '#2ed8b6',
            borderColor: '#0874e0',
            borderWidth: 0,
            label:"Ciro"
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Ciro',
        },
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 900000, max:1300000}}]
      }
    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart6').getContext('2d');
var myChart6 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $musteri_sayisiOrt; ?>],
            backgroundColor: '#2ed8b6',
            borderColor: '#0874e0',
            borderWidth: 0,
            label:"Müşteri Sayısı"
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Müşteri Sayısı',
        },
       scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 30000, max:36000}}]
      } 
    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart7').getContext('2d');
var myChart7 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $sikayetOrt; ?>],
            backgroundColor: '#ff5370',
            borderColor: '#0874e0',
            borderWidth: 0,
            label:"Şikayet",
        }]
    },
    options: {
        title: {
            display: false,
            text: 'Şikayet Sayısı',
        },
         scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 20, max:32}}]
      }
    }
});
	</script>
<script type="text/javascript">
 		var ctx = document.getElementById('myChart8').getContext('2d');
var myChart5 = new Chart(ctx, {
    type: 'bar',
    data: {
    	labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $israfOrt; ?>],
            backgroundColor: '#ff5370',
            borderColor: '#0874e0',
            borderWidth: 0,
            label:"İade Edilen Ürün"
        }]
    },
    options: {
        title: {
            display: false,
            text: 'İade Edilen Ürün Tutarı',
        },
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 9000, max:14500}}]
      }
    }
});
	</script>
</body>
</html>