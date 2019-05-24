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
        $('.profile-button').click(function(event){
        event.stopPropagation();
         $(".profile-links").slideToggle('fast');
    });
    $(".profile-links").on("click", function (event) {
        event.stopPropagation();
    });
$(document).on("click", function () {
    $(".profile-links").slideUp('fast');
 });
    $("#cr").click(function() {
        $("#ciro").slideToggle();
        $("#musteri").css('display','none');
        $("#sikayet").css('display','none');
        $("#iade").css('display','none');
    });
        $("#ms").click(function() {
        $("#musteri").slideToggle();
        $("#ciro").css('display','none');
        $("#sikayet").css('display','none');
        $("#iade").css('display','none');
    });
    $("#sk").click(function() {
        $("#sikayet").slideToggle();
        $("#musteri").css('display','none');
        $("#ciro").css('display','none');
        $("#iade").css('display','none');
    });
    $("#ia").click(function() {
        $("#iade").slideToggle();
        $("#musteri").css('display','none');
        $("#sikayet").css('display','none');
        $("#ciro").css('display','none');
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

 	var ciroy=  nFormatter(<?php echo $ciroTopSon; ?>, 2);
 	var musy= nFormatter(<?php echo $musteri_sayisiTopSon
 		; ?>,0);
 	var iadey= nFormatter(<?php echo $israfTopSon; ?>,0);
 document.getElementById("sonuc").innerHTML=ciroy;
 document.getElementById("sonuc2").innerHTML=musy;
 document.getElementById("sonuc3").innerHTML=iadey;
});
  </script>
</head><body>
  <div style="margin:0;padding: 0;" class="contain">
    <div class="top-bar">
    
    <div class="menu-bar-2"><input id="tags" type="text" placeholder="Arama..."><a href="#" class="button"><img src="images/icons/search.png"></a>
<div class="profile-menu">
<button class="profile-button"><img src="images/user.png"><p>Serhat Şanlı</p><img class="arrow1" src="images/icons/down.png"></button>
    <div class="profile-links">
        <a href="#"><img src="images/icons/profile.png">Profil</a>
        <a href="#"><img src="images/icons/settings.png">Ayarlar</a>
        <a href="logout.php"><img src="images/icons/logout.png">Çıkış</a>
    </div>
</div>
  </div>
</div>
    <nav class="menu">
      <div class="menu-bar-1"><a href="#"><img src="images/logo.png"></a></div>
      <div class="n-list">
        <p>  </p>
        <a href="subeler.php" class="n-link"><div class="n-button"><img src="images/icons/graphw.png">Şube Analizleri</div></a>
        <a href="calisanlar.php" class="n-link"><div class="n-button"><img src="images/icons/graphw.png">Çalışan Analizleri </div></a>
        <a href="bolge.php" class="n-link"><div class="n-button aktif"><img src="images/icons/region.png">Genel Bölge Analizi</div></a>
        <a href="map.php" class="n-link"><div class="n-button"><img src="images/icons/location.png">Şubeler</div></a></div>
    </nav>

<div class="content-app">
    <div class="avg">


    <a class="show" id="cr">
      <div class="avg-element"><div class="avg-text"><?php echo $tarih; ?><br>Toplam<br><h2>Ciro</h2><div class='mill'><h1 id='sonuc'></h1></div></div></div>
    </a>
    
    

    <a class="show" id="ms">
      <div class="avg-element"><div class="avg-text"><?php echo $tarih; ?><br> Toplam<br><h2 style="font-size: 37px;margin-top: 47px;">Müşteri</h2><div class='mill2'><h1 id='sonuc2'></h1></div></div></div>
    </a>

      
    
    <a class="show" id="sk">
      <div class="avg-element avg-element-red"><div class="avg-text"><?php echo $tarih; ?><br> Toplam<br><h2 style="font-size: 37px;margin-top: 47px;">Şikayet</h2><div class='mill3'><h1 id='sonuc4'><?php echo $sikayetTopSon; ?></h1></div></div></div>
    </a>

   
    <a class="show" id="ia">
      <div class="avg-element avg-element-red"><div class="avg-text"><?php echo $tarih; ?><br> Toplam<br><h2>İade</h2><div class='mill4'><h1 id="sonuc3"></h1></div></div></div>
    </a>

