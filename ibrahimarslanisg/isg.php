<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<link rel="stylesheet" type="text/css" href="isg_style.css" />
				<title>İSG</title>
				<style>
				input[type=submit] {
					width: 50%;
				  color: white;
				  padding: 14px 20px;
				  margin: 8px 0;
				  border: none;
				  border-radius: 4px;
				  cursor: pointer;
				}
				input[type=submit]:hover {
				  background-color: #45a049;
				}
				select{
					width: 50%;
					padding: 16px 20px;
					border: none;
					border-radius: 4px;
					font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				}
				input[type=text] {
				 	border: 0px solid #413B3B;
				    border-radius: 4px;
				    width: 75%;
				    padding: 16px 20px;
				    margin: 8px 0;
						font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
				}
				textarea {
					width: 75%;
				    height: 150px;
				    padding: 12px 20px;
				   	box-sizing: border-box;
				    border: 0px solid #000000;
				    border-radius: 4px;
				    resize: none;
				}
				table {
					border: 2px solid #A40808;
					border-radius: 10px;
					/*border-collapse: collapse;*/
					background-color: #EEE7DB;
					width: 70%;
					height: 80%;
					cellpadding: 10;
					margin:20px 200px ;
					font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
					font-size: 17px;
					  border-collapse: collapse;
				    /*table-layout:fixed;*/
				}

				</style>
	</head>
	<body align= middle>
		<ul>
			<li><a class="active" href="#anasayfa">AnaSayfa</a></li>
			<li><a href="#hakkımızda">Hakkımızda</a></li>
			<li><a href="#iletisim">İletişim</a></li>
		</ul>
		<form action="kayit.php" method="post">
			<table align= center;>
				<caption>İş Sağlığı ve Güvenliği Peronelinin İş Görüşmeleri Tecrübeleri</caption>
					<tr><td>MESLEĞİNİZ</td><td align="left">
					<input type="radio" name="meslek" value="C SINIFI İŞ GÜVENLİĞİ UZMANI" required="required">C SINIFI İŞ GÜVENLİĞİ UZMANI<br>
					<input type="radio" name="meslek" value="B SINIFI İŞ GÜVENLİĞİ UZMANI" required="required">B SINIFI İŞ GÜVENLİĞİ UZMANI<br>
					<input type="radio" name="meslek" value="A SINIFI İŞ GÜVENLİĞİ UZMANI" required="required">A SINIFI İŞ GÜVENLİĞİ UZMANI<br>
					<input type="radio" name="meslek" value="İŞ YERİ HEKIMI" required="required">İŞ YERİ HEKİMİ<br>
					<input type="radio" name="meslek" value="DİĞER SAĞLIK PERSONELİ" required="required">DİĞER SAĞLIK PERSONELİ<br>
					<input type="radio" name="meslek" value="İŞ GÜVENLİĞİ TEKNİKERİ" required="required">İŞ GÜVENLİĞİ TEKNİKERİ<br></td></tr>

					<tr><td>ÇALIŞMA ŞEKLİ</td><td align="center">
					<input type="radio" name="calisma" value="TAM ZAMANLI" required="required">TAM ZAMANLI
					<input type="radio" name="calisma" value="KISMİ ZAMANLI" required="required">KISMİ ZAMANLI </td></tr>

					<tr><td>GÖRÜŞME YAPILAN İL</td><td align="left">
					<select name="Sehir" required="required">
    <option value="0">Seçiniz...</option>
    <option value="Adana">Adana</option>
    <option value="Adıyaman">Adıyaman</option>
    <option value="Afyonkarahisar">Afyonkarahisar</option>
    <option value="Ağrı">Ağrı</option>
    <option value="Amasya">Amasya</option>
    <option value="Ankara">Ankara</option>
    <option value="Antalya">Antalya</option>
    <option value="Artvin">Artvin</option>
    <option value="Aydın">Aydın</option>
    <option value="Balıkesir">Balıkesir</option>
    <option value="Bilecik">Bilecik</option>
    <option value="Bingöl">Bingöl</option>
    <option value="Bitlis">Bitlis</option>
    <option value="Bolu">Bolu</option>
    <option value="Burdur">Burdur</option>
    <option value="Bursa">Bursa</option>
    <option value="Çanakkale">Çanakkale</option>
    <option value="Çankırı">Çankırı</option>
    <option value="Çorum">Çorum</option>
    <option value="Denizli">Denizli</option>
    <option value="Diyarbakır">Diyarbakır</option>
    <option value="Edirne">Edirne</option>
    <option value="Elazığ">Elazığ</option>
    <option value="Erzincan">Erzincan</option>
    <option value="Erzurum">Erzurum</option>
    <option value="Eskişehir">Eskişehir</option>
    <option value="Gaziantep">Gaziantep</option>
    <option value="Giresun">Giresun</option>
    <option value="Gümüşhane">Gümüşhane</option>
    <option value="Hakkâri">Hakkâri</option>
    <option value="Hatay">Hatay</option>
    <option value="Isparta">Isparta</option>
    <option value="Mersin">Mersin</option>
    <option value="İstanbul">İstanbul</option>
    <option value="İzmir">İzmir</option>
    <option value="Kars">Kars</option>
    <option value="Kastamonu">Kastamonu</option>
    <option value="Kayseri">Kayseri</option>
    <option value="Kırklareli">Kırklareli</option>
    <option value="Kırşehir">Kırşehir</option>
    <option value="Kocaeli">Kocaeli</option>
    <option value="Konya">Konya</option>
    <option value="Kütahya">Kütahya</option>
    <option value="Malatya">Malatya</option>
    <option value="Manisa">Manisa</option>
    <option value="Kahramanmaraş">Kahramanmaraş</option>
    <option value="Mardin">Mardin</option>
    <option value="Muğla">Muğla</option>
    <option value="Muş">Muş</option>
    <option value="Nevşehir">Nevşehir</option>
    <option value="Niğde">Niğde</option>
    <option value="Ordu">Ordu</option>
    <option value="Rize">Rize</option>
    <option value="Sakarya">Sakarya</option>
    <option value="Samsun">Samsun</option>
    <option value="Siirt">Siirt</option>
    <option value="Sinop">Sinop</option>
    <option value="Sivas">Sivas</option>
    <option value="Tekirdağ">Tekirdağ</option>
    <option value="Tokat">Tokat</option>
    <option value="Trabzon">Trabzon</option>
    <option value="Tunceli">Tunceli</option>
    <option value="Şanlıurfa">Şanlıurfa</option>
    <option value="Uşak">Uşak</option>
    <option value="Van">Van</option>
    <option value="Yozgat">Yozgat</option>
    <option value="Zonguldak">Zonguldak</option>
    <option value="Aksaray">Aksaray</option>
    <option value="Bayburt">Bayburt</option>
    <option value="Karaman">Karaman</option>
    <option value="Kırıkkale">Kırıkkale</option>
    <option value="Batman">Batman</option>
    <option value="Şırnak">Şırnak</option>
    <option value="Bartın">Bartın</option>
    <option value="Ardahan">Ardahan</option>
    <option value="Iğdır">Iğdır</option>
    <option value="Yalova">Yalova</option>
    <option value="Karabük">Karabük</option>
    <option value="Kilis">Kilis</option>
    <option value="Osmaniye">Osmaniye</option>
    <option value="Düzce">Düzce</option>
