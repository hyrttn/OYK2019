<h1>Günün Sözü</h1>

<?php

$sozler = array("Bir elin nesi var",
                "Birimiz hepimiz için",
                "Sora sora bağdat bulunur");


for ($i=0; $i <= 10 ; $i++) {
  $r = rand(0,2);
  echo $sozler[$r] . "<br>";
}
