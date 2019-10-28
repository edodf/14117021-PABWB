<HTML>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
<h1>Koneksi database dengan mysql_fetch_array</h1>
<?php
$conn=mysqli_connect ('localhost','root','') or die ("koneksi gagal");
mysqli_select_db($conn,"pabw");
$hasil = mysqli_query($conn,"select * from liiga");
while ($row=mysqli_fetch_array($hasil)) {
    echo "liiga " .$row["negara"]; //array asosiatif
    echo " mempunyai " .$row[2]; //array numeris
    echo " wakil di liga champion <br>";
}
?>
</body>
</HTML>