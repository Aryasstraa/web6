<?php
$mobil = array ("volvo", "BMW", "Toyota");

$mobil[0] = "Volvo";
$mobil[1] = "BMW";
$mobil[2] = "Toyota";

echo $mobil[1];
echo "<br><br>";


$mobil[2] = "Supra";
$mobil[3] = "Toyota";

echo $mobil[2];
echo "<br><br>";
echo $mobil[3];
?>
<br>
<br>

<?php
$umur = array ("jorge"=>"29", "Jenifer"=>"28");
$umur ['jorge'] = "29";
$umur ['Jenifer'] = "28";

echo $umur ['jorge']."<br>";

foreach ($umur as $K => $V){ //foreach digunakan untuk 
    echo " umurnya $K adalah $V tahun.<br>";
}




?>