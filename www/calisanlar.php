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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Shuffle/5.2.1/shuffle.js"></script>
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
    $("#show1").click(function() {
        $("#calisan1").slideToggle();
        $("#calisan2").css('display','none');
        $("#calisan3").css('display','none');
        $("#calisan4").css('display','none');
        $("#calisan5").css('display','none');
        $("#calisan6").css('display','none');
        $(".uyariB").css('display','none');


    });
    $("#show2").click(function() {
        $("#calisan2").slideToggle();
        $("#calisan1").css('display','none');
        $("#calisan3").css('display','none');
        $("#calisan4").css('display','none');
        $("#calisan5").css('display','none');
        $("#calisan6").css('display','none');
        $(".uyariB").css('display','none');

    });
    $("#show3").click(function() {
        $("#calisan3").slideToggle();
        $("#calisan2").css('display','none');
        $("#calisan1").css('display','none');
        $("#calisan4").css('display','none');
        $("#calisan5").css('display','none');
        $("#calisan6").css('display','none');
        $(".uyariB").css('display','none');
    });
    $("#show4").click(function() {
        $("#calisan4").slideToggle();
        $("#calisan2").css('display','none');
        $("#calisan3").css('display','none');
        $("#calisan1").css('display','none');
        $("#calisan5").css('display','none');
        $("#calisan6").css('display','none');
        $(".uyariB").css('display','none');
    });
    $("#show5").click(function() {
        $("#calisan5").slideToggle();
        $("#calisan2").css('display','none');
        $("#calisan3").css('display','none');
        $("#calisan4").css('display','none');
        $("#calisan1").css('display','none');
        $("#calisan6").css('display','none');
        $(".uyariB").css('display','none');

    });
    $("#show6").click(function() {
        $("#calisan6").slideToggle();
        $("#calisan2").css('display','none');
        $("#calisan3").css('display','none');
        $("#calisan4").css('display','none');
        $("#calisan5").css('display','none');
        $("#calisan1").css('display','none');
        $(".uyariB").css('display','none');

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
cc1 =  nFormatter(<?php echo $ciro1Son; ?>, 2);
cs1 = nFormatter(<?php echo $musteri1Son; ?>,0);
ci1= nFormatter(<?php echo $iadeSon1; ?>,0);


 document.getElementById("son1").innerHTML=cc1;
 document.getElementById("son2").innerHTML=cs1;
 document.getElementById("son3").innerHTML=ci1;

 cc2=  nFormatter(<?php echo $ciro2Son; ?>, 2);
 cs2= nFormatter(<?php echo $musteri2Son; ?>,0);
 ci2= nFormatter(<?php echo $iadeSon2; ?>,0);

 document.getElementById("son4").innerHTML=cc2;
 document.getElementById("son5").innerHTML=cs2;
 document.getElementById("son6").innerHTML=ci2;

 cc3=  nFormatter(<?php echo $ciro3Son; ?>, 2);
 cs3= nFormatter(<?php echo $musteri3Son; ?>,0);
 ci3= nFormatter(<?php echo $iadeSon3; ?>,0);

 document.getElementById("son7").innerHTML=cc3;
 document.getElementById("son8").innerHTML=cs3;
 document.getElementById("son9").innerHTML=ci3;

 cc4=  nFormatter(<?php echo $ciro4Son; ?>, 2);
 cs4= nFormatter(<?php echo $musteri4Son; ?>,0);
 ci4= nFormatter(<?php echo $iadeSon4; ?>,0);

 document.getElementById("son10").innerHTML=cc4;
 document.getElementById("son11").innerHTML=cs4;
 document.getElementById("son12").innerHTML=ci4;

 cc5=  nFormatter(<?php echo $ciro5Son; ?>, 2);
 cs5= nFormatter(<?php echo $musteri5Son; ?>,0);
 ci5= nFormatter(<?php echo $iadeSon5; ?>,0);

 document.getElementById("son13").innerHTML=cc5;
 document.getElementById("son14").innerHTML=cs5;
 document.getElementById("son15").innerHTML=ci5;

 cc6=  nFormatter(<?php echo $ciro6Son; ?>, 2);
 cs6= nFormatter(<?php echo $musteri6Son ; ?>,0);
 ci6= nFormatter(<?php echo $iadeSon6; ?>,0);

 document.getElementById("son16").innerHTML=cc6;
 document.getElementById("son17").innerHTML=cs6;
 document.getElementById("son18").innerHTML=ci6;





});

  </script>
