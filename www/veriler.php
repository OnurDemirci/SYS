<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ob_start();
error_reporting(0);
require("connection.php"); 
$sorgu=mysqli_query($conn,"SELECT * from mudurler,subeler,veriler WHERE mudurler.sube_id=subeler.sube_id and subeler.sube_id=veriler.sube_id and subeler.sube_id=1");
$ciro1='';
$tarih1='';
$musteri_sayisi1='';
$sikayet1='';
$israf1='';

while($row=mysqli_fetch_array($sorgu)){
	$musteri_sayisi11=$row['musteri_sayisi'];
	$israf11=$row['israf'];
	$sikayet11=$row['sikayet'];
	$ciro11=$row['ciro'];
	$tarih11=date('M, Y', strtotime($row['tarih']));
	$tarih1 = $tarih1.'"'.$tarih11.'",';
	$ciro1 = $ciro1.$ciro11.',';
	$musteri_sayisi1 = $musteri_sayisi1.'"'.$musteri_sayisi11.'",';
	$sikayet1 = $sikayet1.$sikayet11.',';
	$israf1 = $israf1.$israf11.',';


}
$ciro1=trim($ciro1, ",");
$tarih1=trim($tarih1, ",");
$musteri_sayisi1=trim($musteri_sayisi1, ",");
$sikayet1=trim($sikayet1, ",");
$israf1=trim($israf1, ",");

$sorgu2=mysqli_query($conn,"SELECT * from mudurler,subeler,veriler WHERE mudurler.sube_id=subeler.sube_id and subeler.sube_id=veriler.sube_id and subeler.sube_id=2");
$ciro2='';
$tarih2='';
$musteri_sayisi2='';
$sikayet2='';
$israf2='';

while($row2=mysqli_fetch_array($sorgu2)){
	$musteri_sayisi22=$row2['musteri_sayisi'];
	$israf22=$row2['israf'];
	$sikayet22=$row2['sikayet'];
	$ciro22=$row2['ciro'];
	$tarih22=date('M, Y', strtotime($row2['tarih']));
	$tarih2 = $tarih2.'"'.$tarih22.'",';
	$ciro2 = $ciro2.$ciro22.',';
	$musteri_sayisi2 = $musteri_sayisi2.'"'.$musteri_sayisi22.'",';
	$sikayet2 = $sikayet2.$sikayet22.',';
	$israf2 = $israf2.$israf22.',';


}
$ciro2=trim($ciro2, ",");
$tarih2=trim($tarih2, ",");
$musteri_sayisi2=trim($musteri_sayisi2, ",");
$sikayet2=trim($sikayet2, ",");
$israf2=trim($israf2, ",");

$sorgu3=mysqli_query($conn,"SELECT * from mudurler,subeler,veriler WHERE mudurler.sube_id=subeler.sube_id and subeler.sube_id=veriler.sube_id and subeler.sube_id=3");
$ciro3='';
$tarih3='';
$musteri_sayisi3='';
$sikayet3='';
$israf3='';

while($row3=mysqli_fetch_array($sorgu3)){
	$musteri_sayisi33=$row3['musteri_sayisi'];
	$israf33=$row3['israf'];
	$sikayet33=$row3['sikayet'];
	$ciro33=$row3['ciro'];
	$tarih33=date('M, Y', strtotime($row3['tarih']));
	$tarih3 = $tarih3.'"'.$tarih33.'",';
	$ciro3 = $ciro3.$ciro33.',';
	$musteri_sayisi3 = $musteri_sayisi3.'"'.$musteri_sayisi33.'",';
	$sikayet3 = $sikayet3.$sikayet33.',';
	$israf3 = $israf3.$israf33.',';


}
$ciro3=trim($ciro3, ",");
$tarih3=trim($tarih3, ",");
$musteri_sayisi3=trim($musteri_sayisi3, ",");
$sikayet3=trim($sikayet3, ",");
$israf3=trim($israf3, ",");

$sorgu4=mysqli_query($conn,"SELECT * from mudurler,subeler,veriler WHERE mudurler.sube_id=subeler.sube_id and subeler.sube_id=veriler.sube_id and subeler.sube_id=4");
$ciro4='';
$tarih4='';
$musteri_sayisi4='';
$sikayet4='';
$israf4='';

