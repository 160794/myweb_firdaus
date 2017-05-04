<html>
<head>
<title>Persegi Proses</title>
</head>

<body>
<pre>
<?php
$panjang = $_GET['panjang'];
$lebar = $_GET["lebar"];

$luas = $panjang * $lebar;

echo "MENGHITUNG LUAS PERSEGI\n\n";

echo "Diketahui : Panjang = $panjang meter\n";
echo " Lebar = $lebar meter\n";
echo "Ditanyakan : Luas\n\n";

echo "Jawab:\n";
echo "Luas = Panjang x Lebar\n";
echo " = $panjang meter x $lebar meter\n";
echo " = $luas meter<sup>2</sup>\n";
?>
</pre>
</body>
</html>