</head>
<body>
  <div style="margin:0;padding: 0;" class="container-fluid">
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
        <a href="calisanlar.php" class="n-link"><div class="n-button aktif"><img src="images/icons/graphw.png">Çalışan Analizleri </div></a>
        <a href="bolge.php" class="n-link"><div class="n-button"><img src="images/icons/region.png">Genel Bölge Analizi</div></a>
        <a href="map.php" class="n-link"><div class="n-button"><img src="images/icons/location.png">Şubeler</div></a></div>
    </nav>
<section>

  <div class="workers">


<?php
$calisanSorgu=mysqli_query($conn,"select * ,YEAR(CURDATE()) - YEAR(mudurler.dTarih) AS yas FROM mudurler");
  $t=1;
while($calisan=mysqli_fetch_array($calisanSorgu)){

  $calisan_isim=$calisan['adSoyad'];
  $calisan_resim=$calisan['resimurl'];
  echo "<a id='show".$t."'><div class='wr-element'><div class='avg-text'><h5>".$calisan_isim."</h5><img src='".$calisan_resim."'>
    </div>
  </div>";
  $t=$t+1;
}


?>
</div>


<?php 
$cirolar=array($ciro1,$ciro2,$ciro3,$ciro4,$ciro5,$ciro6);
$musteri_sayilari=array($musteri_sayisi1,$musteri_sayisi2,$musteri_sayisi3,$musteri_sayisi4,$musteri_sayisi5,$musteri_sayisi6);
$sikayet_sayilari=array($sikayet1,$sikayet2,$sikayet3,$sikayet4,$sikayet5,$sikayet6);
$iadeler=array($israf1,$israf2,$israf3,$israf4,$israf5,$israf6);
$chartName1=array('myChart1','myChart2','myChart3','myChart4');
$chartName2=array('myChart5','myChart6','myChart7','myChart8');
$chartName3=array('myChart9','myChart10','myChart11','myChart12');
$chartName4=array('myChart13','myChart14','myChart15','myChart16');
$chartName5=array('myChart17','myChart18','myChart19','myChart20');
$chartName6=array('myChart21','myChart22','myChart23','myChart24');

$sikayetler=array($sikayetSon1,$sikayetSon2,$sikayetSon3,$sikayetSon4,$sikayetSon5,$sikayetSon6);

$chartNames=array($chartName1,$chartName2,$chartName3,$chartName4,$chartName5,$chartName6);



$calisanSorgu=mysqli_query($conn,"select * ,YEAR(CURDATE()) - YEAR(mudurler.dTarih) AS yas FROM mudurler,subeler where subeler.sube_id=mudurler.sube_id ");
$i=1;
$x=0;
$y=0;
$z=1;
while($calisan=mysqli_fetch_array($calisanSorgu)){
  $calisan_isim=$calisan['adSoyad'];
  $calisan_resim=$calisan['resimurl'];
  $calisan_yas=$calisan['yas'];
  $calisan_ise_giris=$calisan['iTarih'];
  $calisan_uyari=$calisan['uyari'];
  $sube_ad=$calisan['sube_ad'];
  echo "<div class='content-box calisan' id='calisan".$i."'>
<div class='profile'>
  <div class='profile-picture'><img src='".$calisan_resim."'> </div>
  <div class='profile-content'><table class='table'>
  <thead>
    <tr>
      <th scope='col'><h2>".$calisan_isim."</h2></th>
      <td></td>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope='row'>Sorumlu Olduğu Şube</th>
      <td><h4>".$sube_ad."</h4></td>
    </tr>
    <tr>
      <th scope='row'>İşe Giriş Tarihi</th>
      <td>".$calisan_ise_giris."</td>
    </tr>
    <tr>
      <th scope='row'>Yaş</th>
      <td>".$calisan_yas."</td>

    </tr>
  
    <tr>
      <th scope='row'>Yapılan Uyarılar</th>
      <td>2</td>

    </tr>
  </tbody>
</table>

</div></div>
<div class='worker-performance'>

  <div class='avg avg-worker'>


    <a class='show1'>
      <div class='avg-element'><div class='avg-text'>".$tarih ."<br> Toplam<br><h2>Ciro</h2><div class='mill'><h1 id='son".$z."'></h1></div></div></div>
    </a>";
    $z=$z+1;
    echo "

    <a class='show2'>
      <div class='avg-element'><div class='avg-text'>".$tarih."<br> Toplam<br><h2 style='font-size: 37px;margin-top: 47px;'>Müşteri</h2><div class='mill2'><h1 id='son".$z."'></h1></div></div></div>
    </a>";
    $z=$z+1;
    echo "

    <a class='show3'>
      <div class='avg-element avg-element-red'><div class='avg-text'>".$tarih."<br>Toplam<br><h2 style='font-size: 37px;margin-top: 47px;'>Şikayet</h2><div class='mill3'><h1 id='sonuc4'>".$sikayetler[$x]."</h1></div></div></div>
    </a>

    <a class='show4'>
      <div class='avg-element avg-element-red'><div class='avg-text'>".$tarih."<br> Toplam<br><h2>İade</h2><div class='mill4'><h1 id='son".$z."'></h1></div></div></div></a>
";
    $z=$z+1;
    echo "

    </div>
    <div class='graphs'>
    <div class='worker-graph grafik'><h3 class='graph-head'>Ciro</h3><canvas  id='".$chartNames[$x][$y]."'></canvas></div>
    <script type='text/javascript'>
    var ctx = document.getElementById('".$chartNames[$x][$y]."').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[".  $tarihler."],
        datasets: [{
            data: [".  $cirolar[$x]."],
            backgroundColor: ['rgba(8, 116, 224, 0.7)',
                'rgba(237, 59, 83,0.7)',
                'rgba(135, 104, 214,0.7)',
                'rgba(93, 198, 239,0.7)',
                'rgba(78, 232, 150,0.7)',
                'rgba(232, 165, 77,0.7)',


              ],
            borderColor:[
                'rgb(8, 116, 224)',
                'rgb(237, 59, 83)',
                'rgb(135, 104, 214)',
                'rgb(93, 198, 239)',
                'rgb(78, 232, 150)',
                'rgb(232, 165, 77)',
            ],
            borderWidth: 2,
            label:'".$calisan_isim."'
        },]
    },
    options: {
      title: {
            display: false,
            text: 'Ciro',
        },
        legend: {display:false,},
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 500000, max:1800000}}]
      }

    }
});
</script>
";
$y=$y+2;
echo "
    <div class=' second worker-graph grafik2'><h3 class='graph-head'>Şikayet Sayısı</h3><canvas  id='".$chartNames[$x][$y]."'></canvas></div></div>
    <script type='text/javascript'>
    var ctx = document.getElementById('".$chartNames[$x][$y]."').getContext('2d');
