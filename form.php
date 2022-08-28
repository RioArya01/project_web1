<!DOCTYPE html>
<html>
<head>
	<title>Diamond Language Courses</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<img src="diamond.png" width="15%" align="right"><img src="diamond.png" width="15%" align="left">
	
	<div id="box">
		<div id="header" align="center">
			<h1>DIAMOND LANGUAGE COURSES</h1>
			<div id="jln">
				Jalan Daiyamondo IX Gg. Berlian No. 10 Denpasar, Bali. <br>
				Telepon 0812 3456 7890
			</div>
		
		<div id="hlm" align="center">
			<div id="a">
			<p><br>Selamat Datang di Diamond Language Courses. Ditempat ini kalian akan diajarkan belajar bahasa asing dari awal.
			Baik kalian yang beginner ataupun expert sekalipun bisa bergabung ditempat ini. Dengan tenaga pendidik yang sudah Profesional pastinya akan membantu kalian dalam mempelajari bahasa asing.Disini kalian bisa memilih kursus apa yang ingin kalian minati seperti :<br>
			</div>

			<div id="bhs" align="center">
				English<br>Japan 日本<br>Korea 대한민국<br>China 中国<br>France<br>German<br>Russia<br>
			</div>

			<div id="b">
				<p>Hanya membayar <b><u>Rp. 1.000.000</u></b> kalian bisa mengikuti les ini sebanyak <b>8 kali pertemuan.</b><br>
				<b>Ayo tunggu apa lagi let's join us !!!!</b></p>
			</div>

			<div align="center">
				<h2>Formulir Pendaftaran</h2>
			</div>

			<div align="center">
				<form action="proses.php" methode="GET">
					<table id="table" border="6" cellspacing="0" cellpadding="10">

						<tr align="center">
							<td>Nama Lengkap</td>
							<td><input type="text" name="nama_lengkap" id="nama" /></td>
						</tr>

						<tr align="center">
							<td>Alamat</td>
							<td><textarea name="almt"></textarea></td>
						</tr>

						<tr align="center">
							<td>No. HP / WA</td>
							<td><input type="text" name="no_hp"/></td>
						</tr>

						<tr align="center">
							<td>Tempat Lahir</td>
							<td><input type="text" name="ttl"/></td>
						</tr>

						<tr align="center">
							<td>Tanggal Lahir</td>
							<td><input type="date" name="tgl"></td>
						</tr>

						<tr align="center">
							<td>Jenis Kelamin </td>
							<td>
								<select name="gender">
									<option>Pria</option>
									<option>Wanita</option>
								</select>
							</td>
						</tr>

						<tr align="center">
							<td>Jenjang Pendidikan</td>
							<td>
								<select name="pendidikan">
									<option>SD</option>
									<option>SMP</option>
									<option>SMA/SMK</option>
									<option>Perguruan Tinggi</option>
									<option>Lainnya</option>
								</select>
							</td>
						</tr>

						<tr align="center">
							<td>Bahasa Yang Dipilih</td>
							<td>
								<select name="bhs">
									<option>Bahasa Inggris</option>
									<option>Bahasa Jepang</option>
									<option>Bahasa Korea</option>
									<option>Bahasa China</option>
									<option>Bahasa Prancis</option>
									<option>Bahasa Jerman</option>
									<option>Bahasa Rusia</option>
								</select>
							</td>
						</tr>

					</table><br>

					<div align="center">
							<tr>
								<td>
								<button type="submit" name="button" value="daftar" id="button">DAFTAR</button>
								</td>
							</tr>
					</div>
				</form>
			</div>
			<br><br><br><br>
			<div id="footer" align="center">
				Copyright &copy; 2021 I Gede Rio Arya Bawesi 20103130 <br>
			</div>
	</div>
</body>
</html>