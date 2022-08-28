<!DOCTYPE html>
<html>

<head>
    <title>Diamond Language Courses</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <img src="diamond.png" width="15%" align="right">
    <img src="diamond.png" width="15%" align="left">

    <div id="box">
        <div id="header" align="center">
            <h1>DIAMOND LANGUAGE COURSES</h1>
            <div id="jln">
                Jalan Daiyamondo IX Gg. Berlian No. 10 Denpasar, Bali. <br>
                Telepon 0812 3456 7890
            </div>
        </div>
        <div id="hlm" align="center"><br><br>
            <div align="center" id="wellcome">
                Welcome To Join<br>Diamond Language Courses
            </div><br>

            <?php 
				$nama = $_GET['nama_lengkap'];
			   	$alamat = $_GET['almt'];
			   	$nohp = $_GET['no_hp'];
			   	$ttl = $_GET['ttl'];
			   	$tanggal = $_GET['tgl'];
			   	$jkl = $_GET['gender'];
			   	$pendidikan = $_GET['pendidikan'];
			   	$bahasa = $_GET['bhs'];
			   	
			   	$data = [
				array("Nama Lengkap","$nama"),
				array("Alamat","$alamat"),
				array("No. HP / WA","$nohp"),
				array("Tempat Lahir","$ttl"),
				array("Tanggal Lahir","$tanggal"),
				array("Jenis Kelamin","$jkl"),
				array("Jenjang Pendidikan","$pendidikan"),
				array("Bahasa Yang Dipilih","$bahasa"),
				];

				echo "<table border='6' cellspacing='0' cellpadding='10' id='table'";
				foreach ($data as $dt => $a)
				{
					echo "<tr align='center'>";
					foreach ($a as $b => $c)
					{
						echo "<td align='center'>" . $c . "</td>";
					}	
				}
				 echo "</tr></table>";
		  		
			?>
            <br><br><br>
            <div id="footer" align="center">
                Copyright &copy; 2021 I Gede Rio Arya Bawesi 20103130 <br>
            </div>
        </div>
</body>

</html>