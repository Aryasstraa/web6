<?php

for ($a=1; $a>=-10; $a--){
    echo "Baris ke-$a <br />";
}

?>

<!-- $a=1 = inisialisasi nilai,, 
$a<=10 = desision klo benar akan dijalankan perulangan jika tidak maka perulangan akan berhenti, 
$a++ Incremen menambah 1 dari sebelumnya, 
$a-- decremen akan mengurangkan 1 dari sebelumnya -->

<br>
<br>

<?php

$awal = 1;
echo "<ul>"
while($awal <= 10){
    echo "Nilai Sekarang adalah $awal <br/>";
    $awal++;
}
echo "<ul>"
?>

<br>
<br>

<?php
$d = 0;
do{
    echo "perulangan ke-$d <br>";
    $d--;
}while ($d >= 1)
?>

<?php
$d = 0;
while ($d>=1){
    echo "perulangan ke-$d <br/>";
    $d--;
}

?>

