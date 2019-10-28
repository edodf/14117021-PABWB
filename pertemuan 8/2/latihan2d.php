<HTML>
<HEAD>
    <title>Koneksi Database MySQL</title>
</HEAD>
<BODY>
<h1>Koneksi database dengan mysql_fetch_assoc</h1>
<?
$conn=mysqli_connect ('localhost','root','') or die ("koneksi gagal");
mysqli_select_db($conn,"pabw");
$hasil = mysqli_query($conn,"select * from liiga");
while ($row=mysqli_fetch_row($hasil)) {
    echo "liga " .$row[1];
    echo " mempunyai " .$row[2];
    echo " wakil di liga champion <br>";
}
?>
</BODY>
</HTML>