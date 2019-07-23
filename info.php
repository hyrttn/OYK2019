<!DOCTYPE html>
<html>
<body>

<?php
/*echo "My first PHP script!";
$a=5;
$b=6;
?>

<?php //echo `ping google.com` ?>
<?php //if(true) echo "doğru" else echo "string"; ?>

<?php $a = 3;
$b = $a; // $b, $a'ya bir gönderimdir
print "$a\n"; // 3 basar
print "$b\n"; // 3 basar*/

/*$sayi= $_GET["sayi"];
echo "SAYI değişkeninin değeri: $sayi";*/

$isimler = array("Hayrettin","Ali","Ayşe");
$rakamlar = array(1,2,3,4,5);
$kodlar = array("zn" => "Çinko", "au" => "Altın");
$karma = array("Hayrettin", 1, "au" => "Altın");

echo "<pre>";
print_r($karma);
echo "</pre>";

print($karma["au"]);


 ?>



</body>
</html>
