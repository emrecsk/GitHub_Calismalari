<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KAYIT</title>
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: black;
	position: fixed;
	top: 0;
	width: 100%;
}
li{
	display: inline;
	float: left;
	 border-right: 1px solid #bbb;
}
li a{
	display: block;
	padding: 18px 20px;
	background-color: black;
	color: white;
	text-decoration: none;
}
li a:hover{
	background-color: green;
}
.active {
	background-color: #4CAF50;
}
body{
	margin-top: 70px;
}
caption{
 font-size:28px;
 padding: 19px;
}
table {
	border: 0px solid #1C6EA4;
	border-radius: 3px;
	border-spacing: 0px;
  background-color: #EEEEEE;
  text-align: center;
  table-layout:auto;
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
tr:nth-child(even) {
  background: #D0E4F5;
 }
th{
	color: white;
	padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
tr:hover {
	background-color: #ddd;
	}
td, th {
  border: 1px solid #ddd;
  padding: 8px;
}

</style>
</head>
<body>
	<ul>
		<li><a href="#anasayfa">AnaSayfa</a></li>
		<li><a class="active" href="#hakkımızda">Hakkımızda</a></li>
		<li><a href="#iletisim">İletişim</a></li>
	</ul>
<table>
<caption align="center"><b>İş Sağlığı ve Güvenliği Peronelinin İş Görüşmeleri Tecrübeleri</b></caption>
<th>Meslek</th>
<th>Çalışma Şekli</th>
<th>Görüşme İli</th>
<th>Firma Adı</th>
<th>Firmanın Türü</th>
<th>Tehlike Sınıfı</th>
<th>Teklif Edilen Ücret</th>
<th>Haftada Kaç Gün Çalışma Yapılıyor</th>
<th>Günlük Mesai Saati</th>
<th>Görüşme Puanlaması</th>
<th>Görüşler</th>
<?php
		$conn = mysqli_connect("localhost", "root", "", "countries");
		mysqli_query($conn, "SET NAMES UTF8");
		$veriler = mysqli_query($conn, "select * from formdata");

		while ($a=mysqli_fetch_array($veriler)){

			$m = $a['meslek'];
			$b = $a['calisma_sekli'];
			$c = $a['sehir'];
			$d = $a['firma_adi'];
			$e = $a['firma_tur'];
			$f = $a['tehlike_sinif'];
			$g = $a['ucret'];
			$h = $a['kac_gun'];
			$j = $a['mesai_saati'];
			$k = $a['puan'];
			$l = $a['gorusler'];

		echo "<tr><td>$m</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td><td>$h</td><td>$j</td><td>$k</td><td>$l</td></tr>";
		}
		mysqli_free_result($veriler);
		mysqli_close($conn);
	?>
	</body>
</html>
