<?php
echo "ราคาสินค้าต่อชิ้น : ".$_POST['price']." บาท<br>";
echo "จำนวนชิ้นที่ซื้อ : ".$_POST['number']." ชิ้น<br>";
$ราคาสินค้าต่อชิ้น = ($_POST['price']); // ราคาต่อชิ้น
$จำนวนชิ้นที่ซื้อ = ($_POST['number']);
 
$totalPrice = $ราคาสินค้าต่อชิ้น*$จำนวนชิ้นที่ซื้อ;
echo"ราคารวม : ".$totalPrice." บาท<br>";
 
$vatRate = 0.07;
$vat = $totalPrice * $vatRate;
$netPrice = $totalPrice + $vat;


echo "ภาษีมูลล่าเพิ่ม : ".$vat." บาท<br>";
echo "ราคาสุทธิ : ".$netPrice." บาท";
?>
 