while($row4=mysqli_fetch_array($sorgu4)){
	$musteri_sayisi44=$row4['musteri_sayisi'];
	$israf44=$row4['israf'];
	$sikayet44=$row4['sikayet'];
	$ciro44=$row4['ciro'];
	$tarih44=date('M, Y', strtotime($row4['tarih']));
	$tarih4 = $tarih4.'"'.$tarih44.'",';
	$ciro4 = $ciro4.$ciro44.',';
	$musteri_sayisi4 = $musteri_sayisi4.'"'.$musteri_sayisi44.'",';
	$sikayet4 = $sikayet4.$sikayet44.',';
	$israf4 = $israf4.$israf44.',';


}
$ciro4=trim($ciro4, ",");
$tarih4=trim($tarih4, ",");
$musteri_sayisi4=trim($musteri_sayisi4, ",");
$sikayet4=trim($sikayet4, ",");
$israf4=trim($israf4, ",");

$sorgu5=mysqli_query($conn,"SELECT * from mudurler,subeler,veriler WHERE mudurler.sube_id=subeler.sube_id and subeler.sube_id=veriler.sube_id and subeler.sube_id=5");
$ciro5='';
$tarih5='';
$musteri_sayisi5='';
$sikayet5='';
$israf5='';

while($row5=mysqli_fetch_array($sorgu5)){
	$musteri_sayisi55=$row5['musteri_sayisi'];
	$israf55=$row5['israf'];
	$sikayet55=$row5['sikayet'];
	$ciro55=$row5['ciro'];
	$tarih55=date('M, Y', strtotime($row5['tarih']));
	$tarih5 = $tarih5.'"'.$tarih55.'",';
	$ciro5 = $ciro5.$ciro55.',';
	$musteri_sayisi5 = $musteri_sayisi5.'"'.$musteri_sayisi55.'",';
	$sikayet5 = $sikayet5.$sikayet55.',';
	$israf5 = $israf5.$israf55.',';


}
$ciro5=trim($ciro5, ",");
$tarih5=trim($tarih5, ",");
$musteri_sayisi5=trim($musteri_sayisi5, ",");
$sikayet5=trim($sikayet5, ",");
$israf5=trim($israf5, ",");

$sorgu6=mysqli_query($conn,"SELECT * from mudurler,subeler,veriler WHERE mudurler.sube_id=subeler.sube_id and subeler.sube_id=veriler.sube_id and subeler.sube_id=6");
$ciro6='';
$tarih6='';
$musteri_sayisi6='';
$sikayet6='';
$israf6='';




while($row6=mysqli_fetch_array($sorgu6)){
	$musteri_sayisi66=$row6['musteri_sayisi'];
	$israf66=$row6['israf'];
	$sikayet66=$row6['sikayet'];
	$ciro66=$row6['ciro'];
	$tarih66=date('M, Y', strtotime($row6['tarih']));
	$tarih6 = $tarih6.'"'.$tarih66.'",';
	$ciro6 = $ciro6.$ciro66.',';
	$musteri_sayisi6 = $musteri_sayisi6.$musteri_sayisi66.',';
	$sikayet6 = $sikayet6.$sikayet66.',';
	$israf6 = $israf6.$israf66.',';




}
	



$ciro6=trim($ciro6, ",");
$tarih6=trim($tarih6, ",");
$musteri_sayisi6=trim($musteri_sayisi6, ",");
$sikayet6=trim($sikayet6, ",");
$israf6=trim($israf6, ",");

$tarihSorgu=mysqli_query($conn,"select concat(monthname(veriler.tarih),' ', year(veriler.tarih)) as tarih from veriler order by veriler.veri_id desc limit 1");

while($date=mysqli_fetch_array($tarihSorgu)){
	$tarih=$date['tarih'];
}

$tarihler="";

$tarihSorgu1=mysqli_query($conn,"select DISTINCT concat(monthname(veriler.tarih),' ', year(veriler.tarih)) as tarihler from veriler order by veriler.veri_id");

while($date1=mysqli_fetch_array($tarihSorgu1)){
	$tarihler1=$date1['tarihler'];
	$tarihler=$tarihler."'".$tarihler1."',";
}
$tarihler=trim($tarihler, ",");


