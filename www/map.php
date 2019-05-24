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
<!DOCTYPE html>
<html>
  <head>
    <title>Şube Yönetim Sistemi</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script type="text/javascript">
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

 });
</script>
<link rel="icon" href="icon.png">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  </head>
<body>
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
        <a href="bolge.php" class="n-link"><div class="n-button"><img src="images/icons/region.png">Genel Bölge Analizi</div></a>
        <a href="map.php" class="n-link"><div class="n-button aktif"><img src="images/icons/location.png">Şubeler</div></a></div>
    </nav>
<div class="content-map">
  <h1>Şubeler</h1>
    <div class="harita">
      <div id="map"></div>
  </div>
  <?php
  $i=0;
$i=0;

while ($i<6) {
  echo "  <div class='map-table' id='sube".$i."'><table>
      <thead>
    <tr>
      <th scope='col'><h1>".$subeAd[$i]."</h1></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>Şube Adresi</th>
      <td>".$subeAdres[$i]."</td>

    </tr>
    <tr>
      <th scope='row'>Şube m²</th>
      <td>".$subeKare[$i]."</td>

    </tr>
    <tr>
      <th scope='row'>Yönetici</th>
      <td>".$subeYon[$i]."</td>

    </tr>
  </tbody>
  </table>
</div>";;
  $i=$i+1;
}

   ?>
</div>
</div>
    <script>
      function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
          zoom: 12,
          center: new google.maps.LatLng(38.44, 27.13) 
        });
        var myLatLng1 = {<?php echo 'lat: '.$lat[0].', lng: '.$lng[0]; ?>};

        var marker = new google.maps.Marker({
          position: myLatLng1,
          map: map,
          label:'1',

        });
        var myLatLng2 = {<?php echo 'lat: '.$lat[1].', lng: '.$lng[1]; ?>};

        var marker2 = new google.maps.Marker({
          position: myLatLng2,
          map: map,
          label:'2',

        });
        var myLatLng3 = {<?php echo 'lat: '.$lat[2].', lng: '.$lng[2]; ?>};

        var marker3 = new google.maps.Marker({
          position: myLatLng3,
          map: map,
          label:'3',

        });
        var myLatLng4 = {<?php echo 'lat: '.$lat[3].', lng: '.$lng[3]; ?>};

        var marker4 = new google.maps.Marker({
          position: myLatLng4,
          map: map,
          label:'4',

        });
        var myLatLng5 = {<?php echo 'lat: '.$lat[4].', lng: '.$lng[4]; ?>};

        var marker5 = new google.maps.Marker({
          position: myLatLng5,
          map: map,
          label:'5',

        });
        var myLatLng6 = {<?php echo 'lat: '.$lat[5].', lng: '.$lng[5]; ?>};

        var marker6 = new google.maps.Marker({
          position: myLatLng6,
          map: map,
          label:'6',

        });
        // We add a DOM event here to show an alert if the DIV containing the
        // map is clicked.
        google.maps.event.addDomListener(marker, 'click', function() {
          $("#sube0").toggle();
          $("#sube1").css('display','none');
          $("#sube2").css('display','none');
          $("#sube3").css('display','none');
          $("#sube4").css('display','none');
          $("#sube5").css('display','none');
        });
        google.maps.event.addDomListener(marker2, 'click', function() {
          $("#sube1").toggle();
          $("#sube0").css('display','none');
          $("#sube2").css('display','none');
          $("#sube3").css('display','none');
          $("#sube4").css('display','none');
          $("#sube5").css('display','none');
        });
        google.maps.event.addDomListener(marker3, 'click', function() {
          $("#sube2").toggle();
          $("#sube1").css('display','none');
          $("#sube0").css('display','none');
          $("#sube3").css('display','none');
          $("#sube4").css('display','none');
          $("#sube5").css('display','none');
        });
        google.maps.event.addDomListener(marker4, 'click', function() {
          $("#sube3").toggle();
          $("#sube1").css('display','none');
          $("#sube2").css('display','none');
          $("#sube0").css('display','none');
          $("#sube4").css('display','none');
          $("#sube5").css('display','none');
        });
        google.maps.event.addDomListener(marker5, 'click', function() {
          $("#sube4").toggle();
          $("#sube1").css('display','none');
          $("#sube2").css('display','none');
          $("#sube3").css('display','none');
          $("#sube0").css('display','none');
          $("#sube5").css('display','none');
        });
        google.maps.event.addDomListener(marker6, 'click', function() {
          $("#sube5").toggle();
          $("#sube1").css('display','none');
          $("#sube2").css('display','none');
          $("#sube3").css('display','none');
          $("#sube4").css('display','none');
          $("#sube0").css('display','none');
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAElZxGqBgFffJXqWtpvjOHTkTtQxd7Axg&callback=initMap&language=tr&region=TR">
    </script>
    <script type="text/javascript">
function myFunction() {
  document.getElementById("myCheck").click();
}


</script>
  </body>
</html>