var myChart3 = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[".  $tarihler."],
        datasets: [{
            data: [".  $sikayet_sayilari[$x]."],
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
            label:'".$calisan_isim."'
        },]
    },
    options: {
        title: {
            display: false,
            
            text: 'Şikayet Sayısı',
        },
        legend: {display:false,},
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 5, max:43}}]
      }
    }
});
  </script>
";
$y=$y-1;
echo "
    <div class='graphs'>
    <div class='worker-graph grafik3'><h3 class='graph-head'>Müşteri Sayısı</h3><canvas  id='".$chartNames[$x][$y]."'></canvas></div>
    <script type='text/javascript'>
    var ctx = document.getElementById('".$chartNames[$x][$y]."').getContext('2d');
var myChart2 = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[".  $tarihler."],
        datasets: [{
            data: [".  $musteri_sayilari[$x]."],
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
            label:'".$calisan_isim."'
        },]
    },
    options: {
       title: {
            display: false,
            
            text: 'Müşteri Sayısı',
        },

        legend: {display:false,},
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 20000, max:42000}}]
      }
    }
});
  </script>
";
$y=$y+2;
echo "
    <div class='second worker-graph grafik4'><h3 class='graph-head'>İade Edilen Ürün Tutarı</h3><canvas  id='".$chartNames[$x][$y]."'></canvas></div>
    </div>
    <div id='bs' style='height: 100px;width: 10px;'></div>
    

  </div>
</div>





<script type='text/javascript'>
    var ctx = document.getElementById('".$chartNames[$x][$y]."').getContext('2d');
var myChart4 = new Chart(ctx, {
    type: 'bar',
    data: {
      labels:[".  $tarihler."],
        datasets: [{
            data: [".  $iadeler[$x]."],
            backgroundColor:['rgba(8, 116, 224, 0.7)',
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
            label:'".$calisan_isim."'
        },]
    },
    options: {
        title: {
            display: false,
            text: 'Çöpe Giden Ürün Tutarı',
        },
        legend: {display:false,},
        scales: {
        yAxes: [{id: 'y-axis-1', type: 'linear', position: 'left', ticks: {min: 5000, max:17000}}]
      }
    }
});
  </script>
";

$y=$y-3;
$x=$x+1;
$i=$i+1;

}



?>
</div>
<script type="text/javascript">
function genPDF() {
  
  var doc = new jsPDF();
  
    doc.fromHTML($('#calisan1').get(0), 20,20,{
                 'width':1500,

    });
  
  doc.save('Test.pdf');
  
}
</script>
</section>
</div>

</body>
</html>