</div>

</div>

  </div> 

<div class='content-box-app' id="ciro">
<div class="graphs">
    <div class="grafik"><h3 class="graph-head">Aylık Toplam Ciro</h3><canvas  id="myChart"></canvas></div>
    <div class="graph-green grafik2"><h3 class="graph-head"><?php echo $tarih;?> Ciro Dağılımı</h3><canvas  id="myChart2"></canvas></div></div>
    <div id="bs" style="height: 60px;width: 10px;"></div>
    </div>
<div class='content-box-app' id='musteri'>
<div class="graphs">
    <div class="grafik"><h3 class="graph-head">Aylık Toplam Müşteri</h3><canvas  id="myChart3"></canvas></div>
    <div class="graph-green grafik2"><h3 class="graph-head"><?php echo $tarih;?> Müşteri Dağılımı</h3><canvas  id="myChart4"></canvas></div></div>
    <div id="bs" style="height: 60px;width: 10px;"></div>
    </div>
<div class='content-box-app' id='sikayet'>
<div class="graphs">
    <div class="graph-red grafik"><h3 class="graph-head">Aylık Toplam Şikayet</h3><canvas  id="myChart5"></canvas></div>
    <div class="graph-red grafik2"><h3 class="graph-head"><?php echo $tarih;?> Şikayet Dağılımı</h3><canvas  id="myChart6"></canvas></div></div>
    <div id="bs" style="height: 60px;width: 10px;"></div>
    </div>
<div class='content-box-app' id='iade'>
<div class="graphs">
    <div class="graph-red grafik"><h3 class="graph-head">Aylık Toplam İade</h3><canvas  id="myChart7"></canvas></div>
    <div class="graph-red grafik2"><h3 class="graph-head"><?php echo $tarih;?> İade Dağılımı</h3><canvas  id="myChart8"></canvas></div></div>
    <div id="bs" style="height: 60px;width: 10px;"></div>
    </div>

  </div><div id="bs" style="height: 20px;width: 10px;"></div>
</section>
  </div>
  <script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $ciroTop; ?>],
            backgroundColor:'rgba(46, 216, 182, 0.7)',
            borderColor: 'rgb(46, 216, 182)',
            borderWidth: 2,
            label:"Aylık Toplam Ciro"
        },]
    },
    options: {
      title: {
            display: false,
            text: 'Aylık Ciro',
        },
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 6000000, max:8000000}}]
      }

    }
});
</script>

<script type="text/javascript">
    var ctx = document.getElementById('myChart2').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels:["Remzi Akyıldız","Ayhan Uyanık","Nilay Uçar","Basri Onay","Egemen Sarıkaya","Yasemin Bayar"],
        datasets: [{
            data: [<?php echo $ciro1Son.",".$ciro2Son.",".$ciro3Son.",".$ciro4Son.",".$ciro5Son.",".$ciro6Son; ?>],
            backgroundColor: ['rgba(8, 116, 224, 0.7)',
                'rgba(237, 59, 83,0.7)',
                'rgba(135, 104, 214,0.7)',
                'rgba(93, 198, 239,0.7)',
                'rgba(78, 232, 150,0.7)',
                'rgba(232, 165, 77,0.7)',


              ],
            borderColor: [
                'rgb(8, 116, 224)',
                'rgb(237, 59, 83)',
                'rgb(135, 104, 214)',
                'rgb(93, 198, 239)',
                'rgb(78, 232, 150)',
                'rgb(232, 165, 77)',
            ],
            borderWidth: 2,
            label:"Son Ay Ciro Dağılımı"
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
    var ctx = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $musteri_sayisiTop; ?>],
            backgroundColor:'rgba(46, 216, 182, 0.7)',
            borderColor: 'rgb(46, 216, 182)',
            borderWidth: 2,
            label:"Aylık Toplam Müşteri"
        },]
    },
    options: {
      title: {
            display: false,
            text: 'Aylık Ciro',
        },
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 180000, max:215000}}]
      }

    }
});
</script>

