<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>KAYIT</title>
</head>
<body>
<?php		
		$conn = mysqli_connect("localhost", "root", "", "countries");
		mysqli_query($conn, "SET NAMES UTF8");
		if (!$conn){
			die ("Bağlantı kurulamadı : ". mysqli_error());
		}
		echo "Bağlantı başarılı!</p>";
		$a = $_POST['meslek'];
		$b = $_POST['calisma'];
		$c = $_POST['Sehir'];
		$d = $_POST['firma_adi'];
		$e = $_POST['firma_tur'];
		$f = $_POST['tehlike_sinif'];
		$g = $_POST['t_e_ucret'];
		$h = $_POST['sure'];
		$i = $_POST['mesai_saat'];
		$j = $_POST['puan'];
		$k = $_POST['gorusler'];
		
$kayit = "insert into formdata (meslek, calisma_sekli, sehir, firma_adi, firma_tur, tehlike_sinif, ucret, kac_gun, mesai_saati, puan, gorusler) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k')";
		$snc = mysqli_query($conn,$kayit);
		
	if ($snc) {
		
		header("refresh:3;url=http://localhost/dreamweaverdeneme/ibrahimarslanisg/veriler.php");
		die("Kaydınız alınmıştır. Anasayfaya yönlendirileceksiniz.");	
	}
	else{		
		echo("Bir sorun oluştu.");		

	}
	
	mysqli_close($conn);

		
		
		/*mysqli_query($conn, "insert into formdata (meslek, calisma_sekli, sehir, firma_adi, firma_tur, tehlike_sinif, ucret, kac_gun, mesai_saati, puan, gorusler) values ('$meslek', '$calisma', '$sehirler', $firma_adi), '$firma_tur', '$tehlike_sinif', $t_e_ucret, $sure, $mesai_saat, $puan, '$gorusler')  ");*/
	?>
	</body>
</html>