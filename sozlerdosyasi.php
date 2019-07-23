<?php

$dosya_icerigi= file("sozler.txt");
foreach ($dosya_icerigi as $key => $value) {
echo $key . ". =" . $dosya_icerigi[$key] . "<br>";
}
 ?>