<script type="text/javascript">
    var ctx = document.getElementById('myChart4').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels:["Remzi Akyıldız","Ayhan Uyanık","Nilay Uçar","Basri Onay","Egemen Sarıkaya","Yasemin Bayar"],
        datasets: [{
            data: [<?php echo $musteri1Son.",".$musteri2Son.",".$musteri3Son.",".$musteri4Son.",".$musteri5Son.",".$musteri6Son; ?>],
            backgroundColor: ['rgba(8, 116, 224, 0.7)',
                'rgba(237, 59, 83,0.7)',
                'rgba(135, 104, 214,0.7)',
                'rgba(93, 198, 239,0.7)',
                'rgba(78, 232, 150,0.7)',
                'rgba(232, 165, 77,0.7)',


              ],
            borderColor: [
                'rgb(8, 116, 224)',
                'rgb(237, 59, 83)',
                'rgb(135, 104, 214)',
                'rgb(93, 198, 239)',
                'rgb(78, 232, 150)',
                'rgb(232, 165, 77)',
            ],
            borderWidth: 2,
            label:"Son Ay Müşteri Dağılımı"
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
    var ctx = document.getElementById('myChart5').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $sikayetTop; ?>],
            backgroundColor:'rgba(255, 83, 112, 0.7)',
            borderColor: 'rgb(255, 83, 112)',
            borderWidth: 2,
            label:"Aylık Toplam Şikayet"
        },]
    },
    options: {
      title: {
            display: false,
            text: 'Aylık Ciro',
        },
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 125, max:200}}]
      }

    }
});
</script>

<script type="text/javascript">
    var ctx = document.getElementById('myChart6').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels:["Remzi Akyıldız","Ayhan Uyanık","Nilay Uçar","Basri Onay","Egemen Sarıkaya","Yasemin Bayar"],
        datasets: [{
            data: [<?php echo $sikayetSon1.",".$sikayetSon2.",".$sikayetSon3.",".$sikayetSon4.",".$sikayetSon5.",".$sikayetSon6; ?>],
            backgroundColor: ['rgba(8, 116, 224, 0.7)',
                'rgba(237, 59, 83,0.7)',
                'rgba(135, 104, 214,0.7)',
                'rgba(93, 198, 239,0.7)',
                'rgba(78, 232, 150,0.7)',
                'rgba(232, 165, 77,0.7)',


              ],
            borderColor: [
                'rgb(8, 116, 224)',
                'rgb(237, 59, 83)',
                'rgb(135, 104, 214)',
                'rgb(93, 198, 239)',
                'rgb(78, 232, 150)',
                'rgb(232, 165, 77)',
            ],
            borderWidth: 2,
            label:"Son Ay Şikayet Dağılımı"
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
    var ctx = document.getElementById('myChart7').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[<?php echo $tarihler; ?>],
        datasets: [{
            data: [<?php echo $israfTop; ?>],
            backgroundColor:'rgba(255, 83, 112, 0.7)',
            borderColor: 'rgb(255, 83, 112)',
            borderWidth: 2,
            label:"Aylık Toplam İade"
        },]
    },
    options: {
      title: {
            display: false,
            text: 'Aylık Toplam İade',
        },
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 60000, max:85000}}]
      }

    }
});
</script>

<script type="text/javascript">
    var ctx = document.getElementById('myChart8').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'pie',
    data: {
      labels:["Remzi Akyıldız","Ayhan Uyanık","Nilay Uçar","Basri Onay","Egemen Sarıkaya","Yasemin Bayar"],
        datasets: [{
            data: [<?php echo $iadeSon1.",".$iadeSon2.",".$iadeSon3.",".$iadeSon4.",".$iadeSon5.",".$iadeSon6; ?>],
            backgroundColor: ['rgba(8, 116, 224, 0.7)',
                'rgba(237, 59, 83,0.7)',
                'rgba(135, 104, 214,0.7)',
                'rgba(93, 198, 239,0.7)',
                'rgba(78, 232, 150,0.7)',
                'rgba(232, 165, 77,0.7)',


              ],
            borderColor: [
                'rgb(8, 116, 224)',
                'rgb(237, 59, 83)',
                'rgb(135, 104, 214)',
                'rgb(93, 198, 239)',
                'rgb(78, 232, 150)',
                'rgb(232, 165, 77)',
            ],
            borderWidth: 2,
            label:"Son Ay Ciro Dağılımı"
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

</div>
  







  </div>
</body>
</html>