$sorguOrt=mysqli_query($conn,"select veriler.tarih, round(avg(veriler.ciro)) as ortCiro, round(AVG(veriler.musteri_sayisi)) as ortMusteri, round(AVG(veriler.sikayet)) as ortSikayet, round(avg(veriler.israf)) as ortIsraf
from veriler
GROUP by veriler.tarih
order by veriler.tarih");

$ciroOrt="";
$musteri_sayisiOrt="";
$sikayetOrt="";
$israfOrt="";

while($ort=mysqli_fetch_array($sorguOrt)){
	$m_ort=$ort['ortMusteri'];
	$i_ort=$ort['ortIsraf'];
	$s_ort=$ort['ortSikayet'];
	$c_ort=$ort['ortCiro'];
	$ciroOrt=$ciroOrt.$c_ort.',';
	$musteri_sayisiOrt=$musteri_sayisiOrt.$m_ort.',';
	$sikayetOrt=$sikayetOrt.$s_ort.',';
	$israfOrt=$israfOrt.$i_ort.',';

}

$ciroOrt=trim($ciroOrt, ",");
$musteri_sayisiOrt=trim($musteri_sayisiOrt, ",");
$sikayetOrt=trim($sikayetOrt, ",");
$israfOrt=trim($israfOrt, ",");

$ciroOrtSon=substr($ciroOrt, 40);
$musteri_sayisiOrtSon=substr($musteri_sayisiOrt, 30);
$sikayetOrtSon=substr($sikayetOrt, 15);
$israfOrtSon=substr($israfOrt, 30);

//son indexler
$ciro1Son=substr($ciro1, 40);
$ciro2Son=substr($ciro2, 39);
$ciro3Son=substr($ciro3, 40);
$ciro4Son=substr($ciro4, 38);
$ciro5Son=substr($ciro5, 40);
$ciro6Son=substr($ciro6, 38);
$musteri1Son=trim(substr($musteri_sayisi1, 40), '"');
$musteri2Son=trim(substr($musteri_sayisi2, 40), '"');
$musteri3Son=trim(substr($musteri_sayisi3, 40), '"');
$musteri4Son=trim(substr($musteri_sayisi4, 40), '"');
$musteri5Son=trim(substr($musteri_sayisi5, 40), '"');
$musteri6Son=trim(substr($musteri_sayisi6, 30), '"');
$sikayetSon1=substr($sikayet1, 15);
$sikayetSon2=substr($sikayet2, 15);
$sikayetSon3=substr($sikayet3, 15);
$sikayetSon4=substr($sikayet4, 15);
$sikayetSon5=substr($sikayet5, 15);
$sikayetSon6=substr($sikayet6, 15);
$iadeSon1=substr($israf1,29);
$iadeSon2=substr($israf2,30);
$iadeSon3=substr($israf3,28);
$iadeSon4=substr($israf4,27);
$iadeSon5=substr($israf5,29);
$iadeSon6=substr($israf6,30);



$sorguTop=mysqli_query($conn,"select veriler.tarih, round(sum(veriler.ciro)) as topCiro, round(sum(veriler.musteri_sayisi)) as topMusteri, round(sum(veriler.sikayet)) as topSikayet, round(sum(veriler.israf)) as topIsraf
from veriler
GROUP by veriler.tarih
order by veriler.tarih");

$ciroTop="";
$musteri_sayisiTop="";
$sikayetTop="";
$israfTop="";

while($top=mysqli_fetch_array($sorguTop)){
	$m_top=$top['topMusteri'];
	$i_top=$top['topIsraf'];
	$s_top=$top['topSikayet'];
	$c_top=$top['topCiro'];
	$ciroTop=$ciroTop.$c_top.',';
	$musteri_sayisiTop=$musteri_sayisiTop.$m_top.',';
	$sikayetTop=$sikayetTop.$s_top.',';
	$israfTop=$israfTop.$i_top.',';

}

$ciroTop=trim($ciroTop, ",");
$musteri_sayisiTop=trim($musteri_sayisiTop, ",");
$sikayetTop=trim($sikayetTop, ",");
$israfTop=trim($israfTop, ",");

$ciroTopSon=substr($ciroTop, 40);
$musteri_sayisiTopSon=substr($musteri_sayisiTop, 35);
$sikayetTopSon=substr($sikayetTop, 20);
$israfTopSon=substr($israfTop, 30);

$subeSorgu=mysqli_query($conn,"select * from subeler,mudurler WHERE mudurler.sube_id=subeler.sube_id");

$subeAd=array();
$subeAdres=array();
$subeKare=array();
$lat=array();
$lng=array();
$subeYon=array();

while($sube=mysqli_fetch_array($subeSorgu)){
	array_push($subeAd, $sube['sube_ad']);
	array_push($subeAdres, $sube['adres']);
	array_push($lat, $sube['lat']);
	array_push($lng, $sube['lng']);
	array_push($subeKare, $sube['mkare']);
	array_push($subeYon, $sube['adSoyad']);
}


?>
