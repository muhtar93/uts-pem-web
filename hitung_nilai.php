<html>
  <head>
    <title>Hasil Perhitungan</title>
    <style>
body{
	font-family: arial, verdana, sans-serif;
}
/* jwpopup box style */
.jwpopup {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 110px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.7);
}
.jwpopup-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    max-width: 500px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

.jwpopup-head {
	font-size: 11px;
    padding: 1px 16px;
    color: white;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}
.jwpopup-main {padding: 5px 16px;}
.jwpopup-foot {
	font-size: 12px;
    padding: .5px 16px;
    color: #ffffff;
    background: #006faa; /* For browsers that do not support gradients */
    background: -webkit-linear-gradient(#006faa, #002c44); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#006faa, #002c44); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(#006faa, #002c44); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#006faa, #002c44); /* Standard syntax */
}

/* tambahkan efek animasi */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* style untuk tombol close */
.close {
	margin-top: 7px;
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover, .close:focus {
    color: #999999;
    text-decoration: none;
    cursor: pointer;
}
</style>

  </head>
  <body>
    <?php
      $nim = $_POST["nim"];
      $nama = $_POST["nama"];
      $absen = $_POST["absen"];
      $tugas = $_POST["tugas"];
      $uts = $_POST["uts"];
      $uas = $_POST["uas"];
      $nilaiAkhir=(10/100 * $absen)+(20/100 * $tugas)+(30/100 * $uts)+(40/100 * $uas);
      $grade;
      $keterangan;

      if ($nilaiAkhir >= 90) {
        $grade = "A";
        $keterangan = "Memuaskan";
      } else if ($nilaiAkhir >= 70) {
        $grade = "B";
        $keterangan = "Baik";
      } else if ($nilaiAkhir >= 60) {
        $grade = "C";
        $keterangan = "Cukup";
      } else if ($nilaiAkhir >= 55) {
        $grade = "D";
        $keterangan = "Kurang";
      } else {
        $grade = "E";
        $keterangan = "<font color='red'>Tidak Lulus</font>";
      }
      echo "Nim :".$nim."<br>";
      echo "Nama : ".$nama."<br>";
      echo "Nilai Absen : ".$absen."<br>";
      echo "Nilai Tugas : ".$tugas."<br>";
      echo "Nilai UTS : ".$uts."<br>";
      echo "Nilai UAS : ".$uas."<br>";
      echo "Nilai Akhir : ".$nilaiAkhir."<br>";
      echo "Grade : ".$grade."<br>";
      echo "Keterangan : ".$keterangan."<br>";
     ?>

<!-- trigger the jwpopup -->
<a href="javascript:void(0);" id="jwpopupLink">Coba Lagi</a>

<!-- jwpopup box -->
<div id="jwpopupBox" class="jwpopup">
	<!-- jwpopup content -->
	<div class="jwpopup-content">
		<div class="jwpopup-head">
			<span class="close">×</span>
			<h2>Apakah anda mau coba lagi?</h2>
		</div>
		<div class="jwpopup-main">
			<a href="index.php">Ya</a>/<a href="https://www.instagram.com/p/BU-KYJBDLaC/?taken-by=moechtara3">Tidak</a>
		</div>
	</div>
</div>

     <script>

// untuk mendapatkan jwpopup
var jwpopup = document.getElementById('jwpopupBox');

// untuk mendapatkan link untuk membuka jwpopup
var mpLink = document.getElementById("jwpopupLink");

// untuk mendapatkan aksi elemen close
var close = document.getElementsByClassName("close")[0];

// membuka jwpopup ketika link di klik
mpLink.onclick = function() {
    jwpopup.style.display = "block";
}

// membuka jwpopup ketika elemen di klik
close.onclick = function() {
    jwpopup.style.display = "none";
}

function close_window() {
  if (confirm("Close Window?")) {
    window.open('', '_self', '');
    window.close();
  }
}


// membuka jwpopup ketika user melakukan klik diluar area popup
window.onclick = function(event) {
    if (event.target == jwpopup) {
        jwpopup.style.display = "none";
    }
}

</script>

  </body>
</html>