</select></td></tr>

<?php
		/*$baglanti = mysqli_connect("localhost", "root", "", "countries");
		$ekle = mysqli_query($baglanti, "select * from city");
		while ($satir = mysqli_fetch_row($ekle)){
		echo('<option value='.$satir [0].'>'. $satir [2].'</option>');
		}
		mysqli_close($baglanti);*/
		?>

						<tr><td>FİRMA</td><td align="left"><input type="text" name="firma_adi" required="required" placeholder="Firma Adı..."></td></tr>

						<tr><td>FİRMA TÜRÜ</td><td align="center">
						<input type="radio" name="firma_tur" value="ORTAK SAĞLIK GÜVENLİK BİRİMİ" required="required">ORTAK SAĞLIK GÜVENLİK BİRİMİ
						<input type="radio" name="firma_tur" value="İŞ YERİ SAĞLIK GÜVENLİK BİRİMİ" required="required">İŞ YERİ SAĞLIK GÜVENLİK BİRİMİ</td></tr>

						<tr><td>TEHLİKE SINIFI</td><td align="left">
						<input type="radio" name="tehlike_sinif" value="AZ TEHLİKELİ" required="required">AZ TEHLİKELİ<br>
						<input type="radio" name="tehlike_sinif" value="TEHLİKELİ" required="required">TEHLİKELİ<br>
						<input type="radio" name="tehlike_sinif" value="ÇOK TEHLİKELİ" required="required">ÇOK TEHLİKELİ<br>
						<input type="radio" name="tehlike_sinif" value="BİRDEN FAZLA" required="required">BİRDEN FAZLA<br></td></tr>

						<tr><td>TEKLİF EDİLEN ÜCRET</td><td align="left">
						<input type="text" name="t_e_ucret" required="required" placeholder="Teklif Edilen Ücret..."/></td></tr>

						<tr><td>HAFTADA KAÇ GÜN ÇALIŞMA YAPILIYOR</td><td align="left">
						<input type="text" name="sure" required="required" placeholder="Haftada kaç gün çalışma yapılıyor..."/></td></tr>

						<tr><td>GÜNLÜK MESAİ SAATİ</td><TD align="left">
						<input type="text" name="mesai_saat" required="required" placeholder="Günlük Mesai Saati..."/></TD></tr>

						<tr><td>GÖRÜŞME PUANLAMASI</td><td>
					VASAT <input type="radio" name="puan" value="0" required="required">0
							<input type="radio" name="puan" value="1">1
							<input type="radio" name="puan" value="2">2
							<input type="radio" name="puan" value="3">3
							<input type="radio" name="puan" value="4">4
							<input type="radio" name="puan" value="5">5
							<input type="radio" name="puan" value="6">6
							<input type="radio" name="puan" value="7">7
							<input type="radio" name="puan" value="8">8
							<input type="radio" name="puan" value="9">9
							<input type="radio" name="puan" value="10">10 ÇOK İYİ
						</td></tr>
						<tr><td>GÖRÜŞLERİNİZ</td><td align="left">
						<textarea name="gorusler"></textarea></td></tr>
						<tr bgcolor="black"><td colspan="2">
						<input type=submit value=GÖNDER </td></tr>
</table>
</form>
</body>
</html>
